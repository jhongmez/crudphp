<?php 	
	require "public/header.php";
	require "connection.php";
 ?>


<div class="container">
  <div class="col-xs-6 col-md-3"></div>
  <div class="col-xs-6 col-md-6">
	  <h1 class="text-center">Login</h1>
		<hr>
		<form method="post">
		<div>	
			<label class="control-label">Correo Electronico</label>
			<input type="text" name="correo" placeholder="Correo Electronico" 
			value="<?php if (isset($_POST['correo'])) { echo $_POST['correo']; } 9?>" class="form-control">
		</div>
		<br>
		<div>	
			<label class="control-label">Contraseña</label>
			<input type="password" name="clave" placeholder="Contraseña" class="form-control">
		</div>
		<br>
		<input type="submit" value="Ingresar" class="btn btn-success">
		</form>
	</div>
  <div class="col-xs-6 col-md-"></div>
</div>

<?php 	
	if ($_POST) {

		$correo = mysqli_real_escape_string($con, $_POST['correo']);
		$clave = mysqli_real_escape_string($con, $_POST['clave']);

		if ($correo != "" && $clave != "") {
		
			$sql = "SELECT nombre, apellido
				   FROM usuarios
				   WHERE correo = '$correo'
				   AND contrasena = '$clave'";

			$query = mysqli_query($con, $sql);
			if (mysqli_num_rows($query) > 0) {

				$row = mysqli_fetch_array($query);
				//Variable tipo SESSION
				$_SESSION['nombre'] = $row['nombre']." ".$row['apellido'];
				header("Location: dashboard.php");
			}
		} else {
			echo "
				<script>
					alert('Hay campos vacios..');
				</script>
			";
		}
	}
 ?>



 <?php 	require "public/footer.php"; ?>