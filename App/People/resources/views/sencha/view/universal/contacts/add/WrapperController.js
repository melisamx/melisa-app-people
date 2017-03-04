Ext.define('Melisa.people.view.universal.contacts.add.WrapperController', {
    
    addFile: function(values) {
        
        var me = this,
            vm = me.getViewModel(),
            store = vm.getStore('files');
        
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
    
    addAddress: function(values) {
        
        var me = this,
            vm = me.getViewModel(),
            store = vm.getStore('addresses');
        
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
            isPrimary: values.isPrimary,
            idMunicipality: values.idMunicipality,
            state: values.state,
            municipality: values.municipality,
            label: values.label
        });
        
        return true;
        
    },
    
    addPhoneNumber: function(values) {
        
        var me = this,
            vm = me.getViewModel(),
            store = vm.getStore('phoneNumbers');
        
        if( store.findRecord('number', values.number)) {
            me.showError('Atención', 'Número telefonico repetido');
            return false;
        }
        
        store.add({
            number: values.number,
            idLabel: values.idLabel,
            isPrimary: values.isPrimary,
            label: values.label
        });
        
        return true;
        
    },
    
    updateEmail: function(values, lastRecord) {
        
        var me = this,
            vm = me.getViewModel(),
            store = vm.getStore('emails'),
            record;
        
        record = store.findRecord('email', values.email);
        
        if( !record) {
            lastRecord.set(values);
            return true;
        }
        
        if( record.get('id') === lastRecord.get('id')) {
            lastRecord.set(values);
            return true;
        } else {
            me.showError('Atención', 'Correo repetido');
            return false;
        }
        
    },
    
    updatePhoneNumber: function(values, lastRecord) {
        
        var me = this,
            vm = me.getViewModel(),
            store = vm.getStore('phoneNumbers'),
            record;
        
        record = store.findRecord('number', values.number);
        
        if( !record) {
            lastRecord.set(values);
            return true;
        }
        
        if( record.get('id') === lastRecord.get('id')) {
            lastRecord.set(values);
            return true;
        } else {
            me.showError('Atención', 'Número telefonico repetido');
            return false;
        }
        
    },
    
    updateAddress: function(values, lastRecord) {
        
        var me = this,
            vm = me.getViewModel(),
            store = vm.getStore('addresses'),
            record;
        
        record = store.findRecord('street', values.street);
        
        if( !record) {
            lastRecord.set(values);
            return true;
        }
        
        if( record.get('id') === lastRecord.get('id')) {
            lastRecord.set(values);
            return true;
        } else {
            me.showError('Atención', 'Dirección repetida');
            return false;
        }
        
    },
    
    addEmail: function(values) {
        
        var me = this,
            vm = me.getViewModel(),
            stoEmails = vm.getStore('emails');
        
        if( stoEmails.findRecord('email', values.email)) {
            me.showError('Atención', 'Correo repetido');
            return false;
        }
        
        stoEmails.add({
            email: values.email,
            idLabel: values.idLabel,
            isPrimary: values.isPrimary,
            label: values.label
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
                idLabel: record.get('idLabel'),
                isPrimary: record.get('isPrimary')
            });            
        });
        
        stoPhoneNumbers.each(function(record) {            
            idPhoneNumbers.push({
                number: record.get('number'),
                idLabel: record.get('idLabel'),
                isPrimary: record.get('isPrimary'),
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
                idLabel: record.get('idLabel'),
                isPrimary: record.get('isPrimary')
            });
        });
        
        txtEmails.setValue(Ext.encode(idEmails));
        txtPhoneNumbers.setValue(Ext.encode(idPhoneNumbers));
        txtAddresses.setValue(Ext.encode(idAddresses));
        txtFiles.setValue(Ext.encode(idFiles));
        
    }
    
});
