
var id_debt=0;
function modify_debt(name,tel,amount,reason,id) {


    $("#m_name").val(name);
    $("#m_tel").val(tel);
    $("#m_amount").val(amount);
    $("#m_reason").val(reason);


    id_debt=id;
    $("#model_modify_debt").modal("show");



}



function submit_debt_form() {


    $.ajax({
        type : 'POST',
        data: $("#form_modify_debt").serialize(),
        url : '/stock-app/Metier/Metier_modify_debt.php?id='+id_debt,

        success : function(data){
            console.log('submit success.');
            $("#info").modal("show");

        },
        error: function (data) {
            console.log('An error occurred.');
            console.log(data);
        }


    });



}