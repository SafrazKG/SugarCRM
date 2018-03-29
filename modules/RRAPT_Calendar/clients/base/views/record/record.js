({
    extendsFrom: 'RecordView',
    
    readOnlyFields: ['date_field_c'],
    
    initialize: function() {
        this.plugins = _.union(this.plugins||[], ['ReadonlyFields']);
        this._super('initialize', arguments);
    }
})