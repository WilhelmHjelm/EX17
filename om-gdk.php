<?php
/**
 * Template Name: Om GDK
 *
 * @package EX17
 */

get_header(); ?>

<div class="container">

<div class="row">

<div class="seven columns about-p">

  <?php while ( have_posts() ) : the_post(); ?>

    <?php the_content(); ?>

  <?php endwhile; // end of the loop. ?>

</div>

<div class="five columns info-box blue">
  <div class="info-box-content magenta-text aligncenter">
    <h1>GDK 180hp</h1>
    <h2>Campus Norrköping</h2>
  </div>

  </div>

</div>

<div class="row">
  <div class="twelve columns courses">
    <div class="twelve columns"><h1>Kolla vad vi kan!</h1></div>
    <div class="five columns">
      <p>Examensklassen lämnar Campus Norrköping med individuella och välayoutade portfolios i högsta hugg, men det är inte allt de bär med sig. I verktygslådan har en GDKare projektmetodik, UX, varumärkesprofiliering, konsten att kolla ett företags likviditet, och kunskapen om hur man försvarar sin upphovsrätt. Vi har en kandidatexamen och vi är redo att använda den.</p>
      <h2 id="val-text">Valbara kurser</h2>
      <ul id="val">
        <li>Interaktiv form</li>
        <li>Projektledning</li>
        <li>Engelska</li>
        <li>Tidskriftsdesign och -produktion</li>
        <li>Förpackningsdesign och produktdisplay</li>
        <li>Prepress och tryckteknik</li>
        <li>Digital bildproduktion</li>
        <li>3D Grafik</li>
        <li>Informationsdesign och wayshowing</li>
        <li>Manus, storytelling och copy</li>
        <li>Visuell teori</li>
        <li>Tvärdiciplinärt utvecklingsprojekt</li>
      </ul>
    </div>
    <div class="five columns offset-by-one">
      <h2 id="obli-text">Obligatoriska kurser</h2>
      <ul id="obli">
        <li>Onlineproduktion</li>
        <li>Interaktionsdesign</li>
        <li>Företagsekonomi</li>
        <li>Immaterialrätt</li>
        <li>Marknadskommunikation</li>
        <li>Projektmetodik</li>
        <li>Digital bildbehandling</li>
        <li>Rörliga medier</li>
        <li>Informationsdesign</li>
        <li>Typografi och layout</li>
        <li>Yrkesvillkor och arbetsplatsförläggning</li>
        <li>Grafisk profilering och varumärken</li>
        <li>Vetenskaplig metod</li>
        <li>Tryckta medier</li>
        <li>Grafisk designprojekt med internationell inriktning</li>
        <li>Grafisk teknik och processer</li>
        <li>Omvärldsorientering 1</li>
        <li>Retorik</li>
        <li>Visuell retorik</li>
        <li>Medierad kommunikation</li>
        <li>Konstvetenskap och visuell kultur</li>
      </ul>
    </div>
  </div>
  <div class="seven columns about-p">
    <?php the_field('om-projektgruppen'); ?>
  </div>
  <div class="five columns photo">

  </div>
</div>

</div>

<?php get_footer(); ?>
