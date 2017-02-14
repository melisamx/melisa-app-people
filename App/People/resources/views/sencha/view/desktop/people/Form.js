Ext.define('Melisa.people.view.desktop.people.Form', {
    extend: 'Ext.Container',
    alias: 'widget.peoplepeopleform',
    
    layout: 'column',
    minWidth: 610,
    defaults: {
        xtype: 'container',
        defaultType: 'textfield',
        style: 'width: 50%',
        defaults: {
            allowBlank: false,
            width: '100%'
        }
    },
    items: [
        {
            items: [
                {
                    name: 'name',
                    fieldLabel: 'Nombre(s)'
                },
                {
                    name: 'lastName',
                    fieldLabel: 'Apellidos'
                }
            ]
        },
        {
            padding: '0 0 0 10',
            items: [
                {
                    name: 'nickName',
                    fieldLabel: 'Nombre de preferencia'
                },
                {
                    xtype: 'combosex',
                    name: 'sex',
                    fieldLabel: 'Sexo'
                }
            ]
        }
    ]
});