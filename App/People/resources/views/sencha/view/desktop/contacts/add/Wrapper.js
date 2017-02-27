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
    layout: {
        type: 'vbox',
        align: 'stretch'
    },
    viewModel: {
        type: 'peoplepeopleadd'
    },    
    items: [
        {
            xtype: 'peoplepeopleform'
        },
        {
            xtype: 'tabpanel',
            flex: 1,
            items: [
                {
                    title: 'Información de contacto',
                    layout: 'fit',
                    items: [
                        {
                            xtype: 'tabpanel',
                            tabPosition: 'bottom',
                            defaults: {
                                layout: 'border'
                            },
                            items: [
                                {
                                    title: 'Correos electronicos',
                                    items: [
                                        {
                                            region: 'west',
                                            width: '25%',
                                            split: true,
                                            xtype: 'peoplepeoplemailsform',
                                            bbar: {
                                                xtype: 'toolbar',
                                                items: [
                                                    '->',
                                                    {
                                                        text: 'Agregar',
                                                        iconCls: 'x-fa fa-plus',
                                                        handler: 'onClickBtnAddEmail'
                                                    }
                                                ]
                                            }
                                        },
                                        {
                                            region: 'center',
                                            xtype: 'peoplepeopleemailsgrid',
                                            bbar: null
                                        }
                                    ]
                                },
                                {
                                    title: 'Números telefónicos',
                                    items: [
                                        {
                                            region: 'west',
                                            width: '25%',
                                            split: true,
                                            xtype: 'peoplepeoplephonenumbersform',
                                            bbar: {
                                                xtype: 'toolbar',
                                                items: [
                                                    '->',
                                                    {
                                                        text: 'Agregar',
                                                        iconCls: 'x-fa fa-plus',
                                                        handler: 'onClickBtnAddPhoneNumber'
                                                    }
                                                ]
                                            }
                                        },
                                        {
                                            region: 'center',
                                            xtype: 'peoplepeoplephonenumbersgrid'
                                        }
                                    ]
                                },
                                {
                                    title: 'Direcciones',
                                    items: [
                                        {
                                            region: 'west',
                                            width: '25%',
                                            split: true,
                                            xtype: 'peoplepeopladdressesform',
                                            bbar: {
                                                xtype: 'toolbar',
                                                items: [
                                                    '->',
                                                    {
                                                        text: 'Agregar',
                                                        iconCls: 'x-fa fa-plus',
                                                        handler: 'onClickBtnAddAddress'
                                                    }
                                                ]
                                            }
                                        },
                                        {
                                            region: 'center',
                                            xtype: 'peoplepeopleaddressesgrid'
                                        }
                                    ]
                                }
                            ]
                        }
                    ]
                },
                {
                    title: 'Documentos',
                    layout: 'border',
                    items: [
                        {
                            region: 'west',
                            width: '25%',
                            split: true,
                            xtype: 'peoplepeoplefilesform',
                            bbar: {
                                xtype: 'toolbar',
                                items: [
                                    '->',
                                    {
                                        text: 'Agregar',
                                        iconCls: 'x-fa fa-plus',
                                        handler: 'onClickBtnAddDocument'
                                    }
                                ]
                            }
                        },
                        {
                            region: 'center',
                            xtype: 'peoplepeoplefilesgrid'
                        }
                    ]
                }
            ]
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
    ],
    bbar: {
        xtype: 'toolbardefault'
    }
    
});
