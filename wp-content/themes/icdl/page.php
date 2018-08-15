<?php
	/**
	 * The template for displaying all pages.
	 *
	 * This is the template that displays all pages by default.
	 * Please note that this is the WordPress construct of pages
	 * and that other 'pages' on your WordPress site will use a
	 * different template.
	 *
	 * @package Tesseract
	 */

	$pagename = $post->post_name;

	$title = "ECDL Ireland |" . $pagename;
	$description = $pagename;
	$keywords = "ECDL" . $pagename;

	get_header();

	$pagename = $post->post_name;

	if($pagename == 'contact'){

		include('contact.php');

	}
	else if($pagename == 'purchase'){

		include('purchase.php');

	}
	else if($pagename == 'find-test-centre'){

		include('ecdlcentres.php');

	}
	else if($pagename == 'blog'){
		include('blog.php');
	}
	else{
		$pagename = str_replace('-', ' ', $pagename);

		query_posts('title= ' . $pagename);

		if ( have_posts() ) : while ( have_posts() ) : the_post();
		the_content();
		endwhile; endif;
	}


	 get_footer();
?>
