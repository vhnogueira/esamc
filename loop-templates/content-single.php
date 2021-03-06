<?php
/**
 * Single post partial template
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

	    <?php echo get_the_post_thumbnail( $post->ID, 'large', Array('class' => 'img-fluid mx-auto d-block w-100 mb-4') ); ?>

		<?php the_title( '<h1 class="entry-title mb-3">', '</h1>' ); ?>

		<div class="entry-meta mb-4 rounded">

		<div class="row">
			<div class="col-sm-2 text-center mb-3 mb-sm-0">

			<?php
			// $user = wp_get_current_user();
			$user = get_the_author();
			
			if ( $user ) :
				?>
				<img class="img-fluid rounded-circle" style="max-width: 72px;" src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" />
			<?php endif; ?>

			</div>
			<div class="col-sm-10 align-self-center">
				<?php understrap_posted_on(); ?>	
			</div>
		</div>


		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->


	<div class="entry-content">

		<?php the_content(); ?>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer mb-4">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->