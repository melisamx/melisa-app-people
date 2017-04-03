Ext.define('Melisa.people.view.phone.states.List', {
    extend: 'Ext.dataview.List',    
    alias: 'widget.peoplestateslist',
    reference: 'lisStates',
    
    loadingText: 'Obteniendo estados',
    emptyText: 'No hay estados registrados',
    hideAnimation: 'fadeOut',
    deferEmptyText: true,
    striped: true,
    onItemDisclosure: true,
    itemTpl: '{name}',
    publishes: [
        'hidden'
    ],
    bind: {
        store: '{states}'
    },
    plugins: [
        {
            xclass: 'Ext.plugin.PullRefresh',
            pullText: 'Jala hacia abajo y suelta para refrescar.'
        },
        {
            xclass: 'Ext.plugin.ListPaging',
            noMoreRecordsText: 'Ho hay mas estados',
            autoPaging: true
        }
    ],
    showAnimation: {
        type: 'slide',
        direction: 'right'
    }
});
