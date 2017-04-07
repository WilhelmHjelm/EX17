<?php
/**
 * Template Name: Schema
 *
 * @package EX17
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); { ?>



<div class="container">
  <?php the_content(); ?>
  <div class="four columns thurs day thisday">
    <h2 class="schema-day">Torsdag</h2>
    <ul>
      <li class="schema-item">
        <h3>Utställningen är öppen</h3>
        <h5>9:00 - 17:00 i Färgeriet</h5>
      </li>
      <li class="schema-item">
        <a href="<?php echo get_home_url();?>/forelasare#pontus-rudolfsson"><h3>Föreläsning: Pontus Rudolfsson</h3>
        <p>Pontus kommer och Photoshoppar</p>
        <h5>12:00 - 13:00 i K4</h5></a>
      </li>
      <li class="schema-item">
        <h3>Föreläsning</h3>
        <h5>15:00 - 16:00 i K4</h5>
      </li>
    </ul>
  </div>
  <div class="four columns fri day">
    <h2 class="schema-day">Fredag</h2>
    <ul>
      <li class="schema-item">
        <h3>Utställningen är öppen</h3>
        <h5>9:00 - 17:00 i Färgeriet</h5>
      </li>
      <li class="schema-item">
        <a href="<?php echo get_home_url();?>/forelasare/"><h3>Föreläsning: Linnea Olsen Anckers</h3>
        <p>Linnea kommer och pratar om sitt EX-jobb</p>
        <h5>12:00 - 13:00 i K4</h5></a>
      </li>
      <li class="schema-item">
        <h3>Föreläsning</h3>
        <h5>15:00 - 16:00 i K4</h5>
      </li>
    </ul>
  </div>
  <div class="four columns satur day">
    <h2 class="schema-day">Lördag</h2>
    <ul>
      <li class="schema-item">
        <h3>Utställningen är öppen</h3>
        <h5>10:00 - 15:00 i Färgeriet</h5>
      </li>
      <li class="schema-item">
        <h3>Examenssittning</h3>
        <h5>12:00 - 13:00 i Crecendo</h5>
      </li>
    </ul>
  </div>
</div>
<?php } endwhile; // end of the loop. ?>

<?php get_footer(); ?>
