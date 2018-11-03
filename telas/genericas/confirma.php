<?php
  if(isset($_GET['tp_tela'])){
    if (buscaTitulo($_GET['tp_tela']) == 'Tarefas') {
        if (isset($_GET['id_tarefa'])) {
            $tare_codi = $_GET['id_tarefa']; 
            $pergunta = 'Confirma a exclusão da tarefa <b>'.$tare_codi.'</b> ?';   
        }
    }
  } else {
    $tare_codi = '--';  
    $pergunta  = '--';
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
      
        <form method="POST" action="classes/tarefa.php?id_tarefa=<?php echo $tare_codi;?>" >
            <button type="submit" class="btn btn-primary" name="op" value="excluirTarefa" >Sim</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
        </form>    
      </div>
    </div>
  </div>
</div>
