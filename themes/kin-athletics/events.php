<?php
/**
* Template Name: Events Page
*
* @package Kin_Athletics_Theme
*/
$args = array( 'post_type' => 'event', 'order' => 'DESC', 'posts_per_page' => -1, 'orderby' => 'date' );
$event = get_posts( $args ); // returns an array of posts
$events_total = count($event);
global $post;

for ($i = 0 ; $i < $events_count ; $i++) {
  if ($event[$i]->post_title === CFS()->get('past_events_featured')) {
      $event_ticket_url = site_url()."/event/".$event[$i]->post_name;
      $event_page_url = site_url()."/".$event[$i]->post_name;
      break;
  }
}
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
                    <a href="<?php echo esc_url(site_url().'/events'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/icons/pasteventsicon.svg"/>
                        <p>Past Events</p>
                    </a>
                </div>
                <div class="icon-container">
                    <a href="<?php echo esc_url(str_replace(' ', '-', home_url('/'.CFS()->get('past_events_featured', 34)))); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/icons/onnowicon.svg"/>
                        <p>On Now - <?php echo CFS()->get('past_events_featured', 34); ?></p>
                    </a>
                </div>
                <div class="icon-container">
                    <a href="<?php echo esc_url(str_replace(' ', '-', home_url('/event/'.CFS()->get('past_events_featured', 34)))); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/icons/buyticketsicon.svg"/>
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
            <h1 class="header-title">
              <?php 
                echo the_title();
              ?>
            </h1>
            <?php
              for( $i = 0 ; $i < $events_total ; $i++ ) : 
                if ($event[$i]->post_name === $post->post_name) :
            ?>
              <div class="events-description>">
              <?php echo CFS()->get('current_event_info', $event[$i]->ID); ?>
                <div class="events-inner-wrapper">
                  <h3 class='event-date'>happens: <?php echo CFS()->get('current_event_date', $event[$i]->ID); ?></h3>
                  <div class='red-button'><a href='<?php echo esc_url(str_replace(' ', '-', home_url('/event/'.$event[$i]->post_name))); ?>'>buy tickets</a></div>
                </div>  
                <?php endif ?>
              <?php endfor ?>
            </div>
          </div>
        </div> <!-- end of relative carousel container -->


        <div class='events-black-container'>
          <p>but wait,</p>
          <div class='red-button'><a href='<?php echo esc_url( home_url( '/about/') )?>'>who are we?</a></div>
        </div>
        
        <div class="events-white-wrapper">
          <div class='events-white-container'>
            <p>see our history</p>
            <div class='social-button'><a href='<?php echo esc_url( home_url( '/events/#historical-moments') )?>'>past events</a></div>
          </div>
          
          <div class='events-white-container'>
            <p>join the buzz</p>
            <div class='social-button'><a href='https://www.facebook.com/kinathletics/' target="_blank">facebook</a></div>
          </div>
        </div>

      </div>  <!-- end of entry content-->
    </div>  <!-- end of container-->
  </article>
  </main>
</div>

<?php get_footer(); ?>