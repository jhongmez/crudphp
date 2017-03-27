<?php 
	include"../connection.php";
	if ($_GET) {
		$id = $_GET['id'];
		$eliminar = mysqli_query($con, "DELETE FROM usuarios WHERE id = $id");
		if ($eliminar) {
			echo "  
				<script>
					alert('Usuario eliminado con exito...');
					window.location.replace('index.php');

				</script>


			";
		}
	}



 ?>