<?php
/**
* Template Name: Event Archive
*
* @package Kin_Athletics_Theme
*/

$args = array( 'post_type' => 'event', 'order' => 'DESC', 'posts_per_page' => -1, 'orderby' => 'date' );
$event = get_posts( $args ); // returns an array of posts
$events_count = count($event);
$number_of_posts = 6;
$number_of_pages = $events_count / $number_of_posts;

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
            <section id="latest-history" class="latest-history">
                <div class="header-container">
                    <h2 class="header-title un-bold">Latest History:</h2>
                    <?php 
                        $current_args = array( 'post_type' => 'event', 'order' => 'DESC', 'posts_per_page' => 1, 'orderby' => 'date' );
                        $latest_event = get_posts ( $current_args );
                    ?>

                    <h2 class="header-title"><?php echo esc_html( get_the_title($latest_event[0]->ID) ) ;?></h2>
                    <?php echo CFS()->get('current_event_info', $latest_event[0]->ID); ?>
                    <h3 class='event-date'>happens: <?php echo CFS()->get('current_event_date', $latest_event[0]->ID); ?></h3>
                    <div class='red-button'><a href='<?php echo site_url()."/event/".$latest_event[0]->post_name ?>'>buy tickets</a></div>
                </div>
                <div class="latest-history-carousel">
                    <div class='carousel-cell cell-image1'>
                        <img src="<?php get_template_directory_uri(); ?>/wp-content/themes/kin-athletics/asset/images/pastevents_bootcamp.png"/>
                    </div>
                    <div class='carousel-cell cell-image2'>
                        <img src="<?php get_template_directory_uri(); ?>/wp-content/themes/kin-athletics/asset/images/pastevents_bootcamp2.png"/>
                    </div>
                    <div class='carousel-cell cell-image3'>
                        <img src="<?php get_template_directory_uri(); ?>/wp-content/themes/kin-athletics/asset/images/pastevents_bootcamp3.png"/>
                    </div>       
                </div>  <!-- end of carousel -->
            </section>
            
            <section id="historical-moments" class="historical-moments">
                <div class="past-events-carousel">
                    <?php
                        $past_events = $event; 
                        for ($i = 0; $i < $number_of_pages; $i++) : 
                    ?>
                        <div class='carousel-cell past-events'> 
                            <div class="header-container">
                                <h2 class="header-title--black">More Historical Moments</h2>
                            </div>
                            <div class="past-events-grid-wrapper">
                                <?php        
                                    $j = 0;
                                    while( $j < $number_of_posts && $past_events[$j] !== null ) :
                                ?>
                                <div class='past-events-item-container'>
                                    <div class="past-events-info">
                                        <a href="<?php echo site_url().'/'.$past_events[$j]->post_name; ?>">
                                            <p class="past-event-title"><?php echo $past_events[$j]->post_title; ?></p>
                                            <p class="past-event-date"><?php echo get_the_date('M/j Y', $past_events[$j]->ID); ?></p>
                                        </a>
                                    </div>
                                    <img src="<?php get_template_directory_uri(); ?>/kin-athletics/wp-content/themes/kin-athletics/asset/icons/plainicon.svg"/>
                                </div> 
                                <?php   
                                    $j++;
                                    endwhile;
                                    array_splice($past_events, 0, $number_of_posts);
                                ?>
                            </div>
                        </div>
                    <?php endfor; ?> 
                </div>  <!-- end of carousel -->
            </section>
            
            <section id="on-now-and-services" class='on-now-and-services'>
                <div class='events-black-container'>
                    <p>On Now - <?php echo CFS()->get('past_events_featured'); ?></p>
                    <div class='red-button'>
                        <a href='<?php echo $event_ticket_url; ?>'>Buy Tickets</a>
                    </div>
                    <div class='red-button clear-bg'><a href='<?php echo $event_page_url; ?>'>Tell Me More</a></div>
                    <img src="<?php get_template_directory_uri(); ?>/kin-athletics/wp-content/themes/kin-athletics/asset/images/pastevents_onnow.png"/>
                </div>
                        
                <div class='events-white-container'>
                    <p>More Feels On Our Services</p>
                    <div class='social-button'><a href='#'>Facebook</a></div>
                    <div class='social-button'><a href='#'>Instagram</a></div>
                </div>
            </section>

        </div>  <!-- end of entry content-->
        </div>  <!-- end of container-->
    </article>
  </main>
</div>

<?php get_footer(); ?>