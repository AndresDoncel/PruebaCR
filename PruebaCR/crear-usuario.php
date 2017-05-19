<?php 
	
	require('conexion.php');
	
	 $usuario=$_POST['usuario'];
	 $contrasena=$_POST['contrasena'];
     $nombre=$_POST['nombre'];
     $apellido=$_POST['apellido'];
     $numero_identificacion=$_POST['numero_identificacion'];
     $telefono=$_POST['telefono'];
     $programa=$_POST['programa'];
	 $genero=$_POST['genero'];
	
	$query="INSERT INTO usuarios (usuario, contrasena, nombre, apellido, numero_identificacion, telefono, programa, genero) VALUES ('$usuario','$contrasena','$nombre','$apellido', '$numero_identificacion', '$telefono', '$programa', '$genero')";
	
	$resultado=$mysqli->query($query);
	
?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro-Usuarios - copia</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
    <link rel="stylesheet" href="assets/css/styles4.min.css">
</head>

<body>
    <nav style="margin-top:-0.8em" class="navbar navbar-default nav-crm">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="#"><i class="glyphicon glyphicon-education" style="font-size:30px;color:#337ab7;"></i> </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a href="#"><i class="material-icons" id="icon-logout">exit_to_app</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="login-clean" style="background-color:rgb(255,255,255);padding:3px;">
        <form method="post">
            <div class="illustration"><i class="material-icons" style="font-size:128px;">school</i></div>
            <p class="help-block" style="width:244px;height:38px;color:rgb(133,131,131);font-size:15px;margin-bottom:0px;margin-top:-33px;margin-right:0PX;margin-left:36px;">EL USUARIO SE CREO </p>
            <p class="help-block" style="margin-left:52px;margin-top:-8px;">CORRECTAMENTE </p>
            <div class="form-group"><a class="btn btn-primary btn-block" role="button" href="index.php">Regresar al Portal</a></div>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>