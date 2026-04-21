jQuery(document).ready(function(){
    jQuery("#indoglobal").validationEngine();
    $("#indoglobal").bind("jqv.field.result", function(event, field, errorFound, prompText){ console.log(errorFound) })
});