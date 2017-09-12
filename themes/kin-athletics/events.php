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
        <section class='services-icons'>
            <div class="header-container">
                <h1> Make history with us</h1>
            </div>
          
            <div class="circles-container">
                <div class="icon-container">
                    <a src="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/icons/ouroriginicon.svg"/>
                        <p>Past Events</p>
                    </a>
                </div>
                <div class="icon-container">
                    <a src="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/icons/ourtrainericon.svg"/>
                        <p>On Now - Project TD</p>
                    </a>
                </div>
                <div class="icon-container">
                    <a src="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/icons/ourcommunityicon.svg"/>
                        <p>Buy Tickets</p>
                    </a>
                </div>
            </div>
        </section>

        <div class='relative-carousel-container'>       
          <div class="main-carousel">
            <div class='carousel-cell events-cell-image1'>
            </div>
            <div class='carousel-cell events-cell-image2'>
            </div>
            <div class='carousel-cell events-cell-image3'>
            </div>       
          </div>

          <div class='events-carousel-info'>
            <h1 class="header-title"><?php echo CFS()->get('current_event'); ?></h1>
            <?php echo CFS()->get('current_event_info'); ?>
            <h3 class='event-date'>happens: <?php echo CFS()->get('current_event_date'); ?></h3>
            <div class='red-button'><a href='#'>buy tickets</a></div>
          </div>
        </div> <!-- end of relative carousel container -->


        <div class='events-black-container'>
          <p>but wait,</p>
          <div class='red-button'><a href='#'>who are we?</a></div>
        </div>

        <div class='events-white-container'>
          <p>see our history</p>
          <div class='social-button'><a href='#'>past events</a></div>
        </div>
        
        <div class='events-white-container'>
          <p>join the buzz</p>
          <div class='social-button'><a href='#'>facebook</a></div>
        </div>

      </div>  <!-- end of entry content-->
    </div>  <!-- end of container-->
  </article>
  </main>
</div>

<?php get_footer(); ?>