<?php
/**
 * Template Name: Find Us page.
 *
 * @package Kin_Athletics_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <header class="entry-header">
      <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        
        <div class="find-us-picture-wrapper">
            <img class="find-us-picture" src="<?php echo CFS()->get( 'find_us_top_picture' ); ?>">
        </div><!-- .find-us-picture -->
      </header><!-- .entry-header -->
      
      <div class="kin-athletics-info container">
          <iframe frameborder="0" height="264px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2919.8004139206323!2d-81.21609598475176!3d42.96141020490528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882ef250c35fa395%3A0x8d9892ec93161844!2s962+Leathorne+St%2C+London%2C+ON+N5Z+3M5!5e0!3m2!1sen!2sca!4v1504740716400" width="100%"></iframe>

        <?php

        if ( ! is_active_sidebar( 'sidebar-2' ) ) {
          return;
        }
        ?>

        <div id="secondary" class="widget-area" role="complementary">
          <?php dynamic_sidebar( 'sidebar-2' ); ?>
        </div><!-- .secondary -->
      </div><!-- .kin-athletics-info .container -->

      <div class="black container">
        <h3 class="find-us white-title">Ready to Sweat?</h3>
        <div class="red-button">
          <a href='<?php echo esc_url( home_url( '/consultation/') )?>'>Free Consultation</a>
        </div><!-- .red-button -->
      </div><!-- .black .container -->

      <div class="find-us">
      <div class='white container'>
            <h3 class="black-title">Connect to our online community</h3>
              <div class="social-buttons-flex">
                <div class='social-button'><a href='https://www.facebook.com/kinathletics/' target="_blank">facebook</a></div>
                <div class='social-button'><a href='https://www.instagram.com/kinathletics/' target="_blank">instagram</a></div>
            </div>
          </div>
      </div><!-- .black .container -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>