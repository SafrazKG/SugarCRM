/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
/**
 *
 * @class View.Views.Base.MultiSelectionListLinkView
 * @alias SUGAR.App.view.views.BaseMultiSelectionListLinkView
 * @extends View.Views.Base.MultiSelectionListView
 */
({
    extendsFrom: 'SelectionListView',
    
    initialize: function() {
        this._super('initialize', arguments);
        if (this.context && this.context.parent && this.context.parent.get('filter_by_role_id')) {
            var oldFetch = this.collection.fetch;
            this.collection.fetch = _.bind(function() {
                var filterDefs = this.collection.filterDef || [];
                var set = false;
                for (var i in filterDefs) {
                    if (filterDefs[i].role_id) {
                        filterDefs[i].role_id = this.context.parent.get('filter_by_role_id');
                        set = true;
                    }
                }
                if (!set) {
                    filterDefs.push({ role_id: this.context.parent.get('filter_by_role_id') });
                }
                this.collection.setOption('filter', filterDefs);
                oldFetch.apply(this.collection, arguments);
            }, this);
        }
    },

})