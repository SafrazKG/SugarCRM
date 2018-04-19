({
    className: 'howto',

    initialize: function(options) {
        this._super('initialize', [options]);
    },

    loadData: function () {
        this.helpHeader = app.lang.get('LBL_CONFIG_HELP_PANE_HEADER', this.module)
        this.helpText = app.lang.get('LBL_CONFIG_HELP_PANE_TEXT', this.module)
    }
})