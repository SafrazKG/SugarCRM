({
    /**
     * Initialization
     */
    initialize: function (options) {
        this._super("initialize", [options]);
        this.context.on('settings:save', this.saveConfig, this);
        this.configModel = new app.data.beanModel();
    },
    
    /**
     * Loads entered license details if they exist
     */
    loadData: function () {
        app.api.call('read', app.api.buildURL(this.module, 'config'), {}, {
            success: _.bind(function (data) {
                if (!_.isEmpty(data)) {
                    _.each(data, function (value, key) {
                        this.configModel.set(key, value);
                    }, this);
                }
                this.render();
                this.checkLicense();
            }, this),
            error: _.bind(function (error) {
                console.log(error);
            }, this)});
    },

    /**
     * Check if license is valid and not expired
     */
    checkLicense: function () {
        app.api.call('GET', app.api.buildURL(this.module, 'config/check'), null, {
            success: _.bind(function(data) {
                var isValid;
                var message = '';
                if (typeof data['errors'] !== 'undefined' && data['errors'] !== null) {
                    isValid = false;
                    message = message + data['errors'];
                } else {
                    isValid = true;
                }
                if (typeof data['expiryDate'] !== 'undefined') {
                    var expiryDate = data['expiryDate'];
                    if (isValid){
                        message += app.lang.get('LBL_LICENCE_WILL_EXPIRE', this.module) + data['expiryDate'];
                    } else {
                        message += app.lang.get('LBL_LICENCE_EXPIRED_ON', this.module) + data['expiryDate'];
                    }
                }

                if (isValid) {
                    app.alert.dismiss('settings:error');
                    app.alert.show('settings:info', {
                        level: 'info',
                        messages: message,
                        autoClose: false
                    });
                } else {
                    app.alert.dismiss('settings:info');
                    app.alert.show('settings:error', {
                        level: 'error',
                        messages: message,
                        autoClose: false
                    });
                }
            },this),
            error: _.bind(function(error) {
                app.alert.show('settings:error', {
                    level: 'error',
                    messages: app.lang.get('LBL_LICENCE_INVALID_REQUEST', this.module) + error.message,
                    autoClose: false
                });
            }, this)
        });
    },

    /**
     * Saves entered license details
     */
    saveConfig: function () {
        var data = {};

        _.each(this.meta.fields, function (def) {
            data[def.name] = this.configModel.get(def.name);
        }, this);

        app.alert.show('settings:save', {
            level: 'process',
            title: app.lang.getAppString('LBL_LOADING')
        });

        var url = app.api.buildURL(this.module, 'config');

        app.api.call('update', url, data, {
            success: _.bind(function (result) {
                app.alert.dismiss('settings:save');
                app.metadata.sync(_.bind(this.checkLicense, this));
            }, this),
            error: _.bind(function (error) {
                app.alert.show('settings:error', {
                    level: 'error',
                    messages: app.lang.get('LBL_ERROR_SAVING_LICENCE', this.module) + app.lang.getAppString(error.message),
                    autoClose: false
                });
            }, this),
            complete: _.bind(function (data) {
                app.alert.dismiss('settings:save');
            }, this)
        });
    }
})
