/*$(".mdy").click(function() {


    var $row = $(this).closest("tr");
    /!*    $tds = $row.find("td:nth-child("+3+")");

    $.each($tds, function() {
        console.log($(this).text());
    });*!/

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
console.log("id_product :"+$(".mdy").val());

    $("#model_modify_product").modal("show");
});*/


function modify_product(id_product,td){

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