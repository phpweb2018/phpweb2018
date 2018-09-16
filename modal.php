    <?php
    if(isset($_SESSION['tipo']) && isset($_SESSION['mensagem'])){
        if($_SESSION['tipo'] != "" && $_SESSION['mensagem'] != "") {
            echo "
                <script type='text/javascript'>
          $(document).ready(function(){
              $('#myModal').modal('show');
          });</script>
                 ";
        }
    }
?>   
    
    <!-- Modal -->
    <div class="modal fade" id="myModal">
    	<div class="modal-dialog modal-dialog-centered">
        	<div class="modal-content">
        		<div class="modal-header">
          		<h4 class="modal-title">
          			<?php 
        				echo $_SESSION['tipo'];
          			?>
          		</h4>
          		<button type="button" class="close" data-dismiss="modal">&times;</button>
        	</div>
            <div class="modal-body">
            	<?php  
    				  echo $_SESSION['mensagem'];
            	?>
            </div>
            <div class="modal-footer">
        		<button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
        	</div>
        	</div>
        </div>
    </div>


    <?php  
    	if(isset($_SESSION['tipo']) && isset($_SESSION['mensagem'])){
    		if($_SESSION['tipo'] != "" && $_SESSION['mensagem'] != "") {
    			$_SESSION['mensagem'] = "";
    			$_SESSION['tipo'] = "";
    			$_SESSION['logado'] = false;
    		}
    	}
    ?>