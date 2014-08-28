<?php /*
 * meta related functions
 *
 * @package tempera
 * @subpackage Functions
 */

/**
 * Filter for page meta title.
 */
function tempera_filter_wp_title( $title ) {
    // Get the Site Name
    $site_name = get_bloginfo( 'name' );
    // Prepend name
    $filtered_title = $title.' - '.$site_name;
	// Get the Site Description
 	$site_description = get_bloginfo( 'description' );
    // If site front page, append description
    if ( (is_home() || is_front_page()) && $site_description ) {
        // Append Site Description to title
        $filtered_title =$site_name. " | ".$site_description;
    }
	// Add pagination if that's the case
	global $page, $paged;
	if ( $paged >= 2 || $page >= 2 )
	$filtered_title .=	 ' | ' . sprintf( __( 'Page %s', 'tempera' ), max( $paged, $page ) );

    // Return the modified title
    return $filtered_title;
}

function tempera_filter_wp_title_rss($title) {
return ' ';
}
add_filter( 'wp_title', 'tempera_filter_wp_title' );
add_filter('wp_title_rss','tempera_filter_wp_title_rss');

 /**
 * Meta author
 */
function tempera_meta_name() {
	global $temperas;
	foreach ($temperas as $key => $value) {
     ${"$key"} = $value ;}
echo '<meta name="author" content="'.$tempera_meta_author.'" />';
}
 /**
 * Meta Theme
 */
function tempera_meta_template() {
echo PHP_EOL.'<meta property="template" content="tempera" />'.PHP_EOL;
}
/**
 * Meta Title
 */
function tempera_meta_title() {
global $temperas;
echo "<title>".wp_title( '', false, 'right' )."</title>";
if ($temperas['tempera_iecompat']): echo PHP_EOL.'<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />'; endif;
}



add_action ('cryout_meta_hook','tempera_meta_title',0);
add_action ('cryout_meta_hook','tempera_meta_template');

// Tempera favicon
function tempera_fav_icon() {
global $temperas;
foreach ($temperas as $key => $value) {
${"$key"} = $value ;}
	 echo '<link rel="shortcut icon" href="'.esc_url($temperas['tempera_favicon']).'" />';
	 echo '<link rel="apple-touch-icon" href="'.esc_url($temperas['tempera_favicon']).'" />';
	}

if ($temperas['tempera_favicon']) add_action ('cryout_header_hook','tempera_fav_icon');


?>