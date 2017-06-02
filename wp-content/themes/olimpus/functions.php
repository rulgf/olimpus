<?php

/* Sets up theme defaults and registers support for various WordPress features. */
function olimpus_setup() {

	/* Make theme available for translation. */
	load_theme_textdomain( 'olimpus' );

	/* Let WordPress manage the document title. */
	add_theme_support( 'title-tag' );

	/* Enable support for Post Thumbnails on posts and pages. */
	add_theme_support( 'post-thumbnails' );

	/* Register menu location */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'olimpus' )
	) );
}
add_action( 'after_setup_theme', 'olimpus_setup' );


/* Add scripts and styles */
function olimpus_scripts() {

	// Add custom fonts.
	//wp_enqueue_style('quicksand_font', get_template_directory_uri() . '/fonts/quicksand/stylesheet.css');
	//wp_enqueue_style('fontawesome_css', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

	// Add Bootstrap
	wp_enqueue_style('bootstrap_css', get_template_directory_uri().'/css/bootstrap.min.css');

	// Add flexbox framework
	wp_enqueue_style('flex_css', get_template_directory_uri().'/css/flex-framework.css');

	// Add menu animation css
	wp_enqueue_style('hamburgers_css', get_template_directory_uri().'/css/hamburgers.css');

	// Add slick slider css
	wp_enqueue_style('slick_css', get_template_directory_uri().'/css/slick.css');

	// Add animate.css
	wp_enqueue_style('animate_css', get_template_directory_uri() . '/css/animate.min.css');

	// Add custom theme styles
	wp_enqueue_style('custom_css', get_template_directory_uri().'/css/custom.css');

	// Load our main stylesheet.
	wp_enqueue_style( 'olimpus-style', get_stylesheet_uri() );

	// Load map scripts only in contact page or distributors page
	if(is_page('contacto')) {
		wp_enqueue_script('maps_api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCGo23NXU_u3e3aY-j2SyaP8Jz74S31mVg&callback=initMap', array('map_js'), '', true);
		wp_enqueue_script('map_js', get_template_directory_uri().'/js/map.js','','',true);
	}

	if(is_page('distribuidores')) {
		wp_enqueue_script('maps_api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCGo23NXU_u3e3aY-j2SyaP8Jz74S31mVg&callback=initMap', array('map_dist_js'), '', true);
		wp_enqueue_script('map_dist_js', get_template_directory_uri() . '/js/map-dist.js', '', '', true );
		$translation_array = array( 'template_directory_uri' => get_template_directory_uri());
       	wp_localize_script( 'jquery', 'my_data', $translation_array );
	}

	// Scripts for product page and search page
	if(is_page('productos') || is_search()  || is_archive() ) {
		wp_enqueue_script('products_js', get_template_directory_uri() . '/js/productos.js', array('jquery'), '', true );

		//Pass variables from PHP to JS
		wp_localize_script('products_js', 'pagedata',
			array(
				'in_category' => is_category(),
				'current_category' => get_the_category(),
				'site_url' => get_site_url()
			)
		);
	}

	// Add Script that makes header stay fixed on scroll
	wp_enqueue_script('scrolltofixed_js', get_template_directory_uri().'/js/scrolltofixed.min.js','','',true);

	// Add slick script
	wp_enqueue_script('slick_js', get_template_directory_uri().'/js/slick.min.js','','',true);

	// Add theme script
	wp_enqueue_script('app_js', get_template_directory_uri().'/js/app.js', array('jquery'),'',true);

	//Custom Script
	wp_enqueue_script('custom', get_template_directory_uri().'/js/custom.js','','',true);

}
add_action( 'wp_enqueue_scripts', 'olimpus_scripts' );


// Add custom post type to search query
function olimpus_cpt_search( $query ) {
	
    if ( $query->is_search || $query->is_archive ) {
	$query->set( 'post_type', array( 'producto' ) );
    }
    
    return $query;
    
}
add_filter( 'pre_get_posts', 'olimpus_cpt_search' );