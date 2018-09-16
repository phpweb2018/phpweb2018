<?php

	function informadoUsuario($usuario) {
		if (!(empty($usuario) || $usuario == '')) {
			return true;
		}		
		return false;	
	}

	function existeUsuario($usuario) {
		include 'conexao.php';
		$query = $bd->prepare('select case when count(*) > 0 then true else false end as existe_usua 
								from usua
								where usua_nome = :nome ');	
		$query->bindParam(':nome',$usuario);
		$existe = $query->execute(); 
		while ($result = $query->fetch()) 
			 return $result['existe_usua'];
	}

	function senhaValida($usuario,$senha) {
		include 'conexao.php';
		$query = $bd->prepare('select case when count(*) > 0 then true else false end as usua_senh_validos 
								from usua
								where usua_nome = :nome and usua_senh = :senha ');	
		$query->bindParam(':nome',$usuario);
		$query->bindParam(':senha',$senha);
		$existe = $query->execute(); 
		while ($result = $query->fetch()) 
			 return $result['usua_senh_validos'];
	}

?>