
<?php


session_start();
	require('conexion.php');

	$username=$_POST['usuario'];
	$pass=$_POST['contrasena'];
	$tipo_perfil;

	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$sql2=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE usuario='$username'");
	if($f2=mysqli_fetch_assoc($sql2)){
		if($pass==$f2['passadmin']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['usuario']=$f2['usuario'];

			echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
			echo "<script>location.href='dashboard-admin.php'</script>";
		
		}
	}


	$sql=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE usuario='$username'");
	if($f=mysqli_fetch_assoc($sql)){
		if($pass==$f['contrasena']){
			$_SESSION['id']=$f['id'];
			$_SESSION['user']=$f['usuario'];
			header("Location: dashboard-user.php");

		}else{

			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='index.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='index.php'</script>";	

	}

?>