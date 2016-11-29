<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<script src="js/jquery.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" href="css/EditarUsuario.css">
	<script src="js/bootstrap.min.js"></script>
	<title>Editar Usuario</title>
</head>
<body>
	<?php require_once('header.php'); ?>
	 <div class="row info">
	     <div class="col-md-8 col-md-offset-2 rowInfoUsuario"> 
                <div class="titulo">
                	<h4>Informacion</h4>
                </div>
                <form class="formEdit">
	 			<input type="hidden" name="passwordHidden" class="passwordHidden">

                <div class="col-md-9"> 
			      	<div class="col-xs-6">
				        <label for="nombre">Nombre</label>
				        <input type="text" name="nombre" class="form-control nombre" placeholder="Nombres" required>
				    </div>
				    <div class="col-xs-6">
				        <label for="apellido">Apellido</label>
				        <input type="text" name="apellido" class="form-control apellido" placeholder="Apellidos" required>
				    </div>
			    
				    <div class="col-xs-6">
				        <label for="nombreU">Nombre Usuario</label>
				        <input type="text" name="nombreU" class="form-control nombreU" placeholder="Nombre De Usuario" required>
				    </div>
				    <div class="col-xs-6">
				        <label for="email">Email</label>
				        <input type="email" name="email" class="form-control email" placeholder="Correo Electronico" required>
				    </div>

				    <div class="col-xs-6">
				        <label for="telefono">Telefono</label>
				        <input type="text" name="telefono" class="form-control telefono" placeholder="Telefono/Celular">
				    </div>
				    <div class="col-xs-6">
				        <label for="ciudad">Ciudad</label>
				        <input type="text" name="ciudad" class="form-control ciudad" placeholder="Ciudad/Localidad" required>
				    </div>

				    <div class="col-xs-6">
				        <label for="estado">Estado</label>
				        <input type="text" name="estado" class="form-control estado" required>
				    </div>
				    <div class="col-xs-6">
				        <label for="codigop">Codigo Postal</label>
				        <input type="text" name="codigop" class="form-control codigop" required>
				    </div>

				    <div class="col-xs-6">
				        <label for="colonia">Colonia</label>
				        <input type="text" name="colonia" class="form-control colonia" placeholder="Region/Colonia" required>
				    </div>
				    <div class="col-xs-6">
				        <label for="calle">Calle</label>
				        <input type="text" name="calle" class="form-control calle" required>
				    </div>

				    <div class="col-xs-6">
				        <label for="NuInterior">No. Interior</label>
				        <input type="text" name="NuInterior" class="form-control NuInterior" placeholder="Numero Interior" required>
				    </div>
				    <div class="col-xs-6">
				        <label for="NuExterior">No. Exterior</label>
				        <input type="text" name="NuExterior" class="form-control NuExterior" placeholder="Numero Exterior" required>
				    </div>

				    <div class="col-xs-6">
				        <label for="passwordR">Contraseña</label>
				        <input type="password" name="password" class="form-control passwordR" placeholder="Ingresar Si Desea Cambiar Contraseña">
				    </div>
				    <div class="col-xs-6">
				        <label for="passwordC">Confirmar Contraseña</label>
				        <input type="password" name="passwordC" class="form-control passwordC" placeholder="Contraseña Nueva">
				    </div>
				    
				</div>
				<div class="col-md-3">
					<div class="col-xs-12">
					<button type="submit" class="btn btn-link btnEditarUser">
						<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Guardar Cambios
					</button>
					</div>
					<div class="col-xs-12">
					<a href="db/EliminarUsuario.php"><button type="button" class="btn btn-link btnEliminarUser">
					  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Eliminar Cuenta
					</button></a>
					</div>
				</div>
			</form>
         </div>       
	  </div>

	<?php include 'footer.php'; ?>
	<?php require_once('Login.php'); ?>
	<?php require_once('Registro.php'); ?>
	<script src="js/registroUsuarioAjax.js"></script>
	<script src="js/consultaUser.js"></script>

</body>
</html>