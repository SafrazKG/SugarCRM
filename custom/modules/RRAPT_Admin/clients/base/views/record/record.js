({
    extendsFrom: 'RecordView',
    
    _originalActive: '',
    
    initialize: function() {
        this.plugins = _.union(this.plugins||[], ['CalendarTimes']);
        this._super('initialize', arguments);
        this.model.on('data:sync:complete', _.bind(function() {
            this._originalActive = this.model.get('active_c');
        }, this));
    },

    getCustomSaveOptions: function(options) {
        options = this._super('getCustomSaveOptions', [options]);
        var msg = 'You have successfully saved this date.';
        if (this.model.get('active_c')=='Active' && this.model.get('active_c')!=this._originalActive) msg = 'You have successfully marked this date as Active';
        options.showAlerts = {
                'process': true,
                'success': {
                    messages: msg
                }
            };
        return options;
    }

})