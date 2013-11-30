<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="HandheldFriendly" content="true" />
<link href='http://fonts.googleapis.com/css?family=Bilbo|Prosto+One|Happy+Monkey' rel='stylesheet' type='text/css'>
<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
 <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/supersized.css" media="screen" />	 

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php 
wp_enqueue_script('jquery');
wp_enqueue_script('fitText', get_stylesheet_directory_uri() .'/js/jquery.fittext.js');
wp_enqueue_script('superfish', get_stylesheet_directory_uri() .'/js/superfish.js');
//wp_enqueue_script('jqui', get_stylesheet_directory_uri() .'/js/jquery-ui-personalized-1.5.2.packed.js');
//wp_enqueue_script('slides', get_stylesheet_directory_uri() .'/js/slides.min.jquery.js');p
//wp_enqueue_script('effects', get_stylesheet_directory_uri() .'/js/effects.js');
wp_enqueue_script('supersized', get_stylesheet_directory_uri() .'/js/supersized.3.2.7.min.js');
?>

<?php wp_get_archives('type=monthly&format=link'); ?>
<?php //comments_popup_script(); // off by default ?>

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>

<script type="text/javascript">  
			jQuery(function($){
				
				$.supersized({
				
					// Functionality
					slideshow               :   1,			// Slideshow on/off
					autoplay				:	1,			// Slideshow starts playing automatically
					start_slide             :   1,			// Start slide (0 is random)
					stop_loop				:	0,			// Pauses slideshow on last slide
					random					: 	0,			// Randomize slide order (Ignores start slide)
					slide_interval          :   4000,		// Length between transitions
					transition              :   3, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
					transition_speed		:	300,		// Speed of transition
					new_window				:	1,			// Image links open in new window/tab
					pause_hover             :   0,			// Pause slideshow on hover
					keyboard_nav            :   1,			// Keyboard navigation on/off
					performance				:	1,			// 0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)
					image_protect			:	1,			// Disables image dragging and right click with Javascript
															   
					// Size & Position						   
					min_width		        :   0,			// Min width allowed (in pixels)
					min_height		        :   0,			// Min height allowed (in pixels)
					vertical_center         :   0,			// Vertically center background
					horizontal_center       :   1,			// Horizontally center background
					fit_always				:	0,			// Image will never exceed browser width or height (Ignores min. dimensions)
					fit_portrait         	:   1,			// Portrait images will not exceed browser height
					fit_landscape			:   0,			// Landscape images will not exceed browser width
															   
					// Components							
					slide_links				:	'numbers',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
					thumb_links				:	1,			// Individual thumb links for each slide
					thumbnail_navigation    :   1,			// Thumbnail navigation
					slides 					:  	[	
<?php 
// The Query
query_posts( 'post_type=slides&posts_per_page=-1' );
$i=0; 
while ( have_posts() ) : the_post();
$simg=get_post_meta($post->ID, 'wtf_slide', true);
if ($i > 0) : echo ','; else: echo ''; endif; //For IE sake add a coma BEFORE every image offsetting the first one.
echo "{image : '".$simg."'}"; 
$i++; 
endwhile;
wp_reset_query();
 ?>	
]
										
}); 
});
</script>
<?php include('masthead.php'); ?>
