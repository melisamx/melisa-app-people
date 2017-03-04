Ext.define('Melisa.people.view.desktop.people.details.Window', {
    extend: 'Melisa.view.desktop.window.Modal',
    alias: 'widget.peopledetailswindow',
    
    requires: [
        'Melisa.view.desktop.window.Modal',
        'Melisa.people.view.desktop.people.details.WindowController'
    ],
    
    controller: 'peopledetailswindow',
    layout: 'fit',
    width: 600,
    height: 400,
    bbar: {
        xtype: 'toolbardefault'
    }
    
});
