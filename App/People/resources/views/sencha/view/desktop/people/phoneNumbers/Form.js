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
            xtype: 'textfield',
            name: 'number',
            vtype: 'alphanum',
            fieldLabel: 'Número telefónico'
        },
        {
            xtype: 'combodefault',
            fieldLabel: 'Etiqueta',
            bind: {
                store: '{labelsPhoneNumbers}'
            }
        }
    ]
});