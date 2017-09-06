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
    </header>

    <div class='container'>
      <div class='entry-content'>

        <section class='services-taxonomy'>                <!-- get template part after circles are done-->
          <h3> at kin athletics, we try our hardest to serve your needs</h3>

          <div class='circles'>
            <svg height="180" width="180">
              <circle cx="80" cy="80" r="80" fill="red" />
            </svg>

            <svg height="180" width="180">
              <circle cx="80" cy="80" r="80" fill="red" />
            </svg>

            <svg height="180" width="180">
              <circle cx="80" cy="80" r="80" fill="red" />
            </svg>

            <svg height="180" width="180">
              <circle cx="80" cy="80" r="80" fill="red" />
            </svg>
          </div>
        </section>


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
        </div>    <!-- end of carousel -->

      </div>  <!-- end of entry content-->
    </div>  <!-- end of container-->
  </article>
  </main>
</div>

<?php get_footer(); ?>