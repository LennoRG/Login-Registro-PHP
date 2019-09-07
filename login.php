<html>
    <head>
        <meta charset="utf-8">
        <title>Web App</title>

         <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <!-- Mi css-->
    <link rel="stylesheet" type="text/css" href="assets/css/login.css" th:href="@{/css/index.css}">

    </head>
    <body>
        <div class ="modal-dialog text-center">
            <div class="col-sm-8 main-section">
                <div class="modal-content">
                    <div class="col-12 imagen-usuario">
                        <img src="assets/imagenes/logo-itch.jpg">
                    </div>
                    <form class="col-12">
                        <div class="form-group" id="usuario-group">
                            <input type="text" class ="form-control" placeholder="Usuario"/>

                        </div>
                        <div class="form-group" id="contraseña-group">
                                <input type="password" class ="form-control" placeholder="Password"/>
    
                            </div>
                            
                            <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>   Ingresar</button>
                            <div class="col-12 contraseña">
                                <a href="#">Recordar Password</a>
                            </div>

                    </form>
                   
                    <p></p>
                    <div class="col-12 registro">
                            <a class= "link" href="registro.php"> <button type="submit" class="btn btn-outline-success">Registrate</button></a>
                    </div>
                    
                    
                    
                </div>
            </div>
        </div>
    </body>
</html>