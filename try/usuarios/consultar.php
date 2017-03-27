<?php 
	include "../connection.php";
	include "../public/header.php";
	require "../public/seguridad1.php";

	if($_GET) {
		$id = $_GET['id'];
		$consultar = mysqli_query($con,"SELECT * FROM usuarios WHERE id = $id");
		$info = mysqli_fetch_array($consultar);
	}
 ?>

 	<h1>Consultar Usuario</h1>
 	<a href="index.php">Regresar</a>
 	<hr>
 	<table border="1">
 		<tr>
 			<td>Documento</td>
 			<td><?php echo $info['tipo_documento']."". $info['documento']; ?></td>
 		</tr>
		<tr>
 			<td>Nombre</td>
 			<td><?php echo $info['nombre']; ?></td>
 		</tr>
 		<tr>
 			<td>Apellido</td>
 			<td><?php echo $info['apellido']; ?></td>
 		</tr>
 		<tr>
 			<td>Genero</td>
 			<td><?php echo $info['genero']; ?></td>
 		</tr>
 		<tr>
 			<td>Correo Electronico</td>
 			<td><?php echo $info['correo']; ?></td>
 		</tr>
 		<tr>
 			<td>Carreras</td>
 			<td><?php echo $info['carreras']; ?></td>
 		</tr>
 		<tr>
 			<td>Celular</td>
 			<td><?php echo $info['celular']; ?></td>
 		</tr>
		
 	</table>

<?php 

	include "../public/footer.php";
 ?>