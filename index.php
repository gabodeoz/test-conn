<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title></title>        
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
function realizaProceso(valorCaja1, valorCaja2){
        var parametros = {
                "valorCaja1" : valorCaja1,
                "valorCaja2" : valorCaja2
        };
        $.ajax({
                data:  parametros,
                url:   'pagina1.php',
                type:  'post',
                beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#resultado").html(response);
                }
        });
}
</script>
    
    </head>
    <body>
        <div class="content">
            <form>
            <div class="form-group">
                <label for="db_host">Server</label>
                <input id="db_host" type="text" class="form-control"  placeholder="Server IP">
            </div>
            <div class="form-group">
                <label for="db_name">Data base</label>
                <input id="db_name" type="text" class="form-control"  placeholder="Data base">
            </div>
            <div class="form-group">
                <label for="db_name">Port</label>
                <input id="db_name" type="text" class="form-control"  placeholder="Data base">
            </div>    
            <div class="form-group">
                <label for="db_user">User</label>
                <input id="db_user" type="text" class="form-control"  placeholder="Password">
            </div>
            <div class="form-group">
                <label for="db_pass">Password</label>
                <input id="db_pass" type="password" class="form-control"  placeholder="Password">
            </div>    
            <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
