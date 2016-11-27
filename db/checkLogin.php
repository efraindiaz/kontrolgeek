<?php
session_start();
?>

<?php

require_once('conexion.php');
$conn = dbConexion(); 

$nombre = $_REQUEST['NombreU'];
$password = $_REQUEST['pass']; 

$sql = "SELECT * FROM usuario WHERE nombreUsuario = '$nombre'";

$result = $conn->query($sql);
$rows = $result->fetchAll();

foreach ($rows as $row){

	if($nombre == $row['nombreUsuario'] && $password == $row['password'])
    {
        $_SESSION['loggedin'] = true;
        $_SESSION['idusuario'] = $row['id'];
        $_SESSION['nombre'] = $row['nombre'];

        echo "Bienvenido! " . $_SESSION['nombre'];
        header('Location: ../');
	}
	else{
        print "Usuario o contraseña incorrectos";
    } 
}
$conn = null;
?>