Ext.define('Melisa.people.view.phone.countries.List', {
    extend: 'Ext.dataview.List',    
    alias: 'widget.peoplecountrieslist',
    reference: 'lisCountries',
    
    loadingText: 'Obteniendo paises',
    emptyText: 'No hay paises registrados',
    hideAnimation: 'fadeOut',
    deferEmptyText: true,
    striped: true,
    onItemDisclosure: true,
    itemTpl: '{name}',
    publishes: [
        'hidden'
    ],
    bind: {
        store: '{countries}'
    },
    plugins: [
        {
            xclass: 'Ext.plugin.PullRefresh',
            pullText: 'Jala hacia abajo y suelta para refrescar.'
        },
        {
            xclass: 'Ext.plugin.ListPaging',
            noMoreRecordsText: 'Ho hay mas paises',
            autoPaging: true
        }
    ],
    showAnimation: {
        type: 'slide',
        direction: 'right'
    }
});
