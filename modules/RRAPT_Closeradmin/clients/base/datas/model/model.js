({
    /**
     * @inheritdoc
     */
    initialize: function() {
        App.Bean.prototype.initialize.apply(this, arguments);
        this.fields = {
                        'id': { name: 'id'},
                        'day_field': { name: 'day_field'},
                        'transfer': { name: 'transfer'},
                        'mortgage': { name: 'mortgage'},
                        'start_time': { name: 'start_time'},
                        'end_time': { name: 'end_time'}
                    };
    },

})