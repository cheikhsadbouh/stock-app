

var sale_TB ="";
$(function() {
    $("#loading").fadeOut(500, function() {
        $("#wrapper").fadeIn(1000);
        $("body").css("background-color","#607d8b");
        if (!$.fn.DataTable.isDataTable('#display_sale')) {
            sale_TB = $('#display_sale').DataTable({

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
          var t =  sale_TB.row(':first').data();
         var first= t[0].split(" ");
           $("#in_put_date").val(first[0]);
            $('#date_info_sale').datetimepicker('setStartDate', first[0]);
            var e =  sale_TB.row(':last').data();
            var last= e[0].split(" ");
            $('#date_info_sale').datetimepicker('setEndDate', last[0]);
          console.log(first[0]);
            get_selected_day_sales(first[0]);

        }
    });
});


$(document).ready( function() {



});


