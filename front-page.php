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
<script src="<?php echo get_template_directory_uri();?>/js/button.js"></script>

  </div>
  <div class="seven columns box" id="box2">
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


<?php// get_footer(); ?>
