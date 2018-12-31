<?php  
   get_header();
?>
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

<?php  
   get_footer();
?>