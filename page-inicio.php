<?php  
   /**
    * Template Name:INICIO
    */
   get_header();


  echo do_shortcode('[rev_slider alias="slide-teste"]');
?>


<div class="container">
    <div class="col-md-12 col-sm-12">
        <div class="main_items">
            <div class="row">

                <div class="main_items_desc col-md-3">
                    <a href="<?php bloginfo('home'); ?>/produtos"><img src="<?php bloginfo('template_url'); ?>/images/01.png" alt=""></a>
                    <a href="#">
                        <h1>
                            Confira nossa variedade de produtos para você
                        </h1>
                    </a>
                </div>

                <div class="main_items_desc col-md-3">
                    <a href="<?php bloginfo('home'); ?>/cadastro-de-empresa"><img src="<?php bloginfo('template_url'); ?>/images/02.png" alt=""></a>
                    <a href="#">
                        <h1>
                            Seja nosso parceiro e ganhe benefícios exclusivos
                        </h1>
                    </a>
                </div>

                <div class="main_items_desc col-md-3">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/03.png" alt=""></a>
                    <a href="#">
                        <h1>
                            Distribuindo do norte ao sul do nosso Brasil
                        </h1>
                    </a>
                </div>

                <div class="main_items_desc col-md-3">
                    <a href="<?php bloginfo('home'); ?>/contato"><img src="<?php bloginfo('template_url'); ?>/images/04.png" alt=""></a>
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
    
<?php get_footer(); ?>