Ext.define('Melisa.people.view.desktop.contacts.emails.Grid', {
    extend: 'Ext.grid.Panel',
    alias: 'widget.peoplecontactsemailsgrid',
    
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
        }
    ],
    bbar: {
        xtype: 'pagingtoolbar',
        displayInfo: true
    }
});
