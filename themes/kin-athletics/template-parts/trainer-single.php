<?php
/**
 * Template part for displaying a single trainer.
 *
 * @package Kin_Athletics_Theme
 */

$args = array( 'post_type' => 'trainer', 'order' => 'DESC', 'posts_per_page' => 5, 'orderby' => 'date', 'exclude' => array(get_the_id()) );
$trainer = get_posts( $args ); // returns an array of posts

$trainers_count = count($trainer);

$days_of_week = array( 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday' );
$days_of_week_length = count($days_of_week);

$trainer_availability = array();

$day = 0;

foreach(CFS()->get( 'trainer_availability' ) as $date) {
    $trainer_availability[$day] = $date;
    $day++;
}


?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="default-header">
        <div class="trainer-profile-container">
            <?php the_title( '<h1 id="trainer-name" class="entry-title">', '</h1>' ); ?>
            
            <div class="trainer-profile-wrapper">
                <img class="trainer-profile-picture" src="<?php echo CFS()->get( 'trainer_profile_picture' ); ?>">
            </div>
        </div>

        <!-- Trainer Meta Information -->
        <div class="trainer-meta">
        <!-- Description -->
            <div class="trainer-description">
                <?php echo CFS()->get( 'trainer_description' ); ?>  
            </div>
            <!-- Personalities  -->
            <div class="trainer-personalities">
                <p class="trainer-sub-titles">Personality # Tags</p>
                <?php echo CFS()->get( 'trainer_personalities' ); ?>
            </div>
        </div> <!-- EOF TRAINER META -->
	</header><!-- .entry-header -->

	<div class="default-content">
         <!-- Availability  -->
        <div class="trainer-availability">
            <div class="my-availability">
                <p class="trainer-sub-titles">My Availability</p>
                <ul class="days-of-week">
                <?php
                    $index = 0;

                    for($i = 0 ; $i < $days_of_week_length ; $i++) {
                        if ($days_of_week[$i] === $trainer_availability[$index] && $trainer_availability[$index] !== null) {
                            if ($trainer_availability[$index] === 'Thursday' || $trainer_availability[$index] === 'Saturday') {
                                $formatted_current_day = substr($trainer_availability[$index], 0, 2);
                                echo "
                                    <li class='active-day'>
                                        <div class='active-day-circle'>
                                            <p class='active-day-text'>$formatted_current_day</p>
                                        </div>
                                    </li> 
                                    ";
                            } else {
                                $formatted_current_day = substr($trainer_availability[$index], 0, 1);
                                echo "
                                <li class='active-day'>
                                    <div class='active-day-circle'>
                                        <p class='active-day-text'>$formatted_current_day</p>
                                    </div>
                                </li> 
                                ";
                            }
                            $index++;

                        } else {
                            if ($days_of_week[$i] === 'Thursday' || $days_of_week[$i] === 'Saturday') {
                                $formatted_current_day = substr($days_of_week[$i], 0, 2);
                                echo "<li><p>$formatted_current_day</p></li> ";
                            } else {
                                $formatted_current_day = substr($days_of_week[$i], 0, 1);
                                echo "<li><p>$formatted_current_day</p></li> ";
                            }
                        }
                    };
                ?>
                </ul>
            </div>
            <div class="trainer-consultation">
                <p class="pump-it trainer-sub-titles">Let's Pump It!</p>
                <a class="consultation-button">Free Consultation</a>
            </div>
        </div>
    <!-- Other Trainers -->
        <div class="other-trainers">
            <p class="next-trainer trainer-sub-titles">Who's Next?</p>
            <div class="other-trainers-grid">
                <?php foreach ( $trainer as $post ) : setup_postdata( $post ); ?>

                <div class="next-trainer-item-container">
                    <div class="trainer-thumbnail-wrapper">
                        <img class="trainer-thumbnail" src="<?php echo CFS()->get( 'trainer_profile_picture' ); ?>">
                    </div><!-- .trainer-thumbnail-wrapper -->
                    <div class="next-trainer-wrapper">
                        <a class="trainer-name" href="<?php echo get_post_permalink() ?>"><?php the_title(); ?></a>
                    </div><!-- .next-trainer-wrapper -->
                </div>

                <?php endforeach; wp_reset_postdata(); ?>
            </div>
        </div> <!-- EOF OTHER TRAINERS -->
    <!-- OTHER LINKS -->
        <div class="other-links">
            <div class="about-our-origin">
                <a src="#" class="origin-link">Our Origin</a>
            </div>
            <div class="about-our-community">
                <a src="#" class="community-link">Our Community</a>
            </div>
            <div class="about-our-place">
                <a src="#" class="place-link">Our Place</a>
            </div>
        </div>
    </div><!-- .default-content -->
</div><!-- #post-## -->
