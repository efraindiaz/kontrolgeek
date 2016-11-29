<?php 
	require_once('conexion.php');

	$conn = dbConexion(); 

	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	

	for($j = 0; $j < count($_REQUEST['cantidad']); $j++){
		//echo "hola mundo";
		//echo $_REQUEST['cantidad'][$j];
		$stmt = $conn->prepare("UPDATE carrito SET cantidad = :cantidad WHERE idUsuario = :idUsuario and idArticulo = :idArticulo");

		$stmt->bindParam(':idUsuario', $idUsuario);
		$stmt->bindParam(':idArticulo', $idArticulo);
		$stmt->bindParam(':cantidad', $cantidad);
		
		$idUsuario = $_REQUEST['usuario'];
		$idArticulo = $_REQUEST['articulo'][$j];
		$cantidad = $_REQUEST['cantidad'][$j];
		
		$stmt->execute();

	}

	/*require_once('conexion.php');

	$conn = dbConexion(); 

	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	

	$stmt = $conn->prepare("UPDATE carrito SET cantidad = :cantidad WHERE idUsuario = :idUsuario and idArticulo = :idArticulo");

	$stmt->bindParam(':idUsuario', $idUsuario);
	$stmt->bindParam(':idArticulo', $idArticulo);
	$stmt->bindParam(':cantidad', $cantidad);
	
	$idUsuario = $_REQUEST['usuario'];
	$idArticulo = $_REQUEST['articulo'];
	$cantidad = $_REQUEST['cantidad'];
	
	$stmt->execute();*/

	$conn = null;

?>