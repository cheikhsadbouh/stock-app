
var id_product_to_modify = 0;

function modify_product(id_product,td){

    id_product_to_modify=id_product;
    var $row = td.closest("tr");
    var values="";
    var $columns = $row.find('td');
    var in_value1 = document.getElementById("up1");
    var in_value2 = document.getElementById("up2");
    var in_value3 = document.getElementById("up3");
    var in_value4 = document.getElementById("up4");
    in_value1.value="1";
    in_value2.value="2";
    in_value3.value="3";
    in_value4.value="4";
    jQuery.each($columns, function(i, item) {
        values=item.innerHTML;
        console.log("i : "+i+" values   : "+values);

    });

    console.log("id_product :"+id_product);


    $("#model_modify_product").modal("show");



}




$("#submit_update_product_form").click(function(e){

    $("#form_modify_product").submit();
});


$("#form_modify_product").submit(function(e){
    e.preventDefault();
    $.ajax({
        type : 'POST',
        data: $("#form_modify_product").serialize(),
        url : '/stock-app/Metier/Metier_modify_products.php?id_product_to_modify='+id_product_to_modify,

        success : function(data){
            console.log('submit success.');


            $("#info").modal("show");


        },
        error: function (data) {
            console.log('An error occurred.');
            console.log(data);
        }


    });
    return false;
});

$('#info').on('hidden.bs.modal', function () {

    console.log('hidden event fired!');
    $('body').load("/stock-app/Web/views/admin.php");

});

/*
*
*    $.ajax({
        data: "",
        dataType: 'json',
        url : '/stock-app/Metier/test_file.php?id_product='+id_product_to_modify,
        success: function(data){
            console.log('submit success.');

            alert(" s  "+data.key1);



        },
        complete: function(data){


        },
        error: function (data) {
            console.log('An error occurred.');
            console.log(data);
        },


    });
* */

/*$(".btn-default").click(function(e) {
    var $tr = $(this).closest('tr');
    var rowData = $('#dataTables-example').DataTable().row($tr).data();

    console.log("in it ");
    console.log(rowData);
});*/


