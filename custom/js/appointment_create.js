(function (app) {
    app.events.on("ajaxStop", function () {
        var roles = app.user.get('roles');
        if (!_.contains(roles, 'Fronter')) $('[data-route="#RRAPT_Calendar/create"]').closest('li').hide();
    });
})(SUGAR.App);
