<?php
	 
	session_start();
	unset ($_SESSION['loggedin']);
	unset ($_SESSION['idusuario']);
	unset ($_SESSION['nombre']);
	session_destroy();
	header('Location: ../');
	 
?>