<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hass Soluções</title>
    <link rel="icon" href="<?php echo SSL_OR_NOT.APP_HOST; ?>/App/Views/Site/img/Logo.png">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo SSL_OR_NOT.APP_HOST; ?>/App/Views/Site/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo SSL_OR_NOT.APP_HOST; ?>/App/Views/Site/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="<?php echo SSL_OR_NOT.APP_HOST; ?>/App/Views/Site/css/agency.min.css" rel="stylesheet">
    <link href="<?php echo SSL_OR_NOT.APP_HOST; ?>/App/Views/Site/css/custumizacao.css" rel="stylesheet">

  </head>
  

    <script src="http://arquivos.weblibras.com.br/auto/wl-min.js"></script>
    <script>
       var wl = new WebLibras();
    </script>



  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container-fluid">
        <a  class="navbar-brand js-scroll-trigger" id="logo_navbar" href="#page-top">
        	<img src="<?php echo SSL_OR_NOT.APP_HOST; ?>/App/Views/Site/img/Logo.png" alt="logo" id="img_logo" />
        	Hass Soluções 
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Serviços</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Clientes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#team">Desenvolvedores</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contato</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo SSL_OR_NOT.APP_HOST; ?>/Usuario">Admin</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div  class="container-fluid"  >
        <div class="intro-text" id="msg_principal" >
          <div class="intro-heading text-uppercase"  >
            <br>
            <h1 class="display-1" id="slogan" > Sua segurança é o nosso compromisso </h1>
          </div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services" >Saiba Mais</a>
        </div>
      </div>
    </header>

    <!-- Serviços -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Nossos Serviços</h2>
            <h3 class="section-subheading text-muted">Confira o que temos para lhe oferecer.</h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <!-- <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i> -->
              <img class="img-fluid" alt="Responsive image" src="<?php echo SSL_OR_NOT.APP_HOST; ?>/App/Views/Site/img/camera-sem-escrita.png"></img>
            </span>
            <h4 class="service-heading">Produtos</h4>
            <p class="text-muted">Nossa empresa trabalha com produtos líderes de mercado, para oferecer a melhor qualidade para nossos clientes.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <!-- <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-laptop fa-stack-1x fa-inverse"></i> -->
               <img class="img-fluid" alt="Responsive image"  src="<?php echo SSL_OR_NOT.APP_HOST; ?>/App/Views/Site/img/infraestrutura-sem-escrita.png"></img> 
            </span>
            <h4 class="service-heading">Soluções em T.I.</h4>
            <p class="text-muted">Possuímos profissionais especializados para ofecer soluções e acessoria ao T.I. da sua empresa.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <!-- <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-lock fa-stack-1x fa-inverse"></i> -->
              <img class="img-fluid" alt="Responsive image"  src="<?php echo SSL_OR_NOT.APP_HOST; ?>/App/Views/Site/img/alarmes-sem-escrita.png"></img>
            </span>
            <h4 class="service-heading">Monitoramento</h4>
            <p class="text-muted">Temos as melhores técnologias do mercado, assegurando qualidade e automação em segurança residêncial e empresarial.</p>
          </div>
        </div>  
      </div>
    </section>
      

    <!-- Clientes -->
    <section  class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Clientes</h2>
            <h3 class="section-subheading text-muted" id="desenvolvedores" >Conheça alguns dos nossos clientes satisfeitos!</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo SSL_OR_NOT.APP_HOST; ?>/App/Views/Site/img/clientes/01-rendicollaPQ.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>RendiColla</h4>
              <p class="text-muted">Rendicolla Comércio, Exportação e Importação de Produtos Químicos</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo SSL_OR_NOT.APP_HOST; ?>/App/Views/Site/img/clientes/02-funerariadocarmoPQ.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Funerária Nossa Senhora do Carmo</h4>
              <p class="text-muted">Funerária Nossa Senhora do Carmo</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo SSL_OR_NOT.APP_HOST; ?>/App/Views/Site/img/clientes/03-SuperMercadoPalmeiraPQ.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Palmeiras Supermercados</h4>
              <p class="text-muted">Economia e Qualidade em um só lugar.</p>
            </div>
          </div>
          </div>
        </div>
      </div>
  </section>

    <!-- Team -->
    <section class="bg-light" id="team">
    <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Desenvolvedores</h2>
            <h3 class="section-subheading text-muted" id="desenvolvedores">Entre em contato com um dos nossos desenvolvedores</h3>
          </div>
        </div>
				
      <div class="row">
        <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="<?php echo SSL_OR_NOT.APP_HOST; ?>/App/Views/Site/img/team/2.jpg" alt="">
              <h4>Cristofer Viante Hass</h4>
              <p class="text-muted">Técnico de Infraestrutura</p>
              <ul class="list-inline social-buttons">
              	 <a href="https://www.facebook.com/cristofer.viantehass" target="_blank">
              	 	<img src="<?php echo SSL_OR_NOT.APP_HOST; ?>/App/Views/Site/img/social/facebook.png" id="social_imgs">
                 </a>
                 <a href="https://m.me/cristofer.viantehass" target="_blank">
              	 	<img src="<?php echo SSL_OR_NOT.APP_HOST; ?>/App/Views/Site/img/social/messenger.png" id="social_imgs">
                 </a>	
                 <a href="https://api.whatsapp.com/send?phone=554298251075&text=Olá Cristofer!" target="_blank">
              	 	<img src="<?php echo SSL_OR_NOT.APP_HOST; ?>/App/Views/Site/img/social/whatsapp.png" id="social_imgs">
                 </a>	
                 <a href="https://br.linkedin.com/in/cristofer-viante-hass-b8126b163" target="_blank">
              	 	<img src="<?php echo SSL_OR_NOT.APP_HOST; ?>/App/Views/Site/img/social/linkedin.png" id="social_imgs">
                 </a>	
              </ul>
            </div>
          </div>
          <div class="col-sm-4"> 
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="<?php echo SSL_OR_NOT.APP_HOST; ?>/App/Views/Site/img/team/3.jpg" alt="">
              <h4>Leonaldo F. Nunes Junior</h4>
              <p class="text-muted">Programador Júnior</p>
              <ul class="list-inline social-buttons">
              	 <a href="https://www.facebook.com/leonaldo.ferreiranunesjunior" target="_blank">
              	 	<img src="<?php echo SSL_OR_NOT.APP_HOST; ?>/App/Views/Site/img/social/facebook.png" id="social_imgs">
                 </a>
                 <a href="https://m.me/leonaldo.ferreiranunesjunior" target="_blank">
              	 	<img src="<?php echo SSL_OR_NOT.APP_HOST; ?>/App/Views/Site/img/social/messenger.png" id="social_imgs">
                 </a>	
                 <a href="https://api.whatsapp.com/send?phone=5542998404681&text=Olá Leonaldo!" target="_blank">
              	 	<img src="<?php echo SSL_OR_NOT.APP_HOST; ?>/App/Views/Site/img/social/whatsapp.png" id="social_imgs">
                 </a>		
                 <a href="#" target="_blank">
              	 	<img src="<?php echo SSL_OR_NOT.APP_HOST; ?>/App/Views/Site/img/social/linkedin.png" id="social_imgs">
                 </a>
                </li> 
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="<?php echo SSL_OR_NOT.APP_HOST; ?>/App/Views/Site/img/team/4.jpg" alt="">
              <h4>João Victor Martins</h4>
              <p class="text-muted">Designer Gráfico</p>
              <ul class="list-inline social-buttons">
              	 <a href="https://www.facebook.com/Victor.Lima1327" target="_blank">
              	 	<img src="<?php echo SSL_OR_NOT.APP_HOST; ?>/App/Views/Site/img/social/facebook.png" id="social_imgs">
                 </a>
                 <a href="https://m.me/Victor.Lima1327" target="_blank">
              	 	<img src="<?php echo SSL_OR_NOT.APP_HOST; ?>/App/Views/Site/img/social/messenger.png" id="social_imgs">
                 </a>	
                 <a href="https://api.whatsapp.com/send?phone=554298445953&text=Olá Cristofer!" target="_blank">
              	 	<img src="<?php echo SSL_OR_NOT.APP_HOST; ?>/App/Views/Site/img/social/whatsapp.png" id="social_imgs">
                 </a>	
                 <a href="https://www.linkedin.com/in/jo%C3%A3o-victor-lima-martins-14b075163/" target="_blank">
              	 	<img src="<?php echo SSL_OR_NOT.APP_HOST; ?>/App/Views/Site/img/social/linkedin.png" id="social_imgs">
                 </a>	
              </ul>
            </div>
          </div>
        </div>
    </section>

    <!-- Clients -->
    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/envato.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/designmodo.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/themeforest.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/creative-market.jpg" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Clients -->
    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="<?php echo SSL_OR_NOT.APP_HOST; ?>/App/Views/Site/img/logos/Intelbras.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="<?php echo SSL_OR_NOT.APP_HOST; ?>/App/Views/Site/img/logos/LuxVision.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="<?php echo SSL_OR_NOT.APP_HOST; ?>/App/Views/Site/img/logos/NTC.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="<?php echo SSL_OR_NOT.APP_HOST; ?>/App/Views/Site/img/logos/PPA.jpg" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>

    <section  id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Contato</h2>
            <h3 id="contato" class="section-subheading">Digite as informações a seguir, em breve entraremos em contato.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate="novalidate">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Nome *" required="required" data-validation-required-message="Favor preencher o nome.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Email *" required="required" data-validation-required-message="Favor informe o seu Email.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Telefone *" required="required" data-validation-required-message="Favor informe o seu numero de telefone.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Mensagem (dúvidas, sugestões e reclamações)*" required="required" data-validation-required-message="Favor digite uma mensagem."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Enviar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span  id="endereco" class="copyright">Endereço: Rua Teófilo José de Freitas, 348, sala 2 - Centro (38,87 km) 84130-000 Palmeira (Paraná)</span>
            <br id="endereco">
            <span id="endereco" class="copyright">Telefone: (42) 3252-1611</span>
            <br id="endereco">
            <span id="endereco" class="copyright">E-mail: contato@hasssolucoes.com.br  suporte@hasssolucoes.com.br</span>
            <br id="endereco" >
          </div>
          <div class="col-md-4" id="grup_social">
            <ul class="list-inline social-buttons">
              	 <a href="https://www.facebook.com/hasssolucoes" target="_blank">
              	 	<img src="<?php echo SSL_OR_NOT.APP_HOST; ?>/App/Views/Site/img/social/facebook.png" id="social_imgs" >
                 </a>
                 <a href="https://m.me/hasssolucoes" target="_blank">
              	 	<img src="<?php echo SSL_OR_NOT.APP_HOST; ?>/App/Views/Site/img/social/messenger.png" id="social_imgs">
                 </a>	
                 <a href="https://api.whatsapp.com/send?phone=5542998330631&text=Olá Hass Soluções!" target="_blank">
              	 	<img src="<?php echo SSL_OR_NOT.APP_HOST; ?>/App/Views/Site/img/social/whatsapp.png" id="social_imgs" >
                 </a>	
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <h2 class="text-uppercase">Rendicolla</h2>
                  <p class="item-intro text-muted">Rendicolla Comércio, Exportação e Importação de Produtos Químicos Ltda.</p>
                  <img class="img-fluid d-block mx-auto" src="<?php echo SSL_OR_NOT.APP_HOST; ?>/App/Views/Site/img/clientes/01-rendicollaGD.jpg" alt="">
                  <button class="btn btn-primary" data-dismiss="modal" type="button" >
                    <i class="fa fa-times"></i>
                    Voltar ao Site</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <h2 class="text-uppercase">Funerária Nossa Senhora do Carmo</h2>
                  <p class="item-intro text-muted">Homenagear seu ente querido.</p>
                  <img class="img-fluid d-block mx-auto" src="<?php echo SSL_OR_NOT.APP_HOST; ?>/App/Views/Site/img/clientes/02-funerariadocarmoGD.jpg" alt="">
                  <p>Nada é mais doloroso do que perder um familiar ou amigo. Pensando nisso, a Funerária Nossa Senhora do Carmo faz tudo para garantir a tranquilidade e comodidade de seus clientes nesse momento tão difícil, para que eles possam voltar sua atenção ao que realmente importa: homenagear seu ente querido.</p>
               
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i><a href="http://www.funerarianscarmo.com.br"></a>
                    Voltar ao Site</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <h2 class="text-uppercase">Palmeiras Supermercados</h2>
                  <p class="item-intro text-muted">Economia e qualidade em um só lugar.</p>
                  <img class="img-fluid d-block mx-auto" src="<?php echo SSL_OR_NOT.APP_HOST; ?>/App/Views/Site/img/clientes/03-SuperMercadoPalmeiraGD.jpg" alt="">
                  <p>História do Mercado.</p>
             
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i><a href="http://www.funerarianscarmo.com.br"></a>
                    Voltar ao Site</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <nav>
      <div id="mybutton">
        <button class="btn btn-info btn-sm " type="button" id="btnDiminuir">A-</button>
        <button class="btn btn-info btn-sm " type="button" id="btnAumentar">A+</button>
      </div>
    </nav>

    
    <!--Começo do Tawk.to Script-->
    <script type="text/javascript">
      var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
      (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5beea5fd70ff5a5a3a7276fb/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
      })();
    </script>
    <!--Fim do Tawk.to Script-->

    

    <!-- Bootstrap core JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="<?php echo SSL_OR_NOT.APP_HOST; ?>/App/Views/Site/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo SSL_OR_NOT.APP_HOST; ?>/App/Views/Site/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo SSL_OR_NOT.APP_HOST; ?>/App/Views/Site/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="<?php echo SSL_OR_NOT.APP_HOST; ?>/App/Views/Site/js/jqBootstrapValidation.js"></script>
    <script src="<?php echo SSL_OR_NOT.APP_HOST; ?>/App/Views/Site/js/contact_me.js"></script>
    <script src="<?php echo SSL_OR_NOT.APP_HOST; ?>/App/Views/Site/js/tam_fonte.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo SSL_OR_NOT.APP_HOST; ?>/App/Views/Site/js/agency.min.js"></script>

  </body>

</html>
