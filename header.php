<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        Tanamão Nordeste
    </title>
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>./images/favicon.png" type="image/x-icon">
    <?php wp_head(); ?>
</head>

<body>

<nav class="header_nav navbar navbar-expand-lg navbar-light ">
    <a class="navbar-brand header_logo" href="<?php bloginfo('home'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png"
            alt="logo tanamao nordeste"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php
          if( has_nav_menu('primary') ){
            wp_nav_menu([
              'theme_location' => 'primary',
              'fallback_cb' => false,
              'container_class' => 'collapse navbar-collapse',
              'container_id' => 'navbarSupportedContent',
              'menu_class' => 'navbar-nav header_top_ul',
              'walker' => new WP_Bootstrap_Navwalker(),
              'depth' => 2
            ]);
          }

          get_search_form();
          
        ?>

        <div class="header_contact">
            <span>(81) 3088-2446</span>
            <span>contato@tanamao-nordeste.com.br</span>
        </div>
    </div>
</nav><!-- nav header_nav -->

<div class="main_whatsapp">
  <a href="https://api.whatsapp.com/send?l=pt_BR&phone=5581985349872" target="_black"><img src="<?php bloginfo('template_url'); ?>/images/whats.png" alt=""></a>
</div>  