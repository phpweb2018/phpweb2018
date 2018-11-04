<?php
    if (isset($_SESSION['tp_tela'] )) {
        if ($_SESSION['tp_tela']  == 'cad_tarefas') {
            require('telas/cadastros/tela_tarefas.php');
        }
        if ($_SESSION['tp_tela'] == 'cad_clientes'){
            require('telas/cadastros/tela_clientes.php');
        }
        if ($_SESSION['tp_tela'] == 'cad_tickets'){
            require('telas/cadastros/tela_tickets.php');
        }
    }
?>