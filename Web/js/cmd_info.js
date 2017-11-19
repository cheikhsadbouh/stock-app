
var TB_cmd="";

$(document).ready( function() {
    setTimeout(function () {
        if (!$.fn.DataTable.isDataTable('#dataTables_info_cmd')) {
            TB_cmd = $('#dataTables_info_cmd').DataTable({
                responsive: true,
                "autoWidth": false,
                "bFilter": false,
                "bLengthChange": false,
                "language": {
                    "zeroRecords": "zero recorddd ",
                    "emptyTable": "No data available in table  sss",
                    "info": "",
                    "sInfoEmpty": ""
                }
            });

            //saleTB.columns(5).visible( false );
            //saleTB.width("100%");
         //   saleTB.columns.adjust().draw(); // adjust column sizing and redraw
           // TB_cmd.columns.adjust().responsive.recalc();
        }
    }, 1000);


});


