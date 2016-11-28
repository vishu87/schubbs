<?php
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
add_image_size( 'blog-thumb', 370, 234, true );


function theme_css_scripts() {
	
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/bootstrap.min.css', array(), '1.0.0', false );
	wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', array(), '1.0.0', false );
	wp_enqueue_style( 'owl-1', get_template_directory_uri() . '/css/owl.carousel.css', array(), '1.0.0', false );
	wp_enqueue_style( 'owl-2', get_template_directory_uri() . '/css/owl.theme.css', array(), '1.0.0', false );
	wp_enqueue_style( 'lightbox', get_template_directory_uri() . '/css/lightbox.min.css', array(), '1.0.0', false );

 	//main css
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'style_responsive', get_template_directory_uri().'/style_responsive.css',array(),'1.0.1',false );
	wp_enqueue_style('datepicker-css','//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css', array(), '1.0.0', false);

	wp_enqueue_script('jquery');
	// wp_enqueue_script( 'googlemap', '//maps.googleapis.com/maps/api/js', array(), '1.0.0', true );
	wp_enqueue_script( 'owl-carousal', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'lightbox-1', get_template_directory_uri() . '/js/lightbox.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'datepicker-ui-js','//code.jquery.com/ui/1.10.3/jquery-ui.js', array(), '1.0.0', true );
	wp_enqueue_script( 'animate-number', get_template_directory_uri() . '/js/jquery.animateNumber.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'validate', get_template_directory_uri() . '/js/jquery.validate.js', array(), '1.0.0', true );
	wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array(), '1.0.1', true );


}

add_action( 'wp_enqueue_scripts', 'theme_css_scripts' );

function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function pagination_bar() {
    global $wp_query;

    $total_pages = $wp_query->max_num_pages;
 
    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));
 
        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => '/page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
        ));
    }
}

function search_title_highlight() {
    $title = get_the_title();
    $keys = implode('|', explode(' ', get_search_query()));
    $title = preg_replace('/(' . $keys .')/iu', '<strong class="search-highlight">\0</strong>', $title);

    echo $title;
}

function search_content_highlight() {
    $content = get_the_content();
    $keys = implode('|', explode(' ', get_search_query()));
    $content = preg_replace('/(' . $keys .')/iu', '<strong class="search-highlight">\0</strong>', $content);

    echo '<p>' . $content . '</p>';
}

/** changing default wordpres email settings */
 
add_filter('wp_mail_from', 'new_mail_from');
add_filter('wp_mail_from_name', 'new_mail_from_name');
 
function new_mail_from($old) {
	return 'frontoffice@schubbsdental.com';
}
function new_mail_from_name($old) {
	return 'Schubbs Dental Website';
}

add_action('wp_ajax_nopriv_captcha', 'captcha_callback');
add_action('wp_ajax_captcha', 'captcha_callback');

function captcha_callback() {

	$captcha_instance = new ReallySimpleCaptcha();
	$word = $captcha_instance->generate_random_word();
	$prefix = mt_rand();
	$img = $captcha_instance->generate_image( $prefix, $word );

	$data["success"] = true;
	$data["img_url"] = home_url().'/wp-content/plugins/really-simple-captcha/tmp/'.$img;
	$data["prefix"] = $prefix;
	echo json_encode($data);
	die();

}

?>