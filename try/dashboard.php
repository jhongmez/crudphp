<?php 
	require "public/header.php";

	if (!isset($_SESSION['nombre'])) {
		echo "
			<script>
				alert('Debe loguearse para poder ingresar...');
				window.location.replace('index.php');
			</script>
		";
	}
 ?>
 	<div class="container">
		<ul>
			<li><?php echo $_SESSION['nombre']; ?></li>
			<li><a href="cerrar_sesion.php">Cerrar Sesion</a></li>
		</ul>
		<hr>
		<h1>Dashboard</h1>
		<ul>
			<li><a href="usuarios/index.php">Usuarios</a></li>
		</ul>
	</div>

<?php 
	require "public/footer.php";
 ?>