<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<script src="js/jquery.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" href="css/categorias.css">
	<script src="js/bootstrap.min.js"></script>
	<title>Carros RC</title>
</head>
<body>
	<?php require_once('header.php'); ?>
	<?php require_once('Login.php'); ?>
	<?php require_once('db/conexion.php'); 
	$conn = dbConexion();	
	$sql = "SELECT * FROM producto join stock on producto.id = stock.id_producto WHERE categoria = 4 ";
	$result = $conn->query($sql);
	$rows = $result->fetchAll();
	?>
	<!--div class="col-md-2 col-md-offset-1 opciones">
		<div class="btn-group div-inter-filter">
			<a class="opc-filter title-filter-cat btn btn-primary" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
				<span class="glyphicon glyphicon glyphicon-filter" aria-hidden="true"></span> Filtrar por</a>

			<a class="opc-filter icon-filter-cat btn btn-primary" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
  		 	<span class="glyphicon glyphicon glyphicon glyphicon-plus-sign" aria-hidden="true"></span>	
			</a>
		</div>
		<div class="collapse" id="collapseExample">
  			<div class="well">
    			<div><a href="" class="">Menor a Mayor</a></div>
    			<div><a href="" class="">Mayor a Menor </a></div>
    			<div><a href="" class="">Aa - zZ</a></div>
    			<div><a href="" class="">Aa - zZ</a></div>
    			<div><a href="" class="">Aa - zZ</a></div>
  			</div>
		</div>
		
	</div-->
	<div class="col-md-8 col-md-offset-2 col-sm-12 lista-cat">
		<?php foreach ($rows as $row) {	?>
		<div class="col-md-4 col-sm-6 prod-cate">
			<div class="col-md-12 prod-detail-prev">
				<div class="col-md-12"><img class="thum-list" src="<?php echo $row['imgPrev']; ?>" alt=""></div>
				<div class="col-md-12 text-center desc-list"><?php echo  substr($row['nombre'], 0,15)."..."; ?></div>
				<div class="col-md-12 text-center desc-list-precio">$<?php echo $row['precioVenta']; ?></div>
				<div class="col-md-12 text-center"><form action="articulo.php" enctype="application/x-www-form-urlencoded"><input type="text" name="sku" value="<?php echo $row['id'];?>" hidden><input type="submit" class="btn btn-lg btn-block btn-ver-producto" value="Ver Producto"></form></div>
				<!--div class="col-md-12 text-center"><a href="#" class="btn btn-lg btn-block btn-ver-producto" role="button">Ver Artículo</a></div-->
			</div>
		</div>
		<?php } ?>
	</div>
	<?php include 'footer.php'; ?>
	<script>
		$('#opc').collapse({
			toggle:true
		})
	</script>
</body>
</html>