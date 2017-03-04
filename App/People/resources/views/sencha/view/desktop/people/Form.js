Ext.define('Melisa.people.view.desktop.people.Form', {
    extend: 'Ext.form.Panel',
    alias: 'widget.peoplepeopleform',
    
    requires: [
        'Melisa.view.desktop.ComboSex',
    ],
    
    scrollable: true,
    layout: {
        type: 'vbox',
        align: 'stretch'
    },
    defaults: {
        xtype: 'container',
        defaultType: 'textfield',
        layout: {
            type: 'hbox',
            align: 'stretch'
        },
        defaults: {
            allowBlank: false,
            flex: 1
        }
    },
    items: [
        {
            items: [
                {
                    name: 'name',
                    fieldLabel: 'Nombre(s)'
                },
                {
                    name: 'lastName',
                    fieldLabel: 'Apellidos',
                    padding: '0 10'
                },
                {
                    xtype: 'combosex',
                    name: 'sex',
                    fieldLabel: 'Sexo',
                    allowBlank: false
                }
            ]
        },
        {
            items: [
                {
                    name: 'nickName',
                    fieldLabel: 'Nombre de preferencia',
                    allowBlank: true
                },
                {
                    xtype: 'combobox',
                    name: 'idBloodType',
                    fieldLabel: 'Tipo de sangre',
                    padding: '0 10',
                    reference: 'cmbBloodTypes',
                    allowBlank: true,
                    bind: {
                        store: '{bloodTypes}'
                    }
                },
                {
                    xtype: 'datefield',
                    name: 'birthday',
                    fieldLabel: 'Fecha de nacimiento',
                    allowBlank: true
                }
            ]
        },
        {
            defaults: {
                allowBlank: true,
                flex: 1
            },
            items: [
                {
                    xtype: 'textfield',
                    name: 'nss',
                    fieldLabel: 'Número de seguridad social'
                },
                {
                    name: 'curp',
                    fieldLabel: 'CURP',
                    padding: '0 10'
                },
                {
                    name: 'rfc',
                    fieldLabel: 'RFC'
                }
            ]
        },
        {
            items: [
                {
                    xtype: 'checkbox',
                    name: 'active',
                    fieldLabel: 'Activo',
                    padding: '0 10',
                    checked: true,
                    width: 60,
                    flex: null
                },
                {
                    xtype: 'tagfield',
                    fieldLabel: 'Etiqueta',
                    name: 'labels',
                    reference: 'tagLabels',
                    allowBlank: true,
                    encodeSubmitValue: true,
                    displayField: 'name',
                    valueField: 'id',
                    bind: {
                        store: '{labelsPeople}'
                    }
                }
            ]
        }
    ]
});
