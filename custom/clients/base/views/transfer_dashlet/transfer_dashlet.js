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

        var self = this;

        app.api.call(
            'read',
            app.api.buildURL('abc_Transfers', 'read', {id : self.model.id}),
            {},
            {
                success: function(data) {
                    self.account          = self.getModelValue(data, 'accounts_abc_transfers_1_name');
                    self.property         = self.getModelValue(data, 'resort_c');
                    self.transfer         = self.getModelValue(data, 'name');
                    self.docsReceivedDate = self.getModelValue(data, 'docs_received_date_c');
                    self.estoppelEdocDate = self.getModelValue(data, 'estoppel_edoc_c');
                    self.invetoryDate     = self.getModelValue(data, 'invetory_edoc_c');
                    self.transferEdocDate = self.getModelValue(data, 'transfer_edoc_c');
                    self.status           = self.getModelValue(data, 'status_hidden_c');
                    self.actualDates      = {
                        estoppelCompletion  : self.getModelValue(data, 'estoppel_completion_c'),
                        invertoryCompletion : self.getModelValue(data, 'invertory_completion_c'),
                        transferCompletion  : self.getModelValue(data, 'transfer_completion_c')
                    };

                    var date         = new Date();
                    var receivedDate = new Date(self.docsReceivedDate);
                    var msPerDay     = 24 * 3600 * 1000;
                    self.daysCount   = Math.floor((date - receivedDate) / msPerDay);

                    if (isNaN(this.daysCount)) {
                        self.daysCount = 0;
                    }

                    self.render();
                },
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
