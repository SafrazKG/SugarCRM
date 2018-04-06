(function (app) {
    app.ScheduleRun = function(moment, callback, context) {
        if (!moment._isAMomentObject) throw('Not a moment object.');
        if (_.isUndefined(context)) context = window;
        var timeout = moment.unix() - app.date().unix();
        return setTimeout(_.bind(callback, context), timeout);
    };
})(SUGAR.App);
