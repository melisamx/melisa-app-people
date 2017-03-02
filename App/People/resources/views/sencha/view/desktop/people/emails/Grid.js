Ext.define('Melisa.people.view.desktop.people.emails.Grid', {
    extend: 'Ext.grid.Panel',
    alias: 'widget.peoplepeopleemailsgrid',
    
    bind: {
        store: '{emails}'
    },
    emptyText: 'Sin correos electronicos',
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
