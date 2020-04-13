<?php
/**
 * Template Name: eBooks - Template
 *
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header(); ?>

  <div class="bg-clear py-5">
    <div class="container">
      <div class="row">
      <div class="col-md-12">
        <?php 
          // the query
          $the_query = new WP_Query( array(
            'post_type' => 'ebooks',
            'posts_per_page' => -1,
          )); 
        ?>

        <?php if ( $the_query->have_posts() ) : ?>
          <div class="card-deck">
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <div class="card mb-4 border-0 shadow">
              <img class="img-fluid mb-2 rounded" src="https://placeimg.com/800/400/tech" alt="<?php the_title(); ?>">
              <div class="card-body">
                <div class="mb-3 category-tecnologo">
                  <span class="py-1 px-2 tag rounded text-uppercase mb-2 text-white">Tecnólogo</span>
                </div>
                <p class="h4 font-weight-bold mb-3"><?php the_title(); ?></p>
                <p><?php the_field('resumo') ?></p>
              </div>
              <div class="card-footer border-0 bg-white">
                <a href="<?php the_field('link_do_botao'); ?>" class="btn btn-primary btn-block btn-lg"><?php the_field('texto_do_botao'); ?></a>
              </div>
            </div>


          <?php endwhile; ?>
          </div>
          <?php wp_reset_postdata(); ?>

        <?php else : ?>
          <p><?php __('Nenhum eBook cadastrado'); ?></p>
        <?php endif; ?>
      </div>

      </div>
    </div>

  </div>

<?php get_footer();