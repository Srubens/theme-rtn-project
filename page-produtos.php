<?php  
   /**
    * Template Name: Produtos
    */
   get_header();
?>

<div class="container">
	<div class="main_produtos">

		<?php while(have_posts()):
				the_post();
		?>
		<?php the_content(); ?>
		<?php endwhile; ?>
	</div>
</div>


<?php  
   get_footer();
?>