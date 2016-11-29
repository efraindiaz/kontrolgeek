<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<script src="js/jquery.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/login.css">
	<script src="js/bootstrap.min.js"></script>
	<title>Busqueda</title>
</head>
<body>
	<?php require_once('header.php'); ?>
		<div class="row" style="margin:0px;">
			<div class="col-md-8 col-md-offset-2" style="">
				<h1 class="text-center">Soporte al usuario</h1>
				
				<div class="col-md-12">
					<p>Si tienes dudas o necesitas hacer alguna aclaración escribenos un mensaje y nos pondremos en contacto contigo a la brevedad.</p>
					<form action="">
						<div class="col-md-4">
							<div class="form-group">
								<label for="">Motivo</label>
								<select class="form-control"name="" id="">
									<option value="">Quejas y Sugerencias</option>
									<option value="">Aclaraciones de Existencia</option>
									<option value="">Aclaraciones de Pago</option>
									<option value="">Aclaracions de Envio</option>
									<option value="">Devoluciones y Garantias</option>
								</select>
							</div>
						</div>
						<div class="col-md-8">
							<div class="form-group">
								<label for="">Nombre:</label>
								<input type="text" class="form-control" required placeholder="Nombre completo">
							</div>
							<div class="form-group">
								<label for="">Correo:</label>
								<input type="email" class="form-control" required placeholder="Correo electrónico">
							</div>
							<div class="form-group">
								<label for="">Mensaje:</label>
								<textarea class="form-control" name="textSop" id="" rows="10" required placeholder="Mensaje"></textarea>
							</div>
							<div class="form-group">
								<input class="btn btn-primary btn-block" type="submit" value="Solicitar">
							</div>
						</div>
					</form>
				</div>	
			</div>
			
		</div>
	<?php include 'footer.php'; ?>
	<?php require_once('Login.php'); ?>
	<?php require_once('Registro.php'); ?>
	<script>
		$('.carousel').carousel()
	</script>
	<script src="js/registroUsuarioAjax.js"></script>
	
</body>
</html>