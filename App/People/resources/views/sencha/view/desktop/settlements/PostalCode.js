Ext.define('Melisa.people.view.desktop.settlements.PostalCode', {
    extend: 'Melisa.view.desktop.ComboDefault',
    alias: 'widget.peopleSettlementsPostalCode',
    
    fieldLabel: 'Código postal',
    itemId: 'cmbSettlements',
    name: 'postalCode',
    displayField: 'postalCode',
    valueField: 'postalCode',
    tpl: Ext.create('Ext.XTemplate',
        '<ul class="x-list-plain"><tpl for=".">',
            '<li role="option" class="x-boundlist-item">',
            '<b>{postalCode}</b> - {state} <br> {municipality} - {settlement}',
            '</li>',
        '</tpl></ul>'
    ),
    bind: {
        store: '{settlements}'
    }
});
