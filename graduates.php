<?php
/**
 * Template Name: Examensklassen
 *
 * @package EX17
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

  <?php get_template_part( 'content', 'page' ); ?>

<?php endwhile; // end of the loop. ?>

<div class="container">


<?php
// Custom post type "Examensklassen" list

      $args = array(
        'post_type' => 'examensklassen',
        'orderby' => 'title',
	      'order'   => 'ASC'
      );
      $examensklassen = new WP_Query( $args );
      if( $examensklassen->have_posts() ) {
        echo '<ul id="og-grid" class="og-grid twelve columns">';
        echo '<li>
          <a href="">
            <div class="graduate-name magenta-bg"><span>Klicka på en person för att läsa mer</span></div>
          </a>
        </li>';
        $i = 1;
        while( $examensklassen->have_posts() ) {
          $examensklassen->the_post();
          if($i == 1) {$graduateColor = "blue";}
          if($i == 2) {$graduateColor = "magenta"; $i = 0;}
          $i++;

          $attachment_id = get_field('image');
          $thumb = "medium"; // (thumbnail, medium, large, full or custom size)
          $thumb_image = wp_get_attachment_image_src( $attachment_id, $thumb );
          $fullsize = "full"; // (thumbnail, medium, large, full or custom size)
          $full_image = wp_get_attachment_image_src( $attachment_id, $fullsize );

          $hover_attachment_id = get_field('hoverimage');
          $hover_thumb = "medium";
          $hover_thumb_image = wp_get_attachment_image_src( $hover_attachment_id, $hover_thumb );
          ?>
          <li>
            <a href="" data-largesrc="<?php echo $full_image[0]; ?>" data-title="<?php the_title() ?>" data-description='<?php the_content() ?>'>
              <img src="<?php echo $thumb_image[0]; ?>" class="static" alt="<?php the_title() ?>">
              <img src="<?php echo $hover_thumb_image[0]; ?>" class="hover" alt="<?php the_title() ?>">
              <div class="graduate-name <?php echo $graduateColor; ?>-bg"><span><?php the_title() ?></span></div>
            </a>
          </li>
        <?php
        }
        echo '</ul>';
    }
    else {
      echo 'Något är fel. Var god ansvariga för sidan.';
    }
  ?>
</div> <!-- .container -->
<div class="container">
<div class="row">
  <div class="six columns">
    <h1>Engagemang</h1>
    <p>Det är klart att vi har pluggat, men under våra tre korta år har vi hunnit med mycket annat också:</p>
  </div>
</div>
<div class="row">
  <?
      $args = array(
            'post_type' => 'examensklassen',
            'orderby' => 'name',
            'parent' => 0
      );
      $categories = get_categories( $args );
      foreach ( $categories as $category ) { ?>

        <div class="two columns category">
          <h3><?php echo $category->cat_name ?></h3>
          <li><?php the_title(); ?></li>
        </div>
      <?php }
    ?>
  </ul>
<?
    // Our variables
    $numPosts = (isset($_GET['numPosts'])) ? $_GET['numPosts'] : 0;
    $page = (isset($_GET['pageNumber'])) ? $_GET['pageNumber'] : 0;

    query_posts(array(
          'posts_per_page' => $numPosts,
          'paged'          => $page,
          'post_type'      => 'examensklassen'
    ));

    // our loop
    if (have_posts()) {
          while (have_posts()){
                the_post();
          }
    }
    wp_reset_query();
  ?>
</div>
</div>
<?php
get_footer();
 ?>

<script src="<?php echo get_template_directory_uri()?>/js/graduates/expanding.js"></script>

 <script>
 	$(function() {
 		Grid.init();
 	});
 </script>


<?php get_footer(); ?>
