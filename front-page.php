<?php
/**
 * The front-page of the theme
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package EX17
 */ get_header(); ?>

<div class="container">
  <div class="four columns box blue" id="box1">
    <div class="site-info yellow-text">
      <h1>11-13 MAJ</h1>
      <h2><i class="fa fa-map-marker"></i>Campus Norrköping</h2>
      <h3>Färgeriet, Kåkenhus</h3>
    </div>
  </div>

  <div class="eight columns box lecturer-img-front" id="box2">

    <?php
    //Random post

    $args=array('post_type'=>'forelasare', 'orderby'=>'rand', 'posts_per_page'=>'1');
    $forelasare=new WP_Query($args);
      if(!$forelasare->have_posts() ) {?>
        <div id="no-lecurer">
          <h2>Föreläsare presenteras inom kort</h2>
        </div>
      <? }

      while ($forelasare->have_posts()) : $forelasare->the_post(); { ?>

        <style> .lecturer-img-front{background-image: url(<?php the_field('image')?>);} </style>
        <div class="lecturer-info-front">
          <h4>EN AV ALLA FÖRELÄSARE</h4>
          <h1><?php the_title(); ?></h1>
          <h5><?php the_field('dag'); ?> <?php the_field('time'); ?> i <?php the_field('place'); ?></h5>

        </div>

        <a href="javascript:delay('<?php echo get_page_link(11);?>#<?php echo $post->post_name;?>')">
          <button class="c-button c-button--black absolute" type="button">
            <div class="c-ripple js-ripple">
              <span class="c-ripple__circle"></span>
            </div>
            Fler föreläsare
          </button>
        </a>
        <?php }

        endwhile;
        wp_reset_postdata(); ?>

  </div>
  <div class="eight columns box pink" id="box3">
    <div class="next-event">
      <h4>NÄSTA EVENT</h4>
      <li class="schema-item" id="schema-item-front">
      <h1>Utställningen öppnar</h1>
      <h5>Torsdag</h5><h5>9:00 - 17:00</h5><h5>Färgeriet</h5>
      </li>
    </div>
   <a href="javascript:delay('<?php echo get_page_link('38') ?>')">
      <button class="c-button c-button--black absolute" type="button">
        <div class="c-ripple js-ripple">
          <span class="c-ripple__circle"></span>
        </div>
        Se hela schemat
      </button>
    </a>
  </div>
  <div class="four columns box" id="box4">

    <?php
    //Random post

    $args=array('post_type'=>'examensklassen', 'orderby'=>'rand', 'posts_per_page'=>'1');
    $examensklassen=new WP_Query($args);
      while ($examensklassen->have_posts()) : $examensklassen->the_post(); {
        $attachment_id = get_field('image');
        $fullsize = "full"; // (thumbnail, medium, large, full or custom size)
        $full_image = wp_get_attachment_image_src( $attachment_id, $fullsize );
        ?>

        <style> #box4{background-image: url(<?php echo $full_image[0]; ?>);} </style>
        <div class="graduate-info-front">
          <h4>EN AV <?php
$published_posts = wp_count_posts('examensklassen');
echo $published_posts->publish;
?> <span style="display:block;">EXAMINERADE</span></h4>

        </div>
        <div class="graduate-name-front"><h1><?php the_title(); ?></h1></div>

        <?php }

        endwhile;
        wp_reset_postdata(); ?>

        <a href="javascript:delay('<?php echo get_page_link(52); ?>')">
          <button id="graduate-btn" class="c-button c-button--magenta absolute" type="button">
            <div class="c-ripple js-ripple">
              <span class="c-ripple__circle"></span>
            </div>
            <i class="fa fa-arrow-right"></i>
          </button>
        </a>

  </div>
  <div class="four columns box pink" id="box5">

    <div class="box-content">
    <h1>OM GDK EX</h1>
    <a href="javascript:delay('<?php echo get_page_link(63); ?>')">
      <button class="c-button c-button--white" type="button">
        <div class="c-ripple js-ripple">
          <span class="c-ripple__circle"></span>
        </div>
        Läs mer
      </button>
    </a>
  </div>
  </div>

  <div class="four columns box yellow" id="box6">
    <div class="box-content">
    <h1>Läs katalogen</h1>
    <a href="javascript:delay('<?php echo get_page_link(69); ?>')">
      <button class="c-button c-button--black" type="button">
        <div class="c-ripple js-ripple">
          <span class="c-ripple__circle"></span>
        </div>
        Se hela katalogen
      </button>
    </a>
  </div>
  </div>

  <div class="six columns box blue" id="box7">
    <div class="box-content">
    <h1 class="yellow-text">Examensklassen</h1>

    <a href="javascript:delay('<?php echo get_page_link(52); ?>')">
      <button class="c-button c-button--yellow" type="button">
        <div class="c-ripple js-ripple">
          <span class="c-ripple__circle"></span>
        </div>
        Se Examensklassen
      </button>
    </a>
    </div>
  </div>

    <div class="six columns box pink" id="box8">
      <div class="box-content">
      <a href="javascript:delay('<?php echo get_page_link(64); ?>')">
        <h1>Om GDK</h1>
        <button class="c-button c-button--black" type="button">
          <div class="c-ripple js-ripple">
            <span class="c-ripple__circle"></span>
          </div>
          Läs mer
        </button>
      </a>
      </div>
    </div>

</div>

<script src="<?php echo get_template_directory_uri();?>/js/button.js"></script>
<?php get_footer(); ?>
