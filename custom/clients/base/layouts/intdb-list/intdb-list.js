({
    extendsFrom: 'BaseLayout',

    /**
     * List of selected dashboards
     *
     * @property array
     */
    selectedDashboards: [],
    
    /**
     * @inheritdoc
     */
    initialize: function(options) {
        if (!app.acl.hasAccess('edit', 'Users')) {
            app.alert.show('intdb', {
                level: 'error',
                messages: 'LBL_NO_ACCESS',
                autoClose: true
            });
            app.router.navigate('#Home', { trigger: true });
            return;
        }
        this._super('initialize', [options]);
    },
})