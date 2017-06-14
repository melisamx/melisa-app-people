Ext.define('Melisa.people.view.desktop.municipalities.ComboDefault', {
    extend: 'Melisa.view.desktop.ComboDefault',
    alias: 'widget.peopleMunicipalitiesCombo',
    
    fieldLabel: 'Municipio',
    forceSelection: true,
    bind: {
        store: '{municipalities}',
        melisa: '{modules.municipalitiesAdd}',
        disabled: '{!modules.municipalitiesAdd.allowed}'
    },
    triggers: {
        other: {
            cls: 'x-form-trigger-default x-fa fa-plus',
            handler: 'moduleRun',
            focusOnMousedown: true
        }
    }
});
