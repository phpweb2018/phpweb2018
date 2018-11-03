<?php
    if (isset($_SESSION['tp_tela'] )) {
        if ($_SESSION['tp_tela']  == 'cad_tarefas') {
            require('telas/cadastros/tela_tarefas.php');
        }
    }
?>