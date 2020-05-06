<?php get_header(); ?>


<div class="page-orientacao">

    <br><br><br><br><br><br><br><br><br>

    <div class="container orientacao">

        <h1 class="esp">Orientações Jurídicas</h1><br> 
       
        <p class="esp">Acompanhe o blog e saiba mais sobre nosso trabalho <br> e sobre o mundo do Direito. Confira orientações jurídicas <br> da nossa equipe de especialistas sobre as áreas do Direito em que atuamos.</p>
        
        <br><br><br>

        <div class="row">

            <?php 
            $args = array('post_type'=>'post', 'category_name'=>'orientacao', 'showposts'=>6 );
            $my_posts = get_posts( $args );
            if($my_posts) : foreach($my_posts as $post) : setup_postdata( $post );?>

            <div class="col-md-4">

                <div class="card card-blog">

                    <div class="card-img">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail(false, array('class'=>'img-fluid')); ?></a>
                    </div>
                    <div class="card-body card-body-custom">
                        <div class="card-category-box">
                            <div class="card-category">
                                <h6 class="category"><?php echo strip_tags(get_the_tag_list('',', ',''));?></h6>
                            </div>
                        </div>
                        <h3 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p class="card-description"><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>"><button class="btn btn-primary leiamais">Leia mais!</button></a>
                    </div>


                </div>

            </div>

            <?php
              endforeach;
              endif;
            ?>

        </div>

        <br><br><br>

    </div>
</div>

<!--Isso que devine o layout para cada págia-->
<?php
/*
Template Name: Blog
*/
?>


<?php get_footer(); ?>
