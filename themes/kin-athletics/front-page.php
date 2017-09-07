<?php
/** 
* Template Name: Landing Page
*@package Kin_Athletics_Theme
**/
get_header(); ?>

<div class="front-page-container">
 
  <div class="project-td-cont">
    <div class="project-td-text">
      <h2 class="kin-athletics-presents">Kin Athletics Presents</h2>
      <h1>Project TD</h1>
    </div>
  </div>

  <div class="landing-scroll-section">
    <p>Jump In</p>
  </div>

  <div class="who-we-are-cont">
    <div class="who-we-are-image" style="background:url(<?php echo CFS()->get('who_we_are_image'); ?>);">
    <div class="who-we-are-text">
      <h2>Who We Are</h2>
    </div>
  </div>
  </div>

  <div class="landing-what-we-do">
    <div class="landing-text-what-we-do">
      <h2>What We Do</h2>
      <p></p>
    </div>
  </div>

</div><!--end of landing-page-container-->
<?php get_footer(); ?>