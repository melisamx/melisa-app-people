Ext.define('Melisa.people.view.desktop.settlements.AutoSelectMixin', {
    
    onSelectPostalCode: function(cmb, record) {
        this.autoSelectSettlement(record, true);
    },
    
    autoSelectSettlement: function(record, setSettlement) {        
        var me = this,
            view = me.getView(),
            vm = me.getViewModel(),
            cmbStates = view.down('#cmbStates'),
            cmbMunicipalities = view.down('#cmbMunicipalities'),
            states = vm.getStore('states'),
            municipalities = vm.getStore('municipalities');
    
        states.removeAll();
        municipalities.removeAll();
        states.add({
            id: record.get('idState'),
            name: record.get('state')
        });
        municipalities.add({
            id: record.get('idMunicipality'),
            name: record.get('municipality')
        });
        cmbStates.setValue(record.get('idState'));        
        cmbMunicipalities.setValue(record.get('idMunicipality'));
        
        if( setSettlement) {
            view.down('#txtColony').setValue(record.get('settlement'));
        }
    }
});