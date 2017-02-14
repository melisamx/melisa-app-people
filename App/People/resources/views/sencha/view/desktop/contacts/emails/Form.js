Ext.define('Melisa.people.view.desktop.contacts.emails.Form', {
    extend: 'Ext.Container',
    alias: 'widget.peoplecontactsemailsform',
    
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
            name: 'email',
            vtype: 'email',
            fieldLabel: 'Correo electronico'
        },
        {
            xtype: 'combodefault',
            fieldLabel: 'Etiqueta',
            bind: '{labelsEmails}',
            padding: '0 0 0 10'
        }
    ]
});