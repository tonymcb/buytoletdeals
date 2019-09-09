<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>
<link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:400,500,600,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<?php
function custom() {
    wp_register_script('custom', get_template_directory_uri() . '/js/custom.js', true );
    wp_enqueue_script('custom');
}
add_action( 'wp_enqueue_scripts', 'custom' );
?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">

  <header id="header">

    <div class="container">

      <div class="row">

        <div id="contents" class="col-12">

          <div id="logo"><a href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/buytoletdeals-logo.png" alt="Buy to let deals logo"></a></div>

          <nav id="menu">
            <div id="nav-icon">
              <div></div>
            </div>

          <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>

          </nav>

        </div>

      </div>

    </div><!-- /.container -->

  </header>

<div id="container">
