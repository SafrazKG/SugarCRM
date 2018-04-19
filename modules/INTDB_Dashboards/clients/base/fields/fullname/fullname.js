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
 * @class View.Fields.Base.FullnameField
 * @alias SUGAR.App.view.fields.BaseFullnameField
 * @extends View.Fields.Base.FieldsetField
 */
({
    extendsFrom: 'FullnameField',

    /**
     * @inheritdoc
     */
    formatMap: {
        'f': 'first_name',
        'l': 'last_name',
        's': 'salutation'
    },

    /**
     * @inheritdoc
     */
    initialize: function(options) {
        options.module = 'Users';
        this._super('initialize', [options]);
        this.model.module = 'Users';
    },

})
