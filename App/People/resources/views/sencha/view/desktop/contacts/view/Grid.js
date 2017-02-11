Ext.define('Melisa.people.view.desktop.contacts.view.Grid', {
    extend: 'Ext.grid.Panel',
    alias: 'widget.peoplecontactsview',
    
    requires: [
        'Melisa.ux.grid.Filters',
        'Melisa.ux.confirmation.Button'
    ],
    
    emptyText: 'No hay contactos registrados',
    deferEmptyText: true,
    reference: 'grid',
    bind: {
        store: '{contacts}'
    },
    columns: [
        {
            dataIndex: 'id',
            text: 'Id',
            hidden: true
        },
        {
            dataIndex: 'name',
            text: 'Nombre',
            flex: 1
        },
        {
            dataIndex: 'email',
            text: 'Correo electronico',
            flex: 1
        },
        {
            dataIndex: 'phoneNumber',
            text: 'Numero telefonico',
            flex: 1
        },
        {
            xtype: 'booleancolumn',
            text: 'Activo',
            dataIndex: 'active',
            trueText: 'Si',
            falseText: 'No',
            align: 'center',
            width: 180
        },
        {
            dataIndex: 'cratedAt',
            text: 'Fecha creación',
            flex: 1
        },
        {
            dataIndex: 'updatedAt',
            text: 'Fecha modificación',
            flex: 1,
            hidden: true
        }
    ],
    selModel: {
        selType: 'checkboxmodel'
    },
    tbar: [
        {
            text: 'Agregar',
            iconCls: 'x-fa fa-plus',
            bind: {
                melisa: '{modules.add}',
                hidden: '{!modules.add.allowed}'
            },
            listeners: {
                click: 'moduleRun'
            }
        },
        {
            text: 'Eliminar',
            iconCls: 'x-fa fa-trash',
            bind: {
                melisa: '{modules.delete}',
                hidden: '{!modules.delete.allowed}',
                disabled: '{!grid.selection}'
            },
            plugins: {
                ptype: 'buttonconfirmation'
            }
        }
    ],
    bbar: {
        xtype: 'pagingtoolbar',
        displayInfo: true
    },
    plugins: [
        {
            ptype: 'autofilters',
            filters: {
                nombre: {
                    operator: 'like'
                }
            },
            filtersIgnore: [
                'id',
                'cratedAt',
                'updatedAt'
            ]
        }
    ]
    
});
