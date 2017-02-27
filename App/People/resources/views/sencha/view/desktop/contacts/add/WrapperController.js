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
    
    listeners: {
        selectfiledocument: 'onSelectDocument'
    },
    
    onSelectDocument: function(record) {
        
        var me = this,
            txtFile = me.lookup('txtFile'),
            txtFileName = me.lookup('txtFileName');
    
        txtFile.setValue(record.get('id'));
        txtFileName.setValue(record.get('name'));
        
    },
    
    onLoadedDocumentSelect: function(module, options) {
        
        module.fireEvent('loaddata', this, 'selectfiledocument', {}, options.launcher);
        
    },
    
    onClickBtnAddDocument: function(button) {
        this.addItemDetail(button, 'addFile');
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
        
        var me = this;
        
        me.mixins.universal.beforeSave.call(me);
        me.callParent();
        
    }
    
});
