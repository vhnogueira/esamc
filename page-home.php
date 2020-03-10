<?php
/**
 * Template Name: Home Page
 *
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

// while ( have_posts() ) :
    // 	get_template_part( 'loop-templates/content', 'empty' );
// 	the_post();
// endwhile; ?>

    <div class="pb-5 bg-azul" style="padding-top: 9rem;">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="card category-graduacao shadow border-0 mb-4 d-flex">
              <img class="card-img rounded" src="https://placeimg.com/1600/800/tech" alt="Card image">
              <div class="card-img-overlay rounded d-flex">
                <div class="mt-auto">

                  <div class="mb-2"><span class="py-1 px-2 tag rounded text-uppercase mb-2 text-white">Graduação</span>
                  </div>

                  <a class="btn p-0 card-title text-light text-left" href="/clientes/esamcwp/artigo.html"><span
                      class="h3 font-weight-bold playfair">Em
                      dúvida do curso? A gente ajuda!</span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="row">
              <div class="col-6 col-lg-12 mb-2 category-mba">
                <div class="mb-2"><span class="py-1 px-2 tag rounded text-uppercase mb-2 text-white">MBA</span></div>
                <a href="/clientes/esamcwp/artigo.html" class="h6 btn text-left p-0 mb-0 font-weight-bold text-light">Em
                  dúvida do curso? A gente
                  ajuda!</a>
                <hr class="border-white small-divider">
              </div>
              <div class="col-6 col-lg-12 mb-2 category-tecnologo">
                <div class="mb-2"><span class="py-1 px-2 tag rounded text-uppercase mb-2 text-white">Tecnólogo</span>
                </div>
                <a href="/clientes/esamcwp/artigo.html" class="h6 btn text-left p-0 mb-0 font-weight-bold text-light">Em
                  dúvida do curso? A gente
                  ajuda!</a>
                <hr class="border-white small-divider">
              </div>
              <div class="col-6 col-lg-12 mb-2 category-graduacao">
                <div class="mb-2"><span class="py-1 px-2 tag rounded text-uppercase mb-2 text-white">Graduação</span>
                </div>
                <a href="/clientes/esamcwp/artigo.html" class="h6 btn text-left p-0 mb-0 font-weight-bold text-light">Em
                  dúvida do curso? A gente
                  ajuda!</a>
                <hr class="border-white small-divider">
              </div>
              <div class="col-6 col-lg-12 mb-2 category-mba">
                <div class="mb-2"><span class="py-1 px-2 tag rounded text-uppercase mb-2 text-white">MBA</span></div>
                <a href="/clientes/esamcwp/artigo.html" class="h6 btn text-left p-0 mb-0 font-weight-bold text-light">Em
                  dúvida do curso? A gente
                  ajuda!</a>
                <hr class="border-white small-divider">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="bg-clear py-5">
    <div class="container">
      <p class="h1 text-center mb-5 font-weight-bold playfair text-secondary">Vídeos</p>
      <div class="row">
        <div class="col-lg-8">
          <div class="card category-graduacao shadow border-0 mb-4 d-flex">
            <img class="card-img rounded" src="https://placeimg.com/800/400/tech" alt="Card image">
            <div class="card-img-overlay rounded d-flex">
              <div class="mt-auto">
                <div class="video-play" href="//www.youtube.com/watch?v=XSGBVzeBUbk" data-lity></div>

                <div class="mb-2"><span class="py-1 px-2 tag rounded text-uppercase mb-2 text-white">Graduação</span>
                </div>

                <div class="p-0 card-title text-light text-left">
                  <span class="h3 font-weight-bold playfair">
                    Em dúvida do curso? A gente ajuda!
                  </span>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="col-lg-4">
          <div class="card category-tecnologo shadow border-0 mb-3 d-flex">
            <img class="card-img rounded" src="https://placeimg.com/800/400/tech" alt="Card image">
            <div class="card-img-overlay py-0 px-3 rounded d-flex">
              <div class="mt-auto">
                <div class="video-play" href="//www.youtube.com/watch?v=XSGBVzeBUbk" data-lity></div>
                  

                <div class="mb-2"><span class="py-1 px-2 tag rounded text-uppercase mb-2 text-white">Tecnólogo</span>
                </div>

                <div class="p-0 card-title text-light text-left">
                  <span class="h6 font-weight-bold playfair">Em dúvida do curso? A
                    gente ajuda!</span></div>
              </div>
            </div>
          </div>
          <div class="card category-mba shadow border-0 mb-4 d-flex">
            <img class="card-img rounded" src="https://placeimg.com/800/400/tech" alt="Card image">
            <div class="card-img-overlay py-0 px-3 rounded d-flex">
              <div class="mt-auto">
                <div class="video-play" href="//www.youtube.com/watch?v=XSGBVzeBUbk" data-lity></div>


                <div class="mb-2"><span class="py-1 px-2 tag rounded text-uppercase mb-2 text-white">MBA</span></div>

                <div class="p-0 card-title text-light text-left">
                  <span class="h6 font-weight-bold playfair">Em dúvida do curso? A
                    gente ajuda!</span></div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="text-center">
        <a href="/clientes/esamcwp/videos.html" class="btn btn-primary btn-lg">Todos os vídeos</a>
      </div>
    </div>
  </div>

    <script>
        window.onscroll = scroll;

        function scroll () {
        if (jQuery(document).scrollTop() > 0) {
            jQuery('nav').addClass('scrolled shadow');
        } else {
            jQuery('nav').removeClass('scrolled shadow');
        }
        }
    </script>

<?php get_footer();