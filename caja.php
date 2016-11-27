<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<script src="js/jquery.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/caja.css">
	<script src="js/bootstrap.min.js"></script>
	<title>Document</title>
</head>
<body>
	<?php include 'header.php' ?>
	<h2 class="titulo">Articulos en el Carrito</h2>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-7 productos">
				<div class="row well well-lg">
					<div class="col-sm-3">
						<img src="img/drone.png" class="image">
					</div>
					<div class="col-sm-4">
						<h3>Drone con Clone</h3>
						<p>
							Lorem ipsum dolor sit amet.
							Lorem ipsum dolor sit amet.
						</p>
					</div>
					<div class="col-sm-2">
						<div class="imp">
							<label for="cantidad">Cantida</label>
							<input type="number"  class="form-control" name="cantidad">				
						</div>
					</div>
					<div class="col-sm-2">
						<div class="imp">
							<label for="preto">Precio/T</label>
							<input type="text"  class="form-control" name="preto" disabled>														
							<label>(MXN $00.00 por cada uno)</label>								
						</div>
					</div>
					<div class="col-sm-1 btnx">
						<div>
							<a href="#"><button type="button" class="btn btn-danger">X</button></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-3 pago">				
				<div class="row well well-lg">
					<div class="col-sm-7">
						<label>Subtotal:</label>
					</div>
					<div class="col-sm-5">
						<label>MXN $00.00</label>
					</div>
					<div class="col-sm-7">
						<label>Costo por Peso:</label>
					</div>
					<div class="col-sm-5">
						<label>MXN $00.00</label>
					</div>
					<div class="col-sm-12">
						<label>(MXN $125.00)</label>
					</div>
					<div class="col-sm-7">
						<label>IVA:</label>
					</div>
					<div class="col-sm-5">
						<label>MXN $00.00</label>
					</div>
					
					<div class="col-sm-7">
						<label>Total:</label>
					</div>
					<div class="col-sm-5">
						<label>MXN $00.00</label>
					</div>
					 <div class="col-sm-12">
						<a href=""><button type="button" class="btn btn-success btn-block">Comprar</button></a>
					</div>					
				</div>
			</div>
		</div>
	</div>
</body>
</html>
