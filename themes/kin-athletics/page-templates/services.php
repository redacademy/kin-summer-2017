<?php
/**
* Template Name: Services Page
*
* @package Kin_Athletics_Theme
*/

get_header(); ?>

<div id='primary' class='content-area'>
  <main id="main" class='site-main' role='main'>

  <article id='post-<?php the_ID(); ?>' <?php post_class(); ?>>
    <header class='entry-header custom-hero'>
      <div class='container'>
        <?php the_title( '<h1 class="entry-title">', '</h1>'); ?>
      </div>
    </header>

    <div class='container'>
      <div class='entry-content'>
        <h2>Our Story</h2>
        <p><?php echo CFS()->get( 'about_our_story'); ?></p>

        <h2>Our Team</h2>
        <p><?php echo CFS()->get('about_our_team');?></p>
      </div>
    </div>
  </article>

  </main>
</div>

<?php get_footer(); ?>