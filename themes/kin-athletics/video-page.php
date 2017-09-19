<?php
/**
 * Template Name: Video Page
 *
 * @package Kin_Athletics_Theme
 */

get_header(); ?>

<div class="video-container">
  <div class="video">
    <video class="video-width" preload="preload"video height=100% muted id="video" autoplay="autoplay" loop="loop">
      <source src="./wp-content/themes/kin-athletics/asset/video/kin-vid.webm" type="video/webm"></source>
      <source src="./wp-content/themes/kin-athletics/asset/video/kin-vid.mp4" type="video/mp4"></source>
    </video> 
    <div class="landing-video-text-container">
      <h1 class="kin">kin</h1>
      <h1 class="ath">ath</h1>
      <h1 class="let">let</h1>
      <h1 class="ics">ics</h1>
    </div>
    <div class="video-button-cont"><a href='<?php echo esc_url( home_url( '/front-page/') )?>'>Explore</a></div>
    
  </div>
</div>

<?php wp_footer(); ?>