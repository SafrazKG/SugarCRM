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
                if (this.readOnlyFields && this.readOnlyFields.length) {
                    for (var i in this.readOnlyFields) {
                        this._readOnlyFields.push(this.readOnlyFields[i]);
                    }
                    if (typeof(this.parseFields)=='function') {
                        var oldParseFields = this.parseFields;
                        this.parseFields = _.bind(function() {
                                                    for (var i in this.meta.panels) {
                                                        for (var j in this.meta.panels[i].fields) {
                                                            if (this.meta.panels[i] && this.meta.panels[i].fields[j] && this.meta.panels[i].fields[j].name && _.contains(this._readOnlyFields, this.meta.panels[i].fields[j].name)) this.meta.panels[i].fields[j].readonly = true;
                                                        }
                                                    }
                                                    oldParseFields.apply(this, arguments);
                                                }, this);
                    } else {
                        this.on('init', _.bind(function() {
                            for (var i in this.meta.panels) {
                                for (var j in this.meta.panels[i].fields) {
                                    if (this.meta.panels[i] && this.meta.panels[i].fields[j] && this.meta.panels[i].fields[j].name && _.contains(this._readOnlyFields, this.meta.panels[i].fields[j].name)) this.meta.panels[i].fields[j].readonly = true;
                                }
                            }
                        }, this));
                    }
                }
            },

        });
    });
})(SUGAR.App);
