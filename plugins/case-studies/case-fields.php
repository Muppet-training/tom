<?php

// Create 'top' section and move that to the top
add_action('edit_form_after_title', function() {
  global $post, $wp_meta_boxes;
  do_meta_boxes(get_current_screen(), 'top', $post);
  unset($wp_meta_boxes[get_post_type($post)]['top']);
});

add_action( 'init', 'tom_meta_boxes_setup' );

/* Meta box setup function. */
function tom_meta_boxes_setup() {
  /* Add meta boxes on the 'add_meta_boxes' hook. */
  add_action( 'add_meta_boxes', 'add_tom_case_meta_boxes');

  add_action( 'save_post', 'tom_case_save_meta', 10, 2 ); 
}

/* Create one or more meta boxes to be displayed on the post editor screen. */
function add_tom_case_meta_boxes() {

  add_meta_box(
    'tom_case',      // Unique ID
    esc_html__( 'Overview', 'case' ),    // Title
    'tom_case_post_class_meta_box',   // Callback function
    'case',         // Admin page (or post type)
    'top',         // Context
    'high'         // Priority
  );
  
  // add_meta_box(
  //   'tom_skill',      // Unique ID
  //   esc_html__( 'Main Skill Used', 'skill' ),    // Title
  //   'tom_skill_post_class_meta_box',   // Callback function
  //   'skill',         // Admin page (or post type)
  //   'side',         // Context
  //   'high'         // Priority
  // );
  
}

/* Display the post meta box. */
function tom_case_post_class_meta_box( $post ) { ?>

  <?php wp_nonce_field( basename( __FILE__ ), 'tom_case_nonce' ); ?>
    <ul>
      <li class="text_input_group">
        <label for="case_client_name">Client Name</label>
        <input class="form-control" type="text" name="case_client_name" id="case_client_name" value="<?php echo esc_attr( get_post_meta( $post->ID, 'case_client_name', true ) ); ?>"/>
      </li>
      <li class="text_input_group">
      <label for="case_client_url">Client URL</label>
        <input class="form-control" type="text" name="case_client_url" id="case_client_url" value="<?php echo esc_attr( get_post_meta( $post->ID, 'case_client_url', true ) ); ?>"/>
      </li>
      <li class="text_input_group">
        <label for="case_client_comments">Client Comments</label>
        <input class="form-control" type="text" name="case_client_comments" id="case_client_comments" value="<?php echo esc_attr( get_post_meta( $post->ID, 'case_client_comments', true ) ); ?>"/>
      </li>
      <li class="text_input_group">
        <label for="case_engagement">Client Engagement</label>
        <input class="form-control" type="text" name="case_engagement" id="case_engagement" value="<?php echo esc_attr( get_post_meta( $post->ID, 'case_engagement', true ) ); ?>"/>
      </li>
      <li class="text_input_group">
        <hr/>
        <label for="case_sales_growth">Sales Growth</label>
        <input class="form-control" type="text" name="case_sales_growth" id="case_sales_growth" value="<?php echo esc_attr( get_post_meta( $post->ID, 'case_sales_growth', true ) ); ?>"/>
      </li>
      <li class="text_input_group">
        <label for="case_leads">Lead Conversion</label>
        <input class="form-control" type="text" name="case_leads" id="case_leads" value="<?php echo esc_attr( get_post_meta( $post->ID, 'case_leads', true ) ); ?>"/>
      </li>
      <li class="text_input_group">
        <label for="case_traffic">Website Traffic</label>
        <input class="form-control" type="text" name="case_traffic" id="case_traffic" value="<?php echo esc_attr( get_post_meta( $post->ID, 'case_traffic', true ) ); ?>"/>
        <hr/>
      </li>     
      <li>
        
        <div class="meta">
          <div class="meta-th">
            <span class="textarea-title">The Challenge</span>
          </div>
          <div class="meta-editor">
            <?php
            $content  = get_post_meta( $post->ID, 'case_challenge', true);
            $editor   = 'case_challenge';
            $settings = array(
              'textarea_rows' => 10,
              'media_buttons' => false,
            );
            wp_editor(
              $content, $editor, $settings
            )
            ?>
        </div>
      </li>
      <li>
        <div class="meta">
          <div class="meta-th">
            <span class="textarea-title">Solution</span>
          </div>
          <div class="meta-editor">
            <?php
            $content  = get_post_meta( $post->ID, 'case_solution', true);
            $editor   = 'case_solution';
            $settings = array(
              'textarea_rows' => 10,
              'media_buttons' => false,
            );
            wp_editor(
              $content, $editor, $settings
            )
            ?>
        </div>
      </li>
      <li>
        <div class="meta">
          <div class="meta-th">
            <span class="textarea-title">Hindsight</span>
          </div>
          <div class="meta-editor">
            <?php
            $content  = get_post_meta( $post->ID, 'case_hindsight', true);
            $editor   = 'case_hindsight';
            $settings = array(
              'textarea_rows' => 10,
              'media_buttons' => false,
            );
            wp_editor(
              $content, $editor, $settings
            )
            ?>
        </div>
      </li>
    </ul>
  <?php 
}

/* Save the meta box's post metadata. */
function tom_case_save_meta( $post_id, $post ) {

  /* Verify the nonce before proceeding. */
  if ( !isset( $_POST['tom_case_nonce'] ) || !wp_verify_nonce( $_POST['tom_case_nonce'], basename( __FILE__ ) ) )
    return $post_id;

  /* Get the post type object. */
  $post_type = get_post_type_object( $post->post_type );

  /* Check if the current user has permission to edit the post. */
  if ( !current_user_can( $post_type->cap->edit_post, $post_id ) )
    return $post_id;

  if( isset( $_POST['case_client_name'] )){
    update_post_meta( $post_id, 'case_client_name', sanitize_text_field( $_POST['case_client_name']) );
  }
  if( isset( $_POST['case_client_url'] )){
    update_post_meta( $post_id, 'case_client_url', sanitize_text_field( $_POST['case_client_url']) );
  }
  if( isset( $_POST['case_client_comments'] )){
    update_post_meta( $post_id, 'case_client_comments', sanitize_text_field( $_POST['case_client_comments']) );
  }
  if( isset( $_POST['case_engagement'] )){
    update_post_meta( $post_id, 'case_engagement', sanitize_text_field( $_POST['case_engagement']) );
  }
  if( isset( $_POST['case_sales_growth'] )){
    update_post_meta( $post_id, 'case_sales_growth', sanitize_text_field( $_POST['case_sales_growth']) );
  }
  if( isset( $_POST['case_leads'] )){
    update_post_meta( $post_id, 'case_leads', sanitize_text_field( $_POST['case_leads']) );
  }
  if( isset( $_POST['case_traffic'] )){
    update_post_meta( $post_id, 'case_traffic', sanitize_text_field( $_POST['case_traffic']) );
  }
  if( isset( $_POST['case_challenge'] )){
    update_post_meta( $post_id, 'case_challenge', $_POST['case_challenge'] );
  }
  if( isset( $_POST['case_solution'] )){
    update_post_meta( $post_id, 'case_solution', $_POST['case_solution'] );
  }
  if( isset( $_POST['case_hindsight'] )){
    update_post_meta( $post_id, 'case_hindsight', $_POST['case_hindsight'] );
  }
  

}



