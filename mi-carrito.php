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
	<title>Mi Carrito</title>
</head>
<body>
	<?php require_once('header.php'); ?>
	<?php require_once('db/conexion.php'); 
	$conn = dbConexion();
	$sql = "SELECT producto.id, producto.nombre, producto.imgPrev, stock.cantidad as disponible, stock.precioCompra, stock.precioVenta, carrito.cantidad as carritoCantidad from producto join stock on producto.id = stock.id_producto join carrito on producto.id = carrito.idArticulo where carrito.idUsuario = ".$_SESSION['idusuario'];
	$result = $conn->query($sql);
	$rows = $result->fetchAll();

	//verificamos existencia
	$checkCart = "SELECT COUNT(*) FROM carrito WHERE idUsuario  = ".$_SESSION['idusuario'];
	$resultCart = $conn->query($checkCart);
	$check = $resultCart->fetch(PDO::FETCH_ASSOC);

	?>	
	
	<div class="row" style="margin:0px;">
		<?php if($check['COUNT(*)'] == '0'){ ?>
			<div id="cart" class="text-center" style="padding-top:50px;min-height:300px;">
			    <p><strong>¡Tu carrito esta vacio!</strong></p>
			</div>
		<?php }else{?>
		
		<!-- SI NO HAY ARTICULOS EN EL CARRITO OCULTA TODA ESTA PARTE -->
		<div class="col-md-12">

			<!--form action="db/new_sale.php" id="shopList"  method="post"-->

				<div class="col-md-9">
					<h3 class="text-center">Detalle de Compra</h3>
					<table id="myTable" class="table table-striped">
			          <thead class="">
			            <tr>
			              <th class = "text-center" data-field="id">Imagen</th>
			              <th class = "text-center" data-field="Nombre">Nombre</th>
			              <th class = "text-center" data-field="Precio">Precio Unitario</th>
			              <th class = "text-center" data-field="Cantidad">Cantidad</th>
			              <th class = "text-center" data-field="Cantidad">Subtotal</th>
			              <th class="text-center"></th>
			          </tr>
			          </thead>
			          <tbody id="lista" name="lista">
			          	<!--Detalle de carrito de compra-->
			          	<?php $total = 0; ?>				
						<?php foreach ($rows as $row) {	?>
						
						<?php $total = $total + ($row['carritoCantidad']*$row['precioVenta']); ?>
						<tr class="text-center">
							<td><img src="<?php echo $row['imgPrev'];?>" alt="" style="height:50px;"></td>						
							<td><?php echo $row['nombre']; ?></td>
							<td><?php echo $row['precioVenta']; ?><input type="text" name="precio" value="<?php echo $row['precioVenta']; ?>" hidden></td>
							<td><input name="cantidad[]" type="number" class="form-control text-center cantidad" value="<?php echo $row['carritoCantidad']; ?>" min="1" max="<?php echo $row['disponible']; ?>"></td>
							<td><span><?php echo $row['carritoCantidad']*$row['precioVenta'] ?></span></td>
							<td>
								<form action="db/remover_del_carrito.php">
            						<input id="idUserForAjaxUpdateCart" type="text" value="<?php echo $_SESSION['idusuario'];?>" name="idUser" hidden>
            						<input class="idArtForAjaxUpdateCart" type="text" value="<?php echo $row['id'];?>" name="idArt[]" hidden>
            						<input type="text" value="<?php echo $row['id'];?>" name="idArt" hidden>        
            						<input type="submit" value="Remover" class="btn btn-danger btn-xs">
          						</form>
          					</td>														
						</tr>
						<?php } ?>
						<!-- Fin -->
			          </tbody>
			        </table>
					<div class="text-right div-botones-cart"><a href="db/vaciar_carrito.php" class="btn btn-vaciar-cart" style="width:25% !important;">Vaciar Carrito</a></div>			        
				</div>

				<div class="col-md-3" style="background-color:;">

					<h3 class="text-center">A Pagar</h3>
						<div class="input-group">
							<div class="input-group-addon"><strong>Sub Total:</strong></div>
							<div class="input-group-addon">$</div>
							<input id="subtotal" class="form-control input-lg text-center" style="color:green; font-size:25px;" name="total" type="number" step="any" value="<?php echo $total;?>" readonly>
						</div>
						<br>
						<div class="input-group">
							<div class="input-group-addon"><strong>Envio:</strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</div>
							<div class="input-group-addon">$</div>
							<input id="envio" onkeyup="checkCambio()" class="form-control input-lg text-center" style="color:blue; font-size:25px;" type="number" step="any" value="125" required readonly>
						</div>
						<br>
						<p style="color:red">I.V.A*: <span id="iva"><?php echo $total*.16;?></span></p>
						<div class="input-group">
							<div class="input-group-addon"><strong>Total:</strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</div>
							<div class="input-group-addon">$</div>
							<input id="total"  class="form-control input-lg text-center" style="color:red; font-size:25px;" type="number" step="any" value="<?php echo $total + 125 + ($total*.16);?>" min="0" readonly>
						</div>
						<br>

						<div class="form-group">
							<input type="submit" id="cobrar" class="form-control btn-success disabled"  value="Pagar">
						</div>
				</div>
				<!--/form-->
		</div>
		<!--Informacion del carrito-->
		<?php } ?>
	</div>
	<?php require_once('Login.php'); ?>
	<?php require_once('Registro.php'); ?>
	<?php include 'footer.php'; ?>
	<script>
			$(".cantidad" ).change(function() {
				var idUser = $('#idUserForAjaxUpdateCart').val();
				//var idArt = $('.idArtForAjaxUpdateCart').val();
				//var cant = $('.cantidad').val();
				var cant = 0;
				var idArt = 0;
				var arrayCantidad = []
				var arrayidArt = []
				var n = (document.getElementById("myTable").rows.length)-1;

				$('input[name^="cantidad"]').each(function() {

				 	cant = parseInt($(this).val());
				 	arrayCantidad.push(cant)
				});

				$('input[name^="idArt"]').each(function() {

					idArt = parseInt($(this).val());
					arrayidArt.push(idArt);			
				});

				for(var i = 0; i < n; i++) {
					console.log("ID Usuario: " + idUser +" Cantidad : " + arrayCantidad[i] + " ID articulo : " + arrayidArt[i]);	
				}
				//console.log(arrayCantidad)
				//console.log(arrayidArt);
				//console.log(arrayidArt)
  				//alert(idUser + idArt + cant);
  				$.ajax({
					type: 'POST',
					url: 'db/update_cart.php',
					data:{usuario:idUser, articulo:arrayidArt, cantidad:arrayCantidad},
					success: function(resp){
						console.log(resp)
						location.reload();
					}
				});
			});
	</script>
</body>
</html>