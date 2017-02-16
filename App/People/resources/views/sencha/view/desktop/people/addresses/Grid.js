Ext.define('Melisa.people.view.desktop.people.addresses.Grid', {
    extend: 'Ext.grid.Panel',
    alias: 'widget.peoplepeopleaddressesgrid',
    
    emptyText: 'Sin domicilios',
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
        }
    ],
    bbar: {
        xtype: 'pagingtoolbar',
        displayInfo: true
    }
});
