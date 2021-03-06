<?php
/**
 * Template Name: Föreläsare
 *
 * @package EX17
 */

get_header(); ?>

<div class="container">

<?php
// Custom post type "Föreläsare" list

    $args = array(
      'post_type'			=> 'forelasare',
      'orderby' => 'title',
      'order'   => 'ASC'
    );
    $forelasare = new WP_Query( $args );
    if( $forelasare->have_posts() ) {
      $i = 1;
      while( $forelasare->have_posts() ) {
        $forelasare->the_post();
        if($i == 1) {$graduateColor = "forelasare-color1";}
        if($i == 2) {$graduateColor = "forelasare-color2"; $i = 0;}
        $i++;
        ?>



        <div class="twelve columns box lecturer-box <?php echo $graduateColor;?>" id="<?php echo $post->post_name;?>">
          <div class="five columns offset-by-one lecturer-content">
            <div class="lecturer-info">
              <h1><?php the_title(); ?></h1>
              <p><?php the_content(); ?></p>
              <h5><?php the_field('dag'); ?> <?php the_field('time'); ?> i <?php the_field('place'); ?></h5>
              <style> #<?php echo $post->post_name;?>{background-image: url(<?php echo the_post_thumbnail_url();?>);} </style>
            </div>
          </div>
        </div>


        <?php
      }
    }
    else { ?>

        <div class="twelve columns aligncenter" id="no-lecturer">
          <h1>Föreläsare presenteras inom kort</h1>
        </div>

    <?php }
  ?>
  <?php while ( have_posts() ) : the_post(); ?>

    <?php the_content(); ?>

  <?php endwhile; // end of the loop. ?>
</div>
<?php
 get_footer();
?>
