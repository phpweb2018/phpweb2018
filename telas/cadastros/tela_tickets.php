<?php
$desabilita_exclui = 'disabled';
require 'classes/ticket.php';
require 'telas/genericas/confirma.php';
$tik = new Ticket();
if (isset($_GET['id_ticket'])) {
  $tik = $tik->consultaTicket($_GET['id_ticket']);
  if ($tik->getTick_ID() != '--') {
    $desabilita_exclui = '';
  }
  $tik->setTick_ID($_GET['id_ticket']);
}
$combo = $tik->getTick_prioridade();
?>

<form method="POST" action="classes/ticket.php" id='tickets'>
    
    <div class="form-group row">
        <div class="col-md-3 align-self-end">
          <button type="submit" class="btn btn-info btn-md btn3d" name="op" value="novoCodigo">
            <img src="img/novo.png" width="23" height="23">
            Novo Ticket
          </button>
        </div>
    </div>
    <div class="form-group row">
        <label for="tick_ID" class="col-sm-2 col-form-label">Ticket Nº</label>
        <div class="col-sm-1">
        <input type="text" class="form-control" name="tick_ID" id="tick_ID" readonly  value="<?= $tik->getTick_ID() ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="tick_titulo" class="col-sm-2 col-form-label">Título</label>
        <div class="col-sm-6">
        <input type="text" class="form-control" name="tick_titulo" id="tick_titulo" value="<?= $tik->getTick_titulo() ?>" placeholder="Título" maxlength="100" >
        </div>
    </div>
    <div class="form-group row">
        <label for="tick_cliente" class="col-sm-2 col-form-label">Cliente</label>
        <div class="col-sm-8">
            <select class="custom-select" id=combo-ticket name="tick_cliente">
                <option selected>Selecione um Cliente</option>
                <?php $w=0;
                while($w<10){
                    $w++;
                    echo "<option value='{$w}'>Opção {$w}</option>";
                }
                ?>
            </select>
        </div>
    </div>
    <fieldset class="form-group">
        <div class="row">
        <legend class="col-form-label col-sm-2 pt-0">Status</legend>
        <div class="col-sm-5">
            <div class="form-check-inline">
            <input class="form-check-input" type="radio" name="tare_stat" id="Pendente" value="P" >
            <label class="form-check-label" for="tare_stat1">
                Pendente
            </label>
            </div>
            <div class="form-check-inline">
            <input class="form-check-input" type="radio" name="tare_stat" id="Andamento" value="A" >
            <label class="form-check-label" for="tare_stat2">
                Em Andamento
            </label>
            </div>
            <div class="form-check-inline">
            <input class="form-check-input" type="radio" name="tare_stat" id="Concluida" value="C" >
            <label class="form-check-label" for="tare_stat2">
                Concluída
            </label>
            </div> 
        </div>
        </div>
    </fieldset>
    <div class="col-md-3 ml-auto">
        <button type="submit" class="btn btn-info btn-md btn3d"  name="op" value="gravarTicket">
          <img src="img/salvar.png" width="23" height="23">
          Gravar
        </button>
        <button type="button" class="btn btn-danger btn-md btn3d"  data-toggle="modal" data-target="#confirma" <?= $desabilita_exclui ?> >
          <img src="img/excluir.png" width="23" height="23">
          Excluir
        </button>
    </div>   
   
</form>