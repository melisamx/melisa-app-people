Ext.define('Melisa.people.view.desktop.contacts.add.Wrapper', {
    extend: 'Ext.form.Panel',
    
    requires: [
        'Melisa.core.Module',
        'Melisa.view.desktop.ComboSex',
        'Melisa.people.view.desktop.people.Form',
        'Melisa.people.view.desktop.people.emails.Form',
        'Melisa.people.view.desktop.people.phoneNumbers.Form',
        'Melisa.people.view.desktop.people.addresses.Form',
        'Melisa.people.view.desktop.people.emails.Grid',
        'Melisa.people.view.desktop.people.phoneNumbers.Grid',
        'Melisa.people.view.desktop.people.addresses.Grid',
        'Melisa.people.view.universal.contacts.add.WrapperModel',
        'Melisa.people.view.desktop.contacts.add.WrapperController',
        'Melisa.people.view.desktop.people.files.Form',
        'Melisa.people.view.desktop.people.files.Grid'
    ],
    
    mixins: [
        'Melisa.core.Module'
    ],
    
    controller: 'peoplepeopleadd',
    viewModel: {
        type: 'peoplepeopleadd'
    },
    layout: 'fit',
    items: [
        {
            xtype: 'tabpanel',
            items: [
                {
                    xtype: 'peoplepeopleform',
                    title: 'Datos basicos'
                },
                {
                    title: 'Información de contacto',
                    layout: 'fit',
                    items: [
                        {
                            xtype: 'tabpanel',
                            tabPosition: 'bottom',
                            items: [
                                {
                                    xtype: 'peoplepeopleemailsgrid',
                                    title: 'Correos electronicos'
                                },
                                {
                                    xtype: 'peoplepeoplephonenumbersgrid',
                                    title: 'Números telefónicos'
                                },
                                {
                                    title: 'Direcciones',
                                    xtype: 'peoplepeopleaddressesgrid'
                                }
                            ]
                        }
                    ]
                },
                {
                    xtype: 'peoplepeoplefilesgrid',
                    title: 'Documentos'
                },
                {
                    xtype: 'textfield',
                    reference: 'txtEmails',
                    name: 'emails',
                    hidden: true
                },
                {
                    xtype: 'textfield',
                    reference: 'txtPhoneNumbers',
                    name: 'phoneNumbers',
                    hidden: true
                },
                {
                    xtype: 'textfield',
                    reference: 'txtAddresses',
                    name: 'addresses',
                    hidden: true
                },
                {
                    xtype: 'textfield',
                    reference: 'txtFiles',
                    name: 'files',
                    hidden: true
                }
            ]
        }
    ],
    bbar: {
        xtype: 'toolbardefault'
    }
    
});
