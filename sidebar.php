<div class="wrapper">
    <!-- Sidebar  -->
    <?php include 'constantes.php';?>
    <nav id="sidebar" class="active">
        <div class="sidebar-header">
            <a href="menu.php">
                <h3>Hass Soluções</h3>
                <strong><img src="img/hass/Logo.png" width="70" height="70" alt="Logo Hass" class="rounded"></strong>
            </a>
        </div>
        <ul class="list-unstyled components">
            <li>
                <a href="">
                <i class="fas fa-briefcase">
                    <img src="img/kanban.png" width="23" height="23">
                </i>
                    Kanban
                </a>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fas fa-copy">
                        <img src="img/cad.png" width="23" height="23">
                    </i>
                    Cadastros
                </a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="menu.php?tp_tela=cad_tarefas">Tarefas</a>
                    </li>
                    <li>
                        <a href="menu.php?tp_tela=cad_grupos">Grupos</a>
                    </li> 
                    <li>
                        <a href="menu.php?tp_tela=cad_clientes">Clientes</a>
                    </li>
                    <li>
                        <a href="#">Usuários</a>
                    </li>                    
                    <li>
                        <a href="menu.php?tp_tela=cad_tickets">Ticket's</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-image">
                        <img src="img/config.png" width="23" height="23">
                    </i>
                    Configurações
                </a>
            </li>
        </ul>

        <ul class="list-unstyled CTAs">
            <li>
                <form method="POST" action="log_out.php" >
                  <div class="col-12 text-center">
                    <button type="submit" class="btn btn-block btn-info btn-sm btn3d">
                      <img src="img/sair.png" width="23" height="23">
                      Sair
                    </button>
                  </div>
                </form>   
            </li>
        </ul>
    </nav>

    <!-- Conteudo  -->
   
    <div id="content">
    <?php
        if(isset($_GET['tp_tela'])){
            if (substr($_GET['tp_tela'], 0, 3) == 'cad'){
                include 'tab_control.php';
            }
        }
    ?>
    </div>
</div>

<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
</script>



