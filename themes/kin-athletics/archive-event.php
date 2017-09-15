<?php
/**
* Template Name: Event Archive
*
* @package Kin_Athletics_Theme
*/

get_header(); ?>

<div id='primary' class='content-area'>
  <main id="main" class='site-main' role='main'>

    <article id='post-<?php the_ID(); ?>' <?php post_class(); ?>>
        <div class='container'>
        <div class='entry-content'>
            <section id="latest-history" class="latest-history">
                <div class="header-container">
                    <h2 class="header-title">Latest History:</h2>
                    <?php 
                        $args = array( 'post_type' => 'event', 'order' => 'DESC', 'posts_per_page' => 1, 'orderby' => 'date' );
                        $events = get_posts ( $args );
                    ?>

                    <h2 class="header-title"><?php echo CFS()->get('current_event', $events[0]->ID);?></h2>
                    <p class="latest-history-description"><?php echo CFS()->get('current_event_info', $events[0]->ID); ?></p>
                    <h3 class='event-date'>happens: <?php echo CFS()->get('current_event_date', $events[0]->ID); ?></h3>
                    <div class='red-button'><a href='#'>buy tickets</a></div>
                </div>
                <div class="latest-history-carousel">
                    <div class='carousel-cell cell-image1'>
                        <img src="<?php get_template_directory_uri(); ?>/kin-athletics/wp-content/themes/kin-athletics/asset/images/pastevents_bootcamp.png"/>
                    </div>
                    <div class='carousel-cell cell-image2'>
                        <img src="<?php get_template_directory_uri(); ?>/kin-athletics/wp-content/themes/kin-athletics/asset/images/pastevents_bootcamp2.png"/>
                    </div>
                    <div class='carousel-cell cell-image3'>
                        <img src="<?php get_template_directory_uri(); ?>/kin-athletics/wp-content/themes/kin-athletics/asset/images/pastevents_bootcamp3.png"/>
                    </div>       
                </div>  <!-- end of carousel -->
            </section>
            
            <section id="historical-moments" class="historical-moments">
                <div class="past-events-carousel">
                    <?php 
                        $args = array( 'post_type' => 'event', 'order' => 'DESC', 'posts_per_page' => -1, 'orderby' => 'date' );
                        $event = get_posts( $args ); // returns an array of posts
                        $events_count = count($event);
                        $number_of_posts = 6;
                        $number_of_pages = $events_count / $number_of_posts;
                        
                       
                        for ($i = 0; $i < $number_of_pages; $i++) : ?>
                                <div class='carousel-cell trainers'> 
                                    <div class="header-container">
                                        <h2 class="header-title--black">More Historical Moments</h2>
                                    </div>
                                    <div class="trainer-grid-wrapper">
                                        <?php        
                                            $j = 0;
                                            while( $j < $number_of_posts && $event[$j] !== null ) :
                                        ?>
                                            <div class='trainer-item-container'>
                                                <?php echo $event[$j]->post_title; ?>
                                                <?php echo get_the_date('M/j g:i a', $event[$j]->ID); ?>
                                                <?php echo get_the_date('Y', $event[$j]->ID); ?>
                                            </div> 
                                        <?php   
                                            $j++;
                                            endwhile;
                                            array_splice($event, 0, $number_of_posts);
                                        ?>
                                    </div>
                                </div>
                        <?php endfor; ?> 
                    <?php //endif; ?>
                </div>  <!-- end of carousel -->
            </section>
            
            <section id="community" class='our-community'>
                <?php get_template_part( 'template-parts/about', 'community' ); ?>
                <div class="red-button">
                    <a src="#">Projects</a>
                </div>
            </section>

            <section id="place" class='our-place'>
                <?php get_template_part( 'template-parts/about', 'place' ); ?>
            </section>

        </div>  <!-- end of entry content-->
        </div>  <!-- end of container-->
    </article>
  </main>
</div>

<?php get_footer(); ?>