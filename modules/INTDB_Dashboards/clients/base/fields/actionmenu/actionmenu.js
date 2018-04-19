({
    extendsFrom: 'ActionmenuField',
        
    /**
     * @inheritdoc
     */
    check: function() {
        var $checkbox = this.$(this.fieldTag);
        var isChecked = $checkbox.is(':checked');
        this.toggleSelect(isChecked, $checkbox);
    },

    /**
     * @inheritdoc
     */
    toggleSelect: function(checked, el) {
        var event = !!checked ? 'intdb:mass_collection:add' : 'intdb:mass_collection:remove';
        this.context.trigger(event, el);
    },

    /**
     * @inheritdoc
     */
    checkAll: function(event) {
        var $checkbox = this.$(this.fieldTag);
        if ($(event.target).hasClass('checkall') || event.type === 'keydown') {
            $checkbox.prop('checked', !$checkbox.is(':checked'));
        }
        var isChecked = $checkbox.is(':checked');
        this.toggleAll(isChecked, $(event.target));
    },

    /**
     * @inheritdoc
     */
    toggleAll: function(checked, el) {
        var event = checked ? 'intdb:mass_collection:add:all' : 'intdb:mass_collection:remove:all';
        this.context.trigger(event, el);
    },
})
