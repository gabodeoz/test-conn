$(document).ready(function () {
    $.notify("Bienvenido","info");
    $("#loader").hide();
    //$( "#target" ).submit(function( event ) {
    function sendData() {
        $.ajax({
            data: $("form").serialize(),
            url: $("form").attr('action'),
            type: 'post',
            beforeSend: function () {
                $("#loader").show();
            },
            success: function (response) {
                $.notify(response,"success");
                $("#loader").hide();
            }           
        });
        return false;
    }
    
    $( "form" ).submit(function( event ) {
  $.ajax({
            data: $("form").serialize(),
            url: $("form").attr('action'),
            type: 'post',
            beforeSend: function () {
                $("#loader").show();
            },
            success: function (response) {
                $.notify(response,"success");
                $("#loader").hide();
            }           
        });
            event.preventDefault();
        });
});