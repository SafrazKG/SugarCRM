({
    extendsFrom: 'SubpanelListView',
    
    initialize: function() {
        this._super('initialize', arguments);
        this.on('render', _.bind(this.canAddAppointment, this));
    },
    
    canAddAppointment: function() {
        var roles = app.user.get('roles');
        if (!_.contains(roles, 'Fronter')) $(this.el).closest('.subpanel').find('.subpanel-header').find('[name="create_button"]').closest('span').hide();
    },

})
