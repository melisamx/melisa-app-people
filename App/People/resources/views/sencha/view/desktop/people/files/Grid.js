Ext.define('Melisa.people.view.desktop.people.files.Grid', {
    extend: 'Ext.grid.Panel',
    alias: 'widget.peoplepeoplefilesgrid',
    
    bind: {
        store: '{files}'
    },
    emptyText: 'Sin documentos',
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
        }
    ],
    bbar: {
        xtype: 'pagingtoolbar',
        displayInfo: true
    },
    tbar: [
        {
            iconCls: 'x-fa fa-trash',
            handler: 'onClickBtnRemoveRecord'
        }
    ]
});
