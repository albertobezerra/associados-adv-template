<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title('-',true,'right'); bloginfo(); ?></title>
	
	<?php wp_head(); ?>

	<link href="https://fonts.googleapis.com/css?family=Cabin&display=swap" rel="stylesheet">

	<link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon.png" type="image/x-icon">

	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">

	
</head>
<body>

	<div class="menu_principal">

			<nav class="navbar navbar-expand-lg navbar-light bg-light bg-light-custom fixed-top">

				<div class="container">

                    <a class="navbar-brand navbar-brand-custom" href=""><img src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png" /></a>

					 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    	<span class="navbar-toggler-icon"></span>
				  	</button>

					  <div class="collapse navbar-collapse navbar-collapse-custom" id="navbarSupportedContent">
					    <ul class="navbar-nav ml-auto">

	    	<?php require_once('assets/includes/wp-bootstrap-navwalker.php');  ?>
					      
			<?php
			wp_nav_menu( array(
				'menu'              => 'Menu',
				'theme_location'    => 'menu-header',
				'depth'             => 2,
				'container'         => 'div',
				'container_class'   => 'collapse navbar-collapse',
				'container_id'      => 'navbarSupportedContent',
				'menu_class'        => 'navbar-nav ml-auto',
				'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
				'walker'            => new WP_Bootstrap_Navwalker(),
			) );
			?>

					    </ul>
					  </div>



			  	</div>
			</nav>

	</div>