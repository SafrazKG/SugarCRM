/**
 * Disposition list dashlet controller
 */
({
    /**
     * The plugins used by this view.
     */
    plugins: ['Dashlet'],
    /**
     * Last entered record flag
     */
    flag: null,
    /**
     * Values used for offset
     */
    prev_offset: null,
    offsets: [],
    
    /**
     * @inheritdoc
     */
    initialize: function(options) {
        this._super('initialize', [options]);
        this.previousDisposition = this.model.get('disposition_type_c');
        // React on disposition_type_c field change on Lead record view
        this.model.on('change:disposition_type_c', this.refreshDashlet, this);
        
        this.orderBy = {
            fieldName: 'date_modified',
            direction: 'desc'
        };
        this.offset = null;
        this.offsets[this.model.id] = [-2];
    },
    
    /**
     * Events triggered from hbs
     */
    events: {
        'click [class*="orderBy"]':'setOrderBy',
        'click [class="page"]': 'fetchPage',
    },
    
    /**
     * Override
     */
    loadData: function (options) {
        var self = this;
        // Setup api call params
        this.params = {
            'order_by': this.orderBy.fieldName + ':' + this.orderBy.direction,
            'max_num': 20,
            'offset': this.offset,
        };
        // Fields to be displayed in hbs
        this.displayedFields = [
            {value: 'Time and Date', orderField: 'time_and_date_c'},
            {value: 'Type', orderField: 'disposition_type_c'},
            {value: 'Disposition', orderField: 'disposition_c'},
            {value: 'Sub Disposition', orderField: 'sub_disposition_c'},
        ];
		
        if (this.meta.config) {
            return;
        }
        
        // Fetch related records from leads dispositions relationship 
        var url = app.api.buildURL('Leads/'+this.model.id+'/link/leads_rrdis_dispositions_1', null, null, this.params);
        app.api.call('read', url, null, {  
                success: _.bind(function(data) {
                            
                            /* Pull last entered record from data
                             * order_by is set to date_modified:desc on first api call,
                             * after set flag for making this one time action
                             */
                            if (self.flag == null) {
                                self.last = data.records[0];
                                self.flag = 1;
                            }
                            elementIndex = null;
                            deleteLast = false;
                            _.each(data.records, function(record){
                                // Find index of last entered record and set flag for removal
                                if (record.id == self.last.id) {
                                    elementIndex = data.records.indexOf(record);
                                    deleteLast = true;
                                }
                                // Format timedate
                                record.formatedDate = self.formatDate(record.time_and_date_c);
                            }, this);
                            // Setup next_offset and prev_offset values for hbs logic recognition
                            self.next_offset = data.next_offset;
                            self.setupPreviousOffset(self.next_offset);
                            // Bind records
                            self.records = data.records;
                            // Remove Last entered record from records array
                            if (deleteLast == true) {
                                self.records.splice(elementIndex, 1);
                            }
                            
                            self.render();
                }, this),
                error: _.bind(function(error){
                            console.log(error);
                }, this),
        });
    },
    
    /**
     * Setup prev_offset value used for custom pagination
     * @param nex_offset int
     */
    setupPreviousOffset: function(next_offset) {
        // Clear offset cache from previous Leads
        for (var key in this.offsets) {
            if (this.offsets.hasOwnProperty(key)) {
                if(key != this.model.id) {
                    delete this.offsets[key];
                }
            }
        }
        // Cache next_offset values for current page orientation
        if (!this.offsets[this.model.id].includes(next_offset)) {
            this.offsets[this.model.id].push(next_offset);
        }
        // Assign value to prev_offset based on current next_offset value
        nextIndex = this.offsets[this.model.id].indexOf(next_offset);
        this.prev_offset = this.offsets[this.model.id][nextIndex-2];
        // Deal with exceptions
        if (!this.prev_offset) {
            this.prev_offset = 0;
        }
        if (this.prev_offset == -2) {
            this.prev_offset = null;
        }
    },
    
    /**
     * Fetch page based on value passed from event
     * @param event Event
     */
    fetchPage: function(event) {
        var eventTarget, direction;
        var self = this;
        
        eventTarget = self.$(event.currentTarget);
        direction = eventTarget.data('action');
        // Switch passed values and assign value to fetch offset
        switch (direction) {
            case 'next':
                this.offset = this.next_offset;
                break;
            case 'prev':
                this.offset = this.prev_offset;
                break;
        }
        this.loadData();
    },
    
    /**
     * Format date to match requirements
     * @param timedate string
     */
    formatDate: function(timedate) {
        var utcMoment = moment(timedate).format("YYYY-MM-DD HH:mm");
        var formatedDate = SUGAR.App.date.UTCtoLocalTime(utcMoment);
        return formatedDate;   
    },
    
    /**
     * Setup order_by param for api call
     * based on passed values from event
     * @param event Event
     */
    setOrderBy: function(event) {
        var eventTarget, orderBy;
        var self = this;

        eventTarget = self.$(event.currentTarget);

        orderBy = eventTarget.data('orderby');

        if (orderBy === self.orderBy.fieldName) {
            self.orderBy.direction = self.orderBy.direction === 'desc' ? 'asc' : 'desc';
        } else {
            self.orderBy.fieldName = orderBy;
            self.orderBy.direction = 'desc';
        }
        // We need first page to be displayed so reset offset
        this.offset = null;
        this.offsets[this.model.id] = [-2];
        this.loadData();
    },
    
    /**
     * Reload dashlet upon new entry from Lead record view
     */
    refreshDashlet: function() {
        // Check if disposition_type_c field on Lead record view is cleared
        if (this.model.get('disposition_type_c') == this.previousDisposition) {
            // Clear all relevant params (for update on last entry)
            this.flag = null;
            this.offset = null;
            this.orderBy = {
                fieldName: 'date_modified',
                direction: 'desc'
            };
            this.offsets[this.model.id] = [-2];
            this.loadData();
        }
    },
})