(function (app) {
    app.UserActivity = {
        setActive: function() {
            app.api.call('read', app.api.buildURL('Users/setactive'), {}, {
                success: function(data) {
                    // we get notifications data if user is calendar admin otherwise empty array
                    if (data && data.length) {
                        var messages = [];
                        for (var i in data) {
                            var notification = data[i];
                            var date = app.date(notification.date);
                            var dateonly = date.format('Y-MM-DD');
                            switch (notification.type) {
                                case 1:
                                    messages.push("Primary fronter is inactive. You have 10 minutes left to assign secondary fronter on appointment: <a href='#RRAPT_Calendar/date/"+dateonly+"'>"+notification.name+"</a>");
                                    break;
                                case 2:
                                    messages.push("You have 5 minutes left to confirm appointment: <a href='#RRAPT_Calendar/date/"+dateonly+"'>"+notification.name+"</a>");
                                    break;
                            }
                        }
                        if (messages.length) {
                            app.alert.show('admin-notifications', {
                                level: 'warning',
                                messages: messages.join('<br><hr/>'),
                                autoClose: false,
                            });
                        }
                    }
                },
                error: function(error) {
                    if (error.status == 412 && !error.request.metadataRetry) {
                        app.once('app:sync:complete', function() {
                            error.request.metadataRetry = true;
                            error.request.execute(null, app.api.getMetadataHash());
                        });
                    }
                },
            });
        },
    };
    
    app.events.on("app:init", function () {
        app.UserActivity.setActive();
        var now = app.date();
        now.seconds(0);
        while (now.minute()%5) {
            now.add(1, 'minutes');
        }
        app.ScheduleRun(now, function() {
            app.UserActivity.setActive();
            setInterval(function() {
                app.UserActivity.setActive();
            }, 300000); // every 5 minutes
        });
    });
})(SUGAR.App);