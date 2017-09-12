<?php
/** 
* Template Name: Landing Page
*@package Kin_Athletics_Theme
**/
get_header(); ?>

<div class="front-page-container">
 
  <section class="project-td-cont">
    <div class="project-td-image-wrapper">
      <img class="project-td-image" src="<?php echo CFS()->get( 'front_image' ); ?>">
    </div>
    <div class="project-td-text">
    <h2>Kin Athletics Presents</h2>
     <?php echo CFS()->get('front_heading');?>
    </div>
    <div class="front-button-cont"></div>

  <div class="landing-scroll-section">
    <p>Jump In</p>
</div>
  </section>

  <section class="who-we-are-cont">
    <div class="front-img-wrapper">
      <img class="who-we-are-image" src="<?php echo CFS()->get( 'who_we_are_image' ); ?>">
    </div>
    <div class="who-we-are-text">
      <h2>Who We Are</h2>
      <?php echo CFS()->get('who_we_are_text');?>
    </div>
  </section>

  <section class="what-we-do-cont">
    <div class="front-img-wrapper">
      <img class="what-we-do-image" src="<?php echo CFS()->get( 'what_we_do_image' ); ?>">
    </div>
    <div class="what-we-do-text">
      <h2>What We Do</h2>
      <?php echo CFS()->get('what_we_do_text');?>
    </div>
  </section>

</div><!--end of landing-page-container-->
<?php get_footer(); ?>