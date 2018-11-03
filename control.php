<?php
	function informadoUsuario($usuario) {
		if (!(empty($usuario) || $usuario == '')) {
			return true;
		}		
		return false;	
	}

	function existeUsuario($usuario) {
    try{
		include 'conexao.php';
    $query = $bd->prepare("select * from usua where usua_nome = '{$usuario}' ;");
    $query->execute();
    while ($usua = $query->fetchObject()) {
      if ($usua->usua_nome == $usuario && $usua->usua_ativ == true ) {
        return true;
      } else {
        return false;
      }
    }
    }catch(PDOException  $e ){
      return false;
    }
	}

	function senhaValida($usuario,$senha) {
    
    try{
		include 'conexao.php';
    $query = $bd->prepare("select * from usua 
                           where
                           usua_nome = '{$usuario}' and
                           usua_senh = '{$senha}' ;");
    $query->execute();
    while ($usua = $query->fetchObject()) {
      if ($usua->usua_nome == $usuario && $usua->usua_senh == $senha ) {
        return true;
      } else {
        return false;
      }
    }
    }catch(PDOException  $e ){
      return false;
    }
	}

?>