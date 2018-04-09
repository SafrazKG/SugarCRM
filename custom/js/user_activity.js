(function (app) {
    app.UserActivity = {
        setActive: function() {
            app.api.call('read', app.api.buildURL('Users/setactive'), {}, {
                error: function() {
                    
                },
            });
        }
    };
    
    app.events.on("app:init", function () {
        app.UserActivity.setActive();
        setInterval(function() {
            app.UserActivity.setActive();
        }, 300000); // every 5 minutes
    });
})(SUGAR.App);
