
<!-- tab control -->
<section id="tabs">
	<div class="container-fluid">
		<div class="col-xs-12 ">
			<nav>
				<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
					<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Cadastro</a>
					<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Consulta</a>
				</div>
			</nav>
			<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
				<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
					<?php
						require 'telas/cadastros/tela_tarefas.php';
					?>
				</div>
				<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
					<?php
						require 'telas/genericas/tabela.php';
					?>
				</div>
			</div>	
		</div>
	</div>
</section>
