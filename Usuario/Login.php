<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<script src="../js/jquery.min.js"></script>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<script src="../js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../css/header.css">
	<link rel="stylesheet" href="../css/login.css">

	<title>Iniciar Sesion</title>
</head>
<body>

	<?php require_once('../header.php'); ?>

<!-- MODAL PARA EL INICIO DE SESION-->
	<div class="modal fade modalLogin">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header headerLogin">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	        <h4 class="modal-title">Iniciar Sesion</h4>
	      </div>
	      <div class="modal-body bodyLogin">
		      	<div class="form-group">
			        <label for="NombreU">Nombre</label>
			        <input type="text" name="NombreU" class="form-control nombreU" placeholder="Nombre Usuario">
			    </div>
			    <div class="form-group">
			        <label for="pass">Contraseña</label>
			        <input type="text" name="pass" class="form-control password" placeholder="Contraseña">
			    </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
	        <button type="button" class="btn btnAcepLogin">Aceptar</button>
	      </div>
	    </div>
	  </div>
	</div>
<!-- MODAL PARA EL INICIO DE SESION FIIIIIIN-->

<!-- MODAL PARA EL REGISTRO DE INICIO DE SESION-->
	<div class="modal fade modalRegistro">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header headerRegistro">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	        <h4 class="modal-title">Registro De Usuario</h4>
	      </div>
	      <div class="modal-body bodyRegistro">
		      	<div class="row">
			      	<div class="col-xs-6">
				        <label for="Nombre">Nombre</label>
				        <input type="text" name="Nombre" class="form-control nombre" placeholder="Nombres">
				    </div>
				    <div class="col-xs-6">
				        <label for="apellido">Apellido</label>
				        <input type="text" name="apellido" class="form-control apellido" placeholder="Apellidos">
				    </div>
			    </div>
			    <div class="row">
				    <div class="col-xs-6">
				        <label for="nombreU">Nombre Usario</label>
				        <input type="text" name="nombreU" class="form-control nombreU" placeholder="Nombre De Usuario">
				    </div>
				    <div class="col-xs-6">
				        <label for="email">Email</label>
				        <input type="text" name="email" class="form-control email" placeholder="Correo Electronico">
				    </div>
			    </div>
			    <div class="row">
				    <div class="col-xs-6">
				        <label for="telefono">Telefono</label>
				        <input type="text" name="telefono" class="form-control telefono" placeholder="Telefono/Celular">
				    </div>
				    <div class="col-xs-6">
				        <label for="ciudad">Ciudad</label>
				        <input type="text" name="ciudad" class="form-control ciudad" placeholder="Ciudad/Localidad">
				    </div>
			    </div>
			    <div class="row">
				    <div class="col-xs-6">
				        <label for="estado">Estado</label>
				        <input type="text" name="estado" class="form-control estado">
				    </div>
				    <div class="col-xs-6">
				        <label for="codigop">Codigo Postal</label>
				        <input type="text" name="codigop" class="form-control codigop">
				    </div>
			    </div>
			    <div class="row">
				    <div class="col-xs-6">
				        <label for="colonia">Colonia</label>
				        <input type="text" name="colonia" class="form-control colonia" placeholder="Region/Colonia">
				    </div>
				    <div class="col-xs-6">
				        <label for="calle">Calle</label>
				        <input type="text" name="calle" class="form-control calle">
				    </div>
			    </div>
			    <div class="row">
				    <div class="col-xs-6">
				        <label for="NuInterior">No. Interior</label>
				        <input type="text" name="NuInterior" class="form-control NuInterior" placeholder="Numero Interior">
				    </div>
				    <div class="col-xs-6">
				        <label for="NuExterior">No. Exterior</label>
				        <input type="text" name="NuExterior" class="form-control NuExterior" placeholder="Numero Exterior">
				    </div>
			    </div>
			    <div class="row">
				    <div class="col-xs-6">
				        <label for="passwordR">Contraseña</label>
				        <input type="text" name="passwordR" class="form-control passwordR">
				    </div>
				    <div class="col-xs-6">
				        <label for="passwordC">Confirmar Contraseña</label>
				        <input type="text" name="passwordC" class="form-control passwordC">
				    </div>
			    </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
	        <button type="button" class="btn btnAcepRegistro">Aceptar</button>
	      </div>
	    </div>
	  </div>
	</div>
<!-- MODAL PARA EL REGISTRO DE INICIO DE SESION FIIIIIIN-->


</body>
</html> 