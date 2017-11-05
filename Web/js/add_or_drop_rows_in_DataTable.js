var stockTB="" ;
var saleTB="";
var ii=1;
var index_row="none";
var id_btn=1;

$(document).ready( function() {
    setTimeout(function () {
        if (!$.fn.DataTable.isDataTable('#dataTables-sale')) {
            saleTB = $('#dataTables-sale').DataTable({

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
        }
    }, 2000);
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
        "bSort": false


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

            if (ii == 1) {

                console.log('new row  added');

                var list='<select  class="form-control input-sm" >'+
                '<option selected="selected"   value="5">5</option>'+
                '<option selected="selected" value="10">10</option>'+
                '<option value="20">20</option>'+
                '<option value="30">30</option>'+
                '<option value="40">40</option>'+
                '<option value="50">50</option>'+
                '<option value="-1">All</option>'+
                '</select> records';
                var select = $('<select   class="form-control input-sm ww"  id="select'+tb[3]+'"></select>');

                for(i=1;i<=tb[3];i++){
                    var option ;
                    if(i==1){
                        option = $('<option ></option>');
                    }else{
                        option = $('<option></option>');
                    }

                    option.attr('value', i);
                    option.text(i);
                    select.append(option);

                }
                var jelm = $(select);//convert to jQuery Element
                var htmlElm = jelm[0]//convert to HTML Element

                saleTB.row.add([

                   /* '<div class="form-group"> ' +
                    '<input class="form-control col-sm-12" type=text value="'+tb[0]+'" />' +
                    '</div>',*/
                    tb[0],
                    tb[1],
                    tb[2],
                    htmlElm.outerHTML ,

                    '<button type="button" id=" '+id_btn+'" onclick="toggle_btn('+id_btn+','+(id_btn+2)+')" class="btn btn-lg btn-toggle " data-toggle="button" aria-pressed="false" autocomplete="off">'+
                    '<div class="handle"></div>'+
                        '</button>'+

                    '<div class="form-group"> ' +

                    '<input class="form-control col-sm-12 as"  id="'+(id_btn+2)+'" type=text placeholder="اكتب السعر الجديد" disabled/>' +
                    '</div> '





                ]).draw(false);
                //  return false;
               id_btn++;
            } else {
                console.log('already exist cannot be added');
            }
            // do your cool stuff
            ii=1;
        }


    });

$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
    $($.fn.dataTable.tables(true)).DataTable()
        .columns.adjust()
        .responsive.recalc();
});











} );

var state = "off";
function toggle_btn(btn,input) {

console.log("real value "+state);
    if(state == "off"){

        console.log(" is off");
        $("#"+input).removeAttr('disabled');
        state="on";
    }


    else {

        console.log(" is on");

        $("#"+input).attr('disabled', 'disabled');
        state="off";
    }

}//toggle btn





$('#sale_btn').on( 'click', function () {

    saleTB.rows().every(function (rowIdx, tableLoop, rowLoop) {
        var data = this.data();
        console.log(data);



        this.data(data);

        console.log( " select  22:   "+$('#select22 option:selected').val());
        console.log( " select  23:   "+$('#select23 :selected').val());
    });


} );

$('#select22').change(function(ev) {

    console.log( " select  22:  ddddd ");
        ev.preventDefault();
        return false;


});