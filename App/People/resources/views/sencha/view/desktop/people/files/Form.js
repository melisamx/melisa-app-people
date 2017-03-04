Ext.define('Melisa.people.view.desktop.people.files.Form', {
    extend: 'Ext.form.Panel',
    alias: 'widget.peoplepeoplefilesform',
    
    requires: [
        'Melisa.view.desktop.ComboDefault'
    ],
    
    defaults: {
        anchor: '100%'
    },
    items: [
        {
            xtype: 'textfield',
            fieldLabel: 'Seleccionar documento',
            name: 'idFile',
            reference: 'txtFile',
            itemId: 'txtFile',
            allowBlank: true,
            bind: {
                melisa: '{modules.filesSelect}',
                hidden: '{!modules.filesSelect.allowed}',
            },
            triggers: {
                foo: {
                    handler: 'moduleRun'
                }
            },
            listeners: {
                loaded: 'onLoadedDocumentSelect'
            }
        },
        {
            xtype: 'combobox',
            fieldLabel: 'Tipo de documento',
            name: 'idFileType',
            reference: 'cmbFileType',
            bind: {
                store: '{filesTypes}'
            }
        },
        {
            xtype: 'textfield',
            name: 'name',
            reference: 'txtFileName',
            itemId: 'txtFileName',
            hidden: true
        },
        {
            xtype: 'textfield',
            name: 'fileType',
            reference: 'txtFileType',
            bind: {
                value: '{cmbFileType.selection.name}'
            },
            hidden: true
        }
    ]
});