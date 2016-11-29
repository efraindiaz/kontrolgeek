<?php 
	function dbConexion(){
		$conn =	null;
	 	$host = 'mysql.hostinger.mx';
	 	$db = 	'u958544180_kgeek';
	 	$user = 'u958544180_kgeek';
	 	$pwd = 	'holamundo';
		try {
		   	$conn = new PDO('mysql:host='.$host.';dbname='.$db, $user, $pwd);
		}
		catch (PDOException $e) {
			echo '<p>Cannot connect to database !!</p>';
		    exit;
		}
		return $conn;	
	}
 ?>