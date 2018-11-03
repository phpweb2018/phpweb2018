<?php
$desabilita_exclui = 'disabled';
require 'classes/tarefa.php';
require 'telas/genericas/confirma.php';
$tar = new Tarefa();
if (isset($_GET['id_tarefa'])) {
  $tar = $tar->consultaTarefa($_GET['id_tarefa']);
  if ($tar->getTare_codi() != '--') {
    $desabilita_exclui = '';
  }
  $tar->setTare_codi($_GET['id_tarefa']);
}
$rad = $tar->getTare_stat();
?>

<form method="POST" action="classes/tarefa.php" id='tarefas'>
    
    <div class="form-group row">
        <div class="col-md-3 align-self-end">
          <button type="submit" class="btn btn-info btn-md btn3d" name="op" value="novoCodigo">
            <img src="img/novo.png" width="23" height="23">
            Novo
          </button>
        </div>
    </div>
    <div class="form-group row">
        <label for="tare_codi" class="col-sm-2 col-form-label">Nº</label>
        <div class="col-sm-1">
        <input type="text" class="form-control" name="tare_codi" id="tare_codi" readonly  value="<?= $tar->getTare_codi() ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="tare_titu" class="col-sm-2 col-form-label">Título</label>
        <div class="col-sm-5">
        <input type="text" class="form-control" name="tare_titu" id="tare_titu" value="<?= $tar->getTare_titu() ?>" placeholder="Título" maxlength="50" >
        </div>
    </div>
    <div class="form-group row">
        
        <label for="tare_desc" class="col-sm-2 col-form-label">Descrição</label>
        <div class="col-sm-8">
            <textarea class="form-control" id="tare_desc-text"  name="tare_desc"   placeholder="Descrição" maxlength="400"><?= $tar->getTare_desc() ?></textarea>
        </div>
    </div>
    <fieldset class="form-group">
        <div class="row">
        <legend class="col-form-label col-sm-2 pt-0">Status</legend>
        <div class="col-sm-5">
            <div class="form-check-inline">
            <input class="form-check-input" type="radio" name="tare_stat" id="Pendente" value="P" <?php echo ($rad == 'P' ? 'checked' : ''); ?>>
            <label class="form-check-label" for="tare_stat1">
                Pendente
            </label>
            </div>
            <div class="form-check-inline">
            <input class="form-check-input" type="radio" name="tare_stat" id="Andamento" value="A" <?php echo ($rad == 'A' ? 'checked' : ''); ?>>
            <label class="form-check-label" for="tare_stat2">
                Em Andamento
            </label>
            </div>
            <div class="form-check-inline">
            <input class="form-check-input" type="radio" name="tare_stat" id="Concluida" value="C" <?php echo ($rad == 'C' ? 'checked' : ''); ?>>
            <label class="form-check-label" for="tare_stat2">
                Concluída
            </label>
            </div> 
        </div>
        </div>
    </fieldset>
    <div class="col-md-3 ml-auto">
        <button type="submit" class="btn btn-info btn-md btn3d"  name="op" value="gravarTarefa">
          <img src="img/salvar.png" width="23" height="23">
          Gravar
        </button>
        <button type="button" class="btn btn-danger btn-md btn3d"  data-toggle="modal" data-target="#confirma" <?= $desabilita_exclui ?> >
          <img src="img/excluir.png" width="23" height="23">
          Excluir
        </button>
    </div>
 
    
</form>

