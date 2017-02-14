Ext.define('Melisa.people.view.desktop.contacts.phoneNumbers.Form', {
    extend: 'Ext.Container',
    alias: 'widget.peoplecontactsphonenumbersform',
    
    requires: [
        'Melisa.view.desktop.ComboDefault'
    ],
    
    layout: 'hbox',
    defaults: {
        xtype: 'textfield',
        allowBlank: false,
        flex: 1
    },
    items: [
        {
            name: 'number',
            vtype: 'alphanum',
            fieldLabel: 'Número'
        },
        {
            xtype: 'combodefault',
            fieldLabel: 'Etiqueta',
            bind: '{labelsPhoneNumbers}',
            padding: '0 0 0 10'
        }
    ]
});