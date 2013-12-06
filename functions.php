<?php

include 'theme_options.php';
include 'guide.php';
include 'slider.php';
include 'metabox.php';
function wpb_widgets_init() {

	register_sidebar( array(
		'name' => __( 'Main Sidebar', 'wpb' ),
		'id' => 'sidebar-1',
		'description' => __( 'The main sidebar appears on the right side of any slider page', 'wpb' ),
		'before_widget' => '<aside id="recent-press" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
    }
add_action( 'widgets_init', 'wpb_widgets_init' );

function scripts() {
if ( !is_admin() ) {
	if(is_home()){
		 // this if statement will insure the following code only gets added to your wp site and not the admin page cause your code has no business in the admin page right unless that's your intentions
		wp_register_script('simplemodal', ( get_bloginfo('template_url') . '/simplemodal.js'), array('jquery')); // this last part-( array('jquery') )is added in case your script needs to be included after jquery
		wp_enqueue_script('simplemodal'); // then print. it will be added after jquery is added
	}
   }
}
add_action( 'wp_print_scripts', 'scripts'); // now just run the function



/* CUSTOM MENUS */	

register_nav_menus( array(
		'primary' => __( 'Primary Navigation', '' ),
	) );

function fallbackmenu(){ ?>
			<div id="submenu">
				<ul><li> Go to Adminpanel > Appearance > Menus to create your menu. You should have WP 3.0+ version for custom menus to work.</li></ul>
			</div>
<?php }	


/* CUSTOM EXCERPTS */
	
	
function wpe_excerptlength_index($length) {
    return 70;
}


function wpe_excerpt($length_callback='', $more_callback='') {
    global $post;
    if(function_exists($length_callback)){
        add_filter('excerpt_length', $length_callback);
    }
    if(function_exists($more_callback)){
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>'.$output.'</p>';
    echo $output;
}

function new_excerpt_more($more) {
return '<a class="rmore" href="'. get_permalink($post->ID) . '">' . '&nbsp;&nbsp; Read More ...' . '</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');


/* SHORT TITLES */

function short_title($after = '', $length) {
   $mytitle = explode(' ', get_the_title(), $length);
   if (count($mytitle)>=$length) {
       array_pop($mytitle);
       $mytitle = implode(" ",$mytitle). $after;
   } else {
       $mytitle = implode(" ",$mytitle);
   }
       return $mytitle;
}


/* FEATURED THUMBNAILS */

if ( function_exists( 'add_theme_support' ) ) { // Added in 2.9
	add_theme_support( 'post-thumbnails' );


}

/* GET THUMBNAIL URL */

function get_image_url(){
	$image_id = get_post_thumbnail_id();
	$image_url = wp_get_attachment_image_src($image_id,'large');
	$image_url = $image_url[0];
	echo $image_url;
	}	



/* PAGE NAVIGATION */


function getpagenavi(){
?>
<div id="tnavigation">
<?php if(function_exists('wp_pagenavi')) : ?>
<?php wp_pagenavi() ?>
<?php else : ?>
        <div class="alignleft"><?php next_posts_link(__('&laquo; Older Entries','arclite')) ?></div>
        <div class="alignright"><?php previous_posts_link(__('Newer Entries &raquo;','arclite')) ?></div>
        <div class="clear"></div>
<?php endif; ?>

</div>

<?php
}


?>
