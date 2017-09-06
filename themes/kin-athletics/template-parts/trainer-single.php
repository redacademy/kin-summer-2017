<?php
/**
 * Template part for displaying a single trainer.
 *
 * @package Kin_Athletics_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
        <!-- Description -->
        <?php echo CFS()->get( 'trainer_description' ); ?>
        <!-- Personalities  -->
        <?php echo CFS()->get( 'trainer_personalities' ); ?>
        <!-- Availability  -->
        <?php 
            foreach (CFS()->get( 'trainer_availability' ) as $date)
            echo $date;
            unset($date); // break the reference with the last element 
            wp_reset_postdata();
        ?>
        <!-- Other Trainers -->
        <?php
            $args = array( 'post_type' => 'trainer', 'order' => 'DESC', 'posts_per_page' => 6, 'orderby' => 'date' );
            $trainer = get_posts( $args ); // returns an array of posts
            
            foreach ( $trainer as $post ) : setup_postdata( $post ); ?>
                <div class="trainer-thumbnail-wrapper">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail( 'large' ); ?>
                    <?php endif; ?><!-- has_post_thumbnail -->         
                </div><!-- .trainer-thumbnail-wrapper -->

                <div class="entry-wrapper">
                    <h3><a class="trainer-title" href="<?php echo get_post_permalink() ?>"><?php the_title(); ?></a></h3>
                </div><!-- .entry-wrapper -->
        <?php endforeach; wp_reset_postdata(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
