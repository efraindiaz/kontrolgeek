<?php
		require_once('conexion.php');

		$conn = dbConexion();
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	

			$stmt = $conn->prepare("INSERT INTO usuario (nombre,apellido,nombreUsuario,email,telefono,password) VALUES (:nombre, :apellido, :nombreUsuario, :email, :telefono, :pass)");

			$stmt->bindParam(':nombre', $Nombre);
			$stmt->bindParam(':apellido', $Apellido);
			$stmt->bindParam(':nombreUsuario', $nombreU);
			$stmt->bindParam(':email', $Email);
			$stmt->bindParam(':telefono', $Telefono);
			$stmt->bindParam(':pass',$Pass);

			$Nombre = $_REQUEST["nombre"];
			$Apellido = $_REQUEST["apellido"];
			$nombreU = $_REQUEST["nombreU"];
			$Email = $_REQUEST["email"];
			$Telefono = $_REQUEST["telefono"];
			$Pass = $_REQUEST["password"];

			$stmt->execute();
			$conn = null;
			echo $Nombre;
?>