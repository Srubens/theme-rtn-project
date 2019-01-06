<?php  
   get_header();
?>

<div class="container">
    <div class="col-md-12 col-sm-12">
        <div class="main_produtos">
            <div class="row">
                
                
                <?php  if( have_posts() ):

                   while( have_posts() ):
                      the_post();
                ?>
                
                <div class="main_produtos_item">
                  <header>
                    <h1><?php the_title(); ?></h1>
                  </header>
                  <div class="row">
                    <div class="col-md-6">
                      <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="col-md-6">
                      <div class="produto_desc">
                          <p><?php the_content(); ?></p>
                      </div>

                      <div class="social_tags_prod">
                  <a href="https://api.whatsapp.com/send?l=pt_BR&phone=5581985349872"  target="_black" class="btn btn-success">Fazer Meu Pedido! <span class="icon-fa-whatsapp"></span> </a>
                  <a href="https://api.whatsapp.com/send?l=pt_BR&phone=5581985349872"  target="_black" class="btn btn-primary">Comportilhar <span class="icon-fa-facebook"></span> </a>
                </div>

                    </div>
                  </div>
                </div>

                <?php
                   endwhile;
                   endif;
                ?>

                

            </div>
        </div>
    </div>

    <div class="produtos_pre_next_page">
        <div class="page_bottons">
            <div class="btn_prev btn btn-outline-secondary">
              <?php previous_post_link(); ?></div>
            <div class="btn_next btn btn-outline-secondary"><?php next_post_link(); ?>
            </div>

        </div>
    </div>

</div>


<?php  
   get_footer();
?>