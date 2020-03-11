<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title('-',true,'right'); bloginfo(); ?></title>
	
	<?php wp_head(); ?>

	<link href="https://fonts.googleapis.com/css?family=Cabin&display=swap" rel="stylesheet">

	<link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon.png" type="image/x-icon">

	
</head>
<body>

<div class="header">

	<nav class="navbar navbar-default navbar-fixed-top navbar-custom ">
	  <div class="container">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="<?php echo site_url(); ?>"><img class="logo" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/logo.png"></a>
	    </div>


	    <?php require_once('assets/includes/wp-bootstrap-navwalker.php'); ?>
	    <?php
            wp_nav_menu( array(
                'menu'              => 'Menu',
                'theme_location'    => 'menu-header',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
        		'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav navbar-right',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>

	  </div><!-- /.container-fluid -->
	</nav>
</div>

<body onselectstart="return false" oncontextmenu="return false" ondragstart="return false" onMouseOver="window.status='ops'; return true;" >