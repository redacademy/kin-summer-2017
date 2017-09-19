<section class="page-section">
    <div class="header-container">
        <h2 class="header-title">Our Place</h2>
    </div>
    <div class="description-container">
        <p class="item-description"><?php echo CFS()->get( 'about_our_place'); ?></p>
    </div>

    <div class="about-sidebar">
        <?php
            if ( ! is_active_sidebar( 'sidebar-2' ) ) {
                return;
            }
        ?>

        <div id="secondary" class="widget-area" role="complementary">
            <?php dynamic_sidebar( 'sidebar-2' ); ?>
            <div class="red-button">
                  <a href="<?php echo esc_url(home_url('/find-us/'));?>">Find Us</a>
            </div><!-- .social-button -->
        </div><!-- .secondary -->
    </div><!-- .about-sidebar -->
</section>