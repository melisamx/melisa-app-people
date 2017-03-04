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
            stoFiles = vm.getStore('files'),
            stoLabelsPeople,
            idLabels = [];
        
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
                idFile: record.idFile,
                fileType: record.type.name,
                name: record.file.name
            });
        });
        
        if( data.bloodType) {
            vm.getStore('bloodTypes').add({
                id: data.idBloodType,
                name: data.bloodType.name
            });
        }
        
        me.mixins.update.onSuccessLoadData.call(me, data);
        
        if( data.labels) {
            
            stoLabelsPeople = vm.getStore('labelsPeople');
            Ext.each(data.labels, function(record) {
                idLabels.push(record.idLabel);
                stoLabelsPeople.add({
                    id: record.idLabel,
                    name: record.label.name,
                });
            });            
            me.lookup('tagLabels').setValue(idLabels.toString());
            
        }
        
    },
    
    onSuccesssubmit: function(event, response, action) {
            
        Ext.GlobalEvents.fireEvent('app.people.contacts.update.success', action.result);

    },
    
    onClickActionFileEdit: function(grid, ri, ci, action, e, record, row) {
        
        var me = this,
            store = me.getViewModel().getStore('filesTypes');
        
        store.add({
            id: record.get('idFileType'),
            name: record.get('fileType')
        });
        
        me.callParent(arguments);
        
    },
    
    onClickActionEmailEdit: function(grid, ri, ci, action, e, record, row) {
        
        var me = this,
            store = me.getViewModel().getStore('labelsEmails');
        
        store.add({
            id: record.get('idLabel'),
            name: record.get('label')
        });
        
        me.callParent(arguments);
        
    },    
    
    onClickActionPhoneNumberEdit: function(grid, ri, ci, action, e, record, row) {
        
        var me = this,
            store = me.getViewModel().getStore('labelsPhoneNumbers');
        
        store.add({
            id: record.get('idLabel'),
            name: record.get('label')
        });
        
        me.callParent(arguments);
        
    },    
    
    onClickActionAddressEdit: function(grid, ri, ci, action, e, record, row) {
        
        var me = this,
            vm = me.getViewModel(),
            stoStates = vm.getStore('states'),
            stoLabelsAddresses = vm.getStore('labelsAddresses'),
            window;
        
        stoStates.add({
            id: record.get('idState'),
            name: record.get('state')
        });
        stoLabelsAddresses.add({
            id: record.get('idLabel'),
            name: record.get('label')
        });
        
        window = me.callParent(arguments);
        window.down('#cmbStates').select(record.get('idState'));
        
        /* necesary create store */
        vm.set('cmbStates.selection.id', record.get('idState'));
        vm.notify();
        
        vm.getStore('municipalities').add({
            id: record.get('idMunicipality'),
            name: record.get('municipality')
        });
        window.down('#cmbMunicipalities').select(record.get('idMunicipality'));
        
    }
    
});
