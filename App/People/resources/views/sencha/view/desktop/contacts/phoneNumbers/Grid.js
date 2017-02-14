Ext.define('Melisa.people.view.desktop.contacts.phoneNumbers.Grid', {
    extend: 'Ext.grid.Panel',
    alias: 'widget.peoplecontactsphonenumbersgrid',
    
    emptyText: 'Sin numeros telefonicos',
    columns: [
        {
            text: 'Numero',
            dataIndex: 'numero',
            flex: 1
        },
        {
            text: 'Etiqueta',
            dataIndex: 'label',
            flex: 1
        }
    ],
    bbar: {
        xtype: 'pagingtoolbar',
        displayInfo: true
    }
});
