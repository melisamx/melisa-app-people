Ext.define('Melisa.people.view.desktop.states.ComboDefault', {
    extend: 'Melisa.view.desktop.ComboDefault',
    alias: 'widget.peopleStatesCombo',
    
    fieldLabel: 'Estado',
    forceSelection: true,
    bind: {
        store: '{states}',
        melisa: '{modules.statesAdd}',
        disabled: '{!modules.statesAdd.allowed}'
    },
    triggers: {
        other: {
            cls: 'x-form-trigger-default x-fa fa-plus',
            handler: 'moduleRun',
            focusOnMousedown: true
        }
    }
});
