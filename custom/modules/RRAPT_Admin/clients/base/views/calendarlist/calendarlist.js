({
    extendsFrom: 'CustomCalendarlist',
    
    initialize: function() {
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
    eventClick: function(calEvent) {
        if (calEvent.id) {
            app.router.navigate("#" + this.module + "/" + calEvent.id, {trigger: true});
        } else {
            if (this._gettingDayRecord[calEvent._id]) return;
            this._gettingDayRecord[calEvent._id] = true;
            app.api.call('read', app.api.buildURL('RRAPT_Admin', '?filter[0][date_field_c]='+calEvent.start.formatServer()), {}, {
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
     * @override
     */
    getEventsFromCollection: function() {
        var start = this.start.clone();
        var events = [];
        while (true) {
            var event = this.getDateEventFromCollection(start, this.collection);
            if (event) {
                events.push(event);
            } else {
                events.push({
                                title: 'Inactive',
                                allDay: true,
                                start: start.formatServer(),
                                backgroundColor: '#D6D6D6',
                                textColor: '#ffffff',
                            });
            }
            if (start.isSame(this.end)) break;
            start.add(1, 'days');
        }
        return events;
    },
    
    getDateEventFromCollection: function(date, collection) {
        var event = null;
        var dateS = date.formatServer();
        for (var i in collection.models) {
            if (collection.models[i].get('date_field_c')==dateS) {
                var title = collection.models[i].get('active_c');
                title += "\nStart: " + collection.models[i].get('start_time_c');
                title += "\nEnd: " + collection.models[i].get('end_time_c');
                event = {
                                id: collection.models[i].id,
                                title: title,
                                allDay: true,
                                start: collection.models[i].get('date_field_c'),
                                backgroundColor: (collection.models[i].get('active_c')=='Active')?'#ffffff':'#D6D6D6',
                                textColor: '#000000',
                            };
                break;
            }
        }
        return event;
    },
    
})