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

      <?php 
        // the query
        $the_query = new WP_Query( array(
          'category_name' => 'news',
          'posts_per_page' => 3,
          'post_type' => 'eventos',
        )); 
      ?>

      <?php if ( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

          <?php the_title(); ?>
          <?php the_excerpt(); ?>

        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>

      <?php else : ?>
        <p><?php __('No News'); ?></p>
      <?php endif; ?>

        <div class="col-md-4">
          <div class="card border-0 shadow">
            <img class="img-fluid mb-2 rounded" src="https://placeimg.com/800/400/tech" alt="Card image">
            <div class="card-body">
              <div class="mb-3 category-tecnologo"><span class="py-1 px-2 tag rounded text-uppercase mb-2 text-white">Tecnólogo</span>
              </div>
              <p class="h4 font-weight-bold mb-3">Evento: Em dúvida do curso? A gente ajuda!</p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis id dolores nesciunt debitis saepe facilis nam tenetur aperiam fugit reprehenderit commodi officia eligendi temporibus quis, ratione earum odit provident? Error!</p>
              <a href="#" class="btn btn-primary btn-block btn-lg">Baixar agora</a>
            </div> 
          </div>
        </div>


      </div>
    </div>

  </div>

<?php get_footer();