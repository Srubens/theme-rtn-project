<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php bloginfo('name'); ?></title>
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.png" >
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/index.css">
</head>
<body>

<nav class="header_nav navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand header_logo" href="#"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="logo tanamao nordeste"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav header_top_ul">
      <li class="nav-item active">
        <a class="nav-link" href="#">Inico <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">A Empresa</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Produtos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Eventos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contato</a>
      </li>
    </ul>
    <div class="header_contact">
      <span>(81)9.9999-9999</span>
      <span>meucontato@contato.com.br</span>
    </div>
  </div>
</nav><!-- nav header_nav -->

<div class="main_whatsapp">
	<a href="https://api.whatsapp.com/send?l=pt_BR&phone=5581985349872" target="_black"><img src="<?php bloginfo('template_url'); ?>/images/whats.png" alt=""></a>
</div>	

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php bloginfo('template_url'); ?>/images/slider-01.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php bloginfo('template_url'); ?>/images/slider-02.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php bloginfo('template_url'); ?>/images/slide-01.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container">
	<div class="col-md-12 col-sm-12">
		<div class="main_items">
		<div class="row">
		<?php

		   $text = [
		   	"",
		   	"Confira nossa variedade de produtos para você",
		   	"Seja nosso parceiro e ganhe benefícios exclusivos",
		   	"Distribuindo do norte ao sul do nosso Brasil",
		   	"Faça parte da equipe envie seu email para tanamao@contato.com.br",
		   ]; 

           $post = 0;
           for($post = 1; $post <= 4; $post++){

		?>
		
		<div class="main_items_desc col-md-3">
			<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/0<?= $post ?>.png" alt=""></a>
			<a href="#"><h1><?= $text[$post]; ?></h1></a>
		</div>

		<?php } ?>
		</div><!-- end row -->
		</div>
	</div>
</div>

<div class="bg_main_marketing">
	<div class="container">
		<div class="main_marketing">
			<header>
				<h1>Coloque aqui seu melhor email e Receba Promoções e Novidades Imperdíveis.</h1>
			</header>
			<form class="main_form_marketing" method="" action="">
				<input type="email" placeholder="seu email" required>
				<button class="btn btn-success">Cadastrar</button>
			</form>
		</div>
	</div>
</div>

<footer class="main_footer">
	<div class="container">
		<div class="col-md-12 col-sm-12">
			<div class="main_footer_logo">
				<div class="row main_byrow_footer">
					<div class="col-md-6 col-sm-12">
						<div class="logo_footer " >
							<img src="<?php bloginfo('template_url'); ?>/images/logo-white.png" alt="">
						</div>
					</div>
					<div class="col-md-6 col-sm-12">
						<div class="main_social ">
							<a href="#" target="_black" class="main_social_face"></a>
							<a href="#" target="_black" class="main_social_insta"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="main_detail col-md-12 col-sm-12">
			<div class="row main_byrow_footer">
				<div class="col-md-6 col-sm-12">
					<div class="main_footer_contact ">
						<span>(81)9.9999-9999</span>
				        <span>meucontato@contato.com.br</span>
			        </div>
				</div>
				<div class="col-md-6 col-sm-12">
					<div class="main_footer_payme">
						<p>Formas de Pagamento:</p>
						<img src="<?php bloginfo('template_url'); ?>/images/cards.png" alt="">
					</div>
				</div>
			</div>
		</div>
		<div class="main_footer_copy">Todos os direitos reservados Tanamão Nordeste 2018 copy &copy;</div>
	</div>
</footer>

<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/bootstrap.min.js"></script>	
</body>
</html>