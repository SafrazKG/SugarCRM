(function (app) {
    app.SlotAvailability = {
        availability: {},
        getAvailablity: function(datetime, success, fail) {
            if (!datetime._isAMomentObject) throw('datetime must be moment object');
            var string = datetime.format('YYYY-MM-DD');
            if (_.isUndefined(app.SlotAvailability.availability[string])) {
                app.api.call('read', app.api.buildURL('RRAPT_Admin/getAvailableSlots/'+encodeURIComponent(string)), {}, {
                    success: function(data) {
                        if (!data || !data.active) {
                            app.SlotAvailability.availability[string] = false;
                            fail();
                        } else {
                            app.SlotAvailability.availability[string] = data;
                            success(data);
                        }
                    },
                    error: function() {
                        fail();
                    },
                });
            } else {
                if (this.availability[string]) {
                    success(app.SlotAvailability.availability[string]);
                } else {
                    fail();
                }
            }
        },
        isSlotAvailable: function(moment, product, modelid, callback) {
            if (!moment._isAMomentObject) throw('moment must be moment object');
            if (typeof(callback)=='function') {
                app.SlotAvailability.getAvailablity(moment, function(data) {
                        var dataName = (product=='Mortgage')?'mortgage':'transfer';
                        var slotName = dataName.toLowerCase() + '_' + moment.format('ha');
                        if (!_.isUndefined(data.slots[slotName]) && data.slots[slotName].length && !app.SlotAvailability.hasId(data.slots[slotName], modelid)) {
                            callback(false, data);
                        } else {
                            callback(true, data);
                        }
                    },
                    function() {
                        callback(false, null);
                    }
                );
            } else {
                var dataName = (product=='Mortgage')?'mortgage':'transfer';
                var slotName = dataName.toLowerCase() + '_' + moment.format('ha');
                if (!_.isUndefined(callback.slots[slotName]) && callback.slots[slotName].length && !app.SlotAvailability.hasId(callback.slots[slotName], modelid)) {
                    return false;
                } else {
                    return true;
                }
            }
        },
        resetSlot: function(moment) {
            if (!moment._isAMomentObject) throw('moment must be moment object');
            var string = moment.format('YYYY-MM-DD');
            delete app.SlotAvailability.availability[string];
        },
        hasId: function(slot, id) {
            for (var i in slot) {
                if (id==slot[i].id) return true;
            }
            return false;
        },
    }
})(SUGAR.App);
