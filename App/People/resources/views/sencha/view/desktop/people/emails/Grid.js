Ext.define('Melisa.people.view.desktop.people.emails.Grid', {
    extend: 'Ext.grid.Panel',
    alias: 'widget.peoplepeopleemailsgrid',
    
    requires: [
        'Melisa.ux.FloatingButton'
    ],
    
    emptyText: 'Sin correos electronicos',
    bind: {
        store: '{emails}'
    },
    columns: [
        {
            text: 'Correo electronico',
            dataIndex: 'email',
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
                    handler: 'onClickActionEmailEdit'
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
                handler: 'onClickBtnFloatingAddEmail',
                iconCls: 'x-fa fa-plus',
                scale: 'large'
            }
        }
    ]
    
});
