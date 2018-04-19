
({
    extendsFrom: 'RecordlistView',
    
    events: {
        'click a.intdb_showdashboards': 'showDashboards',
        'click .toggle-all-dashboards a[name=massupdate_button_users]': 'deployUsers',
        'click .toggle-all-dashboards a[name=massupdate_button_roles]': 'deployRoles',
        'click .toggle-all-dashboards a[name=massupdate_button_teams]': 'deployTeams',
        'click [class*="orderBy"]':'setOrderBy',
        'click .intdb_expandall': 'toggleAll'
    },
    
    /**
     * Track did we set massupdate events
     *
     * @property bool
     */
    moduleDataLoaded: false,

    /**
     * List of selected dashboards
     *
     * @property array
     */
    selectedDashboards: [],
    
    /**
     * Are users dashboards shown?
     *
     * @property bool
     */
    expanded: false,
    
    
    /**
     * CSS class for expand button - expanded state
     *
     * @property string
     */
    expandedCSS: 'fa-minus',

    /**
     * CSS class for expand button - not expanded state
     *
     * @property string
     */
    nonExpandedCSS: 'fa-plus',
    
    /**
     * @inheritdoc
     */
    initialize: function(options) {
        Handlebars.registerHelper('partialWithData', function(bean, name, field, view, properties, context) {
            properties = properties?properties:{};
            properties.hash = properties.hash?properties.hash:{};
            properties.hash[field] = Handlebars.helpers.fieldValue(bean, field);
            properties.hash.view = view.view?view.view:view;
            properties.hash.select = [{
                type: 'fieldset',
                fields: [
                    {
                        type: 'actionmenu',
                        css_class: 'toggle-all-dashboards',
                        disable_select_all_alert: true,
                        buttons: [
                            {
                                label: 'LBL_DEPLOY_TO_USERS',
                                name: 'massupdate_button_users',
                                primary: true,
                                type: 'button'
                            },
                            {
                                label: 'LBL_DEPLOY_TO_ROLE',
                                name: 'massupdate_button_roles',
                                type: 'button'
                            },
                            {
                                label: 'LBL_DEPLOY_TO_TEAM',
                                name: 'massupdate_button_teams',
                                type: 'button'
                            },
                        ]
                    }
                ],
                value: false,
                sortable: false
            }];
            return Handlebars.helpers.partial(name, view.templateComponent?view.templateComponent:view, properties);
        });
        Handlebars.registerHelper('intdbExpandCSS', function(view) {
            if (view.expanded) {
                return view.expandedCSS+' intdb_expanded';
            } else {
                return view.nonExpandedCSS+' intdb_expanded';
            }
        });
        this._super('initialize', [options]);
        this.once('render', _.bind(this.doFetch, this));
    },
    
    /*
     * Fetch collection
     */
    doFetch: function() {
        this.collection.fetch();
    },

    /**
     * @inheritdoc
     */
    _initializeMetadata: function() {
        var meta = app.metadata.getView("INTDB_Dashboards", 'list') || {};
        var metaUsers = app.metadata.getView('Users', 'list') || {};
        for (var i in metaUsers.panels[0].fields) {
            var f = _.clone(metaUsers.panels[0].fields[i]);
            if (f.name=='email') f.sortable = false;
            meta.panels[0].fields.push(f)
        }
        return meta;
    },
    
    /**
     * @inheritdoc
     */
    addActions:function () {
        if (this.actionsAdded) return;
        this._super("addActions");
        this.rightColumns = [];
        this.actionsAdded = true;
    },
    
    /**
     * @inheritdoc
     */
    render: function() {
        this.expanded = app.cache.get('intdb_expanded');
        if (_.isUndefined(this.expanded)) {
            this.expanded = false;
            app.cache.set('intdb_expanded', this.expanded);
        }
        try {
            var defaultLayout = this.closestComponent('sidebar');
            if (defaultLayout && defaultLayout.isSidePaneVisible() ) {  
                defaultLayout.trigger('sidebar:toggle');  
            }
        } catch(e) {}
        this._super('render');
        this.selectedDashboards = [];
        this.renderDrop();
        if (!this.moduleDataLoaded) {
            this.moduleDataLoaded = true;
            this.context.on('intdb:mass_collection:add', _.bind(this.massAdd,this));
            this.context.on('intdb:mass_collection:add:all', _.bind(this.massAddAll,this));
            this.context.on('intdb:mass_collection:remove', _.bind(this.massRemove,this));
            this.context.on('intdb:mass_collection:remove:all', _.bind(this.massRemoveAll,this));
            $('[data-action=refreshList]').trigger('click');
        }
    },
    
    /**
     * Show user's dasboards
     *
     * @param ev object click event
     */
    showDashboards: function(ev) {
        var id = ev.currentTarget.dataset.id;
        var i = $(ev.currentTarget).find('i');
        var visible = i.hasClass(this.expandedCSS);
        if (!visible) {
            i.removeClass(this.nonExpandedCSS).addClass(this.expandedCSS);
            this.showUsersDashboards(id);
        } else {
            i.addClass(this.nonExpandedCSS).removeClass(this.expandedCSS);
            this.hideUsersDashboards(id);
        }
    },
    
    /**
     * Open deploy drawer for users
     */
    deployUsers: function() {
        if (!this.selectedDashboards.length) {
            app.alert.show('intdb', {
                level: 'error',
                messages: 'LBL_NEED_TO_SELECT_DASHBOARDS',
                autoClose: true
            });
            return;
        }
        app.drawer.open({
                layout: 'intdb-list',
                context: {
                    module: 'Users',
                    selectedDashboards: _.clone(this.selectedDashboards)
                }
            },
            _.bind(function() {
               
            }, this)
        );
    },
    
    /**
     * Open deploy drawer for roles
     */
    deployRoles: function() {
        if (!this.selectedDashboards.length) {
            app.alert.show('intdb', {
                level: 'error',
                messages: 'LBL_NEED_TO_SELECT_DASHBOARDS',
                autoClose: true
            });
            return;
        }
        app.drawer.open({
                layout: 'intdb-list',
                context: {
                    module: 'ACLRoles',
                    selectedDashboards: _.clone(this.selectedDashboards)
                }
            },
            _.bind(function() {
               
            }, this)
        );
    },
    
    /**
     * Open deploy drawer for teams
     */
    deployTeams: function() {
        if (!this.selectedDashboards.length) {
            app.alert.show('intdb', {
                level: 'error',
                messages: 'LBL_NEED_TO_SELECT_DASHBOARDS',
                autoClose: true
            });
            return;
        }
        app.drawer.open({
                layout: 'intdb-list',
                context: {
                    module: 'Teams',
                    selectedDashboards: _.clone(this.selectedDashboards)
                }
            },
            _.bind(function() {
               
            }, this)
        );
    },
    
    /**
     * Toggle all users dashboards
     */
    toggleAll: function(ev) {
        this.expanded = !this.expanded;
        app.cache.set('intdb_expanded', this.expanded);
        if (!this.expanded) {
            $(ev.currentTarget).find('i').removeClass(this.expandedCSS).addClass(this.nonExpandedCSS);
            $('.users_dashboards_row').hide();
            $('.intdb_expanded').removeClass(this.expandedCSS).addClass(this.nonExpandedCSS);
        } else {
            $(ev.currentTarget).find('i').addClass(this.expandedCSS).removeClass(this.nonExpandedCSS);
            $('.users_dashboards_row').show();
            $('.intdb_expanded').addClass(this.expandedCSS).removeClass(this.nonExpandedCSS)
        }
    },
    
    /**
     * Show user's dashboards
     *
     * @param id string User's id
     */
    showUsersDashboards: function(id) {
        var el = $('#user_dashboards_'+id);
        el.show();
    },
        
    /**
     * Hide user's dashboards
     *
     * @param id string User's id
     */
    hideUsersDashboards: function(id) {
        var el = $('#user_dashboards_'+id);
        el.hide();
    },

    /**
     * @inheritdoc
     */
    registerShortcuts: function() {
        return;
    },
    
    /**
     * Mass collection override - add all user's dashboards
     *
     * @param el DOM element
     */
    massAddAll: function(el) {
        var that = this;
        this.selectedDashboards = [];
        $(el).closest('.users_dashboards_row').find('[data-check=one]').each(function() {
            that.massAdd($(this))
        });
    },

    /**
     * Mass collection override - add one user's dashboards
     *
     * @param el DOM element
     */
    massAdd: function(el) {
        el.prop('checked', true);
        this.selectedDashboards.push($(el).closest('.intdb_dashboard_row').attr('data-id'));
        this.renderDrop();
    },
    
    /**
     * Mass collection override - remove all user's dashboards
     *
     * @param el DOM element
     */
    massRemoveAll: function(el) {
        var that = this;
        $(el).closest('.users_dashboards_row').find('[data-check=one]').each(function() {
            that.massRemove($(this))
        });
    },

    /**
     * Mass collection override - remove one user's dashboards
     *
     * @param el DOM element
     */
    massRemove: function(el) {
        el.prop('checked', false);
        this.selectedDashboards = _.without(this.selectedDashboards, $(el).closest('.intdb_dashboard_row').attr('data-id'));
        this.renderDrop();
    },
    
    /**
     * Mass collection override - rendering mass update dropdown
     */
    renderDrop: function() {
        var dd = $('.users_dashboards_row').find('.dropdown-toggle');
        if (this.selectedDashboards.length) {
            dd.removeClass('disabled');
        } else {
            dd.addClass('disabled');
        }
    },

})
