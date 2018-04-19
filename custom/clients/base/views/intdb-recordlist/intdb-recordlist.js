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
 * @class View.Views.Base.RecordlistView
 * @alias SUGAR.App.view.views.BaseRecordlistView
 * @extends View.Views.Base.FlexListView
 */
({
    extendsFrom: 'RecordlistView',
    
    /**
     * List of selected dashboards
     *
     * @property array
     */
    selectedDashboards: [],
       
    /**
     * @inheritdoc
     */
    initialize: function(options) {
        options.meta.selection.actions[0].label = app.lang.get('LBL_DEPLOY', 'INTDB_Dashboards');
        this._super('initialize', [options]);
        this.context.on('intdb_do_deploy', _.bind(this.doDeploy, this));
        this.context.on('intdb_cancel', _.bind(this.cancel, this));
        this.context.on('all', _.bind(function(ev) {
            if (ev && ev.indexOf('mass_collection:')==0) this.checkButtons()
        }, this));
        this.selectedDashboards = this.context.get('selectedDashboards');
    },

    /**
     * @inheritdoc
     */
    render: function() {
        try {
            var defaultLayout = this.closestComponent('sidebar');
            if (defaultLayout && defaultLayout.isSidePaneVisible() ) {  
                defaultLayout.trigger('sidebar:toggle');  
            }
        } catch(e) {}
        this._super('render');
    },
    
    /**
     * Close drawer
     */
    cancel: function() {
        app.drawer.close();
    },
    
    /**
     * Initiate api deploy - check conditions
     */
    doDeploy: function() {
        if (this.massCollection.toJSON().length==0 || this.selectedDashboards.length==0) {
            app.alert.show('intdb', {
                level: 'error',
                messages: app.lang.get('LBL_NEED_TO_SELECT_', 'INTDB_Dashboards').replace(/%s/g, this.module.toLowerCase()),
                autoClose: true,
            });
            return;
        }
        app.alert.show('intdb', {
            level: 'confirmation',
            messages: app.lang.get('LBL_CONFIRM_DEPLOYMENT', 'INTDB_Dashboards').replace(/%s/,app.lang.get('LBL_MODULE_NAME', this.module).toLowerCase()),
            autoClose: false,
            onConfirm: _.bind(this.processDeploy, this),
            onCancel: function(){
                
            }
        });
    },
    
    /**
     * Initiate api deploy
     */
    processDeploy: function() {
        app.alert.show('intdb', {
            level: 'process',
            title: app.lang.get('LBL_DEPLOYING', 'INTDB_Dashboards'),
            autoClose: false
        });
        app.api.call('create', app.api.buildURL('INTDB_Dashboards/deploy'), {
                    module: this.module,
                    data: this.massCollection.toJSON(),
                    dashboards: this.selectedDashboards
                },
                {
                    success: function(data) {
                        app.alert.dismiss('intdb');
                        app.alert.show('intdb', {
                            level: 'success',
                            messages: app.lang.get('LBL_DEPLOY_SUCCESS', 'INTDB_Dashboards'),
                            autoClose: true
                        });
                    },
                    error: function(data) {
                        app.alert.dismiss('intdb');
                        app.alert.show('intdb', {
                            level: 'error',
                            messages: app.lang.get('LBL_DEPLOY_ERROR', 'INTDB_Dashboards'),
                            autoClose: true
                        });
                    }
                }
        );
        app.drawer.close();
    },
    
    /**
     * Show/hide Deploy button
     */
    checkButtons: function() {
        if (this.massCollection.toJSON().length) {
            $('[name=deploy_button]').removeClass('hidden');
        } else {
            $('[name=deploy_button]').addClass('hidden');
        }
    }
    

})
