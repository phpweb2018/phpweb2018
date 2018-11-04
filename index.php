<!DOCTYPE  html>
<html lang="pt-br">
<head>
  	<meta charset="utf-8">
  	<?php include 'control.php';?>
  	<?php include 'sessao_atv.php';?>
    <link rel="icon" href="img/hass/Logo.png">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" >

    <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">

    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>

    <link rel="stylesheet" href="principal.css">

<body id="LoginForm">
	<div class="container">
			<div class="login-form">
				<div class="main-div">
    				<div class="panel">
  						<h1>Acesso</h1>
  						<br>
   					</div>
    				<form method="POST" action="acesso.php" id="Login" name="login">
        				<div class="form-group">
						<input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuário">
						</div>
						<div class="form-group">
						<input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
						</div>
        				<div class="forgot">
        				<a href="reset.html"></a>
						</div>
        				<button type="submit" class="btn btn-primary">Login</button>
					</form>
    			</div>
			</div>
		</div>

		<ui-view></ui-view>
 
		<script src="//api.handtalk.me/plugin/latest/handtalk.min.js"></script>
<script>
 var ht = new HT({
 token: "87dc0bd483d96255f95e43d4379ba52b"
 });
</script>

	<?php include("telas/genericas/modal.php");?>


    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>

</body>
</html>