<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<script src="../js/jquery.min.js"></script>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/header.css">
	<link rel="stylesheet" href="../css/login.css">
	<link rel="stylesheet" href="../css/categorias.css">
	<script src="../js/bootstrap.min.js"></script>
	<title>Drones</title>
</head>
<body>
	<?php require_once('../header.php'); ?>
	<?php require_once('../Usuario/Login.php'); ?>

	<div class="col-md-2 col-md-offset-1 opciones">
		<div class="btn-group div-inter-filter">
			<a class="opc-filter title-filter-cat btn btn-primary" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
				<span class="glyphicon glyphicon glyphicon-filter" aria-hidden="true"></span> Filtrar por</a>

			<a class="opc-filter icon-filter-cat btn btn-primary" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
  		 	<span class="glyphicon glyphicon glyphicon glyphicon-plus-sign" aria-hidden="true"></span>	
			</a>
		</div>
		<div class="collapse" id="collapseExample">
  			<div class="well">
    			...
  			</div>
		</div>
		
	</div>
	<div class="col-md-8 col-sm-12 lista-cat">
		<div class="col-md-4 col-sm-6 prod-cate">
			<div class="col-md-12 prod-detail-prev">
				<div class="col-md-12"><img class="thum-list" src="../img/320x320.png" alt=""></div>
				<div class="col-md-12 text-center desc-list">Nombre del Producto kjsdkjds skjjkdd sdjsdjkds kjdsjksjkd</div>
				<div class="col-md-12 text-center desc-list-precio">$00.00</div>
				<div class="col-md-12 text-center"><a href="#" class="btn btn-lg btn-block btn-ver-producto" role="button">Ver Artículo</a></div>
			</div>
		</div>
		<div class="col-md-4 col-sm-6 prod-cate">
			<div class="col-md-12 prod-detail-prev">
				<div class="col-md-12 prod-detail-prev">
					<div class="col-md-12"><img class="thum-list" src="../img/prev01.jpg" alt=""></div>
				<div class="col-md-12 text-center desc-list">Nombre del Producto kjsdkjds skjjkdd sdjsdjkds kjdsjksjkd</div>
				<div class="col-md-12 text-center desc-list-precio">$00.00</div>
				<div class="col-md-12 text-center"><a href="#" class="btn btn-lg btn-block btn-ver-producto" role="button">Ver Artículo</a></div>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-6 prod-cate">
			<div class="col-md-12 prod-detail-prev">
				
			</div>
		</div>
		<div class="col-md-4 col-sm-6 prod-cate">
			<div class="col-md-12 prod-detail-prev">
				
			</div>
		</div>
	</div>
	<?php include '../footer.php'; ?>
	<script>
		$('#opc').collapse({
			toggle:true
		})
	</script>
</body>
</html>