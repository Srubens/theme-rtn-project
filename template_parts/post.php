<div class="col-md-3">
    <div class="main_produtos_details">
        <h1><?php the_title(); ?></h1>
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail(); ?>
        </a>
        <p><?php the_excerpt(); ?></p>
        <a class="btn btn-success" href="<?php the_permalink(); ?>">Veja Mais</a>
    </div>
</div>