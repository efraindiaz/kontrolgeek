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

			$queryLast = "SELECT id FROM usuario ORDER BY id DESC LIMIT 1;";
			$result = $conn->query($queryLast);
			$rows = $result->fetchAll();

			foreach ($rows as $row){
				$id = $row['id']; }

			$registro = $conn->prepare("INSERT INTO direccion_usuario (id_usuario,ciudad,estado,codigo_postal,colonia,calle,Nu_interior,Nu_exterior) VALUES (:id_usuario, :ciudad, :estado, :codigo_postal, :colonia, :calle, :Nu_interior, :Nu_exterior)");

			$registro->bindParam(':id_usuario', $id);
			$registro->bindParam(':ciudad', $Ciudad);
			$registro->bindParam(':estado', $Estado);
			$registro->bindParam(':codigo_postal', $CodigoP);
			$registro->bindParam(':colonia', $Colonia);
			$registro->bindParam(':calle',$Calle);
			$registro->bindParam(':Nu_interior',$Nuinterior);
			$registro->bindParam(':Nu_exterior',$Nuexterior);

			$Ciudad = $_REQUEST["ciudad"];
			$Estado = $_REQUEST["estado"];
			$CodigoP = $_REQUEST["codigop"];
			$Colonia = $_REQUEST["colonia"];
			$Calle = $_REQUEST["calle"];
			$Nuinterior = $_REQUEST["NuInterior"];
			$Nuexterior = $_REQUEST["NuExterior"];

			$registro->execute();
			$conn = null;
?>