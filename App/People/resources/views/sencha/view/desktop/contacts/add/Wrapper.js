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
        'Melisa.people.view.desktop.contacts.add.WrapperController'
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
                                            region: 'center',
                                            xtype: 'peoplepeopleemailsgrid'
                                        },
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
                                                        iconCls: 'x-fa fa-plus'
                                                    }
                                                ]
                                            }
                                        }
                                    ]
                                },
                                {
                                    title: 'Números telefónicos',
                                    items: [
                                        {
                                            region: 'center',
                                            xtype: 'peoplepeoplephonenumbersgrid'
                                        },
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
                                                        iconCls: 'x-fa fa-plus'
                                                    }
                                                ]
                                            }
                                        }
                                    ]
                                },
                                {
                                    title: 'Direcciones',
                                    items: [
                                        {
                                            region: 'center',
                                            xtype: 'peoplepeopleaddressesgrid'
                                        },
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
                                                        iconCls: 'x-fa fa-plus'
                                                    }
                                                ]
                                            }
                                        }
                                    ]
                                }
                            ]
                        }
                    ]
                }
            ]
        }
    ],
    bbar: {
        xtype: 'toolbardefault'
    }
    
});
