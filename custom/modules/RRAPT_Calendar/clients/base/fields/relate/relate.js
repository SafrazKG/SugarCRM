({
    extendsFrom: 'RelateField',
    
    _userRole: false,
    _fieldsToCustomize: {
                            assigned_user_name: 'fronter',
                            users_rrapt_calendar_1_name: 'fronter',
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
        var context = this.context.parent||this.context;
        if (this._userRole=='closer' && context.get('model')) ret.push({
                                                                            appointment_id: context.get('model').id
                                                                        });
        return ret;
    },

    /*
     * @override
     */
    openSelectDrawer: function() {
        if (this.context) {
            var context = this.context.parent||this.context;
            context.set('filter_by_role_id', this._userRole);
            if (this._userRole=='closer' && context.get('model')) {
                context.set('appointment_id', context.get('model').id);
            } else {
                context.set('appointment_id', null);
            }
        }
        return this._super('openSelectDrawer', arguments);
    },
        
})