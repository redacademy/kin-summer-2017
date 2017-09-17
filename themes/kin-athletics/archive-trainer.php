<?php
/**
* Template Name: About Page
*
* @package Kin_Athletics_Theme
*/

$args = array( 'post_type' => 'trainer', 'order' => 'DESC', 'posts_per_page' => -1, 'orderby' => 'date' );
$trainer = get_posts( $args ); // returns an array of posts
$trainers_count = count($trainer);
$number_of_posts = 6;
$number_of_pages = $trainers_count / $number_of_posts;

get_header(); ?>

<div id='primary' class='content-area'>
  <main id="main" class='site-main' role='main'>

  <article id='post-<?php the_ID(); ?>' <?php post_class(); ?>>
    <div class='container'>
      <div class='entry-content'>

        <section class='services-icons'>
            <div class="header-container">
                <h1> At Kin Athletics, <br>we believe in</h1>
            </div>
          
            <div class="circles-container">
                <div class="icon-container">
                    <a src="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/icons/ouroriginicon.svg"/>
                    </a>
                    <p>Our Origin</p>
                </div>
                <div class="icon-container">
                    <a src="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/icons/ourtrainericon.svg"/>
                    </a>
                    <p>Our Trainer</p>
                </div>
                <div class="icon-container">
                    <a src="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/icons/ourcommunityicon.svg"/>
                    </a>
                    <p>Our Community</p>
                </div>
                <div class="icon-container">
                    <a src="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/icons/freeconsultationicon.svg"/>
                    </a>
                    <p>Free Consultation</p>
                </div>
            </div>
        </section>

        <section id="origin" class='our-origin'>
            <?php get_template_part( 'template-parts/about', 'origin' ); ?>
        </section>

        <section id="trainers" class="trainers-grid">
            <div class="main-carousel">
                <?php 
                    for ($i = 0; $i < $number_of_pages; $i++) : ?>

                    <div class='carousel-cell trainers'> 
                        <div class="header-container">
                            <h2 class="header-title--black">The Trainers</h2>
                        </div>
                        <div class="trainer-grid-wrapper">
                            <?php        
                                $j = 0;
                                while( $j < $number_of_posts && $trainer[$j] !== null ) : 
                            ?>
                    
                            <div class='trainer-item-container'>
                                <div class='trainer-thumbnail-wrapper'>
                                    <img class='trainer-thumbnail' src="<?php echo CFS()->get( 'trainer_profile_picture', $trainer[$j]->ID ); ?>"/>
                                </div>
                                <div class='next-trainer-wrapper'>
                                    <a class='trainer-name' href='<?php echo $trainer[$j]->guid ?>'><?php echo $trainer[$j]->post_title; ?></a>
                                </div>
                            </div> 

                            <?php   
                                $j++;
                                endwhile;
                                array_splice($trainer, 0, $number_of_posts);
                            ?>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>  <!-- end of carousel -->
        </section>

        <section id="community" class='our-community'>
            <?php get_template_part( 'template-parts/about', 'community' ); ?>
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