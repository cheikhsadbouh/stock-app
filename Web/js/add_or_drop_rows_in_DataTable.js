var stockTB ;
var saleTB;
var i=1;
var index_row="none";
$(document).ready( function() {
    setTimeout(function () {
        if (!$.fn.DataTable.isDataTable('#dataTables-sale')) {
            saleTB = $('#dataTables-sale').DataTable({

                responsive: true,
                "autoWidth": false,
                "bFilter": false,"bLengthChange": false

            });
        }
    }, 3000);
});
$(document).ready( function() {


    stockTB =  $('#dataTables-example').dataTable( {

        responsive: true,
        "language": {
            "lengthMenu": 'Display <select  class="form-control input-sm" >'+
            '<option selected="selected"   value="5">5</option>'+
            '<option selected="selected" value="10">10</option>'+
            '<option value="20">20</option>'+
            '<option value="30">30</option>'+
            '<option value="40">40</option>'+
            '<option value="50">50</option>'+
            '<option value="-1">All</option>'+
            '</selectmultiple> records',
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
        "bSort": false


    } );


} );









$('table.colorchange input[type=checkbox]').click(
    function () {
        $(this).closest('tr').toggleClass("info", this.checked);

        if (!this.checked) {
            var data = $(this).val();
            var tb = data.split(',');

            console.log("is  NOT checked : " + $(this).val());

            saleTB.rows().every(function (rowIdx, tableLoop, rowLoop) {
                var data = this.data();




                if (data[0] == tb[0]) {
                    console.log("index_row value before : "+index_row);
                    index_row=rowIdx;
                    console.log("index_row value after  :"+index_row);
                } else {
                    // i=1;
                }

                // ... do something with data(), or this.node(), etc
            });

            if(index_row != "none"){
                console.log("index_row is   :"+index_row);
                saleTB.row(index_row)
                    .remove()
                    .draw();
                index_row="none";
            }else{
                console.log("index_row is null :"+index_row );
            }
            // saleTB.draw();
        } else {
            console.log("is checked :" + $(this).val());
            var data = $(this).val();
            var tb = data.split(',');

            if (!$.fn.DataTable.isDataTable('#dataTables-sale')) {
                saleTB = $('#dataTables-sale').DataTable({

                    responsive: true,
                    "autoWidth": false,
                    "bFilter": false,"bLengthChange": false

                });


            }
            saleTB.rows().every(function (rowIdx, tableLoop, rowLoop) {
                var data = this.data();

                //var after_split=data.split(',');
                if (data[0] == tb[0]) {
                    i = 0;

                }else{
                    // i=1;
                }
                console.log('data[0] :' + data[0]+"     tb[0]  :"+tb[0] +" i : "+i);
                // ... do something with data(), or this.node(), etc
            });
            //  var row = $('#MyDataTable').dataTable().fnGetNodes(rowIndex);
            // $(row).attr( 'id', 'MyUniqueID' );

            if (i == 1) {

                console.log('new row  added');
                saleTB.row.add([
                    '<div class="form-group"> ' +
                    '<input class="form-control col-sm-12" type=text value="'+tb[0]+'" />' +
                    '</div>',
                    tb[0],
                    tb[1],
                    tb[2],
                    tb[3],
                    'ss'



                ]).draw(false);
                //  return false;

            } else {
                console.log('already exist cannot be added');
            }
            // do your cool stuff
            i=1;
        }

        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
            $($.fn.dataTable.tables(true)).DataTable()
                .columns.adjust()
                .responsive.recalc();
        });
    });

