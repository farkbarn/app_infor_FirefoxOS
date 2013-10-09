
<?php


/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

get_header(); ?>


<?php
  $post = $wp_query->post;

include(TEMPLATEPATH.'/single_default.php');
 
?>

<?php get_footer(); ?>
