<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="panel panel-default error-404 not-found">
				<header class="panel-header">
					<h1 class="panel-title"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'shillers'); ?></h1>
				</header><!-- .page-header -->

				<div class="panel-body">
					<p><?php esc_html_e('Try searching what you are looking for below, or browse through some of recent posts!', 'shillers'); ?></p>
					<form role="search" method="get" class="form-horizontal" action="<?php echo esc_url(home_url('/')); ?>">
						<fieldset>
							<div class="col-xs-10 form-group label-floating is-empty">
								<label class="control-label" for="s">Search</label>
								<input type="search" id="s" name="s" value="" class="form-control">
							</div>
							<div class="col-xs-2">
								<button type="submit" id="search-submit" class="btn btn-fab btn-fab-mini">
									<i class="icon-search"></i>
								</button>
							</div>
						</fieldset>
					</form>
					<?php
                        the_widget('WP_Widget_Recent_Posts');

                    ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
