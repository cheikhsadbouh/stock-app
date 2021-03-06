

var con_TB ="";
$(function() {
    $("#loading").fadeOut(500, function() {
        $("#wrapper").fadeIn(1000);
       // $("body").css("background-color","#2f3c4b");
        if (!$.fn.DataTable.isDataTable('#display_user')) {
            con_TB = $('#display_user').DataTable({

                responsive: true,
                "language": {
                    "lengthMenu": 'أظهر'+' <select  class="form-control input-sm" >' +
                    '<option selected="selected"   value="3">3</option>' +
                    '<option selected="selected" value="10">10</option>' +
                    '<option value="20">20</option>' +
                    '<option value="30">30</option>' +
                    '<option value="40">40</option>' +
                    '<option value="50">50</option>' +
                    '<option value="-1">All</option>' +
                    '</select> مدخلات',
                    "paginate": {
                        "next": "❯",
                        "previous": "❮"


                    },
                    "search": "ابحث",
                    "zeroRecords": "لم يعثر على أية سجلات",
                    "emptyTable": "لا تتوفر بيانات في الجدول\n",
                    "info": "إظهار _START_ إلى _END_ من أصل _TOTAL_ مدخل",
                    "sInfoFiltered": "منتقاة من مجموع _MAX_ مُدخل",
                    "sInfoEmpty": "يعرض 0 إلى 0 من أصل 0 سجل"
                },
                "bSort": false,
                "iDisplayLength": 3,
                "dom": "<'row'<'col-sm-4'B><'col-sm-2'l><'col-sm-6'f>>" + "<'row'<'col-sm-12'tr>>" + "<'row'<'col-sm-12'pi>>",

                "paging": true,
                "autoWidth": true,
                "buttons": [
                    { // default PDF and customized PDF
                        extend: 'excelHtml5',
                        title: 'جدول المستخدمين\n', // report header/title
                        text: 'حفظ\n' +
                        'المستخدمين ',
                        filename: 'حفظ\n' +
                        '__المستخدمين',
                        message: 'cheikne',
                        className:'btn btn-info boled'


                    }

                ]


            });


        }
    });
});


$(document).ready( function() {



});


