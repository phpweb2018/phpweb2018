<?php
    const tare = 'Tarefas';
    const grup = 'Grupos';
    
    function buscaTitulo($tp_tela){
      switch ($tp_tela) {
        case 'cad_tarefas':
            return tare;
            break;
        case 'cad_grupos':
            return grup;
            break;
      }

    }
?>