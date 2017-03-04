Ext.define('Melisa.people.view.desktop.people.addresses.Grid', {
    extend: 'Ext.grid.Panel',
    alias: 'widget.peoplepeopleaddressesgrid',
    
    emptyText: 'Sin direcciones',
    bind: {
        store: '{addresses}'
    },
    columns: [
        {
            text: 'Estado',
            dataIndex: 'state',
            flex: 1
        },
        {
            text: 'Municipio',
            dataIndex: 'municipality',
            flex: 1
        },
        {
            text: 'Calle',
            dataIndex: 'street',
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
                    handler: 'onClickActionAddressEdit'
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
                handler: 'onClickBtnFloatingAddAddress',
                iconCls: 'x-fa fa-plus',
                scale: 'large'
            }
        }
    ]
});
