Ext.define('Melisa.people.view.universal.contacts.add.WrapperModel', {
    extend: 'Ext.app.ViewModel',
    alias: 'viewmodel.peoplepeopleadd',
        
    stores: {
        files: {
            proxy: {
                type: 'memory'
            }
        },
        addresses: {
            proxy: {
                type: 'memory'
            }
        },
        emails: {
            proxy: {
                type: 'memory'
            }
        },
        phoneNumbers: {
            proxy: {
                type: 'memory'
            }
        },
        labelsPeople: {
            remoteFilter: true,
            remoteSort: true,
            proxy: {
                type: 'ajax',
                url: '{modules.labelsPeople}',
                reader: {
                    type: 'json',
                    rootProperty: 'data'
                }
            }
        },
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
        labelsAddresses: {
            remoteFilter: true,
            remoteSort: true,
            proxy: {
                type: 'ajax',
                url: '{modules.labelsAddresses}',
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
        },
        bloodTypes: {
            remoteFilter: true,
            remoteSort: true,
            proxy: {
                type: 'ajax',
                url: '{modules.bloodTypes}',
                reader: {
                    type: 'json',
                    rootProperty: 'data'
                }
            }
        },
        filesTypes: {
            remoteFilter: true,
            remoteSort: true,
            proxy: {
                type: 'ajax',
                url: '{modules.filesTypes}',
                reader: {
                    type: 'json',
                    rootProperty: 'data'
                }
            }
        }
    }
    
});