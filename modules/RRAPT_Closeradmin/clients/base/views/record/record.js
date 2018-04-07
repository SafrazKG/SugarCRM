({
    extendsFrom: 'RecordView',
    
    initialize: function() {
        var roles = app.user.get('roles');
        if (!_.contains(roles, 'Calendar Admin') && app.user.get('type')!='admin') {
            app.alert.show('noacess', {
                level: 'error',
                title: 'LBL_NO_ACCESS',
                messages: '',
                autoClose: true
            });
            app.router.navigate('#Home', { trigger: true });
            return;
        }
        this._super('initialize', arguments);
    }
})