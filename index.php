<?php get_header() ?>
  <main class="main-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <?php
            if (have_posts()):
            while (have_posts()): the_post();
          ?>
          <article class="bloco-noticia">
            <?php if (has_post_thumbnail() ) { ?>
              <div class="">
                <a href="<?php the_permalink() ?>"> <?php the_post_thumbnail('high', array('class' => 'img-responsive') ); ?> </a>
              </div>
            <?php } ?>
            <div class="noticia-geral">
              <h1 class="titulo-noticia-blog"><?php the_title() ?></h1>
              <div class="info-noticia">
                <i class="fa fa-calendar" aria-hidden="true"></i> <?php the_time('j \d\e F \d\e Y') ?> | <strong>Categoria:</strong> <?php the_category(',') ?> | <i class="fa fa-user" aria-hidden="true"></i> <?php the_author() ?> |
                <i class="fa fa-comment-o"></i> <?php comments_number('Nenhum comentário', '1 comentário', '% comentários'); ?>
              </div>
              <?php the_excerpt() ?>
              <a href="<?php the_permalink() ?>" class="btn btn-noticia">Saiba Mais </a>
            </div>
          </article>
          <?php
          endwhile;
          endif;
          ?>
        </div>
        <div class="col-md-4">
          <?php get_sidebar() ?>
        </div>
      </div>
    </div>
  </main>
<?php get_footer() ?>
