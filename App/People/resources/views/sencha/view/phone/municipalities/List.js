Ext.define('Melisa.people.view.phone.municipalities.List', {
    extend: 'Ext.dataview.List',    
    alias: 'widget.peoplemunicipalitieslist',
    
    loadingText: 'Obteniendo municipios',
    emptyText: 'No hay municipios registrados',
    hideAnimation: 'fadeOut',
    deferEmptyText: true,
    striped: true,
    onItemDisclosure: true,
    itemTpl: '{name}',
    publishes: [
        'hidden'
    ],
    bind: {
        store: '{municipalities}'
    },
    plugins: [
        {
            xclass: 'Ext.plugin.PullRefresh',
            pullText: 'Jala hacia abajo y suelta para refrescar.'
        },
        {
            xclass: 'Ext.plugin.ListPaging',
            noMoreRecordsText: 'Ho hay mas municipios',
            autoPaging: true
        }
    ],
    showAnimation: {
        type: 'slide',
        direction: 'right'
    }
});
