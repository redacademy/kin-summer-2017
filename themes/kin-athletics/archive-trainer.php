<?php
/**
* Template Name: About Page
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
                    <p>Our Consultation</p>
                </div>
            </div>
        </section>

        <section class='our-origin'>
            <div class="header-container">
            <h2>Our Origin</h2>
            <?php echo CFS()->get( 'services_personal_training'); ?>
            </div>
        </section>



        <div class="main-carousel">
          <div class="carousel-cell trainers">
            <?php
                $args = array( 'post_type' => 'trainer', 'order' => 'DESC', 'posts_per_page' => -1, 'orderby' => 'date' );
                $trainer = get_posts( $args ); // returns an array of posts
                $trainers_count = count($trainer);
                $number_of_posts = 6;
                $number_of_pages = $trainers_count / $number_of_posts;
                
                foreach ( $trainer as $post ) : setup_postdata( $post );
            ?>

                <div class="trainer-item-container">
                    <div class="trainer-thumbnail-wrapper">
                        <img class="trainer-thumbnail" src="<?php echo CFS()->get( 'trainer_profile_picture' ); ?>">
                    </div><!-- .trainer-thumbnail-wrapper -->
                    <div class="next-trainer-wrapper">
                        <a class="trainer-name" href="<?php echo get_post_permalink() ?>"><?php the_title(); ?></a>
                    </div><!-- .next-trainer-wrapper -->
                </div>
            <?php endforeach; wp_reset_postdata(); ?>    
          </div>  <!-- end of carousel cell personal training -->



          <div class="carousel-cell group-training">
          <?php 
                for($i = 0 ; $i < $number_of_pages ; $i++) {
                    echo $i.' ';
                }
            ?>
          </div>  <!-- end of carousel cell group training -->
        </div>  <!-- end of carousel -->

        <section class='services-featured'>
            <h4> featured trainer <span>allan</span> </h4>
            <p>ready to sweat?</p>
            <div class='red-button'><a href='#'>free consultation</a></div>
            <div class='social-button'><a href='#'>about me</a></div>

            <div class='white container'>
                <p>more feels on our services</p>
                <div class='social-button'><a href='#'>facebook</a></div>
                <div class='social-button'><a href='#'>instagram</a></div>
            </div>
        </section>

      </div>  <!-- end of entry content-->
    </div>  <!-- end of container-->
  </article>
  </main>
</div>

<?php get_footer(); ?>