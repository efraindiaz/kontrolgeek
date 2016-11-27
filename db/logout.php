<?php
	 
	session_start();
	unset ($_SESSION['nombre']);
	unset ($_SESSION['loggedin']);
	unset ($_SESSION['idusuario']);
	session_destroy();
	header('Location: ../');
	 
?>