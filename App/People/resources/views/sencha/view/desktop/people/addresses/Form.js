Ext.define('Melisa.people.view.desktop.people.addresses.Form', {
    extend: 'Ext.form.Panel',
    alias: 'widget.peoplepeopladdressesform',
    
    requires: [
        'Melisa.view.desktop.ComboDefault'
    ],
    
    defaultType: 'textfield',
    scrollable: true,
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
            itemId: 'cmbStates',
            fieldLabel: 'Estado',
            forceSelection: true,
            typeAhead: true,
            listConfig: {
                emptyText: 'Estado no encontrado'
            },
            bind: {
                store: '{states}',
                melisa: '{modules.statesAdd}',
                disabled: '{!modules.statesAdd.allowed}'
            },
            triggers: {
                other: {
                    cls: 'x-form-trigger-default x-fa fa-plus',
                    handler: 'moduleRun',
                    focusOnMousedown: true
                }
            }
        },
        {
            xtype: 'combodefault',
            name: 'idMunicipality',
            fieldLabel: 'Municipio',
            itemId: 'cmbMunicipalities',
            bind: {
                store: '{municipalities}',
                melisa: '{modules.municipalitiesAdd}',
                disabled: '{!modules.municipalitiesAdd.allowed}'
            },
            triggers: {
                other: {
                    cls: 'x-form-trigger-default x-fa fa-plus',
                    handler: 'moduleRun',
                    focusOnMousedown: true
                }
            }
        },
        {
            xtype: 'combodefault',
            fieldLabel: 'Etiqueta',
            name: 'idLabel',
            itemId: 'cmbLabels',
            bind: {
                store: '{labelsAddresses}'
            }
        },
        {
            xtype: 'checkbox',
            name: 'isPrimary',
            fieldLabel: '¿Es Primario?'
        }
    ]
});
