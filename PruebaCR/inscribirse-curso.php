<?php
	
	require('conexion.php');
	
	$id=$_GET['id'];
	
	$query="SELECT nombre_electiva, profesor, cupos_disponibles, descripcion FROM cursos WHERE id='$id'";
	
	$resultado=$mysqli->query($query);
	
	$row=$resultado->fetch_assoc();
	
?>

<html>
	<head>
		<title>Modificar Curso</title>
	</head>
	<body>
		
		<center><h1>Modificar Curso</h1></center>
		
		<form name="modificar_usuario" method="POST" action="mod_curso.php">
			
			<table width="50%">
				<tr>
					<input type="hidden" name="id" value="<?php echo $id; ?>">
					<td width="20"><b>Usuario</b></td>
					<td width="30"><input type="text" name="nombre_electiva" size="25" value="<?php echo $row['nombre_electiva']; ?>" /></td>
				</tr>	
				<tr>
					<td><b>Password</b></td>
					<td><input type="password" name="profesor" size="25" value="<?php echo $row['profesor']; ?>" /></td>
				</tr>
				<tr>
					<td><b>Email</b></td>
					<td><input type="text" name="cupos_disponibles" size="25" value="<?php echo $row['cupos_disponibles']; ?>" /></td>
				</tr>
				<tr>
					<td><b>Email</b></td>
					<td><input type="text" name="descripcion" size="25" value="<?php echo $row['descripcion']; ?>" /></td>
				</tr>
				<tr>
					<td colspan="2"><center><input type="submit" name="Guardar" value="Guardar" /></center></td>
				</tr>
			</table>
		</form>
	</body>
</html>	
