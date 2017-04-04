<?php
/**
 * Template Name: Katalog
 *
 * @package EX17
 */

get_header(); ?>
<div class="container">


<?php while ( have_posts() ) : the_post(); ?>

  <?php the_content(); ?>

<?php endwhile; // end of the loop. ?>
</div>
<?php get_footer(); ?>
