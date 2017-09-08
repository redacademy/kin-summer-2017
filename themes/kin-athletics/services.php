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
    <div class='container'>
      <div class='entry-content'>

        <section class='services-taxonomy'>                <!-- get template part after circles are done-->
          <h1> at kin athletics, we try our hardest to serve your needs</h1>

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
          <div class="carousel-cell personal-training">
            <h2>Personal training</h2>
            <?php echo CFS()->get( 'services_personal_training'); ?>
            <h3>Basic pricing</h3>

            <div class='price-box-container'>
              <div class='single-price-box'> 
                <p>single session</p>
                <span>$50</span>
              </div>

              <div class='single-price-box price-box-border'>
                <p>ten sessions</p>
                <span>$470</span>
              </div>
              
              <div class='single-price-box'>
                <p>thirty sessions</p>
                <span>$1400</span>
              </div>
            </div>  <!-- end of price box container-->  
            <p class='training-rates'>**Rates are subject to change for program customizations.</p>       
          </div>  <!-- end of carousel cell personal training -->



          <div class="carousel-cell group-training">
            <h2>Group training</h2>
            <?php echo CFS()->get('services_group_training');?>
            <h3>Basic pricing</h3>

            <div class='price-box-container'>
              <div class='single-price-box'> 
                <p>single session</p>
                <span>$25</span>
              </div>

              <div class='single-price-box price-box-border'>
                <p>ten sessions</p>
                <span>$235</span>
              </div>
              
              <div class='single-price-box'>
                <p>thirty sessions</p>
                <span>$700</span>
              </div>
            </div>  <!-- end of price box container-->  
            <p class='training-rates'>**Rates are subject to change for program customizations.</p>
          </div>  <!-- end of carousel cell group training -->



          <div class="carousel-cell community-projects">
            <h2>Community projects</h2>
            <?php echo CFS()->get('services_community_projects');?>
            <h3>on now - project td</h3>
            <div class='red-button'><a href='#'>buy tickets</a></div>
            <div class='social-button'><a href='#'>tell me more</a></div>
            <div class='social-button'><a href='#'>past events</a></div>
          </div>  <!-- end of carousel cell community projects -->
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