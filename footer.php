<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper bg-azul py-5" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-6 col-xl-8 col-lg-9" id="footer-menu">
				<img src="https://agencia915.com.br/clientes/2esamc/wp-content/uploads/2020/03/esamc.png" alt="" class="img-fluid d-block mb-4">
				<div class="row">
					<div class="col-12">
						<a class="mb-2 d-block d-lg-inline-block" href="/clientes/esamcwp/acontece-na-esamc.html">Acontece na ESAMC</a>
						<a class="mb-2 d-block d-lg-inline-block" href="/clientes/esamcwp/acontece-na-esamc.html">Conteúdos</a>
						<a class="mb-2 d-block d-lg-inline-block" href="/clientes/esamcwp/acontece-na-esamc.html">Vídeos</a>
						<a class="mb-2 d-block d-lg-inline-block" href="/clientes/esamcwp/acontece-na-esamc.html">Eventos</a>
						<a class="mb-2 d-block d-lg-inline-block" href="/clientes/esamcwp/acontece-na-esamc.html">Parceiros</a>
					</div>
					<div class="col-12">
						<a class="mb-2 d-block d-lg-inline-block" href="/clientes/esamcwp/acontece-na-esamc.html">Experiência ESAMC</a>
						<a class="mb-2 d-block d-lg-inline-block" href="/clientes/esamcwp/acontece-na-esamc.html">Entidades
							Estudantis</a>
						<a class="mb-2 d-block d-lg-inline-block" href="/clientes/esamcwp/acontece-na-esamc.html">Web Série</a>
						<a class="mb-2 d-block d-lg-inline-block" href="/clientes/esamcwp/acontece-na-esamc.html">eBooks</a>
					</div>
				</div>
			</div>
			<div class="col-6 col-xl-4 col-lg-3">
				<p class="h5 text-uppercase text-white mb-3">Newsletter</p>
				<form class="form-inline mb-3">
					<label class="sr-only" for="inlineFormInputGroupUsername2">Email</label>
					<div class="input-group mb-2">
					<input type="text" class="form-control newsletter-email montserrat bg-transparent text-white"
						id="inlineFormInputGroupEmail2" placeholder="preencha seu email">
					</div>
					<button type="submit" class="btn btn-danger mb-2 newsletter-submit">Assinar</button>
				</form>
					<a class="btn btn-light mb-2 ml-1 d-none d-lg-inline-block" href="<?php the_field('link_facebook', 'option'); ?>" target="_blank">
                        <i class="fa fa-facebook fa-1x text-light-blue"></i>
                    </a>
                    <a class="btn btn-light mb-2 ml-1 d-none d-lg-inline-block" href="<?php the_field('link_linkedin', 'option'); ?>" target="_blank">
                        <i class="fa fa-linkedin fa-1x text-light-blue"></i>
                    </a>
                    <a class="btn btn-light mb-2 ml-1 d-none d-lg-inline-block" href="<?php the_field('link_youtube', 'option'); ?>" target="_blank">
                        <i class="fa fa-youtube fa-1x text-light-blue"></i>
                    </a>
                    <a class="btn btn-light mb-2 ml-1 d-none d-lg-inline-block" href="<?php the_field('link_instagram', 'option'); ?>" target="_blank">
                        <i class="fa fa-instagram fa-1x text-light-blue"></i>
                    </a>
			</div>

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/lity@2.4.0/dist/lity.min.js"></script>

<script type="text/javascript">
    jQuery(document).ready(function () {
      jQuery(".hamburger-button a").click(function () {
        jQuery(".overlay").fadeToggle(200);
        jQuery(this).toggleClass('btn-open').toggleClass('btn-close');
        jQuery('.hamburger-button').toggleClass('position-fixed');
      });
    });
  </script>

</body>

</html>
