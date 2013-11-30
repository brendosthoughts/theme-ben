</script>
   <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/fonts/font-icon/css/fontello.css" media="screen" />
   <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/fonts/font-icon/css/animation.css" media="screen" />
<!--[if IE 7]>  
   <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/fonts/font-icon/css/fontello-ie7.css" media="screen" />
<![endif]-->

<script type="text/javascript">
jQuery(document).ready(function($){
	/* toggle events for smaller screens */
	$(".menu-button").on("click", function(){
		$("#mp-menu").slideToggle();
		$(this).toggleClass("active");
	});
	$(".menu-item").on("click", function(){
		$(".sub-menu").hide();
		$(".menu-item").removeClass("active");
                $(this).children(".sub-menu").slideToggle();
                $(this).toggleClass("active");

        });
        $(".icon-share").on("click", function(){
                $(".addthis_toolbox").slideToggle();
                $(this).toggleClass("active");
        });


});
</script>
</head>
<body>

<div id="masthead"><!-- masthead begin -->

	<div id="top"> 
		<h1 id="logo"><a href="<?php bloginfo('siteurl');?>/" title="<?php bloginfo('name');?>">Benjamin Thomsen</a></h1><h3 class="subhead">Canadian World Cup Skier</h3>
	
	</div>
	<div class="sharing">
		<span class="spreadtheword">Spread the <br>Word! </span>
		<i class="icon-share" role="button"></i>
		<!-- AddThis Button BEGIN -->
		<div class="addthis_toolbox  addthis_32x32_style">
			<a class="addthis_button_facebook"><i class="icon-facebook-squared"></i></a>
			<a class="addthis_button_twitter"><i class="icon-twitter-squared"></i></a>
			<a class="addthis_button_google_plusone_share"><i class="icon-gplus-squared"></i></a>
			<a class="addthis_button_compact"><i class="icon-plus-squared"></i></a> 
		</div>
		
	</div>
	<div id="botmenu">
		
		<div class="menu-button" role="button"><i class="icon-menu" role="botton"></i> <span class="text-menu">Menu</span></div>
		<?php
		$menu_options= array(
			'container_class' => 'mp-menu',
			'container_id' => 'mp-menu',
			'container'=> 'nav',
			'theme_location' => 'primary',
			'menu_class'=>'sfmenu',
			'fallback_cb'=> 'fallbackmenu' );
	
		wp_nav_menu($menu_options); ?>
	</div>
	
</div><!--end masthead-->

<script>
jQuery(function($){
	$('#scotia_hover').hover(
	function(){
	alert("scotia mecloed has been hovered over!");
	});
});
</script>

<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-52646de97cbcc089"></script> 

<!-- AddThis Button END -->
