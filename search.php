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
	<?php require_once('banner.php'); ?>
	<?php require_once('db/conexion.php'); 
	$conn = dbConexion();	
	$sql = "SELECT * from producto WHERE nombre LIKE '%".$_REQUEST['engine']."%' OR descripcion LIKE '%".$_REQUEST['engine']."%'";
	$result = $conn->query($sql);
	$rows = $result->fetchAll();
	?>

	<div class="col-md-8 col-md-offset-2 col-sm-12 lista-cat">
		<p>Resultados de busqueda con  <strong><?php echo $_REQUEST['engine']; ?></strong></p>
		<?php foreach ($rows as $row) {	?>
		<div class="col-md-4 col-sm-6 prod-cate">
			<div class="col-md-12 prod-detail-prev">
				<div class="col-md-12"><img class="thum-list" src="<?php echo $row['imgPrev']; ?>" alt=""></div>
				<div class="col-md-12 text-center desc-list"><?php echo $row['nombre']; ?></div>
				<div class="col-md-12 text-center desc-list-precio">$00.00</div>
				<div class="col-md-12 text-center"><form action="articulo.php" enctype="application/x-www-form-urlencoded"><input type="text" name="sku" value="<?php echo $row['id'];?>" hidden><input type="submit" class="btn btn-lg btn-block btn-ver-producto" value="Ver Producto"></form></div>
				<!--div class="col-md-12 text-center"><a href="#" class="btn btn-lg btn-block btn-ver-producto" role="button">Ver Artículo</a></div-->
			</div>
		</div>
		<?php } ?>
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