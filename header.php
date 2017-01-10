<!doctype html>
  <html>
    <head>
      <meta charset="utf-8">
      <title>Garntante - <?= get_the_title(); ?></title>
      <?php wp_head(); ?>
    </head>

  <body <?php body_class(); ?>>
<nav>
  <div class="nav-wrapper container ">
    <a href="<?php echo get_home_url(); ?>" class="brand-logo"><img src="/includes/images/facebook.png"></a>
    <a href="#" data-activates="mobile-demo" class="button-collapse black-text"><i class="material-icons">menu</i></a>

    <?php
      wp_nav_menu(array(
        'menu_class' => 'side-nav',
        'menu_id' => 'mobile-demo',
        'theme_location' => 'mobile_nav'
      ));
    ?>

    <?php
      wp_nav_menu(array(
        'menu_class' => 'nav right hide-on-med-and-down',
        'menu_id' => 'nav-mobile',
        'theme_location' => 'header_nav',
      ));
    ?>
  </div>
</nav>
