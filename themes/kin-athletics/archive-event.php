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
            <section id="trainers" class="latest-history-container">
                <div class="header-container">
                    <h2 class="header-title">Latest History</h2>
                </div>
                <div class="latest-history-carousel">
                    <div class='carousel-cell events-cell-image1'>
                    </div>
                    <div class='carousel-cell events-cell-image2'>
                    </div>
                    <div class='carousel-cell events-cell-image3'>
                    </div>       
                </div>  <!-- end of carousel -->
            </section>

            <section id="trainers2" class="trainers-grid">
                <div class="past-events-carousel">
                    <?php 
                        $args = array( 'post_type' => 'trainer', 'order' => 'DESC', 'posts_per_page' => -1, 'orderby' => 'date' );
                        $event = get_posts( $args ); // returns an array of posts
                        $events_count = count($event);
                        $number_of_posts = 6;
                        $number_of_pages = $events_count / $number_of_posts;
                        $event_total = $events_count;
                        
                        for ($i = 0; $i < $number_of_pages; $i++) : ?>

                        <div class='carousel-cell trainers'> 
                            <div class="header-container">
                                <h2 class="header-title--black">The Trainers</h2>
                            </div>
                            <div class="trainer-grid-wrapper">
                                <?php        
                                    $j = 0;
                                    while( $j < $number_of_posts && $event_total > 0 ) : 
                                ?>
                        
                                <div class='trainer-item-container'>
                                    <div class='trainer-thumbnail-wrapper'>
                                        <img class='trainer-thumbnail' src="<?php echo CFS()->get( 'trainer_profile_picture', $event[$j]->ID ); ?>"/>
                                    </div>
                                    <div class='next-trainer-wrapper'>
                                        <a class='trainer-name' href='<?php echo $event[$j]->guid ?>'><?php echo $event[$j]->post_title; ?></a>
                                    </div>
                                </div> 

                                <?php   
                                    $events_count--;
                                    $j++;
                                    endwhile;
                                    array_splice($event, 0, $number_of_posts);
                                ?>
                            </div>
                        </div>
                    <?php endfor; ?>
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