<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ShaneHillers
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('panel'); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="panel-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php shillers_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="panel-content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	
	<footer class="panel-footer">
		<?php shillers_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
