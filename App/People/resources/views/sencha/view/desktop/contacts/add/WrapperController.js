Ext.define('Melisa.people.view.desktop.contacts.add.WrapperController', {
    extend: 'Melisa.controller.Create', 
    alias: 'controller.peoplepeopleadd',
    
    requires: [
        'Melisa.controller.Create',
        'Melisa.people.view.universal.contacts.add.WrapperController'
    ],
    
    mixins: {
        universal: 'Melisa.people.view.universal.contacts.add.WrapperController'
    },
    
    onClickBtnRemoveRecord: function(button) {
        
        var grid = button.up('grid'),
            store = grid.getStore();
    
        store.remove(grid.getSelection());
        
    },
    
    onClickBtnAddEmail: function(button) {
        
        this.addItemDetail(button, 'addEmail');
        
    },
    
    onClickBtnAddAddress: function(button) {
        
        this.addItemDetail(button, 'addAddress');
        
    },
    
    onClickBtnAddPhoneNumber: function(button) {
        
        this.addItemDetail(button, 'addPhoneNumber');
        
    },
    
    addItemDetail: function(button, name) {
        
        var me = this,
            form = me.isValidForms(button);
    
        if( !form) {
            return;
        }
        
        if( me[name](form)) {
            form.reset();
            form.down().focus();
        }
        
    },
    
    isValidForms: function(button) {
        
        var form = button.up('form');
    
        if( !form.isValid()) {
            return false;
        }
        
        return form;
        
    },
    
    save: function() {
        
        var me = this,
            vm = me.getViewModel(),
            stoEmails = vm.getStore('emails'),
            stoPhoneNumbers = vm.getStore('phoneNumbers'),
            stoAddresses = vm.getStore('addresses'),
            txtEmails = me.lookup('txtEmails'),
            txtPhoneNumbers = me.lookup('txtPhoneNumbers'),
            txtAddresses = me.lookup('txtAddresses'),
            idEmails = [],
            idAddresses = [],
            idPhoneNumbers = [];
        
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
        
        me.callParent();
        
    }
    
});
