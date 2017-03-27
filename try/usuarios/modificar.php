<?php 	
	
	require "../public/header.php";
	require "../connection.php";
	require "../public/seguridad1.php";

	if ($_GET) {
		$id        = $_GET['id'];
		$consultar = mysqli_query($con,"SELECT * FROM usuarios WHERE id = $id");
		$info      = mysqli_fetch_array($consultar);
	}

 ?>

	<h1>Modificar Usuario</h1>
	<a href="index.php">Regresar</a>
	<hr>
	<form method="post">	
		<div>
			<label for="">Tipo de Documento</label>
			<select name="tipo_documento">
				<option value="">--Seleccione--</option>
				<option <?php if ($info['tipo_documento'] == "TI") { echo "selected"; } ?> value="TI">Tarjeta de Identidad</option>
				<option <?php if ($info['tipo_documento'] == "CC") { echo "selected"; } ?> value="CC">Cedula de Ciudadania</option>
			</select>
		</div>
		<div>
			<label for="">Documento</label>
			<input type="text" name="documento" placeholder="documento" value="  <?php echo $info['documento']; ?>  ">
		</div>
		<div>
			<label for="">Nombre</label>
			<input type="text" name="nombre" placeholder="nombre" value="  <?php echo $info['nombre']; ?>  ">
		</div>
		<div>
			<label for="">Apellido</label>
			<input type="text" name="apellido" placeholder="apellido" value="  <?php echo $info['apellido']; ?>  ">
		</div>
		<div>
			<label for="">Genero:</label>
			<input type="radio" name="genero" <?php if ($info['genero'] == "M") { echo "checked"; } ?> value="M">Masculino
			<input type="radio" name="genero" <?php if ($info['genero'] == "F") { echo "checked"; } ?> value="F">Femenino
		</div>
		<div>
			<label for="">Correo Electronico</label>
			<input type="text" name="correo" placeholder="correo" value="  <?php echo $info['correo']; ?>  ">
		</div>
		<div>
			<label for="">Celular:</label>
			<input type="text" name="celular" placeholder="celular" value="  <?php echo $info['celular']; ?>  ">
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
 		$celular = $_POST['celular'];

 		if ($tipo_documento != "" && $documento != "" && $nombre != "" && $apellido != "" && $correo != "" && $celular != "") {
 			# code...
 		
	 		$sql = "UPDATE usuarios SET tipo_documento = '$tipo_documento',
	 									documento      = '$documento',
	 									nombre         = '$nombre',
	 									apellido       = '$apellido',
	 									genero         = '$genero',
	 									correo         = '$correo',
	 									celular        =  $celular
	 								WHERE id = $id";

	 		$modificar = mysqli_query($con, $sql);

	 		if ($modificar) {
	 			echo "Si sirvio papi";
	 		} else {
	 			echo "no sirvio bebe";
	 		}
		}
 	}

  ?>