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
    <div class="contact-info">
      <span class="phone"><span class="dashicons dashicons-phone"></span> (800) 123-4567</span>
      <span class="email"><span class="dashicons dashicons-email"></span> contacto@example.com</span>
    </div>
    <div class="social-icons">
      <a href="#" class="social-icon" aria-label="Facebook"><span class="dashicons dashicons-facebook"></span></a>
      <a href="#" class="social-icon" aria-label="Instagram"><span class="dashicons dashicons-instagram"></span></a>
      <a href="#" class="social-icon" aria-label="Twitter"><span class="dashicons dashicons-twitter"></span></a>
    </div>
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
    <button class="menu-toggle" aria-label="<?php esc_attr_e( 'Abrir menú', 'astra-child' ); ?>">
      <span class="hamburger"></span>
    </button>
  </div>
</header>

</body>
</html>
