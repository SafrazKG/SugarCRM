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
 * @class View.Views.Base.ListHeaderpaneView
 * @alias SUGAR.App.view.views.BaseListHeaderpaneView
 * @extends View.Views.Base.HeaderpaneView
 */
({
    extendsFrom: 'HeaderpaneView',

    /**
     * @inheritdoc
     */
    initialize: function(options) {
        options.meta = _.extend(
            {},
            app.metadata.getView(null, 'list-headerpane'),
            app.metadata.getView(options.module, 'list-headerpane'),
            options.meta
        );
        options.meta.fields[0].default_value = app.lang.get('LBL_DEPLOY_TO_FOLLOWING', 'INTDB_Dashboards') + ' ' + app.lang.get('LBL_MODULE_NAME', options.module).toLowerCase();
        options.meta.buttons = [
                                {
                                    name: 'cancel_button',
                                    label: 'LBL_CANCEL_BUTTON_LABEL',
                                    type: 'button',
                                    css_class: 'btn-cancel',
                                    events: {
                                        click: 'intdb_cancel'
                                    },
                                },
                                {
                                    name: 'deploy_button',
                                    label: app.lang.get('LBL_DEPLOY', 'INTDB_Dashboards'),
                                    type: 'button',
                                    css_class: 'btn-save hidden',
                                    events: {
                                        click: 'intdb_do_deploy'
                                    },
                                    primary: true,
                                }
                            ];

        this._super('initialize', [options]);
    }
})
