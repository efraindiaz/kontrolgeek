
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
	<?php require_once('/db/conexion.php'); 
	$conn = dbConexion();
	//Cargamos todas las campañas del usuario logeado
	$sql = "SELECT * FROM producto";
	$result = $conn->query($sql);
	$rows = $result->fetchAll();
	?>
	<div class="row" style="margin:0px;">
		<div class="col-md-12 col-sm-12 col-xs-12 lista-cat">
			
			<?php foreach ($rows as $row) {	?>
			<div class="col-md-3 col-sm-6 prod-cate">

				<div class="col-md-12 prod-detail-prev">
					<div class="col-md-12"><img class="thum-list" src="<?php echo $row['imgPrev']; ?>" alt=""></div>
					<div class="col-md-12 text-center desc-list"><?php echo $row['nombre']; ?></div>
					<div class="col-md-12 text-center desc-list-precio">$00.00</div>
					<div class="col-md-12 text-center"><a href="#" class="btn btn-lg btn-block btn-ver-producto" role="button">Ver Artículo</a></div>
				</div>

			</div>
			<?php } ?>
			<!--
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
		-->
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