Ext.define('Melisa.people.view.universal.contacts.add.WrapperController', {
    
    addAddress: function(form) {
        
        var me = this,
            vm = me.getViewModel(),
            values = form.getValues(),
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
            values = form.getValues(),
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
            values = form.getValues(),
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
        
    }
    
});
