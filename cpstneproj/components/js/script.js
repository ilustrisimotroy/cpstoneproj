
$(document).ready(function () {
    $(".data-table").each(function(_, table) {
        $(table).DataTable();
    })
});

$(document).ready(function () {
    $("#example").DataTable({
        'columnDefs': [
            {
               'targets': 0,
               'checkboxes': {
                  'selectRow': true
               }
            }
         ],
         'select': {
            'style': 'multi'
         },
         'order': [[1, 'asc']]
    });
});

$(document).ready(function() {
    $("#select").select2({
        theme: "classic",
        placeholder: "Select Supplier"
    });
});

