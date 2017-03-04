Ext.define('Melisa.people.view.desktop.contacts.update.WrapperController', {
    extend: 'Melisa.people.view.desktop.contacts.add.WrapperController',
    alias: 'controller.peoplecontactsupdate',
    
    requires: [
        'Melisa.controller.AppendFields',
        'Melisa.controller.LoadData',
        'Melisa.controller.Update'
    ],
    
    mixins: {
        appendfields: 'Melisa.controller.AppendFields',
        loaddata: 'Melisa.controller.LoadData',
        update: 'Melisa.controller.Update'
    },
    
    config: {
        loadedData: false
    },
    
    onBeforeLoadData: function(event) {
        
        var me = this;
        
        if( me.getLoadedData()) {
            return false;
        }
        
        me.setLoadedData(true);
        
    },
    
    onSuccessLoadData: function (data) {
        
        var me = this,
            vm = me.getViewModel(),
            stoAddresses = vm.getStore('addresses'),
            stoEmails = vm.getStore('emails'),
            stoPhoneNumbers = vm.getStore('phoneNumbers'),
            stoFiles = vm.getStore('files');
        
        Ext.each(data.emails, function(record) {
            stoEmails.add({
                id: record.id,
                email: record.email,
                idLabel: record.idLabel,
                label: record.label.name,
                isPrimary: record.isPrimary
            });
        });
        
        Ext.each(data.addresses, function(record) {
            stoAddresses.add({
                id: record.id,
                idState: record.idState,
                idMunicipality: record.idMunicipality,
                postalCode: record.postalCode,
                street: record.street,
                colony: record.colony,
                idLabel: record.idLabel,
                label: record.label.name,
                state: record.state.name,
                municipality: record.municipality.name,
                isPrimary: record.isPrimary
            });
        });
        
        Ext.each(data.phoneNumbers, function(record) {
            stoPhoneNumbers.add({
                id: record.id,
                idLabel: record.idLabel,
                number: record.number,
                label: record.label.name,
                isPrimary: record.isPrimary
            });
        });
        
        Ext.each(data.files, function(record) {
            stoFiles.add({
                id: record.id,
                idFileType: record.idFileType,
                fileType: record.type.name,
                name: record.file.name
            });
        });
        
        me.mixins.update.onSuccessLoadData.call(me, data);
        
    },
    
    onSuccesssubmit: function(event, response, action) {
            
        Ext.GlobalEvents.fireEvent('app.people.contacts.update.success', action.result);

    }
    
});
