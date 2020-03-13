<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php wp_title('-',true,'right'); bloginfo(); ?></title>

	<link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/logo1.png" type="image/x-icon">

	<?php wp_head(); ?>

<body>


	<div class="menu_principal">

			<nav class="navbar navbar-expand-lg navbar-light bg-light bg-light-custom fixed-top">

				<div class="container">

					  <a class="navbar-brand" href=""><img src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png" /></a>

					 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    	<span class="navbar-toggler-icon"></span>
				  	</button>

					  <div class="collapse navbar-collapse navbar-collapse-custom" id="navbarSupportedContent">
					    <ul class="navbar-nav ml-auto">

	    	<?php require_once('assets/includes/class-wp-bootstrap-navwalker.php');  ?>
					      
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