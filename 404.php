<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package EX17
 */

get_header(); ?>

<div class="container">
<div class="six columns offset-by-one">


					<h1>EXcuse us!</h1>


				<div class="page-content">
					<p><?php esc_html_e( 'Sidan kunde inte hittas!', 'ex17' ); ?></p>
</div>
					<?php

						// Only show the widget if site has multiple categories.
						if ( ex17_categorized_blog() ) :
					?>
					</div><!-- .widget -->

					<?php
						endif;

						/* translators: %1$s: smiley */
					
					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
