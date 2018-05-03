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
    
    initialize: function(options) {
        if (options.context && options.context.parent && options.context.parent.get('filter_by_role_id') && options.context.parent.get('filter_by_role_id')=='closer') {
            var fields = options.meta.panels[0].fields;
            var newfields = [];
            var added = false;
            for (var i in fields) {
                if (fields.hasOwnProperty(i)) {
                    newfields.push(fields[i]);
                    if (!added) {
                        newfields.push({
                                            'default': true,
                                            'enabled': true,
                                            'name': 'closer_score_c',
                                            'sortable': true,
                                            'type': 'float',
                                            'label': 'Closer Score',
                                        });
                        added = true;
                    }
                }
            }
            options.meta.panels[0].fields = newfields;
        }
        this._super('initialize', [options]);
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
                    if (filterDefs[i].appointment_id) {
                        filterDefs[i].appointment_id = this.context.parent.get('appointment_id');
                        set = true;
                    }
                }
                if (!set) {
                    filterDefs.push({ role_id: this.context.parent.get('filter_by_role_id') });
                    filterDefs.push({ appointment_id: this.context.parent.get('appointment_id') });
                }
                this.collection.setOption('filter', filterDefs);
                oldFetch.apply(this.collection, arguments);
            }, this);
        }
    },

})