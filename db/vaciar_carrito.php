<?php
session_start();
	require_once('conexion.php');

	$conn = dbConexion(); 

	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	

	//Borrado de articulo del carrito
	
	$stmt = $conn->prepare("DELETE FROM carrito WHERE idUsuario = :idUsuario");

	$stmt->bindParam(':idUsuario', $idUsuario);

	$idUsuario = $_SESSION['idusuario'];


	$stmt->execute();

	$conn = null;
	header('Location:'.$_SERVER["HTTP_REFERER"]);
?>