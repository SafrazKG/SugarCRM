({
    extendsFrom: 'DurationField',
    
    initialize: function() {
        this.plugins = _.union(this.plugins||[], ['UseUserDateTime']);
        this._super('initialize', arguments);
    },
})