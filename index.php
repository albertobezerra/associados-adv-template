<?php get_header(); ?>


<div class="inicio">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/slide1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/slide1.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</div>

<div class="areasdeatuacao">
    <div class="container">

        <br><br>
        <p class="esp">Especialidades</p>
        <h1 class="esp">Áreas de atuação</h1><br><br><br>

        <div class="row row-cols-1 row-cols-md-2">

            <div class="col mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>

            <div class="col mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>

            <div class="col mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>

            <div class="col mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>

            <div class="col mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
        </div>

        <br><br><br>
    </div>
</div>

<div class="blog-inicial">
    <div class="container">

        <br><br>
        <p class="esp">Últimas postagens</p>
        <h1 class="esp">Blog</h1><br><br><br>

        <div class="row">

            <?php 
            $args = array('post_type'=>'post', 'category_name'=>'blog', 'showposts'=>7 );
            $my_posts = get_posts( $args );
            if($my_posts) : foreach($my_posts as $post) : setup_postdata( $post );?>

            <div class="col-md-4">

                <div class="card card-blog">

                    <div class="card-img">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail(false, array('class'=>'img-fluid')); ?></a>
                    </div>
                    <div class="card-body">
                        <div class="card-category-box">
                            <div class="card-category">
                                <h6 class="category"><?php echo strip_tags(get_the_tag_list('',', ',''));?></h6>
                            </div>
                        </div>
                        <h3 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p class="card-description"><?php the_excerpt(); ?></p>
                    </div>


                </div>

            </div>

            <?php
              endforeach;
              endif;
            ?>

        </div><br>




        <br><br><br>



    </div>

</div>





<?php get_footer(); ?>
