Ext.define('Melisa.people.view.desktop.countries.ComboDefault', {
    extend: 'Melisa.view.desktop.ComboDefault',
    alias: 'widget.peopleCountriesCombo',
    
    fieldLabel: 'País',
    name: 'idCountry',
    forceSelection: true,
    listConfig: {
        emptyText: 'País no encontrado'
    },
    bind: {
        store: '{countries}',
        melisa: '{modules.countriesAdd}',
        disabled: '{!modules.countriesAdd.allowed}'
    },
    triggers: {
        other: {
            cls: 'x-form-trigger-default x-fa fa-plus',
            handler: 'moduleRun',
            focusOnMousedown: true
        }
    }
});
