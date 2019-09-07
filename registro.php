
<?php

include 'bd.php';

$nombre = $_POST["nombre"];
$apPaterno = $_POST["apPaterno"];
$apMaterno = $_POST["apMaterno"];
$carrera = $_POST["carrera"];
$numControl = $_POST["numControl"];
$passwordd = $_POST["passwordd"];
$confPassword = $_POST["confPassword"];

//consulta para insertar
$insertar = "INSERT INTO usuarios(nombre, apPaterno, apMaterno, carrera, numControl, passwordd, confPassword) 
VALUES ('$nombre', '$apPaterno', '$apMaterno', '$carrera', '$numControl', '$passwordd', '$confPassword')";


//ejecutar consulta
$resultado = mysqli_query ($conexion, $insertar);

if(!$resultado){
    echo 'Error al Registrar';

}else{
    echo 'Usuario Registrado Correctamente';
}

//cerrar conexio
mysqli_close($conexion);

?>


<?php 
//validar formulario 
    
    if (isset($_POST["submit"])) {

        $nombre = $_POST["nombre"];
        $apPaterno = $_POST["apPaterno"];
        $apMaterno = $_POST["apMaterno"];
        $carrera = $_POST["carrera"];
        $numControl = $_POST["numControl"];
        $passwordd = $_POST["passwordd"];
        $confPassword = $_POST["confPassword"];

    }

?>

<html>
    <head>
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
    <link rel="stylesheet" type="text/css" href="assets/css/registro.css" th:href="@{/css/index.css}">
    <script src="validacion.js">
      <style>
        .error{
            border: solid 2px #FF0000; 
        }
        
     </style>
    </script>

    </head>
    <body>

        <div class ="modal-dialog text-center">
            <div class="col-sm-8 main-section">
                <div class="modal-content">
                    <div class="col-12 imagen-usuario">
                        <img src="assets/imagenes/logo-itch.jpg">
                    </div>
                    <form action="registro.php" method="post">
                        <div class="form-group" id="usuario-group">
                            <input type="text" id = "nombre" name="nombre" class ="form-control" placeholder="Nombre"/>
                            <p id = "nom"></p>

                        </div>

                        <div class="form-group" id="apellidoA-group">
                                <input type="text" id ="apPaterno" name="apPaterno" class ="form-control" placeholder="Apellido Paterno"/>
                        </div>

                        <div class="form-group" id="apellidoB-group">
                                <input type="text" id="apMaterno" name="apMaterno"  class ="form-control" placeholder="Apellido Materno"/>
                        </div>

                        <div class="form-group" id="carrera-group">
                                <input type="text" id="carrera" name="carrera" class ="form-control" placeholder="Carrera"/>
                        </div>

                        <div class="form-group" id="Num-group">
                                <input type="text" id="numControl" name=" numControl" class ="form-control"  placeholder="Num. Control"/>
                        </div>

                        <div class="form-group" id="contraseña-group">
                                <input type="password" id="passwordd" name="passwordd" class ="form-control" placeholder="Password"/>
    
                            </div>
                        
                        <div class="form-group" id="confirmar-group">
                            <input type="password" id="confPassword"name="confPassword" class ="form-control" placeholder="Confirmar Password"/>
        
                                </div>

                                <input type="submit" id="registrar" onclick= "btn()" name="submit" class="btn btn-outline-success" value="registrar">

                        <?php 
                           include("validar-form.php");
                        
                        ?>        
                            

                    </form>
                   
                    
                    
                    
                </div>

            </div>
        </div>
    </body>
</html>