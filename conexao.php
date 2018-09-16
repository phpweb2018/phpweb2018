<?php
	try {
		$bd = "pgsql:"
		    . "host=ec2-54-83-50-145.compute-1.amazonaws.com;"
		    . "dbname=d1j91br7qn9g5i;"
		    . "user=vasysywxnlwooi;"
		    . "port=5432;"
		    . "sslmode=require;"
		    . "password=2919bf6469b71cab763a5e1990cad2de481927ecb7614c9577e899e811d774a6";

		$bd = new PDO($bd);
	} catch (PDOException $e) {

		session_start();
		$_SESSION['tipo'] = 'Banco de Dados.';
		$_SESSION['logado'] = false;
		$_SESSION['mensagem'] = 'Não foi possível conectar com o banco de dados: '.$e->getMessage();
		//die($_SESSION['mensagem']);
		header("Location: index.php");
	}

?>