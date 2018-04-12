({
    extendsFrom: 'CreateView',
    
    initialize: function() {
        this.plugins = _.union(this.plugins||[], ['CalendarTimes']);
        this._super('initialize', arguments);
    },

    getCustomSaveOptions: function(options) {
        options = this._super('getCustomSaveOptions', [options]);
        var msg = 'You have successfully saved this date.';
        if (this.model.get('active_c')=='Active') msg = 'You have successfully marked this date as Active';
        options.showAlerts = {
                'process': true,
                'success': {
                    messages: msg
                },
            };
        return options;
    },

    createRecordWaterfall: function (callback) {
        var success = _.bind(function () {
                var acls = this.model.get('_acl');
                if (!_.isEmpty(acls) && acls.access === 'no' && acls.view === 'no') {
                    //This happens when the user creates a record he won't have access to.
                    //In this case the POST request returns a 200 code with empty response and acls set to no.
                    this.alerts.showSuccessButDeniedAccess.call(this);
                    callback(false);
                } else {
                    callback(false);
                }
            }, this),
            error = _.bind(function(model, e) {
                if (e.status == 412 && !e.request.metadataRetry) {
                    this.handleMetadataSyncError(e);
                } else {
                    if (e.status == 403) {
                        this.alerts.showNoAccessError.call(this);
                    } else {
                        this.alerts.showServerError.call(this);
                    }
                    callback(true);
                }
            }, this);

        this.saveModel(success, error);
    },

})