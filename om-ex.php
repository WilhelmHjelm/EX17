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
  <?php
  // Custom post type "projectgroups" list

        $args = array(
          'post_type' => 'projektgruppen',
        );
        $projectgroups = new WP_Query( $args );
        if( $projectgroups->have_posts() ) {
          echo '<div class="twelve columns all-project-groups">';
          while( $projectgroups->have_posts() ) {
            $projectgroups->the_post();
            ?>
            <div class="four columns one-project-group" style="background-image: url(<?php the_field('project-img'); ?>);">
              <div class="project-group-info">
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
              </div>
            </div>
  <?php  }
  echo '</div>';
    }
  else {
   echo 'Något är fel. Var god ansvariga för sidan.';
      }
  ?>
</div>

</div>
<?php get_footer(); ?>
