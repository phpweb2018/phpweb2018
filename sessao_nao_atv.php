<?php
 	session_start();
	if(isset($_SESSION['logado'])){
		if ($_SESSION['logado']  == false || $_SESSION['usuario']  == '') {
			$_SESSION['tipo'] = 'Login.';
			$_SESSION['mensagem'] = 'Para acessar o sistema é necessário primeiro efetuar o login.';
			header("Location: index.php");
		} 
	} 
?>