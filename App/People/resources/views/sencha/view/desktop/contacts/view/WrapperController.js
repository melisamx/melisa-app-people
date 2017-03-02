Ext.define('Melisa.people.view.desktop.contacts.view.WrapperController', {
    extend: 'Melisa.core.ViewController',
    alias: 'controller.peoplecontactsview',
    
    onSelectionchangeLabel: function(a, record) {
        
        var me = this,
            vm = me.getViewModel(),
            stoContacts = vm.getStore('contacts'),
            treFilters = me.lookup('treFilters');
    
        if( !record) {
            return;
        }
    
        stoContacts.clearFilter(true);
        stoContacts.removeAll(true);
        stoContacts.addFilter({
            property: 'idLabel',
            value: record.get('id')
        });
        
        treFilters.setSelection(null);
        
    },
    
    onSelectionchangeFilters: function(a, record) {
        
        var me = this,
            vm = me.getViewModel(),
            stoContacts = vm.getStore('contacts'),
            treLabels = me.lookup('treLabels');
    
        if( !record) {
            return;
        }
    
        stoContacts.clearFilter(true);
        stoContacts.removeAll(true);
        
        if( record.get('key') === 'all') {
            stoContacts.load();
        }
        
        treLabels.setSelection(null);
        
    }
    
});
