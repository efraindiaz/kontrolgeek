<?php 
	function dbConexion(){
		$conn =	null;
	 	$host = 'localhost';
	 	$db = 	'kontrolgeek';
	 	$user = 'root';
	 	$pwd = 	'';
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