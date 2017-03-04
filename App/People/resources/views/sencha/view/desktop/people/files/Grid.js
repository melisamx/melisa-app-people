Ext.define('Melisa.people.view.desktop.people.files.Grid', {
    extend: 'Ext.grid.Panel',
    alias: 'widget.peoplepeoplefilesgrid',
    
    emptyText: 'Sin documentos',
    bind: {
        store: '{files}'
    },
    columns: [
        {
            text: 'Nombre',
            dataIndex: 'name',
            flex: 1
        },
        {
            text: 'Tipo de documento',
            dataIndex: 'fileType',
            flex: 1
        },
        {
            xtype:'actioncolumn',
            width: 100,
            items: [
                {
                    iconCls: 'x-fa fa-pencil',
                    tooltip: 'Modificar',
                    handler: 'onClickActionFileEdit'
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
                handler: 'onClickBtnFloatingAddFile',
                iconCls: 'x-fa fa-plus',
                scale: 'large'
            }
        }
    ]
});
