<?php 	
	
	require "../public/header.php";
	require "../connection.php";
	require "../public/seguridad1.php"

 ?>
	
	<div class="col-xs-6 col-md-2"></div>
    <div class="col-xs-6 col-md-8">
    <h1>Usuarios</h1>
 	<a href="../dashboard.php">Volver</a>
 	<a href="adicionar.php">Adicionar</a>
 	<hr>

 	<table class="table table-borderer table-hover">
 		<thead>
 			<tr>
				<th>Nombres</th>
				<th>Apellidos</th>
				<th>Documento</th>
				<th>Acciones</th>

			</tr>		

 		</thead>
 		<tbody>
 			<?php 

 				$usuarios = mysqli_query($con,"SELECT * FROM usuarios");
 				while($usuario = mysqli_fetch_array($usuarios)){

 					echo "  
						<tr>
							<td>".$usuario['nombre']."</td>
							<td>".$usuario['apellido']."</td>
							<td>".$usuario['tipo_documento']." ".$usuario['documento']."</td>
							<td>
								<a href='consultar.php?id=".$usuario['id']."'><span class='glyphicon glyphicon-search'></span></a>
								<a href='modificar.php?id=".$usuario['id']."'><span class='glyphicon glyphicon-pencil'></span></a>
								<a href='javascript:;' class='eliminar-usuario' data-id='".$usuario['id']."'><span class='glyphicon glyphicon-trash'></span></a>
							</td>
						</tr>
 					";
 				}

 			 ?>
			
 		</tbody>


 	</table>	




    </div>
    <div class="col-xs-6 col-md-2"></div>
 	

 <?php 	

	require "../public/footer.php";

  ?>