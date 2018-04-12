({
    extendsFrom: 'DatetimecomboField',
    
    _changedField: false,
    _data: null,
    _internalChange: false,
    _editRendered: false,

    initialize: function(options) {
        this._super('initialize', [options]);
        if (this.model && this.name=='date_field_c' && ((this.context && !this.context.get('_dontInit')) || (this.context.parent && !this.context.parent.get('_dontInit')))) {
            this._changedField = true;
            this.def.time = this.def.time||{};
            this.def.time.step = 60;
            this.model.on('change:'+this.name, _.bind(this.changeTimes, this));
            this.model.on('change:product_c', _.bind(this.changeTimes, this));
            this.on('render', _.bind(function() {
                if (this.action=='edit' && !this._editRendered) {
                    this._editRendered = true;
                    this.changeTimes();
                }
            }, this));
            this.model.addValidationTask('check_start_date', _.bind(this._checkStartDate, this));
            app.error.errorName2Keys.slot_not_available = 'ERROR_SLOT_NOT_AVAILABLE';
        }
    },
    
    _setupTimePicker: function() {
        this._super('_setupTimePicker', arguments);
        if (this._changedField) {
            this.setAvailableSlots(this._data);
        }
    },
    
    changeTimes: function() {
        if (this._internalChange) {
            this._internalChange = false;
            return;
        }
        if (this.action!='edit') return;
        var moment = app.date(this.model.get(this.name));
        if (!moment) return;
        var prev = this.model.previous(this.name);
        app.SlotAvailability.getAvailablity(moment, _.bind(function(data) {
            this.setAvailableSlots(data);
            this.checkMaxMin(data);
        }, this), _.bind(function() {
            this.dateNotAvailable(prev);
        }, this));
    },
    
    setAvailableSlots: function(data) {
        if (!data) return;
        this._data = data;
        var dontShow = [];
        var minTime = data.start_time;
        var maxTime = data.end_time;
        var moment = app.date('1970-01-01T00:00:00');
        var momentStart = app.date('1970-01-01T'+data.start_db);
        var momentEnd = app.date('1970-01-01T'+data.end_db);
        var totalEnd = app.date('1970-01-02T00:00:00');
        while (moment.isBefore(momentStart)) {
            var startT = moment.format('h:mma');
            moment.add(this.def.time.step, 'minutes');
            var endT = moment.format('h:mma');
            dontShow[dontShow.length] = [ startT, endT ];
        }
        var dataName = (this.model.get('product_c')=='Mortgage')?'mortgage':'transfer';
        while (!moment.isAfter(momentEnd)) {
            if (!app.SlotAvailability.isSlotAvailable(moment, this.model.get('product_c'), this.model.id, data)) {
                var startT = moment.format('h:mma');
                moment.add(this.def.time.step, 'minutes');
                var endT = moment.format('h:mma');
                dontShow[dontShow.length] = [ startT, endT ];
            } else {
                moment.add(this.def.time.step, 'minutes');
            }
        }
        while (moment.isBefore(totalEnd)) {
            var startT = moment.format('h:mma');
            moment.add(this.def.time.step, 'minutes');
            var endT = moment.format('h:mma');
            dontShow[dontShow.length] = [ startT, endT ];
        }
        this.$(this.secondaryFieldTag).timepicker('option', { minTime: minTime, maxTime: maxTime, disableTimeRanges: dontShow, disableTextInput: true, forceRoundTime: true });
    },
    
    checkMaxMin: function(data) {
        var momentStart = app.date('1970-01-01T'+data.start_db);
        var momentEnd = app.date('1970-01-01T'+data.end_db);
        var setTime = app.date(this.model.get(this.name));
        var setTime2 = app.date(this.model.get(this.name));
        setTime.dayOfYear(1);
        setTime.year(1970);
        if (setTime.isBefore(momentStart)) {
            setTime2.hour(momentStart.hour());
            setTime2.minute(momentStart.minute());
            var attributes = {};
            attributes[this.name] = setTime2.formatServerNoTZ();
            setTimeout(_.bind(function() {
                this._internalChange = true;
                this.model.set(attributes);
                this.render();
            }, this), 100);
        }
        if (setTime.isAfter(momentEnd)) {
            setTime2.hour(momentEnd.hour());
            setTime2.minute(momentEnd.minute());
            var attributes = {};
            attributes[this.name] = setTime2.formatServerNoTZ();
            setTimeout(_.bind(function() {
                this._internalChange = true;
                this.model.set(attributes);
                this.render();
            }, this), 100);
        }
    },
    
    dateNotAvailable: function(prev) {
        this._data = null;
        var moment = app.date(this.model.get(this.name));
        app.alert.show('notavailable'+this.name, {
            level: 'error',
            messages: moment.formatUser()+' is not available!',
            autoClose: true,
        });
        this.model.set(this.name, prev);
    },
    
    _checkStartDate: function(fields, errors, callback) {
        var moment = app.date(this.model.get(this.name));
        if (!moment) return;
        app.SlotAvailability.isSlotAvailable(moment, this.model.get('product_c'), this.model.id, _.bind(function(available) {
            if (!available) {
                errors[this.name] = errors[this.name] || {};
                errors[this.name].slot_not_available = true;
            } else {
                app.SlotAvailability.resetSlot(moment);
            }
            callback(null, fields, errors);
        }, this));
    },

})
