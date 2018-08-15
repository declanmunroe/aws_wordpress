<?php
/**
 * The main template file.
 * @package ECDL-Ireland
 */
$title = "ECDL Ireland | Home";
$description = "";
$keywords = "ECDL";

get_header();

if (have_posts()) : while (have_posts()) : the_post();

	$homeTitle = 'Home';

	if($homeTitle == get_the_title()){
		the_content(__('(more...)'));
	}

 endwhile; else:
 include('404.php');
 endif;

 get_footer();
 ?>

