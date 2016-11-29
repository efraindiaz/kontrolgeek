<?php 
	require ('conexion.php');
	$conn = dbConexion(); 
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	//verificamos existencia
	$checkCourt = "SELECT COUNT(*) FROM carrito WHERE idUsuario = ".$_REQUEST['idUser']." and idArticulo =".$_REQUEST['idProd'];
	$resultCheck = $conn->query($checkCourt);
	$check = $resultCheck->fetch(PDO::FETCH_ASSOC);
	
	if($check['COUNT(*)'] == '0'){

		$stmt = $conn->prepare("INSERT INTO carrito (idUsuario, idArticulo, cantidad) VALUES (:idUser, :idProducto, :cantidad)");

		$stmt->bindParam(':idUser', $idUsuario);
		$stmt->bindParam(':idProducto', $idProducto);
		$stmt->bindParam(':cantidad', $cantidad);

		$idUsuario = $_REQUEST["idUser"];
		$idProducto = $_REQUEST["idProd"];
		$cantidad = 1;

		$stmt->execute();

	}
	else{
		$stmt = $conn->prepare("UPDATE carrito SET cantidad = cantidad + 1 WHERE idUsuario = :idUsuario and idArticulo = :idArticulo");

		$stmt->bindParam(':idUsuario', $idUsuario);
		$stmt->bindParam(':idArticulo', $idArticulo);
		
		$idUsuario = $_REQUEST['idUser'];
		$idArticulo = $_REQUEST['idProd'];
		
		$stmt->execute();
	}
	//agregando producto al carrito
	/*$stmt = $conn->prepare("INSERT INTO carrito (idUsuario, idArticulo, cantidad) VALUES (:idUser, :idProducto, :cantidad)");

	$stmt->bindParam(':idUser', $idUsuario);
	$stmt->bindParam(':idProducto', $idProducto);
	$stmt->bindParam(':cantidad', $cantidad);

	$idUsuario = $_REQUEST["idUser"];
	$idProducto = $_REQUEST["idProd"];
	$cantidad = 1;

	$stmt->execute();*/

	$conn = null;
	header('Location: ../mi-carrito.php');

 ?>