<?php
    $usuario_nome = 'padrao';
    if (isset($_SESSION['usuario'] )) {
      if ($_SESSION['usuario']  == 'master') {
        $usuario_nome = 'master';  
      }
      if ($_SESSION['usuario']  == 'admin') {
        $usuario_nome = 'admin';  
      }
    }
?>

<nav class="navbar navbar-fixed-top navbar-expand-lg bg-primary" style="margin-bottom: 0px;">
  <button type="button" id="sidebarCollapse" class="btn btn-info btn-md btn3d">
    <i class="fas fa-align-left"><img src="img/menu.png" width="20" height="20"></i>
    menu
  </button>
  <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-targer="#navbarSite">
          <span class="navbar-toggler-icon"></span>    
      </button>
      <ul class="navbar-nav ml-auto">
          <div class="container">
              <div class="col-md-6 col-lg-3 ml-auto admin-bar hidden-sm-down">
                  <nav class="nav nav-inline">
                      <img class="rounded-circle" src="img/hass/team/<?php echo $usuario_nome?>.jpg"  width="40" height="40" ></a> 
                  </nav>
              </div>
          </div>
      </ul>
  </div>
</nav> 