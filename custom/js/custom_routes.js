(function(app) {
    app.events.on("router:init", function() {
        var routes = [
            {
                route: 'RRAPT_Calendar/date/:date',
                name: 'RRAPT_Calendar_date',
                callback: function(date) {
                    app.controller.loadView({
                        layout: "records",
                        module: 'RRAPT_Calendar',
                        date: date,
                    });
                }
            },
        ];
        app.router.addRoutes(routes);
    });
})(SUGAR.App);
