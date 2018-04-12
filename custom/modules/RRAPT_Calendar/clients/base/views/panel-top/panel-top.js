({
    extendsFrom: 'PanelTopView',
    
    initialize: function() {
        this._super('initialize', arguments);
        var roles = app.user.get('roles');
        if (!_.contains(roles, 'Fronter')) {
            this.meta.buttons[0] = [];
        }
    }
})