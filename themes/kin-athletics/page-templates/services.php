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
        <div class="main-carousel">

          <div class="carousel-cell">
            <h2>Personal training</h2>
            <p><?php echo CFS()->get( 'services_personal_training'); ?></p>
          </div>

          <div class="carousel-cell">
            <h2>Group training</h2>
            <p><?php echo CFS()->get('services_group_training');?></p>
          </div>

          <div class="carousel-cell">
            <h2>Community projects</h2>
            <p><?php echo CFS()->get('services_community_projects');?></p>
          </div>
   
        </div>
      </div>
    </div>
  </article>

  </main>
</div>

<?php get_footer(); ?>