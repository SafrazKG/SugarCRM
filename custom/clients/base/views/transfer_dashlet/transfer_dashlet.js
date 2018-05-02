/**
 * Transfer dashlet js controller.
 * User for showing transfer module info.
 * More info in issue RR-86.
 */
({
    plugins: ['Dashlet'],

    loadData: function (options) {

        // Check if model is defined
        if(_.isUndefined(this.model)) {
            return;
        }

        app.api.call(
            'read',
            app.api.buildURL('abc_Transfers', 'read', {id : this.model.id}),
            {},
            {
                success: _.bind(function(data) {
                    this.account          = this.getModelValue(data, 'accounts_abc_transfers_1_name');
                    this.property         = this.getModelValue(data, 'resort_c');
                    this.transfer         = this.getModelValue(data, 'name');
                    this.docsReceivedDate = this.getModelValue(data, 'docs_received_date_c');
                    this.estoppelEdocDate = this.getModelValue(data, 'estoppel_edoc_c');
                    this.invetoryDate     = this.getModelValue(data, 'invetory_edoc_c');
                    this.transferEdocDate = this.getModelValue(data, 'transfer_edoc_c');
                    this.status           = this.getModelValue(data, 'status_hidden_c');
                    this.actualDates      = {
                        estoppelCompletion  : this.getModelValue(data, 'estoppel_completion_c'),
                        invertoryCompletion : this.getModelValue(data, 'invertory_completion_c'),
                        transferCompletion  : this.getModelValue(data, 'transfer_completion_c')
                    };

                    var date         = new Date();
                    var receivedDate = new Date(this.docsReceivedDate);
                    var msPerDay     = 24 * 3600 * 1000;
                    this.daysCount   = Math.floor((date - receivedDate) / msPerDay);

                    if (isNaN(this.daysCount)) {
                        this.daysCount = 0;
                    }

                    this.render();
                }, this),
                error: function() {}
            }
        );
    },

    getModelValue: function(object, param) {
        if (object.hasOwnProperty(param) && object[param].length > 0) {
            return object[param];
        } else {
            return 'Not set!';
        }
    }
})
