<div class="right">

<!-- 125px banners -->	
<?php// add thing's that will go in the sidebar  include (TEMPLATEPATH . '/sponsors.php'); ?>	

<!-- Sidebar widgets -->
<div class="sidebar">
<ul>
	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar') ) : else : ?>
	<?php endif; ?>
</ul>
</div>

</div>
