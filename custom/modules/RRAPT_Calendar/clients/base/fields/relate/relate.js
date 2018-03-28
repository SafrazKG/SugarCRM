({
    extendsFrom: 'RelateField',
    
    _userRole: false,
    _fieldsToCustomize: {
                            users_rrapt_calendar_1_name: 'fronter',
                            users_rrapt_calendar_2_name: 'fronter',
                            users_rrapt_calendar_3_name: 'closer',
                        },
                        
    initialize: function() {
        this._super('initialize', arguments);
        if (this._fieldsToCustomize[this.name]) this._userRole = this._fieldsToCustomize[this.name];
    },
    
    /*
     * We override here to set filters for users to search only fronter or closer
     *
     * @return array
     */
    buildFilterDefinition: function() {
        var ret = this._super('buildFilterDefinition', arguments);
        if (!this._userRole) return ret;
        ret = ret || [];
        ret.push({
            'role_id': this._userRole,
        });
        return ret;
    },

    /*
     * @override
     */
    openSelectDrawer: function() {
        if (this.context) {
            if (this.context.parent) this.context.parent.set('filter_by_role_id', this._userRole);
            else this.context.set('filter_by_role_id', this._userRole);
        }
        return this._super('openSelectDrawer', arguments);
    },
        
})