<?php
/**
 * @package TestWize
 * @version 0.0.1
 */
/*
Plugin Name: Import from News API
Plugin URI:
Description: Imprt news from News API
Version: 0.0.1
Author URI:
*/
// Required to make wp_insert_post work on line 49.
require_once( ABSPATH . "wp-includes/pluggable.php" );
//Data is get from newsapi.org website
$data = json_decode(file_get_contents('http://newsapi.org/v2/top-headlines?country=us&category=business&apiKey=0247e290c70f4c7dbcc8c0763e06b102'),true);
//We set the amount of posts manually --TO DO: get amount of posts from the json file.
$amount = 1;
//print $amount;
//Auto increment variable
$a = 0;
//User ID
$user_id = get_current_user_id();
//Loop to insert data to the wordpress
while ($a <= $amount) {
      $title = $data[articles][$a][title];
      $array = array(
              'post_author'           => $user_id,
              'post_content'          => $data[articles][$a][content],
              'post_content_filtered' => '',
              'post_title'            => $data[articles][$a][title],
              'post_excerpt'          => $data[articles][$a][description],
              'post_status'           => 'draft',
              'post_type'             => 'post',
              'comment_status'        => '',
              'ping_status'           => '',
              'post_password'         => '',
              'to_ping'               => '',
              'pinged'                => '',
              'post_parent'           => 0,
              'menu_order'            => 0,
              'guid'                  => '',
              'import_id'             => 0,
              'context'               => '',
          );

echo '<div style="padding-left:200px;">';
// Insert the post into the database
//$post_id = wp_insert_post($array);
echo $post_id;

echo "</div>";
$a++;
  }

//Array of the post
?>
