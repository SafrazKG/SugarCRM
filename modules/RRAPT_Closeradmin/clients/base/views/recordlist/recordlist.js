({
    extendsFrom: 'RecordlistView',
    
    initialize: function() {
        if (app.user.get('type')!='admin') {
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
        this.on('render', function() { $('.search-filter').hide(); });
        this.collection.fetch({});
    },
    
})