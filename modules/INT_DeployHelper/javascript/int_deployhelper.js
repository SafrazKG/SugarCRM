(function (app) {
    app.events.on('app:init', function () {
        window.INT_DEPLOY_HELPER = {
            rebuildRoles: function() {
                App.alert.show('int_deploy_helper', {
                    level: 'process',
                    autoClose: false
                });
                App.api.call('read', App.api.buildURL('INT_DeployHelper', 'rebuildRoles'), {}, {
                    success: function(data) {
                        App.alert.dismiss('int_deploy_helper');
                        var messages = 'Roles rebuild done.<br>';
                        messages += '<b>Roles:</b><ul>';
                        for (var i in data.roles) {
                            messages += '<li>'+data.roles[i];
                            if (!_.isUndefined(data.fields[data.roles[i]])) {
                                messages += '(' + data.fields[data.roles[i]].join(', ') + ')';
                            }
                            messages += '</li>';
                        }
                        messages += "</ul>";
                        App.alert.show('int_deploy_helper', {
                            level: 'success',
                            messages: messages,
                            autoClose: false
                        });
                    },
                    error: function() {
                        App.alert.dismiss('int_deploy_helper');
                        App.alert.show('int_deploy_helper', {
                            level: 'error',
                            messages: 'Please reload page',
                            autoClose: false
                        });
                    },
                })
            },
            storeCustomFields: function() {
                App.alert.show('int_deploy_helper', {
                    level: 'process',
                    autoClose: false
                });
                App.api.call('create', App.api.buildURL('INT_DeployHelper', 'storeCustomFields'), {}, {
                    success: function(data) {
                        App.alert.dismiss('int_deploy_helper');
                        var messages = 'fields_meta_data stored to filesystem';
                        App.alert.show('int_deploy_helper', {
                            level: 'success',
                            messages: messages,
                            autoClose: false
                        });
                    },
                    error: function() {
                        App.alert.dismiss('int_deploy_helper');
                        App.alert.show('int_deploy_helper', {
                            level: 'error',
                            messages: 'Please reload page',
                            autoClose: false
                        });
                    },
                })
            },
            restoreCustomFields: function() {
                App.alert.show('int_deploy_helper', {
                    level: 'process',
                    autoClose: false
                });
                App.api.call('read', App.api.buildURL('INT_DeployHelper', 'getRestoreCustomFields'), {}, {
                    success: function(data) {
                        if (data.added.length || data.deleted.length) {
                            App.alert.dismiss('int_deploy_helper');
                            var messages = 'These fields will be <b>added/updated</b>: ' + data.added.join(',') + '<br>';
                            messages += 'These fields will be <b>deleted</b>:' + data.deleted.join(',') + '<br>';
                            messages += '<b>Proceed?</b>';
                            App.alert.show('int_deploy_helper', {
                                level: 'confirmation',
                                messages: messages,
                                autoClose: false,
                                onConfirm: function() {
                                    App.alert.dismiss('int_deploy_helper');
                                    App.alert.show('int_deploy_helper', {
                                        level: 'process',
                                        autoClose: false
                                    });
                                    App.api.call('create', App.api.buildURL('INT_DeployHelper', 'restoreCustomFields'), {}, {
                                        success: function(data) {
                                            App.alert.dismiss('int_deploy_helper');
                                            var messages = 'fields_meta_data stored to filesystem.<br>';
                                            messages += '<b>Added/Updated fields_meta_data:</b><ul>';
                                            for (var i in data.added) {
                                                messages += '<li>'+data.added[i]+'</li>';
                                            }
                                            messages += "</ul>";
                                            messages += '<b>Deleted fields_meta_data:</b><ul>';
                                            for (var i in data.deleted) {
                                                messages += '<li>'+data.deleted[i]+'</li>';
                                            }
                                            messages += "</ul>";
                                            if (data.deleted.length) messages += 'Deleted fields are saved in custom/Extension/application/Ext/ CustomFields/deleted_fields_meta_data.php'
                                            App.alert.show('int_deploy_helper', {
                                                level: 'success',
                                                messages: messages,
                                                autoClose: false
                                            });
                                        },
                                        error: function() {
                                            App.alert.dismiss('int_deploy_helper');
                                            App.alert.show('int_deploy_helper', {
                                                level: 'error',
                                                messages: 'Please reload page',
                                                autoClose: false
                                            });
                                        },
                                    });
                                },
                                onCancel: function() {}
                            });
                        } else {
                            App.alert.dismiss('int_deploy_helper');
                            App.alert.show('int_deploy_helper', {
                                level: 'info',
                                messages: 'No changes required.',
                                autoClose: false
                            });
                        }
                    },
                    error: function() {
                        App.alert.dismiss('int_deploy_helper');
                        App.alert.show('int_deploy_helper', {
                            level: 'error',
                            messages: 'Please reload page',
                            autoClose: false
                        });
                    },
                });
                
            },
            restoreRequiredAccounts: function() {
                App.alert.show('int_deploy_helper', {
                    level: 'process',
                    autoClose: false
                });
                App.api.call('create', App.api.buildURL('INT_DeployHelper', 'restoreRequireAccounts'), {}, {
                    success: function(data) {
                        App.alert.dismiss('int_deploy_helper');
                        var messages = 'Set "require_accounts" in config_override to: <b>'+data.requires+'</b><br><br>';
                        messages += '<b>Updated views:</b><ul>';
                        for (var i in data.views) {
                            messages += '<li>'+data.views[i]+'</li>';
                        }
                        messages += "</ul>";
                        messages += '<b>Updated subpanels:</b><ul>';
                        for (var i in data.subpanels) {
                            messages += '<li>'+data.subpanels[i]+'</li>';
                        }
                        messages += "</ul>";
                        App.alert.show('int_deploy_helper', {
                            level: 'success',
                            messages: messages,
                            autoClose: false
                        });
                    },
                    error: function() {
                        App.alert.dismiss('int_deploy_helper');
                        App.alert.show('int_deploy_helper', {
                            level: 'error',
                            messages: 'Please reload page',
                            autoClose: false
                        });
                    },
                });
                
            },
            storeMiscData: function() {
                App.alert.show('int_deploy_helper', {
                    level: 'process',
                    autoClose: false
                });
                App.api.call('create', App.api.buildURL('INT_DeployHelper', 'storeMiscData'), {}, {
                    success: function(data) {
                        App.alert.dismiss('int_deploy_helper');
                        var messages = 'Reports, Dashboards, Process Definitions and Email templates stored to filesystem';
                        App.alert.show('int_deploy_helper', {
                            level: 'success',
                            messages: messages,
                            autoClose: false
                        });
                    },
                    error: function() {
                        App.alert.dismiss('int_deploy_helper');
                        App.alert.show('int_deploy_helper', {
                            level: 'error',
                            messages: 'Please reload page',
                            autoClose: false
                        });
                    },
                })
            },
            restoreMiscData: function() {
                App.alert.show('int_deploy_helper', {
                    level: 'process',
                    autoClose: false
                });
                App.api.call('create', App.api.buildURL('INT_DeployHelper', 'restoreMiscData'), {}, {
                    success: function(data) {
                        App.alert.dismiss('int_deploy_helper');
                        var messages = 'Reports, Dashboards, Process Definitions and Email templates restored from filesystem';
                        App.alert.show('int_deploy_helper', {
                            level: 'success',
                            messages: messages,
                            autoClose: false
                        });
                    },
                    error: function() {
                        App.alert.dismiss('int_deploy_helper');
                        App.alert.show('int_deploy_helper', {
                            level: 'error',
                            messages: 'Please reload page',
                            autoClose: false
                        });
                    },
                })
            },
        }
    })
})(SUGAR.App);
