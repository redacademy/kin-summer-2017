<?php
/**
* Template Name: Consultation Page
*
* @package Kin_Athletics_Theme
*/

get_header(); ?>

<div id='primary' class='content-area'>
  <main id="main" class='site-main' role='main'>

    <article id='post-<?php the_ID(); ?>' <?php post_class(); ?>>
      <div class='container'>
        <div class='entry-content'>


        <?php echo do_shortcode('[gravityform id="1" title="true" description="true"]'); ?>


        </div>  <!-- end of entry content-->
      </div>  <!-- end of container-->
    </article>
  </main>
</div>

<?php get_footer(); ?>