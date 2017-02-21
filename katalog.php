<?php
/**
 * Template Name: Katalog
 *
 * @package EX17
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

  <?php get_template_part( ); ?>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
