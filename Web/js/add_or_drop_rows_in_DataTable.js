var stockTB="" ;
var saleTB="";
var ii=1;
var index_row="none";
var id_btn=1;

$(document).ready( function() {
    setTimeout(function () {
        if (!$.fn.DataTable.isDataTable('#dataTables-sale')) {
            saleTB = $('#dataTables-sale').DataTable({
                "columnDefs": [
                    { "aTargets": [5], "sClass": "invisible"}// here is the tricky part
                ]                ,
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
            saleTB.columns.adjust().draw(); // adjust column sizing and redraw
        }
    }, 2000);
});

$(function() {
    $("body").css("background-color","#eef1ea");
    $("#loading").fadeOut(500, function() {
      // $("body").css("background-color","#eef1ea");
        $("#wrapper").fadeIn(1000);
      //  $("body").css("background-color","#2f3c4b");
        if (!$.fn.DataTable.isDataTable('#dataTables-example')) {
           // var hCols = [0, 8,9];
            stockTB = $('#dataTables-example').DataTable({
               // "sCharSet": "utf-8",

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
                        "next": "❯",
                        "previous": "❮"


                    },
                    "search": "Apply",
                    "zeroRecords": "mahwnshi ",
                    "emptyTable": "No data available in table",
                    "info": "deuja _START_ to _END_ of _TOTAL_ mtrsh",
                    "sInfoFiltered": "(fil from _MAX_ total entries)",
                    "sInfoEmpty": "rt3 0 to 0 of 0 entries"
                },
                "bSort": false,
                "iDisplayLength": 5,
                    "dom": "<'row'<'col-sm-4'B><'col-sm-2'l><'col-sm-6'f>>" + "<'row'<'col-sm-12'tr>>" + "<'row'<'col-sm-12'pi>>",
                "paging": true,
                "autoWidth": true,
                "columnDefs": [{
                    "visible": true,
                  // "targets": hCols
                }],
                "buttons": [
                     { // default PDF and customized PDF
                        extend: 'pdfHtml5',
                         footer:true,
                         exportOptions: {
                            stripNewlines: true,
                             stripHtml: true
                         },
                         title: 'Random Persons', // report header/title
                        orientation: 'landscape',
                        pageSize: 'A4',
                         text: 'Custom PDF',
                         filename: 'dt_custom_pdf',
                         message: 'cheikne',
                         customize: function (doc) {
                             //Remove the title created by datatTables
                             doc.content.splice(0,1);
                             //Create a date string that we use in the footer. Format is dd-mm-yyyy
                             var now = new Date();
                             var jsDate = now.getDate()+'-'+(now.getMonth()+1)+'-'+now.getFullYear();
                             // Logo converted to base64
                             // var logo = getBase64FromImageUrl('https://datatables.net/media/images/logo.png');
                             // The above call should work, but not when called from codepen.io
                             // So we use a online converter and paste the string in.
                             // Done on http://codebeautify.org/image-to-base64-converter
                             // It's a LONG string scroll down to see the rest of the code !!!
                             var logo = 'data:image/jpeg;base64,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ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA=';
                             // A documentation reference can be found at
                             // https://github.com/bpampuch/pdfmake#getting-started
                             // Set page margins [left,top,right,bottom] or [horizontal,vertical]
                             // or one number for equal spread
                             // It's important to create enough space at the top for a header !!!
                             doc.pageMargins = [20,60,20,30];
                             // Set the font size fot the entire document
                             doc.defaultStyle.fontSize = 7;
                             // Set the fontsize for the table header
                             doc.defaultStyle= {
                                 font: 'Scheherazade_Regular'
                             };
                             window.pdfMake.fonts = {

                                 Scheherazade_Regular: {
                                     normal: 'Scheherazade_Regular.ttf',
                                     bold: 'Scheherazade_Regular.ttf',
                                     italics: 'Scheherazade_Regular.ttf',
                                     bolditalics: 'Scheherazade_Regular.ttf'
                                 }
                             }
                             // open the PDF in a new window

                             doc.styles.tableHeader.fontSize = 7;
                             // Create a header object with 3 columns
                             // Left side: Logo
                             // Middle: brandname
                             // Right side: A document title
                             doc['header']=(function(page, pages) {
                                 return {

                                         columns: [
                                             {
                                                 alignment: 'left',
                                                 text: ['Created on: ', { text: jsDate.toString() }]
                                             },

                                     {

                                         alignment: 'right',
                                         italics: true,
                                         text: 'متجري',
                                         fontSize: 18,
                                         margin: [20,0]

                                     },{
                                                 image: logo,
                                                 width: 24

                                             },

                                             {
                                                 alignment: 'right',
                                                 text: ['page ', { text: page.toString() },	' of ',	{ text: pages.toString() }]
                                             }
                                         ],

                                     margin: 20


                                 }
                             });
                             // Create a footer object with 2 columns
                             // Left side: report creation date
                             // Right side: current page and total pages
                             doc['footer']=(function(page, pages) {
                                 return {
                                     columns: [
                                         {
                                             alignment: 'left',
                                             text: ['Created on: ', { text: jsDate.toString() }]
                                         },
                                         {
                                             alignment: 'right',
                                             text: ['page ', { text: page.toString() },	' of ',	{ text: pages.toString() }]
                                         }
                                     ],
                                     margin: 20
                                 }
                             });
                             // Change dataTable layout (Table styling)
                             // To use predefined layouts uncomment the line below and comment the custom lines below
                             // doc.content[0].layout = 'lightHorizontalLines'; // noBorders , headerLineOnly
                             var objLayout = {};
                             objLayout['hLineWidth'] = function(i) { return .5; };
                             objLayout['vLineWidth'] = function(i) { return .5; };
                             objLayout['hLineColor'] = function(i) { return '#aaa'; };
                             objLayout['vLineColor'] = function(i) { return '#aaa'; };
                             objLayout['paddingLeft'] = function(i) { return 4; };
                             objLayout['paddingRight'] = function(i) { return 4; };
                             doc.content[0].layout = objLayout;
                         }
                    }

                    ]


            });

        }
    });
});
$(document).ready( function() {
   //table











$('table.colorchange input[type=checkbox]').click(
    function () {
        $(this).closest('tr').toggleClass("info", this.checked);

        if (!this.checked) {
            var data = $(this).val();
            var tb = data.split(',');
            var incr=1;
            console.log("is  NOT checked : " + $(this).val());
            var totals = 0;
            saleTB.rows().every(function (rowIdx, tableLoop, rowLoop) {
                var datas = this.data();


                if (datas[5] == tb[4]) {

                    //------------caculate -------------------//

                    var inm=saleTB.cell({row:rowIdx,column:4}).nodes().to$().find('input');
                  var  id_in= parseInt(inm.attr('id'))-200;

                    console.log("incr  : "+incr);
                    console.log("name_p  : "+datas[0]);
                    console.log("price_p : "+datas[1]);
                    console.log("bying_p   : "+datas[2]);
                    console.log("selected item:   "+$('#select'+id_in).find(":selected").attr('value'));

                    console.log("prodect_number"+$('#select'+id_in).find('option').last().text());
                    console.log( "new price  : "+$('#'+(id_in+200)).val());
                    //incr++;
                    console.log("-------------END----------------");


                    var isDisabled = $('#'+(id_in+200)).is(':disabled');
                    if(isDisabled){

                        console.log(" is disable");
                        console.log('datas[5] :' + datas[5]+"     tb[4]  :"+tb[4] +" incr : "+incr);

                        console.log(" total before new_P "+$('#total_pro span').html());
                        console.log(" total before operation "+totals);

                          var  string_total=$('#total_pro span').html();
                           var total_int=string_total.split('آوقية');
                           totals=parseInt(total_int);
                        console.log("total_int "+total_int);
                        var seld=$('#select'+id_in).find(":selected").attr('value');
                        console.log("total selected item  before parse :"+seld);
                         var resultat = (parseInt(datas[2])*parseInt(seld));
                        console.log("result befor op   :"+resultat);

                        console.log("totale befor op  :"+totals);

                        if( resultat > totals){ totals =  resultat - totals ;}else if( resultat < totals){totals = totals -  resultat; }else{totals=0;}
                        //totals= totals -  resultat;
                       // totals = totals * (-1);
                        console.log("total selected item after parse  :"+seld);

                        console.log("total  byin_p :"+parseInt(datas[2]));
                        console.log("total  after new _P :"+totals);
                        $('#total_pro span').html(totals+" آوقية ");
                        console.log("total :"+totals);


                    }else {

                        console.log(" is enable");
if($('#'+(id_in+200)).val() == ""){
    console.log("input empty ----------------");
    $('#'+(id_in+200)).val(datas[2]);
}
                        console.log(" total before new_P "+$('#total_pro span').html());

                        var  string_total=$('#total_pro span').html();
                        var total_int=string_total.split('آوقية');
                        totals=parseInt(total_int);
                        console.log("total_int "+totals);
                        var seld=$('#select'+id_in).find(":selected").attr('value');
                        console.log("total selected item  before parse :"+seld);
                        var resultat = (parseInt($('#'+(id_in+200)).val())*parseInt(seld));
                        if( resultat > totals){ totals =  resultat - totals ;}else if( resultat < totals){totals = totals -  resultat; }else{totals=0;}

                        console.log("total selected item after parse  :"+seld);

                        console.log("input val   byin_p :"+parseInt($('#'+(id_in+200)).val()));
                        console.log("total  after new _P :"+totals);
                        $('#total_pro span').html(totals+" آوقية ");
                        console.log("total :"+totals);

                        //console.log('datas[5] :' + datas[5]+"     tb[4]  :"+tb[4] +" incr : "+incr);

                    }




                    //-----------end calculate ---------------//

                    console.log("index_row value before : "+index_row);
                    index_row=rowIdx;
                    console.log("index_row value after  :"+index_row);


                } else {
                    // i=1;
                    console.log("is not index to delete ");
                }
                incr++;
                // ... do something with data(), or this.node(), etc
            });
            incr=1;

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
            console.log("data :"+data);

            if (!$.fn.DataTable.isDataTable('#dataTables-sale')) {
                saleTB = $('#dataTables-sale').DataTable({

                    responsive: true,
                    "autoWidth": false,
                    "bFilter": false,"bLengthChange": false

                });


            }
            saleTB.rows().every(function (rowIdx, tableLoop, rowLoop) {
                var data_sale = this.data();

                //var after_split=data.split(',');
                if (data_sale[5] == tb[4]) {
                    ii = 0;
                    console.log('data_sale[5] :' + data_sale[5]+"     tb[4]  :"+tb[4] +" i : "+i);
console.log("exit recored !");
                }else{
                    // i=1;
                    console.log("new  recored !");
                    console.log('data_sale[5] :' + data_sale[5]+"     tb[4]  :"+tb[4] +" i : "+i);

                }
                // ... do something with data(), or this.node(), etc
            });
            //  var row = $('#MyDataTable').dataTable().fnGetNodes(rowIndex);
            // $(row).attr( 'id', 'MyUniqueID' );

            if (ii == 1) {


                console.log('new row  added');
                console.log('id_btn'+id_btn);
               // console.log('data[5] :' + data_sale[5]+"     tb[4]  :"+tb[4] +" i : "+i);


    console.log(" total second "+$('#total_pro span').html());
    var total =$('#total_pro span').html();

    var e= total.split('آوقية');
    total=parseInt(e[0]);
    total= total +(tb[2]*1);
    $('#total_pro span').html(total+" آوقية ");

    console.log(" e "+e[0]);
    console.log("total :"+total);



                var select = $('<select   class="form-control input-sm ww"  id="select'+id_btn+'"></select>');

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

                    '<button type="button" id="'+id_btn+'" onclick="toggle_btn('+id_btn+','+(id_btn+200)+')" class="btn btn-lg btn-toggle " data-toggle="button" aria-pressed="false" autocomplete="off">'+
                    '<div class="handle"></div>'+
                        '</button>'+

                    '<div class="form-group"> ' +

                    '<input class="form-control col-sm-12 as"  id="'+(id_btn+200)+'" type=text placeholder="اكتب السعر الجديد"  oninput="this.value = this.value.replace(/[^0-9]/g, \'\'); this.value = this.value.replace(/(\\..*)\\./g, \'$1\');" disabled/>' +
                    ' </div> '
                    ,tb[4]



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




