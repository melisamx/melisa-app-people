Ext.define('Melisa.people.view.desktop.people.phoneNumbers.Grid', {
    extend: 'Ext.grid.Panel',
    alias: 'widget.peoplepeoplephonenumbersgrid',
    
    emptyText: 'Sin numeros telefonicos',
    bind: {
        store: '{phoneNumbers}'
    },
    columns: [
        {
            text: 'Numero',
            dataIndex: 'number',
            flex: 1
        },
        {
            text: 'Etiqueta',
            dataIndex: 'label',
            flex: 1
        },
        {
            xtype: 'booleancolumn',
            text: 'Primario',
            trueText: 'Si',
            falseText: 'No',
            dataIndex: 'isPrimary',
            width: 100
        },
        {
            xtype:'actioncolumn',
            width: 100,
            items: [
                {
                    iconCls: 'x-fa fa-pencil',
                    tooltip: 'Modificar',
                    handler: 'onClickActionPhoneNumberEdit'
                },
                {
                    iconCls: 'x-fa fa-trash',
                    tooltip: 'Eliminar',
                    handler: 'onClickBtnRemoveRecord'
                }
            ]
        }
    ],
    plugins: [
        {
            ptype: 'floatingbutton',
            configButton: {
                handler: 'onClickBtnFloatingAddPhoneNumber',
                iconCls: 'x-fa fa-plus',
                scale: 'large'
            }
        }
    ]
});
