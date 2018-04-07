({
    className: 'module-list',
    plugins: ['Dropdown'],

    _catalog: {},

    _$moreModulesDD: undefined,

    /**
     * Only this method was changed by Inetelstream, others are just copied
     * 
     */
    _addDefaultMenus: function() {

        var moduleList = app.metadata.getModuleNames({filter: 'display_tab', access: 'read'});
        var roles = app.user.get('roles');
        if (_.contains(roles, 'Calendar Admin') || app.user.get('type')=='admin') moduleList.push('RRAPT_Closeradmin');

        _.each(moduleList, function(module) {
            this._addMenu(module, true);
        }, this);
    },

    initialize: function(options) {

        app.events.on('app:sync:complete', this._resetMenu, this);
        app.events.on('app:view:change', this.handleViewChange, this);

        this._super('initialize', [options]);

        if (this.layout) {
            this.toggleResize(true);
        }
    },

    toggleResize: function(resize) {
        this.layout.off('view:resize');
        if (resize) {
            this.layout.on('view:resize', this.resize, this);
        }
    },

    handleViewChange: function() {
        var module = app.controller.context.get('module');
        var component = app.drawer.getActive();
        if (component && component.context.get('fromRouter')) {
            module = component.context.get('module');
        }

        this._setActiveModule(module);
        this.layout.trigger('header:update:route');
    },

    _placeComponent: function(component) {
        if (component.name !== 'module-menu') {
            this.$el.append(component.el);
            return;
        }

        var tpl = app.template.getLayout(this.name + '.list', component.module) ||
            app.template.getLayout(this.name + '.list'),
            $content = $(tpl({module: component.module})).append(component.el);

        // initialize catalog if isn't initialized
        this._catalog[component.module] = this._catalog[component.module] || {};

        if (component.meta && component.meta.short) {
            $content.addClass('hidden');
            this._catalog[component.module].short = $content;
            this._$moreModulesDD.find('[data-container="overflow"]').append($content);
        } else {
            this._catalog[component.module].long = $content;
            this.$('[data-action="more-modules"]').before($content);
        }
    },

    _resetMenu: function() {

        this._components = [];
        this._catalog = {};
        this.$el.html(this.template(this, this.options));

        // cache the more-dropdown now
        this._$moreModulesDD = this.$('[data-action="more-modules"]');

        this._addDefaultMenus();
        this._setActiveModule(app.controller.context.get('module'));
        this.render();
        this.resize(this._width);
    },

    _addMenu: function(module, sticky) {
        var menu = {};

        var def = {
            view: {
                type: 'module-menu',
                sticky: sticky,
                short: false
            }
        };
        menu.long = this.createComponentFromDef(def, null, module);
        this.addComponent(menu.long, def);

        if (!sticky) {
            return menu;
        }

        def = {
            view: {
                type: 'module-menu',
                short: true
            }
        };
        menu.short = this.createComponentFromDef(def, null, module);
        this.addComponent(menu.short, def);

        return menu;
    },

    resize: function(width) {
        /**
         * Cached version of last width available for this view.
         *
         * @type {number}
         * @private
         */
        this._width = width;

        if (width <= 0 || _.isEmpty(this._components)) {
            return;
        }

        var $moduleList = this.$('[data-container=module-list]'),
            $dropdown = this._$moreModulesDD.find('[data-container=overflow]');

        if ($moduleList.outerWidth(true) >= width) {
            this.removeModulesFromList($moduleList, width);
        } else {
            this.addModulesToList($moduleList, width);
        }
        this._$moreModulesDD.toggleClass('hidden', $dropdown.children('li').not('.hidden').length === 0);
    },


    computeMinWidth: function() {
        var minWidth = 0;
        var $moduleChildren = this.$('[data-container=module-list]').children();

        // The cube
        var $first = $moduleChildren.first();
        minWidth += $first.outerWidth() + 1;

        // The current active module
        var firstModule = $moduleChildren.filter('.active').not($first);
        if (firstModule.length) {
            minWidth += firstModule.outerWidth() + 1;
        } else {
            // or the first module
            minWidth += $moduleChildren.eq(1).outerWidth() + 1;
        }

        // More Modules dropdown
        minWidth += $moduleChildren.last().outerWidth() + 1;
        return minWidth;
    },

    addModulesToList: function($modules, width) {
        var $dropdown = this._$moreModulesDD.find('[data-container=overflow]'),
            $toHide = $dropdown.children('li').not('.hidden').first(),
            currentWidth = $modules.outerWidth(true);

        while (currentWidth < width && $toHide.length > 0) {
            this.toggleModule($toHide.data('module'), true);

            $toHide = $dropdown.children('li').not('.hidden').first();

            currentWidth = $modules.outerWidth(true);
        }

        if (currentWidth >= width) {
            this.removeModulesFromList($modules, width);
        }
    },

    removeModulesFromList: function($modules, width) {

        var $toHide = this._$moreModulesDD.prev();

        while ($modules.outerWidth(true) > width && $toHide.length > 0) {
            if (!this.isRemovableModule($toHide.data('module'))) {
                $toHide = $toHide.prev();
                continue;
            }

            this.toggleModule($toHide.data('module'), false);

            $toHide = $toHide.prev();
        }
    },

    toggleModule: function(module, state) {
        // cache version only
        if (!this._catalog[module].short) {
            state = !_.isUndefined(state) ? !state : undefined;
            this._catalog[module].long.toggleClass('hidden', state);
            return this;
        }

        // keep it in sync
        var newState = this._catalog[module].short.toggleClass('hidden', state).hasClass('hidden');
        this._catalog[module].long.toggleClass('hidden', !newState);

        return this;
    },

    _setActiveModule: function(module) {

        if (_.isEmpty(this._components)) {
            // wait until we have the mega menu in place
            return this;
        }

        var tabMap = app.metadata.getModuleTabMap(),
            mappedModule = _.isUndefined(tabMap[module]) ? module : tabMap[module],
            $activeModule = this.$('[data-container=module-list]').children('.active').removeClass('active'),
            activeModule = $activeModule.data('module'),
            moduleList = app.metadata.getFullModuleList(),
            inModuleList = !_.isUndefined(moduleList[mappedModule]);

        if (this._catalog[activeModule] && !this._catalog[activeModule].short) {
            // hide the cached version only module
            this.toggleModule(activeModule, false);
        }

        // If this is a tab-mapped module, but not mapped to anything
        // or invalid mapping, don't continue execution.
        if (!mappedModule || !inModuleList) {
            return this;
        }

        if (!this._catalog[mappedModule]) {
            this._addMenu(mappedModule, false).long.render();
        }

        this._catalog[mappedModule].long.addClass('active');
        this.toggleModule(mappedModule, true);

        return this;
    },

    isRemovableModule: function(module) {
        return !(module === 'Home' || this.isActiveModule(module));
    },

    isActiveModule: function(module) {
        return this._catalog[module].long.hasClass('active');
    }

})