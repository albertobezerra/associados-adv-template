<?php get_header(); ?>

<div class="post-interno">

	<div class="container post">

			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

				<h2><?php the_title(); ?></h2>
				<center><?php the_post_thumbnail(false, array('class'=>'img-fluid')); ?></a></center><br><br>
				<p><?php the_content(); ?></p>

			<?php endwhile; endif; ?>

	</div>

</div>



<?php get_footer(); ?>