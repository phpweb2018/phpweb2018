<?php
$desabilita_exclui = 'disabled';
require 'classes/cliente.php';
require 'telas/genericas/confirma.php';
$tar = new Cliente();
if (isset($_GET['id_cliente'])) {
  $tar = $tar->consultaTarefa($_GET['id_cliente']);
  if ($tar->getTare_codi() != '--') {
    $desabilita_exclui = '';
  }
  $tar->setTare_codi($_GET['id_tarefa']);
}
//$rad = $tar->getTare_stat();
?>

<form method="POST" action="classes/clientes.php" id='clientes'>
    <div class="form-group row">
        <div class="col-md-3 align-self-end">
            <button type="submit" class="btn btn-info btn-md btn3d" name="op" value="novoCodigo">
            <img src="img/novo.png" width="23" height="23">
            Novo Cliente
            </button>
        </div>
    </div>
</form>
<form method="POST" action="classes/clientes.php" id='clientes'>
    <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Nº</label>
      <input type="text" class="form-control" id="validationDefault01" readonly placeholder="--" value="" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Nome</label>
      <input type="text" class="form-control" id="validationDefault02" placeholder="Nome" value="" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefaultUsername">Username</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2">@</span>
        </div>
        <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Username" aria-describedby="inputGroupPrepend2" required>
      </div>
    </div>
  </div>
    <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">First name</label>
      <input type="text" class="form-control" id="validationDefault01" placeholder="First name" value="Mark" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Last name</label>
      <input type="text" class="form-control" id="validationDefault02" placeholder="Last name" value="Otto" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefaultUsername">Username</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2">@</span>
        </div>
        <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Username" aria-describedby="inputGroupPrepend2" required>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">City</label>
      <input type="text" class="form-control" id="validationDefault03" placeholder="City" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault04">State</label>
      <input type="text" class="form-control" id="validationDefault04" placeholder="State" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault05">Zip</label>
      <input type="text" class="form-control" id="validationDefault05" placeholder="Zip" required>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Ativo
      </label>
    </div>
  </div>
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

