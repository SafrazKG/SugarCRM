({
    initialize: function() {
        this._super('initialize', arguments);
        this.once('render', _.bind(this.initCalendar, this));
    },
    
    initCalendar: function() {
        if ($('#calendar_css').length==0) {
            var headDomNode = document.getElementsByTagName("head")[0];
            var cssNode = document.createElement('link');
            cssNode.type = 'text/css';
            cssNode.rel = 'stylesheet';
            cssNode.href = 'custom/css/fullcalendar.min.css';
            cssNode.media = 'screen';
            cssNode.id = 'calendar_css';
            headDomNode.appendChild(cssNode);
        }
        $('#calendar').fullCalendar({});
    },
})