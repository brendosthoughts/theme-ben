<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/> <!--320-->
<link href='http://fonts.googleapis.com/css?family=Bilbo|Prosto+One|Happy+Monkey' rel='stylesheet' type='text/css'>
<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<link href='http://fonts.googleapis.com/css?family=Fredericka+the+Great|Cabin+Sketch|Londrina+Sketch|Shadows+Into+Light|Gloria+Hallelujah|Just+Me+Again+Down+Here|Black+Ops+One|Ribeye+Marrow|Miltonian|Indie+Flower|Rock+Salt|Jacques+Francois+Shadow|Ewert' rel='stylesheet' type='text/css'>
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
//wp_enqueue_script('slides', get_stylesheet_directory_uri() .'/js/slides.min.jquery.js');p
//wp_enqueue_script('effects', get_stylesheet_directory_uri() .'/js/effects.js');
?>

<?php wp_get_archives('type=monthly&format=link'); ?>
<?php //comments_popup_script(); // off by default ?>

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>

<?php include('masthead.php'); ?>
