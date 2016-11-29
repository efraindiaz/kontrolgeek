
<?php
session_start();
require_once('conexion.php');

$conn = dbConexion();
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$idUser = $_SESSION['idusuario'];//obtengo el id del usuario que esta logueado

	$sqlU = "DELETE FROM usuario WHERE id = '$idUser'";
	$stmtU = $conn->prepare($sqlU);
	$stmtU->execute();

	$sqlD = "DELETE FROM direccion_usuario WHERE id_usuario = '$idUser'";
	$stmtD = $conn->prepare($sqlD);
	$stmtD->execute();

	unset ($_SESSION['loggedin']);
	unset ($_SESSION['idusuario']);
	unset ($_SESSION['nombre']);
	session_destroy();
	header('Location: ../');

$conn = null;
?>