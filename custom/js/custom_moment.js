(function (date) {
        date.prototype.formatServerNoTZ = function() {
            return this.removeTZ(this.formatServer());
        };
        date.prototype.removeTZ = function(timeString) {
            var t = timeString.split('T');
            var date = t[0];
            if (typeof(t[1])=='undefined') return date;
            var time = t[1].split('+')[0].split('-')[0];
            return date + 'T' + time;
        };
})(SUGAR.App.date);    
