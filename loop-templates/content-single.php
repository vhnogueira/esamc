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

		<?php the_title( '<h1 class="entry-title mb-2">', '</h1>' ); ?>

		<div class="entry-meta mb-4 bg-light d-inline-block rounded p-3">

		<div class="row">
			<div class="col-sm-3">
				<?php
				if ( isset( $_GET['author_name'] ) ) {
					$curauth = get_user_by( 'slug', $author_name );
				} else {
					$curauth = get_userdata( intval( $author ) );
				}
				?>
				<?php if ( ! empty( $curauth->ID ) ) : ?>
					<?php echo get_avatar( $curauth->ID ); ?>
				<?php endif; ?>
			</div>
			<div class="col-sm-9">
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