({
    extendsFrom: 'CustomCalendarlist',
    startField: 'start_date_c',
    endField: 'end_date_c',
    minTimeForCalendar: "08:00",
    maxTimeForCalendar: "23:00",
    dispositionBackgroundColors: {
        'Set': '#13A0ED',
        'Confirmed': '#59BA74',
        'Reschedules': '#DADD71',
        'Closer not available': '#F94A4A',
        'Customer not available': '#D6D6D6',
    },
    
    dispositionColors: {
        'Set': '#000000',
        'Confirmed': '#000000',
        'Reschedules': '#000000',
        'Closer not available': '#000000',
        'Customer not available': '#000000',
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
        minTime: this.minTimeForCalendar,
        maxTime: this.maxTimeForCalendar,
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
        //bean.set('date_field_c', calEvent.start.formatServer());
        return bean;
    },

    /*
     * @override
     */
    getEventsFromCollection: function() {
        var events = [];
        _.each(this.collection.models, function(model) {
            var title = model.get('name');
            title += "\nF: " + model.get('users_rrapt_calendar_1_name');
            title += " - ";
            title += "C: " + model.get('users_rrapt_calendar_3_name');
            events.push({
                        resourceId: model.get('product_c'),
                        id: model.id,
                        title: title,
                        allDay: false,
                        start: model.get('start_date_c'),
                        backgroundColor: this.dispositionBackgroundColors[model.get('disposition_c')],
                        textColor: this.dispositionColors[model.get('disposition_c')],
                    });
        }, this);
        return events;
    },
    
    viewRender: function() {
        if (this._configured) return;
        this._configured = true;
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
    },
    
    eventRender: function(ev, el) {
        if (this._waitForClick) {
            setTimeout(_.bind(function() {
                this.eventRender(ev, el);
            }, this), 100);
            return;
        }
        var start = ev.start.formatServer();
        var timeonly = this._getTimeForSlot(start);
        this._heights[timeonly] = 0;
        if (_.isUndefined(this._elements[timeonly])) this._elements[timeonly] = {};
        if (_.isUndefined(this._elements[timeonly][start])) this._elements[timeonly][start] = [];
        this._elements[timeonly][start].push(el);
    },
    
    eventAfterAllRender: function() {
        if (this._waitForClick) {
            setTimeout(_.bind(function() {
                this.eventAfterAllRender();
            }, this), 200);
            return;
        }
        // find minRowHeight
        this._minRowHeight = $('tr[data-time="'+this.minTimeForCalendar+':00"]')[0].offsetHeight-2; // -borders
        // find max height for each time slot
        for (var timeForSlot in this._heights) {
            var h = this._heights[timeForSlot];
            if (h<this._minRowHeight) h = this._minRowHeight;
            if (this._elements[timeForSlot]) {
                for (var j in this._elements[timeForSlot]) {
                    var heightPerDay = 0;
                    for (var k in this._elements[timeForSlot][j]) {
                        heightPerDay += this._elements[timeForSlot][j][k][0].offsetHeight;
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
            for (var j in this._elements[timeForSlot]) {
                start = j;
                break;
            }
            var moment = app.date(start);
            var row = $('tr[data-time="'+timeForSlot+'"]');
            var minTime = this._getTimeForSlot('01-01-1970T'+(this.calendarOptions.minTime||'00:00')+":00");
            while (!row.length) {
                moment.subtract(15, 'minutes');
                if (!_.isUndefined(totalads))
                var timeonly = this._getTimeForSlot(moment.formatServer());
                row = $('tr[data-time="'+timeonly+'"]');
                if (timeonly==minTime || this._disposed) break;
            }
            if (row) {
                row.find('td').css('height', h + 'px');
                for (var j in this._elements[timeForSlot]) {
                    var date = app.date(j).format('M_D_YYYY');
                    if (_.isUndefined(totalads[date])) {
                        totalads[date] = 0;
                    } else {
                        totalads[date] -= this._minRowHeight;
                    }
                    for (var k in this._elements[timeForSlot][j]) {
                        var top = parseInt(this._elements[timeForSlot][j][k].css('top').replace('px',''));
                        this._elements[timeForSlot][j][k].css('top', (top+totalads[date])+'px');
                        totalads[date] += this._elements[timeForSlot][j][k][0].offsetHeight?this._elements[timeForSlot][j][k][0].offsetHeight:0;
                        this._elements[timeForSlot][j][k].css('height', this._elements[timeForSlot][j][k][0].offsetHeight+'px');
                        this._elements[timeForSlot][j][k].css('position', 'absolute');
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
    
})