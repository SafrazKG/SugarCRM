({
    extendsFrom: 'CustomCalendarlist',
    
    serverPingTime: 5, // minutes
    defaultMinTime: '08:00:00',
    defaultMaxTime: '23:00:00',
    
    dispositionBackgroundColors: {
        'Set': '#13A0ED',
        'Confirmed': '#59BA74',
        'Reschedules': '#DADD71',
        'Closer not available': '#F94A4A',
        'Customer not available': '#FCA1A1',
        'free': '#D6D6D6',
        'notConfirmedCritical': '#FF6363',
        'unavailable': '#919191',
    },
    
    dispositionColors: {
        'Set': '#000000',
        'Confirmed': '#000000',
        'Reschedules': '#000000',
        'Closer not available': '#000000',
        'Customer not available': '#000000',
        'free': 'transparent',
        'notConfirmedCritical': '#000000',
        'unavailable': 'transparent',
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
        minTime: this.defaultMinTime,
        maxTime: this.defaultMaxTime,
        slotLabelFormat: '',
    },
    
    startField: 'date_field_c',
    endField: 'date_field_c',
    minTimeForCalendar: false,
    maxTimeForCalendar: false,

    _configured: false,
    _waitForClick: false,
    _minRowHeight: 0,
    _settingMinMax: false,
    _resizeTO: false,
    _inDrawer: false,
    _interval: 0,
    _getting5mindata: false,
    _toMove: [],
    _foTO: 0,
    _fiTO: 0,
    
    initialize: function(options) {
        this.calendarOptions.viewRender = _.bind(this.viewRender, this);
        this.calendarOptions.eventRender = _.bind(this.eventRender, this);
        this.calendarOptions.eventAfterAllRender = _.bind(function() {
            setTimeout(_.bind(this.eventAfterAllRender, this), 200);
        }, this);
        if (options && options.context && options.context.get('inDrawer')) this._inDrawer = true;
        this._super('initialize', arguments);
        $(window).on('resize.'+this.cid, _.bind(this.onWindowResize, this));
        var now = app.date();
        now.seconds(0);
        while (now.minute()%5) {
            now.add(1, 'minutes');
        }
        app.ScheduleRun(now, function() {
            this._interval = setInterval(_.bind(this.checkData, this), this.serverPingTime*60000);
        }, this);
    },

    setBeanDataOnCreate: function(calEvent) {
        var bean = this._super('setBeanDataOnCreate', arguments);
        bean.set('date_field_c', calEvent.start.formatServerNoTZ());
        bean.set('product_c', calEvent.resourceId);
        return bean;
    },

    /*
     * @override
     */
    getEventsFromCollection: function() {
        if (this.disposed) return;
        this.fadeOut();
        var events = [];
        this._toMove = [];
        var minOrig = this.minTimeForCalendar;
        var maxOrig = this.maxTimeForCalendar;
        _.each(this.collection.models, function(model) {
            if (this._isAgendaView()) {
                if (model.get('minTime')) this.minTimeForCalendar = this.slotTimeLT(this.minTimeForCalendar, model.get('minTime'));
                if (model.get('maxTime')) this.maxTimeForCalendar = this.slotTimeGT(this.maxTimeForCalendar, model.get('maxTime'));
            }
            var title = model.get('name');
            if (title) {
                title += "\nF: " + model.get('assigned_user_name');
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
            if (this._isAgendaView()) {
                this._settingMinMax = true;
                this.calendar.fullCalendar('option', { minTime: this.minTimeForCalendar, maxTime: this.maxTimeForCalendar });
            }
        }
        return events;
    },
    
    viewRender: function() {
        if (this.disposed) return;
        this.fadeOut();
        $('.fc-button').off('mousedown');
        $('.fc-button').off('mouseup');
        $('.fc-button').on('mousedown', _.bind(function() {
            this._waitForClick = true;
        }, true));
        $('.fc-button').on('mouseup', _.bind(function() {
            this.fadeOut();
            this._toMove = [];
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
        if (!this._isAgendaView()) return;
        this.fadeOut();
        el.on('click', _.bind(function() {
            this.eventClick(ev, el);
        }, this));
        var resources = {};
        var start = ev.start.formatServerNoTZ();
        var dateonly = start.split('T')[0];
        var timeonly = this._getTimeForSlot(start);
        this.calendar.find('th.fc-resource-cell').each(function() {
            var resourceId = $(this).attr('data-resource-id');
            var date = $(this).attr('data-date');
            if (!date) date = dateonly;
            resources[resourceId+"###"+date] = $(this).outerWidth();
        });
        var td = null;
        this.calendar.find('tr[data-time="'+timeonly+'"] .fc-widget-content').each(function() {
            if (!$(this).hasClass('fc-axis')) td = $(this);
        });
        if (!td) return;
        // check all resourceIds
        for (var i in resources) {
            var tmpResourceDiv = td.find('div[data-resource-id="'+i+'"]');
            if (!tmpResourceDiv.length) {
                var tdDiv = td.find('div.content-holder');
                if (!tdDiv.length) {
                    tdDiv = $('<div class="content-holder"></div>');
                    td.append(tdDiv);
                }
                tmpResourceDiv = $('<div data-resource-id="'+i+'" class="fc-resource-div" style="width: '+resources[i]+'px"></div>');
                tdDiv.append(tmpResourceDiv);
            }
        }
        var resourceId = ev.resourceId + '###' + dateonly;
        var resourceDiv = td.find('div[data-resource-id="'+resourceId+'"]');
        this._toMove.push({ el: el, resourceDiv: resourceDiv });
    },
    
    eventAfterAllRender: function() {
        if (this.disposed) return;
        if (this._waitForClick || this._settingMinMax) {
            setTimeout(_.bind(function() {
                this.eventAfterAllRender();
            }, this), 200);
            return;
        }
        if (!this._isAgendaView()) {
            this.fadeIn();
            return;
        }
        for (var i in this._toMove) {
            this._toMove[i].el.appendTo(this._toMove[i].resourceDiv);
        }
        this._toMove = [];
        this.fadeIn();
    },
    
    fadeOut: function() {
        if (!this.calendar || this.disposed) return;
        this.calendar.find('.fc-view').css('visibility', 'hidden');
        this.calendar.find('.fc-view').css('opacity', 0);
    },
    
    fadeIn: function() {
        if (this._fiTO) clearTimeout(this._fiTO);
        this._fiTO = setTimeout(_.bind(function() {
            if (!this.calendar || this.disposed) return;
            this.calendar.find('.fc-view').css('visibility', 'visible');
            this.calendar.find('.fc-view').css('opacity', 1);
            this._fiTO = 0;
        }, this), 100);
    },
    
    _getTimeForEvent: function(time) {
        time = app.date().removeTZ(time);
        var moment = app.date(time);
        return moment.format('h:mm A');
    },
    
    _getTimeForSlot: function(time) {
        time = app.date().removeTZ(time);
        var moment = app.date(time);
        return moment.format('HH:mm') + ':00';
    },
    
    _isAgendaView: function() {
        if (!this.calendar || this.disposed) return false;
        var cal = this.calendar.fullCalendar('getView');
        if (!cal || !cal.name) return false;
        if (cal.name.indexOf('agenda')==-1) return false;
        return true;
    },
    
    /*
     * @override
     */
    eventClick: function(calEvent) {
        if (calEvent.id.indexOf('unavaliable_')!=-1) return;
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
                    this.onCreated();
                }, this)
            );
        }
    },
    
    onCreated: function() {
        if (this._inDrawer) {
            app.drawer.close();
        } else {
            this.reloadCalendar();
        }
    },
    
    reloadCalendar: function() {
        if (app.drawer.isClosing()) {
            setTimeout(_.bind(function() {
                this.reloadCalendar();
            }, this), 200);
            return;
        }
        if (!this.calendar || this.disposed) return;
        $(window).trigger('resize', { manualResize: true });
        window.calView = this.calendar.fullCalendar('getView');
        setTimeout(_.bind(function() {
            this.collection.fetch({});
        }, this), 500);
    },
    
    onWindowResize: function(ev, args) {
        if (!this._rendered || !this.calendar || this.disposed) return;
        $('.fc-slats tr td').css('height', '');
        $('.fc-slats tr td').removeAttr('data-height', '');
        $('.fc-event').css('position', 'relative');
        $('.fc-event').css('bottom', '');
        this._toMove = [];
        if (!args || !args.manualResize) {
            if (this._resizeTO) clearTimeout(this._resizeTO);
            this._resizeTO = setTimeout(_.bind(function() {
                if (this._isAgendaView()) {
                    this._settingMinMax = true;
                    this.calendar.fullCalendar('option', { minTime: this.minTimeForCalendar?this.minTimeForCalendar:this.defaultMinTime, maxTime: this.maxTimeForCalendar?this.maxTimeForCalendar:this.defaultMaxTime });
                    this._resizeTO = false;
                }
            }, this), 200);
      }
    },
    
    checkData: function() {
        if (this.disposed || !this.calendar || !this._rendered || this._getting5mindata) return;
        var current = this.calendar.fullCalendar('getDate');
        if (this.calendar.fullCalendar('getView').name=='agendaDay' && current.format('Y-M-D')!=app.date().format('Y-M-D')) return;
        this._getting5mindata = true;
        var next = app.date().utc();
        next.seconds(0);
        next.subtract(60, 'minutes');
        while (next.minute()%5) {
            next.subtract(1, 'minutes');
        }
        var start = next.formatServerNoTZ();
        next.add(180, 'minutes');
        var end = next.formatServerNoTZ();
        app.api.call('read', app.api.buildURL('RRAPT_Calendar/?order_by=date_field_c%3Aasc&fields=&max_num=20&filter%5B0%5D%5Bdate_field_c%5D%5B%24gte%5D='+encodeURIComponent(start)+'&filter%5B1%5D%5Bdate_field_c%5D%5B%24lte%5D='+encodeURIComponent(end)), {}, {
            success: _.bind(function(data) {
                var changed = false;
                for (var i in data.records) {
                    var id = data.records[i].id;
                    var model = this.collection.findWhere({id: data.records[i].old_id});
                    if (!model) model = this.collection.findWhere({id: data.records[i].id});
                    if (model) {
                        for (var k in data.records[i]) {
                            if (model.has(k)) {
                                if (model.get(k)!=data.records[i][k]) {
                                    changed = true;
                                    model.set(k, data.records[i][k]);
                                }
                            }
                        }
                    } else {
                        var index = 0;
                        var foundSameOrBefore = '';
                        var date_field_c = app.date(data.records[i].date_field_c);
                        for (var j in this.collection.models) {
                            index = j;
                            var existing = app.date(this.collection.models[j].get('date_field_c'));
                            if (foundSameOrBefore && this.collection.models[j].get('date_field_c')!=foundSameOrBefore) break;
                            if (!foundSameOrBefore && existing.isSameOrBefore(date_field_c)) {
                                foundSameOrBefore = this.collection.models[j].get('date_field_c');
                            }
                        }
                        var newModel = app.data.createBean('RRAPT_Calendar');
                        for (var j in data.records[i]) {
                            newModel.set(j, data.records[i][j]);
                        }
                        this.collection.add(newModel, { at: index });
                        changed = true;
                    }
                }
                if (changed) {
                    this.updateCalendarData();
                }
                this._getting5mindata = false;
            }, this),
        });
    },
    
    _dispose: function() {
        clearInterval(this._interval);
        $(window).off('resize.'+this.cid);
        this._super('_dispose', arguments);
    }
    
})