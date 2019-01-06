<?php  
   /**
    * Template Name: Produtos
    */
   get_header();
?>

<div class="container">
    <div class="col-md-12 col-sm-12">
        <div class="main_produtos">
            <div class="row">

                
                
                <?php
                   
                   $produtos = new WP_Query([
                      'post_per_page' => 8,
                      'post_type' => 'Produto'
                   ]);

                   while( $produtos->have_posts() ):
                      $produtos->the_post();
                ?>
                
                <?php get_template_part('template_parts/post'); ?>

                <?php
                   endwhile;
                ?>

            </div>
        </div>
    </div>

    <div class="produtos_pre_next_page">
        <div class="page_bottons">
            <div class="btn_prev btn btn-outline-secondary">
              <?php previous_posts_link('Pagina Anterior'); ?>
              </div>
            <div class="btn_next btn btn-outline-secondary">
              <?php next_posts_link('Proxima Pagina'); ?>
            </div>

        </div>
    </div>


</div>


<?php  
   get_footer();
?>