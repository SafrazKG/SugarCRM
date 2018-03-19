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
    
    initialize: function() {
        this._super('initialize', arguments);
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
        if ($('#calendar_css').length==0) {
            var headDomNode = document.getElementsByTagName("head")[0];
            var cssNode = document.createElement('link');
            cssNode.type = 'text/css';
            cssNode.rel = 'stylesheet';
            cssNode.href = 'custom/css/fullcalendar.min.css';
            cssNode.media = 'screen';
            cssNode.id = 'calendar_css';
            headDomNode.appendChild(cssNode);
        }
        this.collection.on('data:sync:complete', _.bind(this.updateCalendarData, this));
        this.calendar = $('#calendar').fullCalendar(_.extend({
            events: _.bind(this.getEvents, this),
            eventClick: _.bind(this.eventClick, this),
        }, this.calendarOptions));
    },
    
    getEvents: function(start, end, timezone, callback) {
        if (this.calEvents) {
            var events = _.clone(this.calEvents);
            this.calEvents = null;
            return callback(events);
        }
        this.start = start;
        this.end = end;
        var params = this.collection.getOption('params')||{};
        params.order_by = 'date_field_c:asc';
        this.collection.setOption('params', params);
        this.collection.setOption('limit', Math.abs(end.diff(start, 'days')));
        this.collection.fetch({});
    },
    
    setFilters: function(filterDefs) {
        filterDefs = filterDefs || [];
        var newFilterDefs = [];
        for (var i in filterDefs) {
            if (filterDefs[i].date_field_c) continue;
            newFilterDefs.push(filterDefs[i]);
        }
        filterDefs = newFilterDefs;
        if (this.start && this.end) {
            var startS = this.start.formatServer();
            var endS = this.end.formatServer();
            filterDefs.push({
                                date_field_c: { '$gte': startS },
                            });
            filterDefs.push({
                                date_field_c: { '$lte': endS },
                            });
        }
        this.collection.setOption('filter', filterDefs);
    },
    
    updateCalendarData: function() {
        this.calEvents = this.getEventsFromCollection();
        this.calendar.fullCalendar('refetchEvents');
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
    

})