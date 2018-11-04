<?php
    const tare = 'Tarefas';
    const grup = 'Grupos';
    const tick = 'Tickets';
    
    function buscaTitulo($tp_tela){
      switch ($tp_tela) {
        case 'cad_tarefas':
            return tare;
            break;
        case 'cad_grupos':
            return grup;
            break;
        case 'cad_tickets':
            return tick;
            break;
      }

    }
?>