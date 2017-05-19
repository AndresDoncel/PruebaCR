<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro-Usuarios</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
    <link rel="stylesheet" href="assets/css/styles2.min.css">
</head>

<body>
    <nav class="navbar navbar-default nav-crm">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="#"><i class="glyphicon glyphicon-education" style="font-size:30px;color:#337ab7;"></i> </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a href="index.php" style="color:rgb(255,255,255);">Iniciar Sesión</a></li>
                    <li role="presentation"><a href="index.php"><i class="material-icons" id="icon-logout">exit_to_app</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="datos-personales">
        <h3 class="titles">Datos Personales</h3></div>
    <hr>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <form name="nuevo_usuario" method="POST" action="crear-usuario.php" id="my-form">
                        <div class="form-group">
                            <label class="control-label sr-only" for="firstname">First Name</label>
                            <div class="input-group"><span class="inputs-color-icons input-group-addon"><i class="material-icons">person</i></span>
                                <input class="form-control" type="text" name="usuario" required="" placeholder="Usuario" autofocus="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label sr-only" for="lastname">Last Name</label>
                            <div class="input-group"><span class="inputs-color-icons input-group-addon"><i class="material-icons">vpn_key</i></span>
                                <input class="form-control" type="text" name="contrasena" required="" placeholder="Contraseña">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label sr-only" for="phonenumber">Phone Number</label>
                            <div class="input-group"><span class="inputs-color-icons input-group-addon"><i class="material-icons">person_pin</i></span>
                                <select class="form-control show" name="genero" required="">
                                    <option value="0" selected="">Genero</option>
                                    <option value="1">Masculino</option>
                                    <option value="2">Femenino</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label sr-only" for="email">Email Address</label>
                            <div class="input-group"><span class="inputs-color-icons input-group-addon"><i class="material-icons">perm_identity</i></span>
                                <input class="form-control" type="text" name="numero_identificacion" required="" placeholder="N° de identificación">
                            </div>
                        </div>
                    
                </div>
                <div class="col-md-4" id="my-form-derecha">
                        <div class="form-group">
                            <label class="control-label" for="Fecha"> </label>
                            <div class="input-group"><span class="input-group-addon" style="background:none;"><i class="material-icons" style="font-size:17px;">person</i></span>
                                <input class="form-control" type="text" name="nombre" required="" placeholder="Nombre">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label sr-only" for="lastname">Last Name</label>
                            <div class="input-group"><span class="inputs-color-icons input-group-addon"><i class="material-icons">person</i></span>
                                <input class="form-control" type="text" name="apellido" required="" placeholder="Apellido">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label sr-only" for="phonenumber">Phone Number</label>
                            <div class="input-group"><span class="inputs-color-icons input-group-addon"><i class="material-icons">phone</i></span>
                                <input class="form-control" type="tel" name="telefono" required="" placeholder="Telefono Celular" id="phonenumber">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label sr-only" for="email">Email Address</label>
                            <div class="input-group"><span class="inputs-color-icons input-group-addon"><i class="material-icons">school</i></span>
                                <input class="form-control" type="text" name="programa" required="" placeholder="Programa">
                            </div>
                        </div>
                  
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <button class="btn btn-primary btn-block btn-lg" type="submit" id="boton-success">CREAR <i class="material-icons" id="add-registro">person_add</i></button>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
      </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>