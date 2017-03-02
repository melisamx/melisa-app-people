Ext.define('Melisa.people.view.universal.contacts.add.WrapperController', {
    
    addFile: function(form) {
        
        var me = this,
            vm = me.getViewModel(),
            values = form.getValues(),
            store = vm.getStore('files');
        
        if( Ext.isEmpty(values.idFile) || Ext.isEmpty(values.idFileType)) {
            return false;
        }
        
        if( store.findRecord('idFile', values.idFile)) {
            me.showError('Atención', 'Documento repetido');
            return false;
        }
        
        store.add({
            idFile: values.idFile,
            idFileType: values.idFileType,
            fileType: values.fileType,
            name: values.fileName
        });
        
        return true;
        
    },
    
    addAddress: function(form) {
        
        var me = this,
            vm = me.getViewModel(),
            values = form.getForm().getFieldValues(),
            store = vm.getStore('addresses');
        
        if( Ext.isEmpty(values.street) || Ext.isEmpty(values.idState)
             || Ext.isEmpty(values.idMunicipality)) {
            return false;
        }
        
        if( store.findRecord('street', values.street)) {
            me.showError('Atención', 'Dirección repetida');
            return false;
        }
        
        store.add({
            street: values.street,
            postalCode: values.postalCode,
            colony: values.colony,
            idLabel: values.idLabel,
            idState: values.idState,
            idMunicipality: values.idMunicipality,
            state: me.lookup('cmbStates').getRawValue(),
            municipality: me.lookup('cmbMunicipalities').getRawValue(),
            label: me.lookup('cmbLabelsAddresses').getRawValue()
        });
        
        return true;
        
    },
    
    addPhoneNumber: function(form) {
        
        var me = this,
            vm = me.getViewModel(),
            values = form.getForm().getFieldValues(),
            store = vm.getStore('phoneNumbers');
        
        if( Ext.isEmpty(values.number)) {
            return false;
        }
        
        if( store.findRecord('number', values.number)) {
            me.showError('Atención', 'Número telefonico repetido');
            return false;
        }
        
        store.add({
            number: values.number,
            idLabel: values.idLabel,
            label: form.down('combodefault').getRawValue()
        });
        
        return true;
        
    },
    
    addEmail: function(form) {
        
        var me = this,
            vm = me.getViewModel(),
            values = form.getForm().getFieldValues(),
            stoEmails = vm.getStore('emails');
        
        if( Ext.isEmpty(values.email)) {
            return false;
        }
        
        if( stoEmails.findRecord('email', values.email)) {
            me.showError('Atención', 'Correo repetido');
            return false;
        }
        
        stoEmails.add({
            email: values.email,
            idLabel: values.idLabel,
            label: form.down('combodefault').getRawValue()
        });
        
        return true;
        
    },
    
    beforeSave: function() {
        
        var me = this,
            vm = me.getViewModel(),
            stoEmails = vm.getStore('emails'),
            stoPhoneNumbers = vm.getStore('phoneNumbers'),
            stoAddresses = vm.getStore('addresses'),
            stoFiles = vm.getStore('files'),
            txtEmails = me.lookup('txtEmails'),
            txtPhoneNumbers = me.lookup('txtPhoneNumbers'),
            txtAddresses = me.lookup('txtAddresses'),
            txtFiles = me.lookup('txtFiles'),
            idEmails = [],
            idAddresses = [],
            idPhoneNumbers = [],
            idFiles = [];
        
        stoEmails.each(function(record) {            
            idEmails.push({
                email: record.get('email'),
                idLabel: record.get('idLabel')
            });            
        });
        
        stoPhoneNumbers.each(function(record) {            
            idPhoneNumbers.push({
                number: record.get('number'),
                idLabel: record.get('idLabel')
            });            
        });
        
        stoFiles.each(function(record) {            
            idFiles.push({
                idFile: record.get('idFile'),
                idFileType: record.get('idFileType')
            });            
        });
        
        stoAddresses.each(function(record) {            
            idAddresses.push({
                street: record.get('street'),
                idState: record.get('idState'),
                idMunicipality: record.get('idMunicipality'),
                postalCode: record.get('postalCode'),
                colony: record.get('colony'),
                idLabel: record.get('idLabel')
            });
        });
        
        txtEmails.setValue(Ext.encode(idEmails));
        txtPhoneNumbers.setValue(Ext.encode(idPhoneNumbers));
        txtAddresses.setValue(Ext.encode(idAddresses));
        txtFiles.setValue(Ext.encode(idFiles));
        
    }
    
});
