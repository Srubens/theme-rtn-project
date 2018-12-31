<?php  
   get_header();
?>

<div class="container">
    <div class="col-md-12 col-sm-12">
        <div class="main_produtos">
            <div class="row">

                <form method="" action="" class="col-md-12">
                    <div class="form-group">
                        <div class="form_produtos">      
                            <input class="form-control " type="text" placeholder="Pesquisar produto ex:argamassa">
                            <input class="btn btn-primary" type="button" value="Pesquisar">
                        </div>
                    </div>
                </form>
                
                <?php
                 
                   $a = 0;
                   for($a = 1; $a < 9; $a++){

                ?>
                
                <div class="col-md-3">
                    <div class="main_produtos_details">
                        <h1>Nome do produto</h1>
                        <a href="#">
                            <img src="<?php bloginfo('template_url'); ?>/images/rejunto.jpg" alt="produto rejunto">
                        </a>
                        <p>Descrição Breve do Produto, que chame a atenção do cliente!</p>
                        <a class="btn btn-success" href="#">Veja Mais</a>
                    </div>
                </div>

                <?php
                   }
                ?>

            </div>
        </div>
    </div>

    <div class="produtos_pre_next_page">
        <div class="page_bottons">
            <a href="#" class="btn_prev btn btn-outline-secondary">Pagina Anterior</a>
            <a href="#" class="btn_next btn btn-outline-secondary">Proxima Pagina</a>
        </div>
    </div>

</div>


<?php  
   get_footer();
?>