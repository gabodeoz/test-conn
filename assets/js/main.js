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
            url: '../core/index.php',
            type: 'post',
            timeout: (2 * 1000),
            beforeSend: function () {
                $("#loader").show();
            },
            success: function (response) {
                //$.notify(response,"success");
                $("#loader").hide();
            }
        }).done(function () {

            alert('Success!!');

        }).fail(function () {

            alert('Error!!');

        }).always(function () {

            alert('Always');

        });
        event.preventDefault();
    });
});