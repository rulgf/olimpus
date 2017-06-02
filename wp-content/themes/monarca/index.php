<?php get_header(); ?>
	
	<?php 

	// Get current page slug
	global $post;
	$post_slug = $post->post_name;

	// Get template for current page
	get_template_part('template-parts/pages/content', $post_slug);

	?>

<?php get_footer(); ?>