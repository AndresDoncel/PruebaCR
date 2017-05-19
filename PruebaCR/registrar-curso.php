<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro-Usuarios - copia</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
    <link rel="stylesheet" href="assets/css/styles2.min.css">
</head>

<body>
    <nav class="navbar navbar-default nav-crm">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="index.php"><i class="glyphicon glyphicon-education" style="font-size:30px;color:#337ab7;"></i> </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a href="index.php"><i class="material-icons" id="icon-logout">exit_to_app</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="datos-personales">
        <h3 class="titles">Datos del Curso</h3></div>
    <hr>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <form name="nuevo_curso" method="POST" action="guardar-curso.php" id="my-form">
                        <div class="form-group">
                            <label class="control-label sr-only" for="firstname">First Name</label>
                            <div class="input-group"><span class="inputs-color-icons input-group-addon"><i class="material-icons">book</i></span>
                                <input class="form-control" type="text" name="nombre_electiva"  placeholder="Nombre Electiva" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label sr-only" for="lastname">Last Name</label>
                            <div class="input-group"><span class="inputs-color-icons input-group-addon"><i class="material-icons">person</i></span>
                                <input class="form-control" type="text" name="profesor"  placeholder="Profesor">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label sr-only" for="email">Email Address</label>
                            <div class="input-group"><span class="inputs-color-icons input-group-addon"><i class="material-icons">format_list_numbered</i></span>
                                <input class="form-control" type="number" name="cupos_disponibles" placeholder="Cupos Disponibles" min="1" max="30">
                            </div>
                        </div>
                    
                </div>
                <div class="col-md-4" id="my-form-derecha">
                        <div class="form-group">
                            <label class="control-label sr-only" for="phonenumber">Phone Number</label>
                            <div class="input-group" style="margin-top:18px;"><span class="inputs-color-icons input-group-addon"><i class="material-icons">text_format</i></span>
                                <textarea class="form-control" name="descripcion" placeholder="Descripción" style="height:129px;"></textarea>
                            </div>
                        </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="preview" style="margin-top:11em;">
        <div class="modal-dialog" role="document" id="modal-dialog-container">
            <div class="modal-content" id="content-modal">
                <div class="modal-body" id="modal-body-container"></div>
                <div class="modal-footer">
                    <p class="text-center text-muted" id="text-modal">El curso se ha creado correctamente.</p>
                    <button class="btn btn-primary btn-lg" type="button" id="btn-ok" data-dismiss="modal">OK </button>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <button class="btn btn-primary btn-block btn-lg" type="submit" id="boton-success">CREAR <i class="material-icons" id="add-registro">school</i></button>
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