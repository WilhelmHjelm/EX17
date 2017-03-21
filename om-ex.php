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

<div class="five columns info-box">
  <div class="info-box-content yellow-text">
    <h2>11 - 13 maj</h2>
    <h4><i class="fa fa-map-marker" aria-hidden="true"></i>  Färgeriet</h4>
  </div>
</div>
</div>

<div class="row">
  <div class="twelve columns">
    GOOGLE MAP
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
