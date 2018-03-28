({
    /*
     * @property calenarOptions - extra options for fullCalendar init (if needed)
     */
    calendarOptions: {},
    
    calendar: null,
    start: null,
    end: null,
    calEvents: null,
    _lastFilterDefs: [],
    _gettingDayRecord: {},
    startField: 'date_field_c',
    endField: 'date_field_c',
    _rendered: false,
    _settingMinMax: false,
    
    initialize: function() {
        this._super('initialize', arguments);
        if ($('#calendar_css').length==0) {
            var headDomNode = document.getElementsByTagName("head")[0];
            var cssNode = document.createElement('link');
            cssNode.type = 'text/css';
            cssNode.rel = 'stylesheet';
            cssNode.href = 'custom/css/fullcalendar.min.css';
            cssNode.media = 'screen';
            cssNode.id = 'calendar_css';
            var cssNode2 = document.createElement('link');
            cssNode2.type = 'text/css';
            cssNode2.rel = 'stylesheet';
            cssNode2.href = 'custom/css/scheduler.min.css';
            cssNode2.media = 'screen';
            cssNode2.id = 'calendar_css2';
            headDomNode.appendChild(cssNode);
        }
        this.once('render', _.bind(function() { this._rendered = true }, this));
        this.collection.oldFetch = this.collection.fetch;
        this.collection.fetch = _.bind(function(params) {
            var filterDefs = [];
            if (params && params.context && params.context.get('collection')) {
                filterDefs = params.context.get('collection').filterDef;
                this._lastFilterDefs = filterDefs;
            } else {
                filterDefs = this._lastFilterDefs;
            }
            this.setFilters(filterDefs);
            this.collection.oldFetch.apply(this.collection, arguments);
        }, this);
        this.collection.once('data:sync:complete', _.bind(this.initCalendar, this));
    },
    
    initCalendar: function() {
        if (!this._rendered) {
            setTimeout(_.bind(function() {
                this.initCalendar();
            }, this), 200);
            return;
        }
        this.collection.on('data:sync:complete', _.bind(this.updateCalendarData, this));
        this.calendar = $('#calendar').fullCalendar(_.extend({
            events: _.bind(this.getEvents, this),
            eventClick: _.bind(this.eventClick, this),
            schedulerLicenseKey: '0930770738-fcs-1522167218',
        }, this.calendarOptions));
    },
    
    getEvents: function(start, end, timezone, callback) {
        if (this.calEvents) {
            if (this._settingMinMax) {
                setTimeout(_.bind(function() {
                    this.getEvents(start, end, timezone, callback);
                }, this), 200);
                return;
            }
            var events = _.clone(this.calEvents);
            this.calEvents = null;
            return callback(events);
        }
        if (!this.calendar) {
            setTimeout(_.bind(function() {
                this.getEvents(start, end, timezone, callback);
            }, this), 200);
            return;
        }
        this.start = start;
        this.end = end;
        var params = this.collection.getOption('params')||{};
        params.order_by = this.startField+":asc";
        this.collection.setOption('params', params);
        this.collection.setOption('limit', this.getLimit());
        this.collection.fetch({});
    },
    
    setFilters: function(filterDefs) {
        filterDefs = filterDefs || [];
        var newFilterDefs = [];
        for (var i in filterDefs) {
            if (filterDefs[i][this.startField] || filterDefs[i][this.endField]) continue;
            newFilterDefs.push(filterDefs[i]);
        }
        filterDefs = newFilterDefs;
        if (this.start && this.end) {
            var startS = this.start.formatServer();
            var endS = this.end.formatServer();
            var startObj = {};
            startObj[this.startField] = { '$gte': startS };
            var endObj = {};
            endObj[this.endField] = { '$lte': endS };
            filterDefs.push(startObj);
            filterDefs.push(endObj);
        }
        this.collection.setOption('filter', filterDefs);
    },
    
    updateCalendarData: function() {
        this.calEvents = this.getEventsFromCollection();
        this.calendar.fullCalendar('refetchEvents');
    },
    
    getLimit: function() {
        if (!this.calendar) return 20;
        var view = this.calendar.fullCalendar('getView');
        var limit = 100;
        switch (view.name) {
            case 'month':
                limit = Math.abs(this.end.diff(this.start, 'days'));
                break;
            case 'agendaDay':
                var minTime = app.date('01-01-1970T'+(view.options.minTime||'00:00')+":00");
                var maxTime = app.date('01-01-1970T'+(view.options.maxTime||'23:59')+":00");
                limit = Math.abs(maxTime.diff(minTime, 'days'));
            case 'agendaDay':
                var minTime = app.date('01-01-1970T'+(view.options.minTime||'00:00')+":00");
                var maxTime = app.date('01-01-1970T'+(view.options.maxTime||'23:59')+":00");
                limit = Math.abs(maxTime.diff(minTime, 'days'))*7;
        }
        if (view.resources && view.resources.length) limit *= view.resources.length;
        return limit;
    },
    
    /*
     * getEventsFromCollection - must override
     *
     * @returns Array of events for fullcalendar
     */
    getEventsFromCollection: function() {
        return [];
    },
    
    /*
     * eventClick - called on calendar event click
     *
     * @param Object calEvent - calendar event object
     *
     */
    eventClick: function(calEvent) {
        if (calEvent.id) {
            app.router.navigate("#" + this.module + "/" + calEvent.id, {trigger: true});
        } else {
            if (this._gettingDayRecord[calEvent._id]) return;
            this._gettingDayRecord[calEvent._id] = true;
            app.api.call('read', app.api.buildURL(this.module, '?filter[0][date_field_c]='+calEvent.start.formatServer()), {}, {
                success: _.bind(function(data) {
                    delete this._gettingDayRecord[calEvent._id];
                    if (data && data.records && data.records.length) {
                        app.router.navigate("#" + this.module + "/" + data.records[0].id, {trigger: true});
                    } else {
                        app.drawer.open({
                                layout: 'create',
                                context: {
                                    create: true,
                                    module: this.module,
                                    model: this.setBeanDataOnCreate(calEvent),
                                }
                            },
                            _.bind(function() {
                                this.collection.fetch({});
                            }, this)
                        );
                    }
                }, this)
            });
        }
    },
    
    /*
     * setBeanDataOnCreate - helper function for create drawer to pass on some fields to create view (eg date)
     *
     * @param Object calEvents - calendar event object
     *
     * @return Bean bean - sugar bean for this.module
     */
    setBeanDataOnCreate: function(calEvent) {
        var bean = app.data.createBean(this.module);
        return bean;
    },
  
    slotTimeLT: function(original, comapareWith) {
        if (!original) return comapareWith;
        if (!comapareWith) return original;
        var momentOriginal = app.date('1970-01-01T'+original);
        var momentCompare = app.date('1970-01-01T'+comapareWith);
        if (momentOriginal.isAfter(momentCompare)) return comapareWith;
        return original;
    },
    
    slotTimeGT: function(original, comapareWith) {
        if (!original) return comapareWith;
        if (!comapareWith) return original;
        var momentOriginal = app.date('1970-01-01T'+original);
        var momentCompare = app.date('1970-01-01T'+comapareWith);
        if (momentOriginal.isBefore(momentCompare)) return comapareWith;
        return original;
    },

})