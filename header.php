<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title><?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <meta name="author" content="">

    <!-- Fonts! -->
    <link href='http://fonts.googleapis.com/css?family=Numans|Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Le styles -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <?php wp_head(); ?>
</head>
<body>
  <nav>
    <div class="container clearfix">

    <div class="brand">
    <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" class="logo" alt="Northeastern Democrats Logo"/></a></div>

    <!-- MENU -->

    <?php wp_nav_menu( array(
                    'theme_location' => 'main',
                    'container_class' => 'menubar'
                     )); ?>

    </div>
  </nav>
