(function (app) {
    app.events.on('app:init', function () {
        /**
         * This plugin handles calendar availability times
         *            
         */
        app.plugins.register('CalendarTimes', ['view'], {
            
            _times: [ '8AM', '9AM', '10AM', '11AM', '12PM', '1PM', '2PM', '3PM', '4PM', '5PM', '6PM', '7PM', '8PM', '9PM', '10PM' ],
            _defaultsForDays: null,
            _startTime: null,
            _endTime: null,
            _rendered: null,
            _fieldParents: {},
            
            /**
             * @inheritdoc
             */
            onAttach: function() {
                this.getDefaults();
                this.once('render', _.bind(function() {
                    this._rendered = true;
                    $(this.getField('date_field_c').el.offsetParent).hide();
                    if (this.createMode) this.dayChanged();
                }, this));
                this.on('init', _.bind(function() {
                    for (var i in this.meta.panels) {
                        for (var j in this.meta.panels[i].fields) {
                            if (this.meta.panels[i].fields[j].name && this.meta.panels[i].fields[j].name=='date_field_c') this.meta.panels[i].fields[j].readonly = true;
                        }
                    }
                    this.model.on('change:start_time_c', _.bind(this.startEndChanged, this));
                    this.model.on('change:end_time_c', _.bind(this.startEndChanged, this));
                }, this));
            },
            
            dayChanged: function() {
                if (!this._defaultsForDays) {
                    setTimeout(_.bind(this.dayChanged, this), 200);
                    return;
                }
                var day = this.model.get('day_field_c');
                for (var i in this._times) {
                    this.model.set('transfer_'+this._times[i].toLowerCase()+'_c', this._defaultsForDays[day].transfer);
                    this.model.set('mortgage_'+this._times[i].toLowerCase()+'_c', this._defaultsForDays[day].mortgage);
                }
                this.model.set('start_time_c', this._defaultsForDays[day].start_time);
                this.model.set('end_time_c', this._defaultsForDays[day].end_time);
            },
            
            startEndChanged: function() {
                this._startTime = this.model.get('start_time_c').toUpperCase();
                this._endTime = this.model.get('end_time_c').toUpperCase();
                this.updateCalendarTimes();
            },
            
            updateCalendarTimes: function() {
                if (!this._rendered) {
                    setTimeout(_.bind(this.updateCalendarTimes, this), 200);
                    return;
                }
                var started = false;
                var nomore = false;
                for (var i in this._times) {
                    if (this._times[i]==this._startTime) started = true;
                    if (!started || nomore) {
                        this.showHideFields(this._times[i], false);
                    } else {
                        this.showHideFields(this._times[i], true);
                    }
                    if (started && this._times[i]==this._endTime) nomore = true;
                }
            },
            
            showHideFields: function(t, visible) {
                var transfer = this.getTransferField(t);
                var mortgage = this.getMortgageField(t);
                if (visible) {
                    transfer.show();
                    mortgage.show();
                } else {
                    transfer.hide();
                    mortgage.hide();
                }
            },
            
            getTransferField: function(t) {
                t = t.toLowerCase();
                if (_.isUndefined(this._fieldParents['transfer_'+t+'_c'])) {
                    this._fieldParents['transfer_'+t+'_c'] = $(this.getField('transfer_'+t+'_c').el.offsetParent);
                }
                return this._fieldParents['transfer_'+t+'_c'];
            },
            
            getMortgageField: function(t) {
                t = t.toLowerCase();
                if (_.isUndefined(this._fieldParents['mortgage_'+t+'_c'])) {
                    this._fieldParents['mortgage_'+t+'_c'] = $(this.getField('mortgage_'+t+'_c').el.offsetParent);
                }
                return this._fieldParents['mortgage_'+t+'_c'];
            },
            
            getDefaults: function() {
                app.api.call('read', app.api.buildURL('RRAPT_Closeradmin'), {}, {
                    success: _.bind(function(data) {
                        if (data && data.records) {
                            var defaults = {};
                            for (var i in data.records) {
                                defaults[data.records[i].day_field] = data.records[i];
                            }
                            this._defaultsForDays = defaults;
                        }
                    }, this)
                });
            },
        });
    });
})(SUGAR.App);