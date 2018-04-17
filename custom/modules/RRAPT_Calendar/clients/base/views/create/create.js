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
    
    hasUnsavedChanges: function() {
        var ret = this._super('hasUnsavedChanges');
        if (ret) {
            var changed = this.model.changedAttributes();
            if (!_.isUndefined(changed.name)) delete changed.name;
            for (var i in changed) {
                return true;
            }
        }
        return false;
    }
})