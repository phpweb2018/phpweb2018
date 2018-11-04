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
                    <th>Ticket</th>
                    <th>Titulo</th>
                    <th>Cliente</th>
                    <th>Responsável</th>
                    <th>Departamento</th>
                    <th>Prioridade</th>
                    <th>Situação</th>
                    <th>Criação</th>
                    <th>Ação</th>
                </tr>
                </thead>
                <?php
                   $tickets = array();
                   // $Tare = new Tarefa();
                   $tickets = $tik->consultaTickets();
                   if($tickets != null){
                    foreach($tickets as $chave => $ticket) {
                        echo
                        "<tbody>
                            <tr>
                            <td>{$ticket->getTick_ID()}</td>
                            <td>{$ticket->getTick_titulo()}</td>
                            <td>{$ticket->getTick_cliente()}</td>
                            <td>{$ticket->getTick_responsavel()}</td>
                            <td>{$ticket->getTick_departamento()}</td>
                            <td>{$ticket->getTick_prioridade()}</td>
                            <td>{$ticket->getTick_situacao()}</td>
                            <td>{$ticket->getTick_criacao()}</td>
                            <td>
                            <a href='menu.php?tp_tela=cad_tickets&id_ticket={$ticket->getTick_ID()}' class='btn btn-block btn-sm btn-default'>
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