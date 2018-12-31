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
                            <div class="col-md-8">
                                <input class="form-control " type="text" placeholder="Pesquisar produto ex:argamassa">
                            </div>
                            <div class="col-md-4">
                                <input class="btn btn-primary" type="button" value="aqui">
                            </div>
                        </div>
                    </div>
                </form>
                
                <div class="main_produtos_details">
                    <h1>Nome do produto</h1>
                    <img src="<?php bloginfo('template_url'); ?>/images/rejunto.jpg" alt="produto rejunto">
                    <p>Descrição Breve do Produto, que chame a atenção do cliente!</p>
                    <a class="btn btn-success" href="#">Veja Mais</a>
                </div>

            </div>
        </div>
    </div>
</div>


<?php  
   get_footer();
?>