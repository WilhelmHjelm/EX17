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
            <div class="graduate-name magenta-bg"><span id="forklaring">Klicka på en person för att läsa mer</span></div>
          </a>
        </li>';
        $i = 1;
        while( $examensklassen->have_posts() ) {
          $examensklassen->the_post();


          $attachment_id = get_field('image');
          $thumb = "medium"; // (thumbnail, medium, large, full or custom size)
          $thumb_image = wp_get_attachment_image_src( $attachment_id, $thumb );
          $fullsize = "full"; // (thumbnail, medium, large, full or custom size)
          $full_image = wp_get_attachment_image_src( $attachment_id, $fullsize );

          $hover_attachment_id = get_field('hoverimage');
          $hover_thumb = "medium";
          $hover_thumb_image = wp_get_attachment_image_src( $hover_attachment_id, $hover_thumb );
          ?>
          <li id="<?php echo $post->post_name;?>">
            <a href="" data-largesrc="<?php echo $full_image[0]; ?>" data-title="<?php the_title() ?>" data-description='<?php the_content() ?>'>
              <img src="<?php echo $thumb_image[0]; ?>" class="static" alt="<?php the_title() ?>">
              <img src="<?php echo $hover_thumb_image[0]; ?>" class="hover" alt="<?php the_title() ?>">
              <div class="graduate-name blue-bg"><span><?php the_title() ?></span></div>
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
  <div class="engagemang twelve columns">
      <p id="explenation">Det är klart att vi har pluggat, men under våra tre korta år har vi hunnit med mycket annat också:</p>
  <?php
/*
 * Loop through Categories and Display Posts within
 */
$post_type = 'examensklassen';

// Get all the taxonomies for this post type
$taxonomies = get_object_taxonomies( array( 'examensklassen' => $post_type ) );

foreach( $taxonomies as $taxonomy ) :

    // Gets every "category" (term) in this taxonomy to get the respective posts
    $terms = get_terms( $taxonomy );

    foreach( $terms as $term ) : ?>

  <h3 class="one-engagemang"><?php echo $term->name; ?></h3>
        <?php
        $args = array(
                'post_type' => $post_type,
                'posts_per_page' => -1,  //show all posts
                'tax_query' => array(
                    array(
                        'taxonomy' => $taxonomy,
                        'field' => 'slug',
                        'terms' => $term->slug,
                    )
                )

            );
        $posts = new WP_Query($args);

        if( $posts->have_posts() ): while( $posts->have_posts() ) : $posts->the_post(); ?>

                    <li class="person"><?php  echo get_the_title(); ?></li>

        <?php endwhile; endif; ?>

    <?php endforeach;

endforeach; ?>


</div>
</div>
</div>
</div>
<?php
get_footer();
 ?>

<script src="<?php echo get_template_directory_uri()?>/js/graduates/expanding.js"></script>

</script>
 <script>
 	$(function() {
 		Grid.init();
 	});
 </script>


<?php get_footer(); ?>
