({
    extendsFrom: 'CreateView',
    
    initialize: function() {
        this.plugins = _.union(this.plugins||[], ['CalendarTimes']);
        this._super('initialize', arguments);
    },

})