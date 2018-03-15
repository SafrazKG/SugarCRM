({
    extendsFrom: 'CustomCalendarlist',
    
    initialize: function() {
        this._super('initialize', arguments);
    },

    setBeanDataOnCreate: function(calEvent) {
        var bean = this._super('setBeanDataOnCreate', arguments);
        bean.set('date_field_c', calEvent.start.formatServer());
        return bean;
    },
})