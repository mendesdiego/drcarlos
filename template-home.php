<?php /* template name: home */ ?>
<?php get_header(); ?>

  <section class="banner">
    <img src="<?php echo get_template_directory_uri() ?>/assets/images/banner-site.png" alt="" class="img-responsive">
  </section>

  <section class="testimonial">
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
      <?php if ($queryTestimonial->have_posts() ): ?>
        <div class="row">
          <?php while ($queryTestimonial->have_posts() ) : $queryTestimonial->the_post() ;?>
            <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
              <div class="depoimento-img">
                <?php if(has_post_thumbnail()) { ?>
                  <?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?>
                <?php } ?>
              </div>
            </div>
            <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
              <div class="depoimento-content">
                <?php the_content() ?>

                <div class="ass-testimonial">
                  <?php echo get_field('assinatura_depoimento') ?><br>
                  <span><?php echo get_field('cargo_depoimento') ?></span>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>
    </div>
  </section>

  <section class="servicos">
    <?php
      //consulta
      $argsServico = array(
        'post_type' => 'servico',
        'order' => 'asc',
        'posts_per_page' => '4'
      );
      //Chama a consulta realizada
      $queryServico = new WP_Query( $argsServico );
    ?>

    <div class="container">
      <?php if ($queryServico->have_posts() ):?>
        <div class="row">
          <?php while ($queryServico->have_posts()) : $queryServico->the_post(); ?>
            <div class="col-md-6">
              <div class="bloco-servico">
                <div class="row">
                  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <?php if(has_post_thumbnail()) { ?>
                      <?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?>
                    <?php } ?>
                  </div>
                  <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
                    <div class="desc-servico">
                      <h1 class="titulo-servico"><?php the_title() ?></h1>
                      <h2 class="subtitulo-servico"><?php echo get_field('subtitulo_servico'); ?></h2>
                      <?php the_content() ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>
    </div>
  </section>

  <section class="blog">
    <?php
      //consulta
      $argsNoticia = array(
        'post_type' => 'post',
        'order' => 'asc',
        'posts_per_page' => '4'
      );
      //Chama a consulta realizada
      $queryNoticiaHome = new WP_Query( $argsNoticia );
    ?>

    <div class="container">
      <h1 class="titulo-section">Blog</h1>
      <h2 class="subtitulo-section">Subtitulo para blog</h2>

      <div class="row">
        <?php if ($queryNoticiaHome->have_posts()): ?>
          <?php while($queryNoticiaHome->have_posts()): $queryNoticiaHome->the_post(); ?>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
              <div class="bloco-noticia">
                <div class="img-noticia">
                  <?php if(has_post_thumbnail()) { ?>
                    <a href="<?php the_permalink() ?>">
                      <?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?>
                    </a>
                  <?php } ?>
                </div>
                <h1 class="titulo-noticia"><?php the_title() ?></h1>
                <h2 class="subtitulo-noticia"><?php echo get_field('subtitulo_noticia') ?></h2>

                <?php the_excerpt_limit(30) ?>
              </div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </section>
<?php get_footer() ?>
