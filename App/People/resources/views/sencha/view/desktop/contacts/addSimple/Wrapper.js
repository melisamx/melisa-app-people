Ext.define('Melisa.people.view.desktop.contacts.addSimple.Wrapper', {
    extend: 'Melisa.view.desktop.window.Modal',
    
    requires: [
        'Melisa.core.Module',
        'Melisa.people.view.desktop.people.Form',
        'Melisa.people.view.universal.contacts.add.WrapperModel',
        'Melisa.controller.Create'
    ],
    
    mixins: [
        'Melisa.core.Module'
    ],
    
    width: 600,
    height: 440,
    config: {
        isAutoShow: true
    },
    controller: 'create',
    viewModel: 'peoplepeopleadd',
    items: [
        {
            xtype: 'peoplepeopleform'
        }
    ],
    bbar: {
        xtype: 'toolbardefault'
    }
    
});
