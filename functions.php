<?php


use WpTailwindCssThemeBoilerplate\AutoLoader;
use WpTailwindCssThemeBoilerplate\View;


/*
 * Set up our auto loading class and mapping our namespace to the app directory.
 *
 * The autoloader follows PSR4 autoloading standards so, provided StudlyCaps are used for class, file, and directory
 * names, any class placed within the app directory will be autoloaded.
 *
 * i.e; If a class named SomeClass is stored in app/SomeDir/SomeClass.php, there is no need to include/require that file
 * as the autoloader will handle that for you.
 */
require get_stylesheet_directory() . '/app/AutoLoader.php';
require get_stylesheet_directory() . '/inc/widgets.php'; 
require get_stylesheet_directory() . '/inc/shortcodes.php'; 




$loader = new AutoLoader();
$loader->register();
$loader->addNamespace( 'WpTailwindCssThemeBoilerplate', get_stylesheet_directory() . '/app' );

View::$view_dir = get_stylesheet_directory() . '/templates/views';

require get_stylesheet_directory() . '/includes/scripts-and-styles.php';

 
    
/* THUMBNAIL URL - START */

add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() { 
    add_image_size( 'homepage-thumbnail', 380, 357, true ); // (cropped)
}
 
function thumbnail_image_url($size){
    global $post; 
    $image_id = get_post_thumbnail_id($post -> ID);
    $main_image = wp_get_attachment_image_src($image_id, $size);
    //0 = ruta o url, 1 = width, 2 = height, 3 = boolean
    return $main_image[0];
}   
 
/* THUMBNAIL URL - END */

// remove any tags  of excerpt 
remove_filter('the_excerpt', 'wpautop'); 
 


/* REMOVE DASHICONS - START */
add_action( 'wp_print_styles', 'zgwd_dequeue_styles' );
function zgwd_dequeue_styles() { 
    if ( ! is_user_logged_in() ) {
        wp_dequeue_style( 'dashicons' );
        wp_deregister_style( 'dashicons' );
    }
}
/* REMOVE DASHICONS - END */
  
 

/* SHOW YEAR - START */
function showYear($text=''){
 
	echo '<p>  © '.date("Y").' '.$text['text'].' </p>';
} 

add_shortcode ('year','showYear');
/* SHOW YEAR - END */



function disable_plugin_updates( $value ) {
    if ( isset($value) && is_object($value) ) {
      if ( isset( $value->response['advanced-custom-fields-pro/acf.php'] ) ) {
        unset( $value->response['advanced-custom-fields-pro/acf.php'] );
      }
    }
    return $value;
  }
  add_filter( 'site_transient_update_plugins', 'disable_plugin_updates' );