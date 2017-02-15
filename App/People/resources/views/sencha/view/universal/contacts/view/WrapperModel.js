Ext.define('Melisa.people.view.universal.contacts.view.WrapperModel', {
    extend: 'Ext.app.ViewModel',
    alias: 'viewmodel.peoplecontactsview',
        
    stores: {
        contacts: {
            autoLoad: true,
            remoteFilter: true,
            remoteSort: true,
            proxy: {
                type: 'ajax',
                url: '{modules.contacts}',
                reader: {
                    type: 'json',
                    rootProperty: 'data'
                }
            }
        },
        
        labelsContacts: {
            type: 'tree',
            autoLoad: true,
            remoteFilter: true,
            remoteSort: true,
            fields: ['id', {
                name: 'text',
                mapping: 'name'
            }, {
                name: 'leaf',
                defaultValue: true
            }, {
                name: 'iconCls',
                defaultValue: 'x-fa fa fa-tag'
            }],
            proxy: {
                type: 'ajax',
                url: '{modules.labelsContacts}?page=1&start=0&limit=999',
                reader: {
                    type: 'json',
                    rootProperty: 'data'
                }
            },
            root: {
                expanded: true
            }
        },
        
        filters: {
            type: 'tree',
            root: {
                expanded: true,
                children: [
                    {
                        text: 'Contactos',
                        leaf: true,
                        iconCls: 'fa fa-address-card-o'
                    },
                    {
                        text: 'Contactos frecuentes',
                        leaf: true,
                        iconCls: 'fa fa-clock-o'
                    }
                ]
            }
        }
    }
    
});