(function (app) {
    app.ScheduleRun = function(moment, callback, context) {
        if (!moment._isAMomentObject) throw('Not a moment object.');
        if (_.isUndefined(context)) context = window;
        var timeout = moment.unix() - app.date().unix();
        if (timeout<0) timeout = 0;
        return setTimeout(_.bind(callback, context), timeout*1000);
    };
})(SUGAR.App);
