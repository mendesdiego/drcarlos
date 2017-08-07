<?php get_header() ?>
  <main>
    <div class="container">
      <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); $id_post = get_the_id(); ?>
        <div class="row">
          <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
            <article class="bloco-noticia-interno">
              <?php if (has_post_thumbnail() ) { ?>
                <div class="">
                  <?php the_post_thumbnail('high', array('class' => 'img-responsive') ); ?>
                </div>
              <?php } ?>
              <h1 class="titulo-noticia-blog"><?php the_title() ?></h1>
              <?php the_content() ?>

              <div class="info-noticia">
                <i class="fa fa-calendar" aria-hidden="true"></i> <?php the_time('j \d\e F \d\e Y') ?> | <strong>Categoria:</strong> <?php the_category(',') ?> | <i class="fa fa-user" aria-hidden="true"></i> <?php the_author() ?> |
                <i class="fa fa-comment-o"></i> <?php comments_number('Nenhum comentário', '1 comentário', '% comentários'); ?>
              </div>

              <div class="autor">
                <?php author_area() ?>
              </div>
            </article>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <?php get_sidebar() ?>
          </div>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
    </div>
  </main>
<?php get_footer() ?>
