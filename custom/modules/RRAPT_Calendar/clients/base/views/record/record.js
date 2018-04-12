({
    extendsFrom: 'RecordView',
    
    initialize: function() {
        this._super('initialize', arguments);
        this.model.on('data:sync:complete', _.bind(this.checkAccess, this));
    },
    
    checkAccess: function() {
        var roles = app.user.get('roles');
        if (_.contains(roles, 'Closer') && this.model.get('users_rrapt_calendar_3users_ida')!=app.user.id) {
            app.router.goBack();
        }
    }
    
})