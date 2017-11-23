

var con_TB ="";
$(function() {
    $("#loading").fadeOut(500, function() {
        $("#wrapper").fadeIn(1000);
      //  $("body").css("background-color","#2f3c4b");
        if (!$.fn.DataTable.isDataTable('#display_debt')) {
            con_TB = $('#display_debt').DataTable({

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


$(document).ready( function() {
    setTimeout(function () {
        if (!$.fn.DataTable.isDataTable('#display_debt2')) {
            debt2_TB = $('#display_debt2').DataTable({

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
    }, 700);
});