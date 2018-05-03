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
                    this.inventoryDate    = this.getModelValue(data, 'inventory_edoc_c');
                    this.transferEdocDate = this.getModelValue(data, 'transfer_edoc_c');
                    this.status           = this.getModelValue(data, 'status_hidden_c');
                    this.actualDates      = {
                        estoppelCompletion  : this.getModelValue(data, 'estoppel_completion_c'),
                        inventoryCompletion : this.getModelValue(data, 'inventory_completion_c'),
                        transferCompletion  : this.getModelValue(data, 'transfer_completion_c')
                    };

                    var date         = new app.date();
                    var receivedDate = new app.date(this.docsReceivedDate);
                    this.daysCount   = date.diff(receivedDate, 'days');

                    if (isNaN(this.daysCount) || this.daysCount < 0) {
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
            var val  = object[param];
            var date = app.date(val);

            // Check if property is date value and format it as 'month/day/year'
            if (date.isValid()) {
                return date.formatUser(true);
            } else {
                return object[param];
            }
        } else {
            return 'Not set!';
        }
    }
})
