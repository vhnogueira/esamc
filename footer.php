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
				<a class="btn btn-light mb-2" href="http://facebook.com"><i
					class="fab fa-facebook fa-2x text-light-blue"></i></a>
				<a class="btn btn-light mb-2" href="http://linkedin.com"><i
					class="fab fa-linkedin fa-2x text-light-blue"></i></a>
				<a class="btn btn-light mb-2" href="http://youtube.com"><i
					class="fab fa-youtube fa-2x text-light-blue"></i></a>
				<a class="btn btn-light mb-2" href="http://instagram.com"><i
					class="fab fa-instagram fa-2x text-light-blue"></i></a>
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
    $(document).ready(function () {
      $(".hamburger-button a").click(function () {
        $(".overlay").fadeToggle(200);
        $(this).toggleClass('btn-open').toggleClass('btn-close');
        $('.hamburger-button').toggleClass('position-fixed');
      });
    });
  </script>

</body>

</html>
