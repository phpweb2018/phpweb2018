<?php
	
	include 'control.php';

	session_start();


	$usuario = $_POST['usuario'];
	$senha   = $_POST['senha'];


	if (!informadoUsuario($usuario)) {
		$_SESSION['tipo'] = 'Usuário Não Informado.';
		$_SESSION['logado'] = false;
		$_SESSION['mensagem'] = 'Favor informar um usuário e tente novamente.';
		header("Location: index.php");
	} elseif (!existeUsuario($usuario)) {
		$_SESSION['tipo'] = 'Usuário Inválido.';
		$_SESSION['logado'] = false;
		$_SESSION['mensagem'] = 'Usuário <b>'.$usuario.'</b> não está cadastrado, verifique e tente novamente.';
		header("Location: index.php");
	}  elseif (!senhaValida($usuario,$senha,$usuarios)) {
		$_SESSION['tipo'] = 'Senha Inválida.';
		$_SESSION['logado'] = false;
		$_SESSION['mensagem'] = 'Favor verifique a senha e tente novamente.';
		header("Location: index.php");
	} else {
		$_SESSION['logado'] = true;
		$_SESSION['usuario'] = $usuario;
		header("Location: menu.php");

	}

?>