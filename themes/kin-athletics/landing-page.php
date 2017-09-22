<?php
/**
 * Template Name: Landing Page
 *
 * @package Kin_Athletics_Theme
 */

get_header(); ?>

<div class="front-page-container">
 
  <section class="project-td-cont" id="project-td-id">

    <div class="project-td-text">
      <h2>Kin Athletics Presents</h2>
      <?php echo CFS()->get('front_heading');?>
      <div class="td-button-cont"><a href='<?php echo esc_url( home_url( '/events/') )?>'>Tell Me More</a></div>
    </div>
   

    <div class="main-carousel">
      <div class="carousel-project-td"> <!-- first cell-->
        <div class="project-td-image-wrapper">
          <img class="project-td-image" src="<?php echo CFS()->get( 'front_image' ); ?>">     
        </div>
      </div>  <!-- end of first cell-->

      <div class="carousel-front-lion">CELL 2</div>
      <div class="carousel-front-girl">CELL 3</div>
      </div><!--carousel-->


      <div class="landing-scroll-section">
        <a href="#who-we-are-id"><p>Jump In
        <span class="v">V</span>
        </p></a>
      </div>
      
   
  </section>

  <section class="who-we-are-cont" id="who-we-are-id">
    <div class="front-img-wrapper">
      <img class="who-we-are-image" src="<?php echo CFS()->get( 'who_we_are_image' ); ?>">
    </div>
    <div class="who-we-are-text">
      <h2>Who We Are</h2>
      <?php echo CFS()->get('who_we_are_text');?>
      <div class="who-button-cont"><a href='<?php echo esc_url( home_url( '/about/') )?>'>Tell Me More</a></div>
    </div>
    
  </section>

  <section class="what-we-do-cont" id="what-we-do-id">
    <div class="front-img-wrapper">
      <img class="what-we-do-image" src="<?php echo CFS()->get( 'what_we_do_image' ); ?>">
    </div>
    <div class="what-we-do-text">
      <h2>What We Do</h2>
      <?php echo CFS()->get('what_we_do_text');?>
      <div class="what-button-cont"><a href='<?php echo esc_url( home_url( '/services/') )?>'>Tell Me More</a></div></div>
    </div>
   
  </section>

</div><!--end of landing-page-container-->
<?php get_footer(); ?>