<?php
/**
 * Template part for displaying a single trainer.
 *
 * @package Kin_Athletics_Theme
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="default-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        
        <div class="trainer-profile-wrapper">
            <img class="trainer-profile-picture" src="https://scontent-sea1-1.xx.fbcdn.net/v/t31.0-8/13340329_10153641573310950_332847360037413919_o.jpg?oh=bf1375ead9f2edb8ce2dc69b48950570&oe=5A54BC60">
        </div>
	</header><!-- .entry-header -->

	<div class="default-content">
        <!-- Description -->
        <div class="trainer-description">
            <?php echo CFS()->get( 'trainer_description' ); ?>  
        </div>
        <!-- Personalities  -->
        <div class="trainer-personalities">
            <p class="trainer-sub-titles">Personality # Tags</p>
            <?php echo CFS()->get( 'trainer_personalities' ); ?>
        </div>
         <!-- Availability  -->
        <div class="trainer-availability">
            <div class="my-availability">
                <p class="trainer-sub-titles">My Availability</p>
                <?php 
                    foreach (CFS()->get( 'trainer_availability' ) as $date)
                    echo $date;
                    unset($date); // break the reference with the last element 
                    wp_reset_postdata();
                ?>
            </div>
            <div class="trainer-consultation">
                <p class="pump-it trainer-sub-titles">Let's Pump It!</p>
                <a class="consultation-button">Free Consultation</a>
            </div>
        </div>
    <!-- Other Trainers -->
        <div class="other-trainers">
            <p class="trainer-sub-titles">Who's Next?</p>
            <?php
                $args = array( 'post_type' => 'trainer', 'order' => 'DESC', 'posts_per_page' => 6, 'orderby' => 'date' );
                $trainer = get_posts( $args ); // returns an array of posts
                foreach ( $trainer as $post ) : setup_postdata( $post );
            ?>
            <div class="trainer-item-container">
                <div class="trainer-thumbnail-wrapper">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail( 'large' ); ?>
                    <?php endif; ?><!-- has_post_thumbnail -->         
                </div><!-- .trainer-thumbnail-wrapper -->

                <div class="next-trainer-wrapper">
                    <a class="trainer-name" href="<?php echo get_post_permalink() ?>"><?php the_title(); ?></a>
                </div><!-- .entry-wrapper -->
            </div>
            <?php endforeach; wp_reset_postdata(); ?>
        </div>
    </div><!-- .entry-content -->
</div><!-- #post-## -->
