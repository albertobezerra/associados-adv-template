<?php get_header(); ?>

<div>
<a href="https://api.whatsapp.com/send?phone=5581992030000&text=Preciso de atendimento!" target="_blank"><img  class="whatsapp" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/btn_whats.png" /></a>
</div>


<div class="inicio">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/slide1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/slide2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/slide3.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/slide4.jpg" class="d-block w-100" alt="...">
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
                        <img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/balancabranca.png" class="icone-atuacao">
                        <h5 class="card-title-atuacao"><?php the_title(); ?></h5>
                        <p class="card-description-atuacao"><?php the_excerpt(); ?></p>
                        <a href="https://api.whatsapp.com/send?phone=5581992030000&text=Ol%C3%A1%2C%20gostaria%20de%20agendar%20um%20hor%C3%A1rio!" class="card-link" target="_blank"><strong>Falar com o especialista!</strong></a>

                    </div>


                </div>

            </div>

            <?php
              endforeach;
              endif;
            ?>

        </div>
        

        <a href="http://www.marcoslimaefilho.adv.br/nossaatuacao"><button type="button" class="btn btn-primary btn-primary-custom-atuacao">+ informações sobre</button></a>

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


        <a href="http://www.marcoslimaefilho.adv.br/orientacao"><button type="button" class="btn btn-primary btn-primary-custom">+ orientações</button></a>

        <br><br><br>



    </div>

</div>

<div class="diferenciais">
    <div class="container">
     
        <div class="conteudo">
            <br><br>
            <h1 class="esp">Diferenciais do nosso escritório</h1><br>

            <p class="esp">Aprimoramento profissional de toda a equipe e investimento em tecnologia<br> como pilares essenciais para entregar a melhor aplicação das normas jurídicas à sociedade.</p><br><br>


        <div class="row">


            <div class="col-md-4">
                <div class="card card-atuacao">
                    <div class="card-body">

                        <img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/tecnologia.png" class="icone-diferenciais">
                        <h5 class="card-title-atuacao">TECNOLOGIA</h5>
                        <p class="card-text">O escritório combina inteligência, informação e tecnologia, promovendo otimização e gestão eficiente, visão global e sistematizada do negócio, além de uma atuação preventiva e estratégica pela automação de processos.</p>

                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-atuacao">
                    <div class="card-body">

                        <img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/software.png" class="icone-diferenciais">
                        <h5 class="card-title-atuacao">SOFTWARE JURÍDICO</h5>
                        <p class="card-text">Uso do software para otimizar os processos dos clientes, prezando pela segurança, agilidade, diminuição da quantidade de documentos físicos e controle de prazos.</p>

                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-atuacao">
                    <div class="card-body">

                        <img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/equipe.png" class="icone-diferenciais">
                        <h5 class="card-title-atuacao">EQUIPE ESPECIALIZADA</h5>
                        <p class="card-text">Equipe de profissionais competentes em suas diversas áreas de atuação com uma visão empreendedora e imenso afã pela atividade que exercem.</p>

                    </div>
                </div>
            </div>

        </div>
    </div>

    </div>
</div>



<?php get_footer(); ?>
