({
    extendsFrom: 'CustomCalendarlist',
    startField: 'date_field_c',
    endField: 'date_field_c',
    minTimeForCalendar: false,
    maxTimeForCalendar: false,
    dispositionBackgroundColors: {
        'Set': '#13A0ED',
        'Confirmed': '#59BA74',
        'Reschedules': '#DADD71',
        'Closer not available': '#F94A4A',
        'Customer not available': '#FCA1A1',
        'free': '#D6D6D6',
    },
    
    dispositionColors: {
        'Set': '#000000',
        'Confirmed': '#000000',
        'Reschedules': '#000000',
        'Closer not available': '#000000',
        'Customer not available': '#000000',
        'free': 'transparent',
    },
    
    calendarOptions: {
        defaultView: 'agendaDay',
        groupByDateAndResource: true,
        header: {
            right: 'today prev,next',
            left: 'title',
            center: 'month,agendaWeek,agendaDay'
        },
        resources: [
            { id: 'Transfer', title: 'Transfer' },
            { id: 'Mortgage', title: 'Mortgage' },
        ],
        allDaySlot: false,
        minTime: "08:00:00",
        maxTime: "23:00:00",
        slotLabelFormat: '',
    },
    
    _heights: {},
    _elements: {},
    _configured: false,
    _waitForClick: false,
    _minRowHeight: 0,
    
    initialize: function() {
        this.calendarOptions.viewRender = _.bind(this.viewRender, this);
        this.calendarOptions.eventRender = _.bind(this.eventRender, this);
        this.calendarOptions.eventAfterAllRender = _.bind(function() {
            setTimeout(_.bind(this.eventAfterAllRender, this), 200);
        }, this);
        this._super('initialize', arguments);
    },

    setBeanDataOnCreate: function(calEvent) {
        var bean = this._super('setBeanDataOnCreate', arguments);
        bean.set('date_field_c', calEvent.start.formatServer());
        return bean;
    },

    /*
     * @override
     */
    getEventsFromCollection: function() {
        if (this.disposed) return;
        this._elements = {};
        this._heights = {};
        var events = [];
        var minOrig = this.minTimeForCalendar;
        var maxOrig = this.maxTimeForCalendar;
        _.each(this.collection.models, function(model) {
            if (model.get('minTime')) this.minTimeForCalendar = this.slotTimeLT(this.minTimeForCalendar, model.get('minTime'));
            if (model.get('maxTime')) this.maxTimeForCalendar = this.slotTimeGT(this.model.maxTimeForCalendar, model.get('maxTime'));
            var title = model.get('name');
            if (title) {
                title += "\nF: " + model.get('users_rrapt_calendar_1_name');
                title += " - ";
                title += "C: " + model.get('users_rrapt_calendar_3_name');
            } else {
                title += "\n -";
            }
            events.push({
                        resourceId: model.get('product_c'),
                        id: model.id,
                        title: title,
                        allDay: false,
                        start: model.get('date_field_c'),
                        backgroundColor: this.dispositionBackgroundColors[model.get('disposition_c')],
                        textColor: this.dispositionColors[model.get('disposition_c')],
                    });
        }, this);
        if (minOrig!=this.minTimeForCalendar || maxOrig!=this.maxTimeForCalendar) {
            var calView = this.calendar.fullCalendar('getView');
            if (calView.name.indexOf('agenda')!=-1) {
                this._settingMinMax = true;
                this.calendar.fullCalendar('option', { minTime: this.minTimeForCalendar, maxTime: this.maxTimeForCalendar });
            }
        }
        return events;
    },
    
    viewRender: function() {
        if (this.disposed) return;
        $('.fc-button').off('mousedown');
        $('.fc-button').off('mouseup');
        $('.fc-button').on('mousedown', _.bind(function() {
            this._waitForClick = true;
        }, true));
        $('.fc-button').on('mouseup', _.bind(function() {
            this._elements = {};
            this._heights = {};
            setTimeout(_.bind(function() {
                this._waitForClick = false;
            }, this), 100);
        }, this));
        if (this._settingMinMax) this._settingMinMax = false;
    },
    
    eventRender: function(ev, el) {
        if (this.disposed) return;
        if (this._waitForClick || this._settingMinMax) {
            setTimeout(_.bind(function() {
                this.eventRender(ev, el);
            }, this), 100);
            return;
        }
        var start = ev.start.formatServer();
        var timeonly = this._getTimeForSlot(start);
        this._heights[timeonly] = 0;
        if (_.isUndefined(this._elements[timeonly])) this._elements[timeonly] = {};
        if (_.isUndefined(this._elements[timeonly][ev.resourceId])) this._elements[timeonly][ev.resourceId] = {};
        if (_.isUndefined(this._elements[timeonly][ev.resourceId][start])) this._elements[timeonly][ev.resourceId][start] = [];
        this._elements[timeonly][ev.resourceId][start].push(el);
    },
    
    eventAfterAllRender: function() {
        if (this.disposed) return;
        if (this._waitForClick || this._settingMinMax) {
            setTimeout(_.bind(function() {
                this.eventAfterAllRender();
            }, this), 200);
            return;
        }
        if (!this._isAgendaView()) return;
        // find minRowHeight
        var originalHeight = $('tr[data-time="'+this.minTimeForCalendar+'"]').attr('data-height');
        if (originalHeight) {
            this._minRowHeight = originalHeight;
        } else {
            this._minRowHeight = $('tr[data-time="'+this.minTimeForCalendar+'"]')[0].offsetHeight-2; // -borders
            $('tr[data-time="'+this.minTimeForCalendar+'"]').attr('data-height', this._minRowHeight);
        }
        // find max height for each time slot
        for (var timeForSlot in this._heights) {
            var h = this._heights[timeForSlot];
            if (h<this._minRowHeight) h = this._minRowHeight;
            if (this._elements[timeForSlot]) {
                for (var resourceId in this._elements[timeForSlot]) {
                    var heightPerDay = 0;
                    for (var start in this._elements[timeForSlot][resourceId]) {
                        for (var k in this._elements[timeForSlot][resourceId][start]) {
                            heightPerDay += this._elements[timeForSlot][resourceId][start][k].height();
                        }
                    }
                    if (heightPerDay>h) h = heightPerDay;
                }
            }
            this._heights[timeForSlot] = h;
        }
        var totalads = {};
        for (var timeForSlot in this._heights) {
            var h = this._heights[timeForSlot];
            if (h<this._minRowHeight) h = this._minRowHeight;
            var start;
            for (var resourceId in this._elements[timeForSlot]) {
                for (var j in this._elements[timeForSlot][resourceId]) {
                    start = j;
                    break;
                }
                break;
            }
            var moment = app.date(start);
            var row = $('tr[data-time="'+timeForSlot+'"]');
            var minTime = this._getTimeForSlot('01-01-1970T'+(this.calendarOptions.minTime||'00:00')+":00");
            while (!row.length) {
                moment.subtract(15, 'minutes');
                var timeonly = this._getTimeForSlot(moment.formatServer());
                row = $('tr[data-time="'+timeonly+'"]');
                if (timeonly==minTime || this.disposed) break;
            }
            if (row) {
                row.find('td').css('height', h + 'px');
                for (var resourceId in this._elements[timeForSlot]) {
                    for (var j in this._elements[timeForSlot][resourceId]) {
                        var date = app.date(j).format('M_D_YYYY');
                        if (_.isUndefined(totalads[date+resourceId])) {
                            totalads[date+resourceId] = 0;
                        } else {
                            totalads[date+resourceId] -= this._minRowHeight;
                        }
                        for (var k in this._elements[timeForSlot][resourceId][j]) {
                            var top = parseInt(this._elements[timeForSlot][resourceId][j][k].css('top').replace('px',''));
                            this._elements[timeForSlot][resourceId][j][k].css('top', (top+totalads[date+resourceId])+'px');
                            totalads[date+resourceId] += this._elements[timeForSlot][resourceId][j][k].height()-.4;
                            this._elements[timeForSlot][resourceId][j][k].css('height', this._elements[timeForSlot][resourceId][j][k].height()+'px');
                            this._elements[timeForSlot][resourceId][j][k].css('position', 'absolute');
                        }
                    }
                }
            }
        }
    },
    
    _getTimeForEvent: function(time) {
        var moment = app.date(time);
        return moment.format('h:mm A');
    },
    
    _getTimeForSlot: function(time) {
        var moment = app.date(time);
        return moment.format('HH:mm') + ':00';
    },
    
    _isAgendaView: function() {
        var cal = this.calendar.fullCalendar('getView');
        if (cal.name.indexOf('agenda')==-1) return false;
        return true;
    },
    
    /*
     * @override
     */
    eventClick: function(calEvent) {
        if (calEvent.id && calEvent.id.indexOf('free_')==-1) {
            app.router.navigate("#" + this.module + "/" + calEvent.id, {trigger: true});
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
    },
    
})