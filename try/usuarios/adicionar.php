<?php 	
	
	require "../public/header.php";
	require "../connection.php";
	require "../public/seguridad1.php"
	

 ?>

	<h1>Adicionar Usuario</h1>
	<a href="index.php">Regresar</a>
	<hr>
	<form method="post">	
		<div>
			<label for="">Tipo de Documento</label>
			<select name="tipo_documento" id="">
				<option value="">--Seleccione--</option>
				<option value="TI">Tarjeta de Identidad</option>
				<option value="CC">Cedula de Ciudadania</option>
			</select>
		</div>
		<div>
			<label for="">Documento</label>
			<input type="text" name="documento" placeholder="documento">
		</div>
		<div>
			<label for="">Nombre</label>
			<input type="text" name="nombre" placeholder="nombre">
		</div>
		<div>
			<label for="">Apellido</label>
			<input type="text" name="apellido" placeholder="apellido">
		</div>
		<div>
			<label for="">Genero:</label>
			<input type="radio" name="genero" value="M">Masculino
			<input type="radio" name="genero" value="F">Femenino
		</div>
		<div>
			<label for="">Correo Electronico</label>
			<input type="text" name="correo" placeholder="correo">
		</div>
		<div>
			<label for="">Contraseña</label>
			<input type="password" name="clave" placeholder="clave">
		</div>
		<div>
			<label for="">Celular:</label>
			<input type="text" name="celular" placeholder="celular">
		</div>
		<div>
			<input type="submit">
		</div>
	</form>

 <?php 
 	if ($_POST) {
 		
 		$tipo_documento = $_POST['tipo_documento'];
 		$documento = $_POST['documento'];
 		$nombre = $_POST['nombre'];
 		$apellido = $_POST['apellido'];
 		$genero = $_POST['genero'];
 		$correo = $_POST['correo'];
 		$clave = $_POST['clave'];
 		$celular = $_POST['celular'];

 		if ($tipo_documento != "" && $documento != "" && $nombre != "" && $apellido != "" && $correo != "" && $clave != "" && $celular != "") {
 			# code...
 		
	 		$sql = "INSERT INTO usuarios VALUES(DEFAULT,'$tipo_documento',$documento,'$nombre','$apellido','$genero','$correo','$clave','$celular')";

	 		$adicionar = mysqli_query($con, $sql);

	 		if ($adicionar) {
	 			echo "Si sirvio papi";
	 		}
		}
 	}

  ?>