<?php  
   get_header();
?>

<div class="container">
	<h1>Você pesquisou por: <?= get_search_query();  ?></h1>
	<div class="row">

		<?php if( have_posts() ): ?>
			<?php while( have_posts() ): ?>
				<?php the_post(); ?>

				<?php get_template_part('template_parts/post'); ?>


		<?php endwhile; ?>
			<?php endif; ?>
	</div>
</div>

<?php get_footer(); ?>