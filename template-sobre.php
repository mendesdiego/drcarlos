<?php /* template name: Sobre */ ?>

<?php get_header() ?>

<section class="titulo-page">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <h1><?php the_title() ?></h1>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <ul class="list-unstyled list-inline breadcrumb-page">
          <li><a href="#">Home</a> &raquo;</li>
          <li class="page-atual"><?php the_title() ?></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<main>
  <?php if (have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>
      <section class="conteudo-page">
        <div class="container">
          <?php the_content() ?>
            <div class="selos">
              <!--check if the repeater field has rows of data-->
              <?php if( have_rows('imagens_conteudo') ): ?>
                <div class="row">
                  <!--loop through the rows of data-->
                    <?php while ( have_rows('imagens_conteudo') ) : the_row(); ?>
                      <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 border-selo">
                        <!--display a sub field value-->
                        <?php $image = get_sub_field('imagem_selo') ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']?>" class="img-responsive center-block"/>
                      </div>
                    <?php endwhile; ?>
                </div>
              <?php endif; ?>
            </div>
          <?php echo get_field('segundo_conteudo') ?>
        </div>
      </section>

      <section class="testimonial-sobre">
        <?php
          //consulta
          $argsTestimonial = array(
            'post_type' => 'testimonial',
            'order' => 'asc',
            'posts_per_page' => '1'
          );
          //Chama a consulta realizada
          $queryTestimonial = new WP_Query( $argsTestimonial );
        ?>

        <div class="container">
          <?php if ($queryTestimonial->have_posts()): ?>
            <?php while ($queryTestimonial->have_posts() ) : $queryTestimonial->the_post() ?>
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="box-testimonial">
                    <h6>
                      <span class="text"><i class="fa fa-quote-left" aria-hidden="true"></i></span>
                      <span class="line"></span>
                    </h6>
                    <div class="texto-testimonial">
                      <?php the_content() ?>
                    </div>
                    <h6>
                      <span class="aspas-direita"><i class="fa fa-quote-right" aria-hidden="true"></i></span>
                      <span class="line-direita"></span>
                    </h6>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <ul class="list-unstyled list-inline ass-testimonial-sobre">
                    <li>
                      <div class="depoimento-img-sobre">
                        <?php if(has_post_thumbnail()) { ?>
                          <?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?>
                        <?php } ?>
                      </div>
                    </li>
                    <li>
                      <div class="ass-testimonial-sobre">
                        <?php echo get_field('assinatura_depoimento') ?><br>
                        <span><?php echo get_field('cargo_depoimento') ?></span>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </section>
    <?php endwhile; ?>
  <?php endif; ?>
</main>

<?php get_footer() ?>
