
<?php 
	//Conexión a la base de datos
	function dbConexion(){
		$conn =	null;
	 	$host = 'localhost';
	 	$db = 	'campaign';
	 	$user = 'root';
	 	$pwd = 	'';
		try {
		   	$conn = new PDO('mysql:host='.$host.';dbname='.$db, $user, $pwd);
			//echo 'Connected succesfully.<br>';
		}
		catch (PDOException $e) {
			echo '<p>Cannot connect to database !!</p>';
		    exit;
		}
		return $conn;	
	}
 ?>