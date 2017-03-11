<?php
/**
 * Template Name: Om EX
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
    <?php the_field('om-projektgruppen'); ?>
  </div>
  <div class="five columns photo">

  </div>
</div>

</div>
