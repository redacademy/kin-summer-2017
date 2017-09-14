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
        
        $posts = get_posts( array(
          'post_type' => 'trainer',
          'post_per_page' => 7
        ));

        $choices = array();
    
        foreach ( $posts as $post ) : 
            $choices[] = array(

                'text' => "<img src='" . CFS()->get ('trainer_profile_picture', $post->ID) . "'/>" . "<h1>" . $post->post_title . "</h1>",
                'value' => $post->post_title,
                'isSelected' => false

              );

            endforeach; wp_reset_postdata();
    
        $field->choices = $choices;
    
      }

    return $form;

}