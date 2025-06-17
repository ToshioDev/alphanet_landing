<?php
/**
 * Header template for Astra Child Theme
 *
 * @package Astra Child
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
  <div class="topbar">
    <!-- Email / Teléfono / Enlaces sociales -->
  </div>

  <div class="navbar-wrapper">
    <div class="logo">
      <?php the_custom_logo(); ?>
    </div>
    <nav class="main-navigation">
      <?php
        wp_nav_menu(array(
          'theme_location' => 'primary',
          'menu_class' => 'nav-menu',
          'container' => false,
        ));
      ?>
    </nav>
  </div>
</header>

</body>
</html>
