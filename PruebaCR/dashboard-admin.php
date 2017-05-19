<!DOCTYPE html>
<?php
	require('conexion.php');
	
	$query="SELECT id, nombre_electiva, profesor, cupos_disponibles, descripcion FROM cursos";
	
	$resultado=$mysqli->query($query);
	
?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oportunidades-Busqueda</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
    <link rel="stylesheet" href="assets/css/styles3.min.css">
</head>

<body>
    <nav  style="margin-top: -1.5em;"  class="navbar navbar-default nav-crm">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="#"><i class="glyphicon glyphicon-education" style="font-size:30px;color:#337ab7;"></i> </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a href="index.php"><i class="material-icons" id="icon-logout">exit_to_app</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="datos-personales"><i class="material-icons" id="icon-contacto">search</i>
        <h3>Administración de Cursos</h3>
        <hr>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div style=" height: 370px; overflow: scroll;" id="full-container">
                        <div id="container-contact">
                            <?php while($row=$resultado->fetch_assoc()){ ?>
                            <div id="container-datos">
                                <ul class="list-unstyled" id="list-data">
                                    <li style="font-weight:bold;">Nombre del Curso: <?php echo $row['nombre_electiva'];?></li>
                                    <li>Profesor: <?php echo $row['profesor'];?> </li>
                                    <li>Cupos Disponibles: <?php echo $row['cupos_disponibles'];?> </li>
                                    <li>Descripción <?php echo $row['descripcion'];?> </li>
                                </ul>
                            </div>
                            <div id="container-options">
                              <a href="modificar-curso.php?id=<?php echo $row['id'];?>"><button class="btn btn-primary btn-block btn-options" type="button"> <i class="material-icons icon-options">edit</i></button></a>
                            </div>
                            <div id="container-options">
                              <a href="eliminar.php?id=<?php echo $row['id'];?>"> <button class="btn btn-danger btn-block btn-options" type="button"> <i class="material-icons icon-options">delete</i></button></a>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
               
                <div class="col-md-2 col-xs-11">
                    <p style="font-size:16px;">Agregar Curso</p><a href="registrar-curso.php"><i class="icon ion-android-add-circle" style="font-size:45px;color:rgb(51,122,183);margin-left:35px;"></i></a></div>
            </div>
        </div>
    </div>
    <div class="container" style="height:40px;"></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>