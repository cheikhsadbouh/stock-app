$(document).ready(function()(
    $("#submitBtn").click(function(e)({
        $("#myForm").submit();
)};
)};

$(document).ready(function()(
    $("#submitBtn").click(function(e)({
        if(validate())
{
    $("#myForm").submit();
}
)};
)};



/* copy input value to other */

$('input[name="name"]').change(function() {
    $('input[name="firstname"]').val($(this).val());
});