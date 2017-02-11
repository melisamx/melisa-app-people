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