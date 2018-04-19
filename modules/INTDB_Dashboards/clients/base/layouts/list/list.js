({
    extendsFrom: 'BaseLayout',
    
    /**
     * @inheritdoc
     */
    initialize: function(options) {
        if (!app.acl.hasAccess('edit', 'Users')) {
            app.alert.show('intdb', {
                level: 'error',
                title: 'LBL_NO_ACCESS',
                messages: '',
                autoClose: true
            });
            app.router.navigate('#Home', { trigger: true });
            return;
        }
        this._super('initialize', [options]);
        this.context.on('button:config_button:click', function() {
            App.router.navigate('#INTDB_Dashboards/layout/config', { trigger: true });
        });
        this.checkLicense();
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
                var showMessage = true;
                if (typeof data['expiryDate'] !== 'undefined') {
                    var expiryDate = data['expiryDate'];
                    var realDate = new Date(expiryDate);
                    var now = new Date();
                    if (Math.round(((realDate.getTime()-now.getTime())/1000)/(3600*24))>30) showMessage = false;
                    if (isValid){
                        message += app.lang.get('LBL_LICENCE_WILL_EXPIRE', this.module) + data['expiryDate'];
                    } else {
                        message += app.lang.get('LBL_LICENCE_EXPIRED_ON', this.module) + data['expiryDate'];
                    }
                }

                if (isValid && showMessage) {
                    app.alert.dismiss('settings:error');
                    app.alert.show('settings:info', {
                        level: 'info',
                        messages: message,
                        autoClose: false
                    });
                } else if (showMessage) {
                    app.alert.dismiss('settings:info');
                    app.alert.show('settings:error', {
                        level: 'error',
                        messages: message,
                        autoClose: false
                    });
                    app.router.navigate('#INTDB_Dashboards/layout/config', { trigger: true });
                }
            },this),
            error: _.bind(function(error) {
                app.alert.show('settings:error', {
                    level: 'error',
                    messages: app.lang.get('LBL_LICENCE_INVALID_REQUEST', this.module) + error.message,
                    autoClose: false
                });
                app.router.navigate('#INTDB_Dashboards/layout/config', { trigger: true });
            }, this)
        });
    },

})