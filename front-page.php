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
  <div class="four columns box" id="box1">
    <div class="site-info">
      <h1>11-13 maj</h1>
      <h2>Färgeriet, Kåkenhus</h2>
    </div>
  </div>

  <div class="eight columns box lecturer-content" id="box2">

    <?php
    //Random post

    $args=array('post_type'=>'forelasare', 'orderby'=>'rand', 'posts_per_page'=>'1');
    $forelasare=new WP_Query($args);
      while ($forelasare->have_posts()) : $forelasare->the_post(); { ?>
        <style> .lecturer-content{background-image: url(<?php the_field('image')?>);} </style>
        <div class="lecturer-info-front">
          <h3>FÖRELÄSARE</h3>
          <h1><?php the_title(); ?></h1>
          <h5><?php the_field('time'); ?> i <?php the_field('place'); ?></h5>

        <a href="javascript:delay('<?php echo get_page_link(11); ?>')">
          <button class="c-button c-button--custom" type="button">
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
    <div class="site-info">
      <h3>Nästa event</h3>
      <?php while ( have_posts() ) : the_post(); { ?>

          <?php the_content(); ?>

      <?php } endwhile; // end of the loop. ?>

      <a href="javascript:delay('<?php echo get_page_link(38); ?>')">
        <button class="c-button c-button--custom" type="button">
          <div class="c-ripple js-ripple">
            <span class="c-ripple__circle"></span>
          </div>
          Se hela schemat
        </button>
      </a>

    </div>
  </div>
  <div class="four columns box" id="box4">

    <?php
    //Random post

    $args=array('post_type'=>'examensklassen', 'orderby'=>'rand', 'posts_per_page'=>'1');
    $examensklassen=new WP_Query($args);
      while ($examensklassen->have_posts()) : $examensklassen->the_post(); { ?>

        <img width="200px" class="graduate-img" src="<? the_field('image')?> ">
        <div class="graduate-info-front">
          <h2><?php the_title(); ?></h2>
          <p><?php the_excerpt(); // or the_content(); ?></p>

        <a href="javascript:delay('<?php echo get_page_link(11); ?>')">
          <button class="c-button c-button--custom" type="button">
            <div class="c-ripple js-ripple">
              <span class="c-ripple__circle"></span>
            </div>
            Se Examensklassen
          </button>
        </a>

        </div>


        <?php }

        endwhile;
        wp_reset_postdata(); ?>


  </div>
  <div class="four columns box" id="box5">
    <h1>OM GDK EX</h1>
    <a href="javascript:delay('<?php echo get_page_link(63); ?>')">
      <button class="c-button c-button--custom" type="button">
        <div class="c-ripple js-ripple">
          <span class="c-ripple__circle"></span>
        </div>
        Läs mer
      </button>
    </a>
  </div>
  <div class="four columns box" id="box6">
    <h1>Läs katalogen</h1>
    <a href="javascript:delay('<?php echo get_page_link(69); ?>')">
      <button class="c-button c-button--custom" type="button">
        <div class="c-ripple js-ripple">
          <span class="c-ripple__circle"></span>
        </div>
        Läs mer
      </button>
    </a>
  </div>
  <div class="six columns box" id="box7">
    <h1>Examensklassen</h1>
  </div>

    <div class="six columns box" id="box8">
      <a href="<?php echo get_page_link(64); ?>">
        <h1>Om GDK</h1>  </a>
    </div>

</div>

<script src="<?php echo get_template_directory_uri();?>/js/button.js"></script>
<?php get_footer(); ?>
