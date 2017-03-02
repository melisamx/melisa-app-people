Ext.define('Melisa.people.view.desktop.people.phoneNumbers.Form', {
    extend: 'Ext.form.Panel',
    alias: 'widget.peoplepeoplephonenumbersform',
    
    requires: [
        'Melisa.view.desktop.ComboDefault'
    ],
    
    defaults: {
        anchor: '100%'
    },
    items: [
        {
            xtype: 'numberfield',
            name: 'number',
            fieldLabel: 'Número telefónico'
        },
        {
            xtype: 'combodefault',
            fieldLabel: 'Etiqueta',
            name: 'idLabel',
            submitValue: false,
            bind: {
                store: '{labelsPhoneNumbers}'
            }
        }
    ]
});