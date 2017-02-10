<?php
/**
 * Template Name: Schema
 *
 * @package EX17
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); { ?>

<div class="container">
  <div class="twelve columns">
    <?php the_content(); ?>
  </div>
</div>

<?php } endwhile; // end of the loop. ?>

<?php get_footer(); ?>
