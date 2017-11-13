


$(function() {
    $("#loading").fadeOut(500, function() {
        $("#wrapper").fadeIn(1000);
        $("body").css("background-color","#607d8b");
        if (!$.fn.DataTable.isDataTable('#display_sale')) {
            stockTB = $('#display_sale').DataTable({

                responsive: true,
                "language": {
                    "lengthMenu": 'Display <select  class="form-control input-sm" >' +
                    '<option selected="selected"   value="5">5</option>' +
                    '<option selected="selected" value="10">10</option>' +
                    '<option value="20">20</option>' +
                    '<option value="30">30</option>' +
                    '<option value="40">40</option>' +
                    '<option value="50">50</option>' +
                    '<option value="-1">All</option>' +
                    '</select> records',
                    "paginate": {
                        "next": "ch",
                        "previous": "hhhh"


                    },
                    "search": "Apply",
                    "zeroRecords": "mahwnshi ",
                    "emptyTable": "No data available in table",
                    "info": "deuja _START_ to _END_ of _TOTAL_ mtrsh",
                    "sInfoFiltered": "(fil from _MAX_ total entries)",
                    "sInfoEmpty": "rt3 0 to 0 of 0 entries"
                },
                "bSort": false,
                "aLengthMenu": [[5, 10, 25, -1], [25, 50, 75, "All"]],
                "iDisplayLength": 5


            });
        }
    });
});


$(document).ready( function() {



});


