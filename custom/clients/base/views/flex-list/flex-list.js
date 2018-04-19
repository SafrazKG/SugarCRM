({
    extendsFrom: 'FlexListView',
    
    initialize: function(options) {
        this._super('initialize', [options]);
        if (this.module=='INTDB_Dashboards') this.template = app.template.getView('intdb-flex-list');
    }
})