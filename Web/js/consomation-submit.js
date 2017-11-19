
$(document).ready(function() {




    $("#con-sub").click(function(e){
    var check = true;


    if($("#amounts").val()!=""){
        $("#amounts").style.borderColor= "#d9534f" ;


    }else {
        $("#amounts").style.borderColor="#5bc0de" ;
        check = false;
    }

//-------------------------------------------------

    if($("#comment").val()!=""){
        $("#comment").style.borderColor= "#d9534f" ;


    }else {
        $("#comment").style.borderColor="#5bc0de" ;
        check = false;
    }

//-------------------------------------------------
    if($("#time").val()!=""){
        $("#time").style.borderColor= "#d9534f" ;


    }else {
        $("#time").style.borderColor="#5bc0de" ;
        check = false;
    }

    if(check){

    }

    check = true;
});



$("#form-consumation").submit(function(e){
    e.preventDefault();
    $.ajax({
        type : 'POST',
        data: $("#form-consumation").serialize(),
        url : '/stock-app/Metier/Metier_new_cmd.php',
        // url : '/stock-app/Metier/test_file.php',

        success : function(data){
            console.log('submit success.');
           // $("#info").modal("show");

        },
        error: function (data) {
            console.log('An error occurred.');
            console.log(data);
        }


    });
    return false;
});


});
