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

    <?php the_content(); ?>

  <?php endwhile; // end of the loop. ?>

</div>

<div class="five columns info-box blue">
  <div class="info-box-content yellow-text">
    <h1>11-13 MAJ</h1>
    <h2><i class="fa fa-map-marker"></i>Campus Norrköping</h2>
    <h3>Färgeriet, Kåkenhus</h3>
  </div>
</div>
</div>

<div class="row">
  <div class="twelve columns">
    <iframe class="map" width="100%" height="300" frameborder="0" style="border:0"
src="https://www.google.com/maps/embed/v1/place?q=K%C3%A5kenhus%2C%20Norrk%C3%B6ping&key=AIzaSyDGfMk2OybMJp-Oy7v8QMgU-J1N2a9pBKM" allowfullscreen></iframe>
  </div>
</div>
<div class="row"></div>
<div class="row">
  <div class="seven columns about-p">
    <?php the_field('text-2'); ?>
  </div>
</div>
<div class="row">
  <div class="gruppen">
    <img src="<?php echo get_template_directory_uri();?>/img/gruppen.jpg" id="dragable">
  </div>
</div>

</div>
<?php get_footer(); ?>
