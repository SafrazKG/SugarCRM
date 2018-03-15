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
                }, this));
                this.on('init', _.bind(function() {
                    this.model.on('change:day_field_c', _.bind(this.dayChanged, this));
                    this.model.on('change:start_time_c', _.bind(this.dayChanged, this));
                    this.model.on('change:end_time_c', _.bind(this.dayChanged, this));
                }, this));
            },
            
            dayChanged: function() {
                if (!this._defaultsForDays) {
                    setTimeout(_.bind(this.initPlugin, this), 200);
                    return;
                }
                var day = this.model.get('day_field_c');
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
            
            // dummy until we do config part
            getDefaults: function() {
                this._defaultsForDays = {
                    'Monday': { transfer: 5, mortgage: 5 },
                    'Tuesday': { transfer: 5, mortgage: 5 },
                    'Wednesday': { transfer: 5, mortgage: 5 },
                    'Thursday': { transfer: 5, mortgage: 5 },
                    'Friday': { transfer: 5, mortgage: 5 },
                    'Saturday': { transfer: 5, mortgage: 5 },
                    'Sunday': { transfer: 5, mortgage: 5 },
                };
            },
        });
    });
})(SUGAR.App);
