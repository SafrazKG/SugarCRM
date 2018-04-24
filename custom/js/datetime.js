(function (app) {
    app.events.on('app:init', function () {
        /**
         * This plugin handles datetime fields to show datetime in user's timezone
         *            
         */
        app.plugins.register('UseUserDateTime', ['field'], {
            
            _userTZOffset: 0,
            
            onAttach: function() {
                this._userTZOffset = app.user.getPreference('tz_offset_sec')/60;
            },
            
            format: function(value) {
                if (this.type=='duration') return this.formatForDuration(value);
                
                if (!value) {
                    return value;
                }
        
                value = app.date(value);
        
                if (!value.isValid()) {
                    return;
                }
        
                value.utcOffset(this._userTZOffset);
        
                if (this.action === 'edit' || this.action === 'massupdate') {
                    value = {
                        'date': value.format(app.date.convertFormat(this.getUserDateFormat())),
                        'time': value.format(app.date.convertFormat(this.getUserTimeFormat()))
                    };
        
                } else {
                    value = value.formatUser(false);
                }
        
                return value;
            },
            
            unformat: function(value) {
                if (!value) {
                    return value;
                }
        
                value = app.date(value, app.date.convertFormat(this.getUserDateTimeFormat()), true);
                
                var h = value.hour(),
                    m = value.minute(),
                    s = value.second(),
                    d = value.date(),
                    mo = value.month(),
                    y = value.year();
                
                value.utcOffset(this._userTZOffset);
                
                value.hour(h);
                value.minute(m);
                value.second(s);
                value.date(d);
                value.month(mo);
                value.year(y);
                
        
                if (!value.isValid()) {
                    return;
                }
        
                return value.format();
            },

            formatForDuration: function(value) {
                var displayString = '',
                    startDateString = this.model.get('date_start'),
                    endDateString = this.model.get('date_end'),
                    startDate,
                    endDate,
                    duration,
                    durationString;
        
                if (startDateString && endDateString) {
                    startDate = app.date(startDateString);
                    startDate.utcOffset(this._userTZOffset);
                    endDate = app.date(endDateString);
                    endDate.utcOffset(this._userTZOffset);
                    duration = app.date.duration(endDate - startDate);
                    durationString = duration.format() || ('0 ' + app.lang.get('LBL_DURATION_MINUTES'));
        
                    if ((startDate.date() === endDate.date()) &&
                        (startDate.month() === endDate.month()) &&
                        (startDate.year() === endDate.year())
                    ) {
                        // Should not display the date twice when the start and the end dates are the same.
                        displayString = app.lang.get('LBL_START_AND_END_DATE_SAME_DAY', this.module, {
                            date: startDate.formatUser(true),
                            start: startDate.format(app.date.getUserTimeFormat()),
                            end: endDate.format(app.date.getUserTimeFormat()),
                            duration: durationString
                        });
                    } else {
                        displayString = app.lang.get('LBL_START_AND_END_DATE', this.module, {
                            start: startDate.formatUser(false),
                            end: endDate.formatUser(false),
                            duration: durationString
                        });
                    }
                }
       
                return displayString;
            },
        });
    });
})(SUGAR.App);