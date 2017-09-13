<?php

/**
* Controls gravity forms
*/  

add_filter ( 'gform_pre_render_1', 'pupulate_posts' );
function pupulate_posts ( $form ) {

  foreach( $form['fields'] as &$field ){
    
        if ($field->id != 5 ){
          continue;
        }
        
        // $args = array(
        //   'post_per_page' => -1,
        //   // 'post_type' => 'trainer'
        //   // 'order' => 'DESC',
        //   // 'orderby' => 'date',
        //   // 'exclude' => array(get_the_id())
        // );
        $posts = get_posts( array(
          'post_type' => 'trainer',
          'post_per_page' => 7
        ));

        $choices = array();
    
        foreach ( $posts as $post ) : 
            $choices[] = array(
        
                // 'text' => $post->post_title,
                // 'value' => $post->post_title,
                // 'isSelected' => false

                'text' => $post->post_title . "<img src='" . CFS()->get ('trainer_profile_picture', $post->ID) . "'/>",
                'value' => $post->post_title,
                // 'type' => "<img src='" . CFS()->get ('trainer_profile_picture', $post->ID) . "'/>",
                'isSelected' => false


                // echo $post->post_title;
                // echo CFS()->get ('trainer_profile_picture', $post->ID);
              );




            endforeach; wp_reset_postdata();
    
        $field->choices = $choices;
    
      }

    return $form;

}





// $args = array( 'post_type' => 'trainer', 'order' => 'DESC', 'posts_per_page' => 5, 'orderby' => 'date', 'exclude' => array(get_the_id()) );
// $trainer = get_posts( $args ); // returns an array of posts

// $trainers_count = count($trainer);

// foreach ( $trainer as $post ) : setup_postdata( $post );

// echo get_post_permalink();