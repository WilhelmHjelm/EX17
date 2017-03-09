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
			<a href="<?php echo get_home_url(); ?>"><div class="one columns"><img src="<?php echo get_template_directory_uri();?>/img/logo-text.svg" alt="Logo" height="70px"></div></a>
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
			<a href="<?php echo get_home_url(); ?>"><div class="one columns"><img src="<?php echo get_template_directory_uri();?>/img/logo-text.svg" alt="Logo" height="70px"></div></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	</div><!-- container -->
	</div><!-- #content -->
	</div><!-- #page -->

	<?php

	endif; ?>

<?php //wp_footer(); ?>

</body>
</html>
