$(document).ready(function() {

   // $('#data-table-usergroup').dataTable();

    $.extend( $.fn.dataTable.defaults, {
        autoWidth: false,
        columnDefs: [
            {orderable: true, width: '90%', targets: [0]},
            {orderable: true, width: '10%', targets: [1]}
        ],
        dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
        language: {
            search: '<span>Filter:</span> _INPUT_',
            searchPlaceholder: 'Type to filter...',
            lengthMenu: '<span>Show:</span> _MENU_',
            paginate: { 'first': 'First', 'last': 'Last', 'next': '&rarr;', 'previous': '&larr;' }
        },
        drawCallback: function () {
            $(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').addClass('dropup');
        },
        preDrawCallback: function() {
            $(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').removeClass('dropup');
        }
    });

    var lastIdx = null;
    var table = $('#data-table-usergroup').DataTable();

    $('#data-table-usergroup tbody').on('mouseover', 'td', function() {
        var colIdx = null;
        if(typeof table.cell(this).index() !== "undefined"){
            colIdx = table.cell(this).index().column;
        }

        if (colIdx !== lastIdx) {
            $(table.cells().nodes()).removeClass('active');
            $(table.column(colIdx).nodes()).addClass('active');
        }
    }).on('mouseleave', function() {
        $(table.cells().nodes()).removeClass('active');
    });

    $('.dataTables_length select').select2({
        minimumResultsForSearch: Infinity,
        width: 'auto'
    });
});
