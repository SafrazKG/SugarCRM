(function (app) {
    app.events.on('app:init', function () {
        /**
         * This plugin handles readonly fields in view
         *            
         */
        app.plugins.register('ReadonlyFields', ['view'], {
            
            _readOnlyFields: [],
            
            /**
             * @inheritdoc
             */
            onAttach: function() {
                this.on('init', _.bind(function() {
                    if (this.readOnlyFields && this.readOnlyFields.length) {
                        for (var i in this.readOnlyFields) {
                            this._readOnlyFields.push(this.readOnlyFields[i]);
                        }
                        for (var i in this.meta.panels) {
                            for (var j in this.meta.panels[i].fields) {
                                if (this.meta.panels[i] && this.meta.panels[i].fields[j] && this.meta.panels[i].fields[j].name && _.contains(this._readOnlyFields, this.meta.panels[i].fields[j].name)) this.meta.panels[i].fields[j].readonly = true;
                            }
                        }
                    }
                }, this));
            },

        });
    });
})(SUGAR.App);
