Ext.define('Melisa.people.view.desktop.contacts.update.Wrapper', {
    extend: 'Melisa.people.view.desktop.contacts.add.Wrapper',
    
    requires: [
        'Melisa.people.view.desktop.contacts.update.WrapperController',
        'Melisa.people.view.desktop.contacts.add.Wrapper'
    ],
    
    controller: 'peoplecontactsupdate',
    viewModel: {
        data: {
            mode: 'update'
        }
    },
    
    listeners: {
        loaddata: 'onLoadData',
        successloadremotedata: 'onSuccessLoadData',
        successsubmit: 'onSuccesssubmit',
        beforeloaddata: 'onBeforeLoadData'
    }
    
});
