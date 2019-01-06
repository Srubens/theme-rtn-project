<form role="search" method="GET" action="<?php echo esc_url(home_url('/')); ?>" class="search_box">
    <input type="search" name="s" value="<?php the_search_query(); ?>" class="search_text" placeholder="Pesquisar por:">
    <input class="search_btn" type="submit" value="Pesquisar">
</form>