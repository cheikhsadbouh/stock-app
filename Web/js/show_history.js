
var Id=0;
function show_history(id) {
    Id=id;

    $.ajax({
        type : 'POST',
        data: {"id":id},
        url : '/stock-app/Metier/Metier_get_history.php',

        success : function(data){
            var n =JSON.parse(data);
            console.log(n);

          //  $("#info").modal("show");

        },
        error: function (data) {
            console.log('An error occurred.');
            console.log(data);
        }


    });

}