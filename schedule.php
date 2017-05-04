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
  <div class="four columns thurs day">
    <h2 class="schema-day">Torsdag</h2>
    <ul>
      <li class="schema-item">
        <h3>Utställningen öppnar</h3>
        <h5>12:00 - 17:00 i Färgeriet</h5>
      </li>
      <li class="schema-item">
        <a href="<?php echo get_home_url();?>/forelasare#robin-blomberg"><h3>Föreläsning: Robin Blomberg</h3>
        <p>5 tips om hur du överlever som egenföretagare</p>
        <h5>14:15 - 14:45 i K4</h5></a>
      </li>
    </ul>
  </div>
  <div class="four columns fri day">
    <h2 class="schema-day">Fredag</h2>
    <ul>
      <li class="schema-item">
        <h3>Utställningen är öppen</h3>
        <h5>09:00 - 17:00 i Färgeriet</h5>
      </li>
      <li class="schema-item">
        <a href="<?php echo get_home_url();?>/forelasare/#crazy-pictures"><h3>Föreläsning: Rasmus Råsmark</h3>
        <p>FRÅN YOUTUBE TILL LÅNGFILM - Crazy Pictures</p>
        <h5>10:15 - 11:00 i K4</h5></a>
      </li>
      <li class="schema-item">
        <a href="<?php echo get_home_url();?>/forelasare/#joakim-hedstrom"><h3>Föreläsning: Joakim Hedström</h3>
        <p>Ingen vill höra dig skryta, men alla gillar en bra berättelse</p>
        <h5>14:15 - 15:00 i K4</h5>
      </li>
      <li class="schema-item">
        <a href="<?php echo get_home_url();?>/forelasare/#linnea-olsen-anckers"><h3>Föreläsning: Linnea Olsen Anckers</h3>
        <p>Med typografi som EX-jobb</p>
        <h5>16:15 - 17:00 i K4</h5>
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
        <a href="https://www.facebook.com/events/114379775788277/"><h3>Examenssittning</h3>
        <p>Biljett krävs</p>
        <h5>18:00 - 22:00 på Laxholmen</h5></a>
      </li>
    </ul>
  </div>
</div>
<?php } endwhile; // end of the loop. ?>

<?php get_footer(); ?>
