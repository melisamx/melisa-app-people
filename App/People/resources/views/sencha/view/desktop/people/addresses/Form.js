Ext.define('Melisa.people.view.desktop.people.addresses.Form', {
    extend: 'Ext.form.Panel',
    alias: 'widget.peoplepeopladdressesform',
    
    requires: [
        'Melisa.view.desktop.ComboDefault'
    ],
    
    defaultType: 'textfield',
    defaults: {
        anchor: '100%'
    },
    items: [
        {
            name: 'street',
            fieldLabel: 'Calle'
        },
        {
            name: 'colony',
            fieldLabel: 'Colonia'
        },
        {
            xtype: 'numberfield',
            name: 'postalCode',
            fieldLabel: 'Código postal'
        },
        {
            xtype: 'combodefault',
            name: 'idState',
            reference: 'cmbStates',
            fieldLabel: 'Estado',
            bind: {
                store: '{states}'
            }
        },
        {
            xtype: 'combodefault',
            name: 'idMunicipality',
            fieldLabel: 'Municipio',
            bind: {
                store: '{municipalities}'
            }
        }
    ]
});