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
//Menu options
add_action('admin_menu', 'custom_menu');
function custom_menu() {
  add_menu_page(
      'Import from newsapi',
      'Import from newsapi',
      'administrator',
      'importnewsapi',
      'index_callback',
      'dashicons-database'
     );
}
//Form with a submit button
function index_callback() {
if (is_admin() ) {
print '
<form class="form-basic" method="post" action="?action=start_import" enctype="application/x-www-form-urlencoded">
<center>
<h2>Start Importing from NewsAPI.</h2>
<input type="submit" value="Start">
</center>
</form>
';
}
}

//The operation starts once the form above is submitted.
if($_GET['action'] == 'start_import')
{
// Required to make wp_insert_post work on line 49.
require_once( ABSPATH . "wp-includes/pluggable.php" );
//Data is get from newsapi.org website
$data = json_decode(file_get_contents('http://newsapi.org/v2/top-headlines?country=us&category=business&apiKey=0247e290c70f4c7dbcc8c0763e06b102'),true);
//print_r($data);
//We set the amount of posts manually --TO DO: get amount of posts from the json file.
$amount = 19;
//print $amount;
//Auto increment variable
$a = 0;
//User ID
$user_id = get_current_user_id();
//Loop to insert data to the wordpress site
while ($a <= $amount) {

      $array = array(
              'post_author'           => $user_id,
              'post_content'          => $data[articles][$a][content],
              'post_content_filtered' => '',
              'post_title'            => $data[articles][$a][title],
              'post_excerpt'          => $data[articles][$a][description],
              'post_status'           => 'draft',
              'post_type'             => 'post',
              'post_parent'           => 0,
              'menu_order'            => 0,
              'import_id'             => 0,
          );


// Insert the post into the database
$post_id = wp_insert_post($array);
echo "<center>";
echo $post_id;
echo $data[articles][$a][title];
echo "Has been registered. <br></center>";

//After the post has been registered, i can feed the data on the custom fields. This is because wp_insert_post
//returns the post_id of the post i just registered.
add_post_meta($post_id, 'name', $data[articles][$a][source][name]);
add_post_meta($post_id,'author', $data[articles][$a][author]);

$a++;
  }


  }
//Array of the post
?>
