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
        <link rel="shortcut icon" href="assets/images/68f0.ico">
        <title>Server monitor</title>        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

        <script src="assets/js/notify.min.js"></script>
        <script src="assets/js/main.js"></script>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <!-- Fixed navbar -->
            <!-- Static navbar -->
            <nav class="navbar navbar-default">
                <div class="container-fluid">         
                    <div id="navbar" class="navbar-collapse collapse">              
                        <ul class="nav navbar-nav">
                            <li class="active"><img src="assets/images/log.png" alt="Soporte-agil" height="45" width="45">
                                Soporte &Aacute;gil</a></li>              
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Servidores <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li class="dropdown-header">Nav header</li>
                                    <li><a href="#">Separated link</a></li>
                                    <li><a href="#">One more separated link</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">              
                            <li><a href="../navbar-static-top/">Log out</a></li>              
                        </ul>
                    </div><!--/.nav-collapse -->
                </div><!--/.container-fluid -->
            </nav>
        </header>
        <main role="main" class="container" style="margin-top:4em; padding-left:8em;">                       
            <div class="row" >
                    <div class="col-md-4">
                        <div class="panel panel-default" style="padding: 20px 20px 20px 20px;">
                        <h4 class="mt-5">                             
                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>                           
                            Base de datos
                        </h4>
                        
                            <form action="core/set-host/">
                            <div class="form-group">
                                <label for="db_host">Server</label>
                                <input id="db_host" type="text" class="form-control"  placeholder="Server IP">
                                <label for="db_name">Data base</label>
                                <input id="db_name" type="text" class="form-control"  placeholder="Data base">
                                <label for="db_port">Port</label>
                                <input id="db_port" type="text" class="form-control"  placeholder="Data base">
                            </div>                            
                            <div class="form-group">
                                <label for="db_user">User</label>
                                <input id="db_user" type="text" class="form-control"  placeholder="Sesion">
                                <label for="db_pass">Password</label>
                                <input id="db_pass" type="password" class="form-control"  placeholder="Password">
                            </div>                            
                            <div class="text-right">
                            <button type="submit" class="btn btn-default">
                                <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                Guardar
                            </button>
                            </div>
                        </form>
                        <div id="loader" >
                            <img src="assets/images/loader.gif" class="rounded float-center" >
                        </div>
                            </div>
                    </div><!-- ./col -->
                    <div class="col-md-8" >
                        <div class="panel panel-default" style="padding: 20px 20px 20px 20px;">
                            <h4 class="mt-5"> 
                                <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                                Conexiones
                            </h4>                          
                        </div>
                    </div>
                </div><!-- ./row -->                  
        </main>
        <footer class="footer">



        </footer>                       
    </body>
</html>
