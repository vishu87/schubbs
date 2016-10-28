<?php 
//define('THEME_TRANSIENT_MIN', 2);

//menus
if(function_exists('register_nav_menus')){
	register_nav_menus(
		array(
			'primary-menu' => 'Primary Menu',
			)
	);
}
//featured images
add_theme_support( 'post-thumbnails' );

if(!get_option("medium_crop")) add_option("medium_crop", "1");
else update_option("medium_crop", "1");

add_image_size( 'big-thumb', 570, 320, true );
add_image_size( 'medium-thumb', 260, 120, true );


function theme_css_scripts() {
	// wp_enqueue_script( 'jquery' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/bootstrap.min.css', array(), '1.0.0', false );
	// wp_enqueue_style( 'responsiveTablescss', get_template_directory_uri() . '/responsiveTables/responsive-tables.css', array(), '1.0.0', false );
	wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', array(), '1.0.0', false );
	wp_enqueue_style( 'calendar_css', get_template_directory_uri() . '/css/calendar.css', array(), '1.0.0', false );
	wp_enqueue_style( 'owl-1', get_template_directory_uri() . '/css/owl.carousel.css', array(), '1.0.0', false );
	wp_enqueue_style( 'owl-2', get_template_directory_uri() . '/css/owl.theme.css', array(), '1.0.0', false );
	wp_enqueue_style( 'lightbox', get_template_directory_uri() . '/css/lightbox.min.css', array(), '1.0.0', false );
	wp_enqueue_style( 'animations', get_template_directory_uri() . '/css/animate.css', array(), '1.0.0', false );
	wp_enqueue_style( 'animations-ie-fix', get_template_directory_uri() . '/css/animations-ie-fix.css', array(), '1.0.0', false );

  //main css
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'style_responsive', get_template_directory_uri().'/style_responsive.css',array(),'1.0.0',false );
	wp_enqueue_style('datepicker-css','//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css', array(), '1.0.0', false);

	wp_enqueue_script('jquery');
	wp_enqueue_script( 'googlemap', '//maps.googleapis.com/maps/api/js', array(), '1.0.0', true );
	wp_enqueue_script( 'owl-carousal', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'animate-number', get_template_directory_uri() . '/js/jquery.animateNumber.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'calendar_js', get_template_directory_uri() . '/js/calendar.js', array(), '1.0.0', true );
	wp_enqueue_script( 'lightbox-1', get_template_directory_uri() . '/js/lightbox.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'css3-animated', get_template_directory_uri() . '/js/css3-animate-it.js', array(), '1.0.0', true );
	wp_enqueue_script( 'datepicker-ui-js','//code.jquery.com/ui/1.10.3/jquery-ui.js', array(), '1.0.0', true );
	// wp_enqueue_script( 'lightbox-2', get_template_directory_uri() . '/js/lightbox.min.map', array(), '1.0.0', true );
	// wp_enqueue_script( 'googlemap', '//maps.googleapis.com/maps/api/js', array(), '1.0.0', true );
	// wp_enqueue_script( 'responsiveTablesjs', get_template_directory_uri() . '/js/responsive-tables.js', array(), '1.0.0', true );
	wp_enqueue_script( 'validate', get_template_directory_uri() . '/js/jquery.validate.js', array(), '1.0.0', true );
	wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array(), '1.0.0', true );


}

add_action( 'wp_enqueue_scripts', 'theme_css_scripts' );
// remove_filter( 'the_content', 'wpautop' );

function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
    return '...<br><span class="read_more">Read More</span>';
}
add_filter('excerpt_more', 'new_excerpt_more');

?>