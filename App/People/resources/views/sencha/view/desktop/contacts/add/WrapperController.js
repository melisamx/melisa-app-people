Ext.define('Melisa.people.view.desktop.contacts.add.WrapperController', {
    extend: 'Melisa.controller.Create', 
    alias: 'controller.peoplepeopleadd',
    
    requires: [
        'Melisa.controller.Create',
        'Melisa.people.view.universal.contacts.add.WrapperController',
        'Melisa.people.view.desktop.people.emails.Form',
        'Melisa.people.view.desktop.people.addresses.Form',
        'Melisa.people.view.desktop.people.phoneNumbers.Form',
        'Melisa.people.view.desktop.people.files.Form',
        'Melisa.people.view.desktop.people.details.Window'
    ],
    
    mixins: {
        universal: 'Melisa.people.view.universal.contacts.add.WrapperController'
    },
    
    onClickBtnFloatingAddFile: function(button) {
        
        var me = this;
        
        Ext.create('widget.peopledetailswindow', {
            title: 'Agregar documento',
            viewModel: me.getViewModel(),
            items: [
                {
                    xtype: 'peoplepeoplefilesform'
                }
            ],
            listeners: {
                save: me.onAddFile,
                scope: me
            }
        }).show(button);
        
    },
    
    onClickBtnFloatingAddPhoneNumber: function(button) {
        
        var me = this;
        
        Ext.create('widget.peopledetailswindow', {
            title: 'Agregar número telefonico',
            viewModel: me.getViewModel(),
            items: [
                {
                    xtype: 'peoplepeoplephonenumbersform'
                }
            ],
            listeners: {
                save: me.onAddPhoneNumber,
                scope: me
            }
        }).show(button);
        
    },
    
    onClickBtnFloatingAddAddress: function(button) {
        
        var me = this;
        
        Ext.create('widget.peopledetailswindow', {
            title: 'Agregar dirección',
            viewModel: me.getViewModel(),
            items: [
                {
                    xtype: 'peoplepeopladdressesform'
                }
            ],
            listeners: {
                save: me.onAddAddress,
                scope: me
            }
        }).show(button);
        
    },
    
    onClickBtnFloatingAddEmail: function(button) {
        
        var me = this;
        
        Ext.create('widget.peopledetailswindow', {
            title: 'Agregar email',
            viewModel: me.getViewModel(),
            items: [
                {
                    xtype: 'peoplepeoplemailsform'
                }
            ],
            listeners: {
                save: me.onAddEmail,
                scope: me
            }
        }).show(button);
        
    },
    
    onClickActionEmailEdit: function(grid, ri, ci, action, e, record, row) {
        
        var me = this,
            window;
        
        window = Ext.create('widget.peopledetailswindow', {
            title: 'Modificar email',
            viewModel: me.getViewModel(),
            record: record,
            items: [
                {
                    xtype: 'peoplepeoplemailsform'
                }
            ],
            listeners: {
                save: me.onUpdateEmail,
                scope: me
            }
        }).show(row);
        
        window.fireEvent('loaddata', record);
        
    },
    
    onClickActionPhoneNumberEdit: function(grid, ri, ci, action, e, record, row) {
        
        var me = this,
            window;
        
        window = Ext.create('widget.peopledetailswindow', {
            title: 'Modificar número de telefono',
            viewModel: me.getViewModel(),
            record: record,
            items: [
                {
                    xtype: 'peoplepeoplephonenumbersform'
                }
            ],
            listeners: {
                save: me.onUpdatePhoneNumber,
                scope: me
            }
        }).show(row);
        
        window.fireEvent('loaddata', record);
        
    },
    
    onClickActionAddressEdit: function(grid, ri, ci, action, e, record, row) {
        
        var me = this,
            window;
        
        window = Ext.create('widget.peopledetailswindow', {
            title: 'Modificar dirección',
            viewModel: me.getViewModel(),
            record: record,
            items: [
                {
                    xtype: 'peoplepeopladdressesform'
                }
            ],
            listeners: {
                save: me.onUpdateAddress,
                scope: me
            }
        }).show(row);
        
        window.fireEvent('loaddata', record);
        
    },
        
    onClickBtnRemoveRecord: function(grid, ri, ci, action, e, record) {            
        grid.getStore().remove(record);        
    },
    
    onUpdateEmail: function(window, form) {
        
        var me = this,
            values = form.getForm().getFieldValues();
        
        values.label = form.down('combodefault').getRawValue();
        
        if( me.updateEmail(values, window.record)) {
            window.close();
        }
        
    },
    
    onUpdatePhoneNumber: function(window, form) {
        
        var me = this,
            values = form.getForm().getFieldValues();
        
        values.label = form.down('combodefault').getRawValue();
        
        if( me.updatePhoneNumber(values, window.record)) {
            window.close();
        }
        
    },
    
    onUpdateAddress: function(window, form) {
        
        var me = this,
            values = form.getForm().getFieldValues();
        
        values.label = form.down('combodefault').getRawValue();
        values.state = form.down('#cmbStates').getRawValue();
        values.municipality = form.down('#cmbMunicipalities').getRawValue();
        
        if( me.updateAddress(values, window.record)) {
            window.close();
        }
        
    },
    
    onAddFile: function(window, form) {
        
        var me = this,
            values = form.getForm().getFieldValues();
        
        if( me.addFile(values)) {
            window.close();
        }
        
    },
    
    onAddPhoneNumber: function(window, form) {
        
        var me = this,
            values = form.getForm().getFieldValues();
        
        values.label = form.down('combodefault').getRawValue();
        
        if( me.addPhoneNumber(values)) {
            window.close();
        }
        
    },
    
    onAddEmail: function(window, form) {
        
        var me = this,
            values = form.getForm().getFieldValues();
        
        values.label = form.down('combodefault').getRawValue();
        
        if( me.addEmail(values)) {
            window.close();
        }
        
    },
    
    onAddAddress: function(window, form) {
        
        var me = this,
            values = form.getForm().getFieldValues();
        
        values.label = form.down('#cmbLabels').getRawValue();
        values.state = form.down('#cmbStates').getRawValue();
        values.municipality = form.down('#cmbMunicipalities').getRawValue();
        
        if( me.addAddress(values)) {
            window.close();
        }
        
    },
        
    save: function() {
        
        var me = this;
        
        me.mixins.universal.beforeSave.call(me);
        me.callParent();
        
    }
    
});
