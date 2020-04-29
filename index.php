<?php get_header(); ?>

<div>
<a href="https://api.whatsapp.com/send?phone=5581994024363&text=Preciso de atendimento!" target="_blank"><img  class="whatsapp" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/btn_whats.png" /></a>
</div>


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


        <div class="row">

            <?php 
            $args = array('post_type'=>'post', 'category_name'=>'atuacao', 'showposts'=>10 );
            $my_posts = get_posts( $args );
            if($my_posts) : foreach($my_posts as $post) : setup_postdata( $post );?>

            <div class="col-md-4">

                <div class="card card-atuacao">

                    <div class="card-body">
                        <img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/balanca.png" class="icone-atuacao">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <p class="card-text"><?php the_excerpt(); ?></p>
                        <a href="https://api.whatsapp.com/send?phone=5581994024363&text=Ol%C3%A1%2C%20gostaria%20de%20agendar%20uma%20hor%C3%A1rio!" class="card-link" target="_blank"><strong>Falar com o especialista!</strong></a>

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

<div class="blog-inicial">
    <div class="container">

        <br><br>
        <p class="esp">Últimas orientações</p>
        <h1 class="esp">Orientações Jurídicas</h1><br><br><br>

        <div class="row">

            <?php 
            $args = array('post_type'=>'post', 'category_name'=>'orientacao', 'showposts'=>3 );
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

        </div><br>


        <button type="button" class="btn btn-primary btn-primary-custom">+ orientações</button>

        <br><br><br>



    </div>

</div>





<?php get_footer(); ?>
