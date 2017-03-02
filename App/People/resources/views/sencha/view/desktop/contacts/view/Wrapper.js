Ext.define('Melisa.people.view.desktop.contacts.view.Wrapper', {
    extend: 'Melisa.view.desktop.wrapper.Default',
    
    requires: [
        'Melisa.core.Module',
        'Melisa.people.view.desktop.contacts.view.Grid',
        'Melisa.people.view.universal.contacts.view.WrapperModel',
        'Melisa.people.view.desktop.contacts.view.WrapperController'
    ],
    
    mixins: [
        'Melisa.core.Module'
    ],
    
    reference: 'wrapper',
    layout: 'border',
    cls: 'app-people-contacts-view',
    controller: 'peoplecontactsview',
    viewModel: 'peoplecontactsview',
    items: [
        {
            region: 'center',
            layout: 'card',
            items: [
                {
                    xtype: 'peoplecontactsview'
                }
            ]
        },
        {
            region: 'west',
            layout: 'border',
            width: 300,
            split: true,
            items: [
                {
                    region: 'north',
                    xtype: 'treelist',
                    ui: 'navigation',
                    bind: '{filters}',
                    reference: 'treFilters',
                    defaults: {
                        indent: 15
                    },
                    listeners: {
                        selectionchange: 'onSelectionchangeFilters'
                    }
                },
                {
                    region: 'center',
                    layout: 'accordion',
                    items: [
                        {
                            title: 'Etiquetas',
                            layout: 'fit',
                            items: [
                                {
                                    xtype: 'treelist',
                                    ui: 'navigation',
                                    reference: 'treLabels',
                                    bind: {
                                        store: '{labelsContacts}'
                                    },
                                    defaults: {
                                        indent: 15
                                    },
                                    listeners: {
                                        selectionchange: 'onSelectionchangeLabel'
                                    }
                                }
                            ]
                        }
                    ]
                }
            ]
        }
    ],
    listeners: {
        render: function() {
            this.down('peoplecontactsview').setViewModel(this.getViewModel());
        }
    }
    
});
