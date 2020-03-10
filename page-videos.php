<?php
/**
 * Template Name: Vídeos - Template
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

            // check if the repeater field has rows of data
            if( have_rows('videos') ):

              // loop through the rows of data
                while ( have_rows('videos') ) : the_row(); ?>

              <div class="col-md-4">
                <div class="card category-tecnologo shadow border-0 mb-3 d-flex">
                    <img class="card-img rounded" src="https://placeimg.com/800/400/tech" alt="Card image">
                    <div class="card-img-overlay py-0 px-3 rounded d-flex">
                        <div class="mt-auto">

                            <div class="video-play" href="<?php the_field('video_link'); ?>" data-lity></div>

                            <div class="mb-2">
                                <span class="py-1 px-2 tag rounded text-uppercase mb-2 text-white"><?php categoryname ?></span>
                            </div>

                            <a class="btn p-0 card-title text-light text-left" href="<?php the_field('video_link'); ?>" data-lity>
                              <span class="h6 font-weight-bold playfair"><?php the_field('video_title'); ?></span>
                            </a>

                        </div>
                    </div>
                </div>
            </div>

            <?php

                    // display a sub field value
                    the_sub_field('sub_field_name');

                endwhile;

            endif;

            ?>
            
        </div>
    </div>
</div>

<?php get_footer();