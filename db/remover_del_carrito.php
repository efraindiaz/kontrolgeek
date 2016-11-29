<?php
	require_once('conexion.php');

	$conn = dbConexion(); 

	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	

	//Borrado de articulo del carrito
	
	$stmt = $conn->prepare("DELETE FROM carrito WHERE idUsuario = :idUsuario AND idArticulo = :idArticulo ");

	$stmt->bindParam(':idUsuario', $idUsuario);
	$stmt->bindParam(':idArticulo', $idArticulo);

	$idUsuario = $_REQUEST["idUser"];
	$idArticulo = $_REQUEST["idArt"];


	$stmt->execute();

	$conn = null;
	header('Location:'.$_SERVER["HTTP_REFERER"]);
?>