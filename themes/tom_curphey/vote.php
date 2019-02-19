<?php 

define( 'SHORTINIT', true );

switch ($_SERVER['REQUEST_METHOD']) {
  case 'POST':
    post_handler();
    return;
  default:
    echo 'Error';
    return;
}

function post_handler()
{
  echo "Hey";
  echo "<pre>";
  print_r($_POST);
  echo "</pre>";

    global $wpdb;
		$table = 'wp_votes';
		$id = 6; 
		$vote_type = 'overview';
		$vote = 3;
 
    // The data to save/update
    $data = array(
        'vote_type' => $vote_type,
        'vote_count' => $vote
    );
 
    $wpdb->update($table, $data, array('id' => $id));
}
add_action('votes', 'update_votes');


