Ext.define('Melisa.people.view.desktop.countries.AutoSelectMixin', {
    
    autoSelectCountry: function(country) {
        var me = this,
            vm = me.getViewModel(),
            store;
        
        vm.notify();
        
        store = vm.getStore('countries');
        store.load({
            scope: me,
            callback: me.onLoadCountry,
            params: {
                query: country || 'Méx'
            }
        });
    },
    
    onLoadCountry: function(records, op, success) {        
        var me = this,
            view = me.getView();
        if( !success || Ext.isEmpty(records)) {
            return;
        }
        
        view.down('peopleCountriesCombo').select(records[0]);
    }
});