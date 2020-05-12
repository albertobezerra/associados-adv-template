<?php get_header(); ?>


<div class="page-nossatuacao">

	<br><br><br><br><br><br><br><br>

    <div class="container nossaatuacao">

        <p class="esp">Especialidades</p>
        <h1 class="esp">Áreas de atuação</h1><br>
        
        <p class="esp">Corroboramos para a maximização do negócio de seus clientes,<br> ajudando-os com questões contratuais, societárias,<br> econômicas e de responsabilidade civil em diversas áreas.</p>
        
        <br><br><br>

        <div class="row">

            <?php 
            $args = array('post_type'=>'post', 'category_name'=>'atuacao', 'showposts'=>10 );
            $my_posts = get_posts( $args );
            if($my_posts) : foreach($my_posts as $post) : setup_postdata( $post );?>

            <div class="col-md-4">

                <div class="card card-atuacao">

                    <div class="card-body">
                        <img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/balancabranca.png" class="icone-atuacao">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <p class="card-description"><?php the_excerpt(); ?></p>
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


        <div class="row">
            <div class="col-md-4">

                <div class="card1 card-flip">

                    <div class="card-front">

                        <div class="card-body">

                        <img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/balancabranca.png" class="icone-atuacao">
                        <h5 class="card-title">Card 001</h5>
                        <p class="card-description">Texto da frente do card</p>
                        <a href="https://api.whatsapp.com/send?phone=5581992030000&text=Ol%C3%A1%2C%20gostaria%20de%20agendar%20um%20hor%C3%A1rio!" class="" target="_blank"><strong>Falar com o especialista!</strong></a>

                        </div>

                    </div>

                    <div class="card-back bg-white">
                        <div class="card-body">
                            <h3 class="card-title">Back</h3>
                            <p class="card-text">Suprise this one has more more more more content on the back!</p>
                            <a href="#" class="btn btn-outline-secondary">Action</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!--Isso que devine o layout para cada págia-->
<?php
/*
Template Name: Nossa atuação
*/
?>


<?php get_footer(); ?>