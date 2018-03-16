({
    extendsFrom: 'RecordlistView',
    
    initialize: function() {
        this._super('initialize', arguments);
        this.on('render', function() { $('.search-filter').hide(); });
        this.collection.fetch({});
    },
    
})