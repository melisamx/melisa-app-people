Ext.define('Melisa.people.view.desktop.people.emails.Form', {
    extend: 'Ext.form.Panel',
    alias: 'widget.peoplepeoplemailsform',
    
    requires: [
        'Melisa.view.desktop.ComboDefault'
    ],
    
    defaults: {
        anchor: '100%'
    },
    items: [
        {
            xtype: 'textfield',
            name: 'email',
            vtype: 'email',
            fieldLabel: 'Correo electronico'
        },
        {
            xtype: 'combodefault',
            fieldLabel: 'Etiqueta',
            bind: {
                store: '{labelsEmails}'
            }
        }
    ]
});