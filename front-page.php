<?php
/**
 * The front-page of the theme
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package EX17
 */ get_header(); ?>

<!-- <div class="container">
  <div class="flexbox-grid">
      <div class="flexbox-box" id="box-1">
        <div class="flexbox-content" id="box-1-content">
          <h1>11-13 maj</h1>
          <h3>Färgeriet</h3>
        </div>
      </div>
      <div class="flexbox-box" id="box-2">
        HEJ 2
      </div>
      <div class="flexbox-box" id="box-3">
        HEJ 3
      </div>

      <div class="flexbox-box" id="box-5">
        HEJ 5
      </div>
      <div class="flexbox-box" id="box-6">
        <div class="flexbox-content">
          HEJ 6
        </div>
      </div>
      <div class="flexbox-box" id="box-4">
        HEJ 4
      </div>
  </div>
</div> -->

<div class="container">
  <div class="five columns box" id="box1">
    <button class="c-button c-button--blue" type="button">
      <div class="c-ripple js-ripple">
        <span class="c-ripple__circle"></span>
      </div>
      Short Button
    </button>
    <button class="c-button c-button--purple" type="button">
  <div class="c-ripple js-ripple">
    <span class="c-ripple__circle"></span>
  </div>
  Material Design Ripple Effect
</button>


  </div>

  <div class="seven columns box lecturer-content forelasare-color1" id="box2">

    <?php
    //Random post

    $args=array('post_type'=>'forelasare', 'orderby'=>'rand', 'posts_per_page'=>'1');
    $forelasare=new WP_Query($args);
      while ($forelasare->have_posts()) : $forelasare->the_post(); { ?>

        <img class="lecturer-img" src="<? the_field('image')?> ">
        <div class="lecturer-info-front">
          <h1>FÖRELÄSARE</h1>
          <h3><?php the_title(); ?></h3>
          <p><?php the_excerpt(); // or the_content(); ?></p>
          <h5><?php the_field('time'); ?> i <?php the_field('place'); ?></h5>

        <a href="javascript:delay('<?php echo get_page_link(11); ?>')">
          <button class="c-button c-button--blue" type="button">
            <div class="c-ripple js-ripple">
              <span class="c-ripple__circle"></span>
            </div>
            Fler föreläsare
          </button>
        </a>

        </div>


        <?php }
        endwhile;
        wp_reset_postdata(); ?>

  </div>
  <div class="eight columns box" id="box3">
  </div>
  <div class="four columns box" id="box4">
  </div>
  <div class="four columns box" id="box5">
  </div>
  <div class="four columns box" id="box6">
  </div>
  <div class="six columns box" id="box7">
  </div>
  <div class="six columns box" id="box8">
  </div>
</div>
<script src="<?php echo get_template_directory_uri();?>/js/button.js"></script>
<script>function delay (URL) {setTimeout( function() { window.location = URL }, 500 );}</script>
<?php// get_footer(); ?>
