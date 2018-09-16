<!DOCTYPE  html>
<html lang="pt-br">
<head>
    <?php include 'sessao_nao_atv.php';?>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" >

    <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/style.css">


    <title>Entre em contato</title>
</head>
<body> 

   
  <?php include 'cabecalho.php'; ?>

  <div class="container">
  	<div class="row">
        <div class="col-md-6 col-md-offset-3">
          <div class="well well-sm">
            <form class="form-horizontal" action="" method="post">
            <fieldset>
              <legend class="text-center">Entre em contato conosco</legend>
      
              <!-- Name input-->
              <div class="form-group">
                <label class="col-md-3 control-label" for="name">Nome</label>
                <div class="col-md-9">
                  <input id="name" name="name" type="text" placeholder="Informe seu nome" class="form-control">
                </div>
              </div>
      
              <!-- Email input-->
              <div class="form-group">
                <label class="col-md-3 control-label" for="email">E-mail</label>
                <div class="col-md-9">
                  <input id="email" name="email" type="text" placeholder="Informe seu e-mail" class="form-control">
                </div>
              </div>
      
              <!-- Message body -->
              <div class="form-group">
                <label class="col-md-3 control-label" for="message">Sua mensagem</label>
                <div class="col-md-9">
                  <textarea class="form-control" id="message" name="message" placeholder="Por favor informe sua mensagem aqui" rows="5"></textarea>
                </div>
              </div>
      
              <!-- Form actions -->
              <div class="form-group">
                <div class="col-md-12 text-right">
                  <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                </div>
              </div>
            </fieldset>
            </form>
          </div>
        </div>
  	</div>
  </div>

  

    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>


</body>