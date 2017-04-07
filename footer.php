<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EX17
 */

?>

	<div class="container">

		<?php
		if ( is_front_page() ) : ?>
	<footer>

		<div class="twelve columns">
			<h5>Samarbetspartners</h5>
		</div> <!-- .twelve -->

		<div class="sponsors">
		<?php

    $args=array('post_type'=>'sponsorer', 'orderby'=>'rand');
    $sponsors=new WP_Query($args);
      while ($sponsors->have_posts()) : $sponsors->the_post(); { ?>

				<div class="sponsor two columns">
        	<a href="<?php the_field('link') ?>" target="_blank">
						<img width="100%" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
					</a>
				</div>

        <?php }

        endwhile;
        wp_reset_postdata(); ?>
		</div>

		<div class="twelve columns real-footer">
			<a href="<?php echo get_home_url(); ?>"><div class="one columns sponsors"><img src="<?php echo get_template_directory_uri();?>/img/logo-text.svg" alt="Logo" height="70px"></div></a>
			<div class="footer-icons">
				<a href="mailto:ex@gdk.nu"><i class="fa fa-envelope" aria-hidden="true"></i></a>
				<a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
				<a href="https://www.facebook.com/gdk.ex/?fref=ts"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	</div><!-- container -->
</div><!-- #content -->
</div><!-- #page -->

<?php elseif ( is_post_type_archive('utstallning') || is_singular('utstallning')) : ?>

	<style>.entry-footer{display: none;}</style>
	<div class="twelve columns  real-footer" id="footer-utstallning">
		<a href="<?php echo get_home_url(); ?>"><div class=" aligncenter "><img src="<?php echo get_template_directory_uri();?>/img/logo-text.svg" alt="Logo" height="70px"></div></a>

	</div><!-- .site-info -->
	</footer><!-- #colophon -->
	</div><!-- container -->
	</div><!-- #content -->
	</div><!-- #page -->

<?php else : ?>

	<div class="footer">

		<div class="twelve columns">
			<h5>Samarbetspartners</h5>
		</div> <!-- .twelve -->

		<div class="sponsors">
		<?php
		//Random post

		$args=array('post_type'=>'sponsorer', 'orderby'=>'rand');
		$sponsors=new WP_Query($args);
			while ($sponsors->have_posts()) : $sponsors->the_post(); { ?>

				<div class="sponsor two columns">
					<a href="<?php the_field('link') ?>" target="_blank">
						<img width="100%" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
					</a>
				</div>

				<?php }

				endwhile;
				wp_reset_postdata(); ?>
			</div>

		<div class="twelve columns real-footer">
			<a href="<?php echo get_home_url(); ?>"><div class="one columns sponsors"><img src="<?php echo get_template_directory_uri();?>/img/logo-text.svg" alt="Logo" height="70px"></div></a>
			<div class="footer-icons">
				<a href="mailto:ex@gdk.nu"><i class="fa fa-envelope" aria-hidden="true"></i></a>
				<a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
				<a href="https://www.facebook.com/gdk.ex/?fref=ts"><i class="fa fa-facebook" aria-hidden="true"></i></a>

			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	</div><!-- container -->
	</div><!-- #content -->
	</div><!-- #page -->

	<?php

	endif; ?>

<?php wp_footer(); ?>

</body>
</html>
