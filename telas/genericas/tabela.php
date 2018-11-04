<!-- DataTables Example -->
<div class="card mb-3">
    <div class="card-header">
        <h5>
            <?php
                if(isset($_GET['tp_tela'])){
                    echo buscaTitulo($_GET['tp_tela']);
                }else{
                    echo '--';
                }
            ?>
        </h5>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>Código</th>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Status</th>
                    <th>Consultar</th>
                </tr>
                </thead>
                <?php
                   
 
                   $tarefas = array();
                   // $Tare = new Tarefa();
                   $tarefas = $tar->consultaTarefas();
                   if($tarefas != null){
                    foreach($tarefas as $chave => $tarefa) {
                        echo
                        "<tbody>
                            <tr>
                            <td>{$tarefa->getTare_codi()}</td>
                            <td>{$tarefa->getTare_titu()}</td>
                            <td>{$tarefa->getTare_desc()}</td>
                            <td>{$tarefa->getTare_stat()}</td>
                            <td>
                            <a href='menu.php?tp_tela=cad_tarefas&id_tarefa={$tarefa->getTare_codi()}' class='btn btn-block btn-sm btn-default'>
                            <img width='23' height='23' src='https://png.icons8.com/color/48/cccccc/search.png'> Detalhar</a></td>
                            </tr>
                        </tbody>";
                    }
                   }
                   
                ?>
			</table>
		</div>
			
	</div>
</div>