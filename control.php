<?php
	function informadoUsuario($usuario) {
		if (!(empty($usuario) || $usuario == '')) {
			return true;
		}		
		return false;	
	}

	function existeUsuario($usuario) {
		include 'conexao.php';
		$consulta = $bd->query("select * from usua");
		if ($consulta->num_rows > 0) {
			while($usua = $consulta->fetch_object()) {
				if ($usua->usua_nome == $usuario && $usua->usua_ativ == 1 ) {
					return true;
				}        
    		}
		} else {
			return false;
		}
	}

	function senhaValida($usuario,$senha) {
		include 'conexao.php';
		$consulta_senha = $bd->query(" select * from usua");	
		if ($consulta_senha->num_rows > 0) {
			while($usua = $consulta_senha->fetch_object()) {
				if ($usua->usua_nome == $usuario && $usua->usua_senh == $senha ) {
					return true;
				}        
    		}
		} else {
			return false;
		}
	}

?>