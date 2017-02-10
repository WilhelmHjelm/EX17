<?php
/**
 * Template Name: Föreläsare
 *
 * @package EX17
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

  <?php get_template_part( 'content', 'page' ); ?>

<?php endwhile; // end of the loop. ?>

<?php
// Custom post type "Föreläsare" list

    $args = array(
      'post_type' => 'forelasare'
    );
    $forelasare = new WP_Query( $args );
    if( $forelasare->have_posts() ) {
      $i = 1;
      while( $forelasare->have_posts() ) {
        $forelasare->the_post();
        if($i == 1) {$graduateColor = "forelasare-color1";}
        if($i == 2) {$graduateColor = "forelasare-color2";}
        if($i == 3) {$graduateColor = "forelasare-color3";}
        if($i == 4) {$graduateColor = "forelasare-color4"; $i = 0;}
        $i++;
        ?>

        <div class="container " id="<?php echo $post->post_name;?>">

        <div class="twelve columns box lecturer-box <?php echo $graduateColor;?>">
          <div class="four columns lecturer-content offset-by-two">
            <img class="lecturer-img" src="<?php the_field('image'); ?>" alt="<?php the_title(); ?>">
          </div>
          <div class="six columns lecturer-content">
            <div class="lecturer-info">
              <h1><?php the_title(); ?></h1>
              <p><?php the_content(); ?></p>
              <h5><?php the_field('time'); ?> i <?php the_field('place'); ?></h5>
            </div>
          </div>
        </div>

        <?php
      }
    }
    else { ?>
      <div class="container">
        <div class="twelve columns aligncenter">
          <p>Föreläsare presenteras inom kort</p>
        </div>
      </div>
    <?php }
  ?>

<?php
// get_footer();
?>
