<?php
/**
 * Template Name: Om GDK
 *
 * @package EX17
 */

get_header(); ?>

<div class="container">

<div class="row">

<div class="seven columns about-p">

  <?php while ( have_posts() ) : the_post(); ?>

    <?php the_content(); ?>

  <?php endwhile; // end of the loop. ?>

</div>

<div class="five columns info-box blue">
  <div class="info-box-content magenta-text">
    <h2>GDK 180hp</h2>
    <h4>Campus Norrköping</h4>
  </div>
</div>
</div>



<div class="row">
  <div class="seven columns about-p">
    <?php the_field('om-projektgruppen'); ?>
  </div>
  <div class="five columns photo">

  </div>
</div>

</div>

<?php get_footer(); ?>
