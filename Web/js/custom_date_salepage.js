$('.form_datetime').datetimepicker({
    format: "dd-MM-yyyy ",
    language:  'ar',
    weekStart: 1,
    todayBtn:  0,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    forceParse: 0,
    showMeridian: 1,
    linkField: "mirror_field",
    linkFormat: "yyyy-mm-dd"

});

$('.form_datetime').datetimepicker('setStartDate', '2012-01-01');
$('.form_datetime').datetimepicker('setEndDate', '2013-01-01');

$('.form_datetime')
    .datetimepicker()
    .on('changeDate', function(ev){
       alert("change date");
    });