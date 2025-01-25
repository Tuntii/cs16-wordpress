<?php
/**
 * header.php
 * CS16 Retro Theme Header
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="site-wrapper">
<header>

  <div class="container">

    <div class="site-branding">
      <?php

      if ( function_exists('the_custom_logo') ) {
        the_custom_logo();
      }


      if ( ! has_custom_logo() ) { ?>
        <h1 class="cs-title">
          <a href="<?php echo esc_url(home_url('/')); ?>">
            <?php bloginfo('name'); ?>
          </a>
        </h1>
      <?php } ?>

      <!-- Site açıklaması (Tagline) -->
      <p class="cs-input__label"><?php bloginfo('description'); ?></p>
    </div>

    


    <?php
      wp_nav_menu([
        'theme_location'  => 'header-menu',  // functions.php'de kaydettiğimiz menü konumu
        'container'       => 'nav',          // Menüyü <nav> etiketiyle sarmalayalım
        'container_class' => 'cs-nav-menu',  // <nav> için class
        'menu_class'      => 'cs-nav-ul',    // <ul> için class
        'fallback_cb'     => false           // Eğer menü seçilmemişse ek bir şey gösterme
      ]);
    ?>

  </div><!-- .container -->
</header>
