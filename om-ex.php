<?php
/**
 * Template Name: Om EX
 *
 * @package EX17
 */

get_header(); ?>

<style>
  .Om.GDK.EX {background-image: url(<?php echo the_post_thumbnail_url(); ?>);}
</style>

<div class="container">

<div class="row">

<div class="seven columns about-p">

  <?php while ( have_posts() ) : the_post(); ?>

    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>

  <?php endwhile; // end of the loop. ?>

</div>

<div class="five columns info-box blue">
  <div class="info-box-content yellow-text">
    <h2>11 - 13 maj</h2>
    <h4><i class="fa fa-map-marker" aria-hidden="true"></i>  Färgeriet</h4>
  </div>
</div>
</div>

<div class="row">
  <div class="twelve columns">
    <iframe width="100%" height="300" frameborder="0" style="border:0"
src="https://www.google.com/maps/embed/v1/place?q=K%C3%A5kenhus%2C%20Norrk%C3%B6ping&key=AIzaSyDGfMk2OybMJp-Oy7v8QMgU-J1N2a9pBKM" allowfullscreen></iframe>
  </div>
</div>

<div class="row">
  <div class="seven columns about-p">
    <?php the_field('text-2'); ?>
  </div>
  <div class="five columns photo">

  </div>
</div>

</div>
<?php get_footer(); ?>
