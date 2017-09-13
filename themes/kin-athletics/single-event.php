<?php
/**
 * The template for displaying all single event posts.
 *
 * @package Kin_Athletics_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

            <?php echo the_title(); ?>
            <?php echo the_content(); ?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
