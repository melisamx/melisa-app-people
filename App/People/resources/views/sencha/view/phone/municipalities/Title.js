Ext.define('Melisa.people.view.phone.municipalities.Title', {
    extend: 'Ext.Toolbar',
    alias: 'widget.peoplemunicipalitiestitle',
    
    requires: [
        'Melisa.ux.field.Search'
    ],    
    
    hideAnimation: 'fadeOut',
    docked: 'top',
    layout: 'hbox',
    showAnimation: 'fadeIn',
    publishes: [
        'hidden'
    ],
    items: [
        {
            iconCls: 'x-fa fa fa-chevron-left',
            itemId: 'btnReturn',
            text: 'Municipios'
        }
    ]    
});
