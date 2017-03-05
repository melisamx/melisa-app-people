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
    iconCls: 'x-fa fa-plus',
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
                    iconCls: 'x-fa fa-id-badge',
                    tooltip: 'Datos basicos'
                },
                {
                    xtype: 'peoplepeopleemailsgrid',
                    tooltip: 'Correos electronicos',
                    iconCls: 'x-fa fa-envelope-o'
                },
                {
                    xtype: 'peoplepeoplephonenumbersgrid',
                    tooltip: 'Números telefónicos',
                    iconCls: 'x-fa fa-phone'
                },
                {
                    xtype: 'peoplepeopleaddressesgrid',
                    tooltip: 'Direcciones',
                    iconCls: 'x-fa fa-address-card-o'
                },
                {
                    xtype: 'peoplepeoplefilesgrid',
                    tooltip: 'Documentos',
                    iconCls: 'x-fa fa-file-text-o'
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
