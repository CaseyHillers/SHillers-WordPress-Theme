<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ShaneHillers
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'panel panel-primary' ); ?>>
	<header class="panel-head">
		<?php
		if ( is_single() ) :
			the_title( '<h2 class="panel-title">', '</h1>' );
		else :
			the_title( '<h2 class="panel-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		?>
		<?php shillers_posted_on(); ?>

	</header><!-- .entry-header -->

	<div class="panel-body">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'shillers' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'shillers' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="panel-footer">
		<?php
		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
		<?php shillers_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
