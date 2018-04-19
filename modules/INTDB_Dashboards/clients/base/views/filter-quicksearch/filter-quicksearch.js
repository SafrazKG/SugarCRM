({
    /**
     * @inheritdoc
     */
    updatePlaceholder: function(linkModuleName, linkModule) {
        var label;
        this.toggleInput();
        label = app.lang.get('LBL_SEARCH_USERS', 'INTDB_Dashboards');
        var input = this.$el.attr('placeholder', label);
        this.$el.attr('aria-label', label);
        //Call placeholder() because IE9 does not support placeholders.
        if (_.isFunction(input.placeholder)) {
            input.placeholder();
        }
    },

})