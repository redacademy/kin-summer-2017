<?php
/**
* Template Name: Events Page
*
* @package Kin_Athletics_Theme
*/

get_header(); ?>

<div id='primary' class='content-area'>
  <main id="main" class='site-main' role='main'>

  <article id='post-<?php the_ID(); ?>' <?php post_class(); ?>>
    <div class='container'>
      <div class='entry-content'>

        <section class='events-taxonomy'>                <!-- get template part after circles are done-->
          <h1> make history with us </h1>

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



          </div>
        </section>

      </div>  <!-- end of entry content-->
    </div>  <!-- end of container-->
  </article>
  </main>
</div>

<?php get_footer(); ?>