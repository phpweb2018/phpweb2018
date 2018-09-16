<?php   
	session_start();
    if (isset($_SESSION['logado'] )) {
      if ($_SESSION['logado']  == true) {
        if (strpos($_SERVER['PHP_SELF'], 'index.php') !== false) {
          header("Location: menu.php");
        }
      }
    }
?>