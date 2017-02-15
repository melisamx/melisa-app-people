Ext.define('Melisa.people.view.desktop.contacts.view.Wrapper', {
    extend: 'Melisa.view.desktop.wrapper.Default',
    
    requires: [
        'Melisa.core.Module',
        'Melisa.people.view.desktop.contacts.view.Grid',
        'Melisa.people.view.universal.contacts.view.WrapperModel'
    ],
    
    mixins: [
        'Melisa.core.Module'
    ],
    
    layout: 'border',
    cls: 'app-people-contacts-view',
    viewModel: {
        type: 'peoplecontactsview'
    },
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
                    defaults: {
                        indent: 15
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
                                    bind: {
                                        store: '{labelsContacts}'
                                    },
                                    defaults: {
                                        indent: 15
                                    }
                                }
                            ]
                        }
                    ]
                }
            ]
        }
    ]
    
});
