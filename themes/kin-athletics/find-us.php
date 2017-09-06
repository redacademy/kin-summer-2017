<?php
/**
 * The template for displaying the find us page.
 *
 * @package Kin_Athletics_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <header class="entry-header custom-hero">
        <div class="container">
          <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </div><!-- .container -->
      </header><!-- .entry-header -->

      <div class="white container">
      </div><!-- .white .container -->

      <div class="black container">
        <h3 class="white-title">Ready to Sweat?></h3>
        <div class="red-button">
          <href="<?php echo get_post_permalink()?>">Free Consultation</a>
        </div><!-- .red-button -->
      </div><!-- .black .container -->

      <div class="white container">
        <h3 class="black-title">Connect To Our Online Community></h3>
        <div class="social-button">
          <href="<?php echo get_post_permalink()?>">Facebook</a>
        </div><!-- .social-button -->
        <div class="social-button">
          <href="<?php echo get_post_permalink()?>">Instagram</a>
        </div><!-- .social-button -->
      </div><!-- .black .container -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>