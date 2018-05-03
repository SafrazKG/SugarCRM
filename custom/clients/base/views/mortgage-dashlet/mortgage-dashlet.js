/**
 * Mortgage dashlet js controller.
 * User for showing mortgage model info.
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
            app.api.buildURL('abc_Mortgages', 'read', {id : this.model.id}),
            {},
            {
                success: _.bind(function(data) {
                    this.account          = this.getModelValue(data, 'accounts_abc_mortgages_1_name');
                    this.property         = this.getModelValue(data, 'resort_c');
                    this.mortgage         = this.getModelValue(data, 'name');
                    this.welcPackRcvDate  = this.getModelValue(data, 'welcome_packet_received_date_c');
                    this.sixMonthsMark    = this.getModelValue(data, 'six_months_mark_c');
                    this.twlMonthsMark    = this.getModelValue(data, 'twelve_months_mark_c');
                    this.tfdbEdoc         = this.getModelValue(data, 'tfdb_edoc_c');
                    this.actualTfdbDate   = this.getModelValue(data, 'actual_tfdb_date_c');
                    this.status           = this.getModelValue(data, 'status_hidden_c');

                    var date         = new app.date();
                    var receivedDate = new app.date(this.welcPackRcvDate);
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
