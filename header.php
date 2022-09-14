<!DOCTYPE html>
<html>
  <head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body class="">
    <header>
        <div>
          <nav class="header_menu">
            <div class="header_menu logo"><?php
            if ( function_exists( 'the_custom_logo' ) ) {
               the_custom_logo(); }
            ?></div>
            <?php
              wp_nav_menu(array(
                'theme_location' => 'head_menu'
              ));
            ?>
          </nav>
          <nav class="mobile-menu" data-aos="fade-left">
          <div class="logo"><?php
            if ( function_exists( 'the_custom_logo' ) ) {
               the_custom_logo(); }
            ?></div>
          <div class="burger">
              <span></span>
          </div>
            <?php wp_nav_menu( array( 'theme_location' => 'head_menu' ) ); ?>
          </nav>
        </div>
      </div>
    </header>