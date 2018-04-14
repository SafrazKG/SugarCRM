({
    extendsFrom: 'CreateView',
    
    initialize: function(options) {
        var model = options.context?options.context.get('model'):null;
        if (model) {
            if (!model.get('date_field_c')) {
                if (options.context.parent) {
                    options.context.parent.set('_dontInit', true);
                } else {
                    options.context.set('_dontInit', true);
                }
                this.openCalendar(model);
            }
        }
        this._super('initialize', arguments);
    },
    
    openCalendar: function(model) {
        if (app.drawer.isOpening()) {
            try {
                app.drawer.closeImmediately();
            } catch(e) {
            }
        }
        setTimeout(_.bind(function() {
            this.hideInactiveDrawer();
        }, this), 200);
        app.drawer.open({
                layout: 'records-with-close',
                context: {
                    inDrawer: true,
                    oldModel: model,
                    module: 'RRAPT_Calendar',
                },
            }
        );
    },
    
    hideInactiveDrawer: function() {
        if (app.drawer.isOpening()) {
            setTimeout(_.bind(function() {
                this.hideInactiveDrawer();
            }, this), 100);
            return;
        }
        $('#drawers .inactive').css('display', 'none');
    },
})