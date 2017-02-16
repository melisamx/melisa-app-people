Ext.define('Melisa.people.view.universal.contacts.add.WrapperModel', {
    extend: 'Ext.app.ViewModel',
    alias: 'viewmodel.peoplepeopleadd',
        
    stores: {
        labelsEmails: {
            remoteFilter: true,
            remoteSort: true,
            proxy: {
                type: 'ajax',
                url: '{modules.labelsEmails}',
                reader: {
                    type: 'json',
                    rootProperty: 'data'
                }
            }
        },
        labelsAddress: {
            remoteFilter: true,
            remoteSort: true,
            proxy: {
                type: 'ajax',
                url: '{modules.labelsAddress}',
                reader: {
                    type: 'json',
                    rootProperty: 'data'
                }
            }
        },
        states: {
            remoteFilter: true,
            remoteSort: true,
            proxy: {
                type: 'ajax',
                url: '{modules.states}',
                reader: {
                    type: 'json',
                    rootProperty: 'data'
                }
            }
        },
        municipalities: {
            remoteFilter: true,
            remoteSort: true,
            proxy: {
                type: 'ajax',
                url: '{modules.municipalities}',
                reader: {
                    type: 'json',
                    rootProperty: 'data'
                }
            },
            filters: [
                {
                    property: 'idState',
                    value: '{cmbStates.selection.id}'
                }
            ]
        },
        labelsPhoneNumbers: {
            remoteFilter: true,
            remoteSort: true,
            proxy: {
                type: 'ajax',
                url: '{modules.labelsPhoneNumbers}',
                reader: {
                    type: 'json',
                    rootProperty: 'data'
                }
            }
        }
    }
    
});