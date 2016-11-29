
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
	<?php require_once('db/conexion.php'); 
	$conn = dbConexion();
	//Random de articulos
	$sql = "SELECT * FROM producto join stock on producto.id = stock.id_producto ORDER by RAND() LIMIT 9";
	$result = $conn->query($sql);
	$rows = $result->fetchAll();
	?>
	<div class="row" style="margin:0px;">
		<div class="col-lg-8 col-lg-offset-2 col-md-12 col-sm-12 col-xs-12 lista-cat">
			
			<?php foreach ($rows as $row) {	?>
			<div class="col-md-4 col-sm-6 prod-cate">

				<div class="col-md-12 prod-detail-prev">
					<div class="col-md-12"><img class="thum-list" src="<?php echo $row['imgPrev']; ?>" alt=""></div>
					<div class="col-md-12 text-center desc-list"><?php echo  substr($row['nombre'], 0,15)."..."; ?></div>
					<div class="col-md-12 text-center desc-list-precio">$<?php echo $row['precioVenta']; ?></div>
					<div class="col-md-12 text-center"><form action="articulo.php" enctype="application/x-www-form-urlencoded"><input type="text" name="sku" value="<?php echo $row['id'];?>" hidden><input type="submit" class="btn btn-lg btn-block btn-ver-producto" value="Ver Producto"></form></div>
				</div>

			</div>
			<?php } ?>
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