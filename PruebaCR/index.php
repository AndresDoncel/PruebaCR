<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
    <div class="login-clean">
        <form method="post" action="validar.php">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i style="color: #337ab7" class="glyphicon glyphicon-education"></i></div>
            <div class="form-group">
                <input class="form-control" type="usuario" name="usuario" placeholder="Usuario">
            </div>
            <div class="form-group">
                <input class="form-control" type="contrasena" name="contrasena" placeholder="Contraseña">
            </div>
            <div class="form-group">
                <button style="background-color:#337ab7;" class="btn btn-primary btn-block" type="submit">Ingresar</button>
                </form>
                <button class="btn btn-primary btn-block" type="submit" style="margin-top:8px;background-color:rgba(51, 122, 183, 0.5);"><a href="registro.php" id="text-registro">Registrarse</a></button>
            </div>
        
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>