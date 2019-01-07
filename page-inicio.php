<?php 
   /**
    * Template Name: Home
    */
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
            <img src="<?php bloginfo('template_url'); ?>./images/slider-01.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?php bloginfo('template_url'); ?>./images/slider-02.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?php bloginfo('template_url'); ?>./images/slide-01.png" class="d-block w-100" alt="...">
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

                <div class="main_items_desc col-md-3">
                    <a href="<?php bloginfo('template_url'); ?>/produtos"><img src="<?php bloginfo('template_url'); ?>./images/01.png" alt=""></a>
                    <a href="<?php bloginfo('template_url'); ?>/produtos">
                        <h1>
                            Confira nossa variedade de produtos para você
                        </h1>
                    </a>
                </div>

                <div class="main_items_desc col-md-3">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>./images/02.png" alt=""></a>
                    <a href="#">
                        <h1>
                            Seja nosso parceiro e ganhe benefícios exclusivos
                        </h1>
                    </a>
                </div>

                <div class="main_items_desc col-md-3">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>./images/03.png" alt=""></a>
                    <a href="#">
                        <h1>
                            Distribuindo do norte ao sul do nosso Brasil
                        </h1>
                    </a>
                </div>

                <div class="main_items_desc col-md-3">
                    <a href="<?php bloginfo('home');  ?>/contato"><img src="<?php bloginfo('template_url'); ?>./images/04.png" alt=""></a>
                    <a href="#">
                        <h1>
                            Faça parte da equipe envie seu email para contato@tanamao-nordeste.com.br
                        </h1>
                    </a>
                </div>

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
            	<input type="text" placeholder="seu nome" required>
                <input type="email" placeholder="seu email" required>
                <button class="btn btn-success">Cadastrar</button>
            </form>
        </div>
    </div>
</div>

<?php get_footer();?>

