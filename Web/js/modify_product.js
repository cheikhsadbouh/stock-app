
var id_product_to_modify = 0;

function modify_product(id_product,td){
    id_product_to_modify=id_product;
    var $row = td.closest("tr");

    var i=1;
    $('#form_modify_product input').each(
        function(key, value) {

            $tds = $row.find("td:nth-child("+i+")");
            this.value=$tds.text();
            console.log(this.value);
            if(i=="1"){
                i+=2;
            }else if(i=="4"){
                i+=3;
            }else {
                i++;
            }
        });
    i=1;
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
        },


    });
    return false;
});

$('#info').on('hidden.bs.modal', function () {

    console.log('hidden event fired!');
    $('body').load("/stock-app/Web/views/admin.php");

});

