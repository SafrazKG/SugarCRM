({
    extendsFrom: 'CreateView',
    
    initialize: function(options) {
        var model = options.context?options.context.get('model'):null;
        if (model) {
            if (!model.get('date_field_c')) {
                this.context.parent.set('_dontInit', true);
                this.openCalendar(model);
            }
        }
        this._super('initialize', arguments);
    },
    
    openCalendar: function(model) {
        if (app.drawer.isClosing()) {
            setTimeout(_.bind(function() {
                this.openCalendar(model);
            }, this), 200);
            return;
        }
        if (app.drawer.isOpening()) {
            setTimeout(_.bind(function() {
                this.openCalendar(model);
            }, this), 200);
            app.drawer.close();
            return;
        }
        app.drawer.open({
                layout: 'records-with-close',
                context: {
                    oldModel: model,
                    module: 'RRAPT_Calendar',
                },
            }
        );
    }
})