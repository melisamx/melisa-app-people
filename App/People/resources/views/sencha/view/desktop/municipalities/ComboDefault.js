Ext.define('Melisa.people.view.desktop.municipalities.ComboDefault', {
    extend: 'Melisa.view.desktop.ComboDefault',
    alias: 'widget.peopleMunicipalitiesCombo',
    
    name: 'idMunicipality',
    fieldLabel: 'Población, Municipio o Delegación',
    forceSelection: true,
    pageSize: 25,
    listConfig: {
        emptyText: 'Municipio no encontrado'
    },
    bind: {
        store: '{municipalities}',
        melisa: '{modules.municipalitiesAdd}',
        disabled: '{!modules.municipalitiesAdd.allowed}'
    }/*,
    triggers: {
        other: {
            cls: 'x-form-trigger-default x-fa fa-plus',
            handler: 'moduleRun',
            focusOnMousedown: true
        }
    }*/
});
