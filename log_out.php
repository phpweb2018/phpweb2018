<?php
	session_start();
	$_SESSION['usuario'] = '';
	$_SESSION['logado']  = false;
	header("Location: index.php");
	session_destroy();
?>