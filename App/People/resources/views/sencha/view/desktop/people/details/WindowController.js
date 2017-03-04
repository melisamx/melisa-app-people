Ext.define('Melisa.people.view.desktop.people.details.WindowController', {
    extend: 'Melisa.core.ViewController',
    alias: 'controller.peopledetailswindow',
    
    control: {
        '#': {
            loaddata: 'onLoadData'
        }
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
    
    onLoadData: function(record) {
        
        var me = this,
            view = me.getView(),
            form = view.down('form');
    
        form.getForm().setValues(record.data);
        
    },
    
    save: function() {
        
        var me = this,
            view = me.getView(),
            form = view.down('form');
    
        if( !form.isValid()) {
            view.fireEvent('forminvalid', view, form);
        } else {
            view.fireEvent('save', view, form);
        }
        
    }
    
});
