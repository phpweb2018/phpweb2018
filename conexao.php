 <?php

$host = 'localhost:3307';
$user = 'root';
$password = '';
$database = 'php2018';

$bd = new mysqli($host,$user,$password,$database);
$bd->set_charset('utf-8');

if ($bd->connect_errno) {
    session_start();
	$_SESSION['tipo'] = 'Banco de Dados.';
	$_SESSION['logado'] = false;
	$_SESSION['mensagem'] = 'Não foi possível conectar com o banco de dados: '.$e->getMessage();
	//die($_SESSION['mensagem']);
	header("Location: index.php");
}
// leonaldo lindo e gostoso
?> 

