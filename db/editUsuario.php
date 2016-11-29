
<?php
session_start();
require_once('conexion.php');

$conn = dbConexion();
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$idUser = $_SESSION['idusuario'];//obtengo el id del usuario que esta logueado

//request de los inputs para la tabla usuario//
$nombre = $_REQUEST['nombre'];
$apellido = $_REQUEST['apellido'];
$nombreU = $_REQUEST['nombreU'];
$email = $_REQUEST['email'];
$telefono = $_REQUEST['telefono'];
$password = $_REQUEST['passwordHidden'];
$passNew = $_REQUEST['password'];
$passNew2 = $_REQUEST['passwordC'];
//
//request de los inputs para la tabla direccion_usuario//
$ciudad = $_REQUEST['ciudad'];
$estado = $_REQUEST['estado'];
$codigoP = $_REQUEST['codigop'];
$colonia = $_REQUEST['colonia'];
$calle = $_REQUEST['calle'];
$nInterior = $_REQUEST['NuInterior'];
$nExterior = $_REQUEST['NuExterior'];

if ($passNew == "" && $passNew2 == "") {
	$sqlU = "UPDATE usuario SET nombre='$nombre', apellido='$apellido', nombreUsuario='$nombreU', email='$email', telefono='$telefono', password='$password' WHERE id = '$idUser'";//update tabla usuario

}else{
	$sqlU = "UPDATE usuario SET nombre='$nombre', apellido='$apellido', nombreUsuario='$nombreU', email='$email', telefono='$telefono', password='$passNew' WHERE id = '$idUser'";//update tabla usuario
}

$stmtU = $conn->prepare($sqlU);
$stmtU->execute();

$sqlD = "UPDATE direccion_usuario SET ciudad='$ciudad', estado='$estado', codigo_postal='$codigoP', colonia='$colonia', calle='$calle', Nu_interior='$nInterior', Nu_exterior='$nExterior' WHERE id_usuario = '$idUser'";//update tabla direccion_usuario
$stmtD = $conn->prepare($sqlD);
$stmtD->execute();

$_SESSION['nombre'] = $nombre;

$conn = null;
?>