<?php
  if(isset($_GET['tp_tela'])){
    if (buscaTitulo($_GET['tp_tela']) == 'Tarefas') {
        if (isset($_GET['id_tarefa'])) {
            $codi = $_GET['id_tarefa']; 
            $pergunta = 'Confirma a exclusão da tarefa <b>'.$codi.'</b> ?'; 
            $action = 'classes/tarefa.php?id_tarefa='.$codi;  
            $operacao = 'excluirTarefa';
        }
    } elseif (buscaTitulo($_GET['tp_tela']) == 'Clientes') {
      if (isset($_GET['id_cliente'])) {
          $codi = $_GET['id_cliente']; 
          $pergunta = 'Confirma a exclusão do cliente <b>'.$codi.'</b> ?';  
          $action = 'classes/cliente.php?id_cliente='.$codi;  
          $operacao = 'excluirCliente'; 
      }
  }
  } else {
    $codi = '--';  
    $pergunta  = '--';
    $action = '';  
    $operacao = '';
  }
?>   
  

<div class="modal fade" id="confirma" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" data-easein="pulse" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Pergunta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo $pergunta;?>
      </div>
      <div class="modal-footer">
      
        <form method="POST" action="<?php echo $action;?>" >
            <button type="submit" class="btn btn-primary" name="op" value="<?php echo $operacao;?>" >Sim</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
        </form>    
      </div>
    </div>
  </div>
</div>
