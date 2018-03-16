({
    extendsFrom: 'NameField',
    
    format: function(value) {
        if (!value) return value;
        if (_.isDate(value)) {
            var moment = app.date(value);
            value = moment.formatUser();
        }
        value = value.split(' ');
        return value[0];
    },
    
})
