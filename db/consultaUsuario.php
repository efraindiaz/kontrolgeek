
<?php
session_start();

require_once('conexion.php');
$conn = dbConexion(); 

$idUser = $_SESSION['idusuario'];

$sql = "SELECT * FROM usuario WHERE id = '$idUser'";
$sqlDir = "SELECT * FROM direccion_usuario WHERE id_usuario = '$idUser'";

$result = $conn->query($sql);
$rows = $result->fetchAll();

foreach ($rows as $row){
       $nombre = $row["nombre"];
       $apellido = $row["apellido"];
       $nombreUsuario = $row["nombreUsuario"];
       $email = $row["email"];
       $telefono = $row["telefono"];
       $pass = $row["password"];
}

$resultDir = $conn->query($sqlDir);
$rowsDir = $resultDir->fetchAll();

foreach ($rowsDir as $rowDir){
        $ciudad = $rowDir["ciudad"];
        $estado = $rowDir["estado"]; 
        $codigo_postal = $rowDir["codigo_postal"];
        $colonia = $rowDir["colonia"];
        $calle = $rowDir["calle"];
        $Nu_interior = $rowDir["Nu_interior"];
        $Nu_exterior = $rowDir["Nu_exterior"];
    }

 $datos = array(
        'nombre' => $nombre,
        'apellido' => $apellido, 
        'nombreUsuario' => $nombreUsuario, 
        'email' => $email,
        'telefono' => $telefono,
        'password' => $pass,
        'ciudad' => $ciudad,
        'estado' => $estado, 
        'codigo_postal' => $codigo_postal, 
        'colonia' => $colonia,
        'calle' => $calle,
        'Nu_interior' => $Nu_interior,
        'Nu_exterior' => $Nu_exterior,
        'password' => $pass
        );

        echo json_encode($datos, JSON_FORCE_OBJECT);

$conn = null;
?>