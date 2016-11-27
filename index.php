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
	<title>KontroGeek</title>
</head>
<body>

	<?php require_once('header.php'); ?>
	<?php require_once('banner.php'); ?>
	<?php require_once('/Usuario/Login.php'); ?>
	<div class="row" style="margin:0px;">
		<div class="col-md-12 col-sm-12 col-xs-12 lista-cat">

			<div class="col-md-3 col-sm-6 prod-cate">

				<div class="col-md-12 prod-detail-prev">
					<div class="col-md-12"><img class="thum-list" src="img/320x320.png" alt=""></div>
					<div class="col-md-12 text-center desc-list">Nombre del Producto kjsdkjds skjjkdd sdjsdjkds kjdsjksjkd</div>
					<div class="col-md-12 text-center desc-list-precio">$00.00</div>
					<div class="col-md-12 text-center"><a href="#" class="btn btn-lg btn-block btn-ver-producto" role="button">Ver Artículo</a></div>
				</div>

			</div>

			<div class="col-md-3 col-sm-6 prod-cate">
				<div class="col-md-12 prod-detail-prev">
					<div class="col-md-12 prod-detail-prev">
						<div class="col-md-12"><img class="thum-list" src="img/prev01.jpg" alt=""></div>
					<div class="col-md-12 text-center desc-list">Nombre del Producto kjsdkjds skjjkdd sdjsdjkds kjdsjksjkd</div>
					<div class="col-md-12 text-center desc-list-precio">$00.00</div>
					<div class="col-md-12 text-center"><a href="#" class="btn btn-lg btn-block btn-ver-producto" role="button">Ver Artículo</a></div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 prod-cate">
				<div class="col-md-12 prod-detail-prev">
					
				</div>
			</div>
			<div class="col-md-3 col-sm-6 prod-cate">
				<div class="col-md-12 prod-detail-prev">
					
				</div>
			</div>
		</div>
	</div>
	<?php include 'footer.php'; ?>
	<script>
		console.log("holamundo");
		//$('.carousel').carousel()
	</script>
</body>
</html>