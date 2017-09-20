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

      <section class='services-icons'>
      <div class="header-container">
          <h1> At Kin Athletics, we try our hardest<span> to serve your needs</span></h1>
      </div>
    
      <div class="circles-container">
          <div class="icon-container">
              <a src="<?php echo esc_url(home_url('/services#personal-training')); ?>">
                  <img src="<?php echo get_template_directory_uri(); ?>/asset/icons/personaltrainingicon.svg"/>
              </a>
              <p><span class="span-block">Personal</span> Training</p>
          </div>
          <div class="icon-container">
              <a src="<?php echo esc_url(home_url('/services#group-training')); ?>">
                  <img src="<?php echo get_template_directory_uri(); ?>/asset/icons/grouptrainingicon.svg"/>
              </a>
              <p><span class="span-block">Group</span> Training</p>
          </div>
          <div class="icon-container">
              <a src="<?php echo esc_url(home_url('/services#community-projects')); ?>">
                  <img src="<?php echo get_template_directory_uri(); ?>/asset/icons/communityprojecticon.svg"/>
              </a>
              <p><span class="span-block">Community</span> Projects</p>
          </div>
          <div class="icon-container">
              <a src='<?php echo esc_url( home_url( '/consultation/') )?>'>
                  <img src="<?php echo get_template_directory_uri(); ?>/asset/icons/freeconsultationicon.svg"/>
              </a>
              <p><span class="span-block">Free</span> Consultation</p>
          </div>
      </div>
  </section>


        <div class="main-carousel">
          <div class="carousel-cell personal-training" id='personal-training'>
            <h2>Personal training</h2>
            <?php echo CFS()->get( 'services_personal_training'); ?>
            <h3>Basic pricing</h3>

            <div class='price-box-container'>
              <div class='single-price-box'> 
                <p>single <span class="span-block">session</span></p>
                <span><?php echo CFS()->get('personal_training_single_session');?></span>
              </div>

              <div class='single-price-box price-box-border'>
                <p>ten <span class="span-block">sessions</span></p>
                <span><?php echo CFS()->get('personal_training_ten_session');?></span>
              </div>
              
              <div class='single-price-box'>
                <p>thirty <span class="span-block">sessions</span></p>
                <span><?php echo CFS()->get('personal_training_thirty_session');?></span>
              </div>
            </div>  <!-- end of price box container-->  
            <p class='training-rates'>**Rates are subject to change for program customizations.</p>       
          </div>  <!-- end of carousel cell personal training -->



          <div class="carousel-cell group-training" id='group-training'>
            <h2>Group training</h2>
            <?php echo CFS()->get('services_group_training', false, array( 'format' => 'raw' ));?>
            <h3>Basic pricing</h3>

            <div class='price-box-container'>
              <div class='single-price-box'> 
                <p>single <span class="span-block">session</span></p>
                <span><?php echo CFS()->get('group_training_single_session');?></span>
              </div>

              <div class='single-price-box price-box-border'>
                <p>ten <span class="span-block">sessions</span></p>
                <span><?php echo CFS()->get('group_training_ten_session');?></span>
              </div>
              
              <div class='single-price-box'>
                <p>thirty <span class="span-block">sessions</span></p>
                <span><?php echo CFS()->get('group_training_thirty_session');?></span>
              </div>
            </div>  <!-- end of price box container-->  
            <p class='training-rates'>**Rates are subject to change for program customizations.</p>
          </div>  <!-- end of carousel cell group training -->



          <div class="carousel-cell community-projects" id='community-projects'>
            <h2>Community projects</h2>
            <?php echo CFS()->get('services_community_projects');?>
            <h3>on now - <?php echo CFS()->get('services_featured_event'); ?></h3>
              <div class='red-button'><a href='<?php echo esc_url(str_replace(' ', '-', home_url('/event/'.CFS()->get('services_featured_event')))); ?>'>buy tickets</a></div>
              <div class='social-button'><a href='<?php echo esc_url( home_url( '/events/#on-now-and-services') )?>'>tell me more</a></div>
              <div class='social-button past-button'><a href='<?php echo esc_url( home_url( '/events/#historical-moments') )?>'>past events</a></div>
          </div>  <!-- end of carousel cell community projects -->
        </div>  <!-- end of carousel -->

        <section class="services-featured" id='free-consultation'>
          <div class="services-content">
            <h4><span class='span-block'>featured</span> trainer <span class="trainer-name"><?php echo CFS()->get('services_featured_trainer');?></span> </h4>
            <p>ready to sweat?</p>
            
            <div class="services-button-flex">
              <div class='red-button'><a href='<?php echo esc_url( home_url( '/consultation/') )?>'>free consultation</a></div>
              <div class='social-button'><a href='<?php echo esc_url( home_url( '/trainer/' . strtolower(CFS()->get('services_featured_trainer')) ) )?>'>about me</a></div>
            </div>
          </div>
          <div class='white container'>
            <h3 class="black-title">More feels on our services</h3>
              <div class="social-buttons-flex">
                <div class='social-button'><a href='https://www.facebook.com/kinathletics/' target="_blank">facebook</a></div>
                <div class='social-button'><a href='https://www.instagram.com/kinathletics/' target="_blank">instagram</a></div>
              </div>
            </div>
          </section>

      </div>  <!-- end of entry content-->
    </div>  <!-- end of container-->
  </article>
  </main>
</div>

<?php get_footer(); ?>