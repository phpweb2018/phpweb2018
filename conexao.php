<?php

	$host = "mysql762.umbler.com";
	$usua = "leonaldo";
	$senha = "hass2018";
	$bd = "hass";
	
	$mysqli = new mysqli($host,$usua,$senha,$bd);
	
	
	if($bd->connecti_errno){

		session_start();
		$_SESSION['tipo'] = 'Banco de Dados.';
		$_SESSION['logado'] = false;
		$_SESSION['mensagem'] = 'Não foi possível conectar com o banco de dados: '.$e->getMessage();
		header("Location: index.php");
	}

?>