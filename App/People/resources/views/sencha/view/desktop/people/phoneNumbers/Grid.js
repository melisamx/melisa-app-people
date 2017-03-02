Ext.define('Melisa.people.view.desktop.people.phoneNumbers.Grid', {
    extend: 'Ext.grid.Panel',
    alias: 'widget.peoplepeoplephonenumbersgrid',
    
    bind: {
        store: '{phoneNumbers}'
    },
    emptyText: 'Sin numeros telefonicos',
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
