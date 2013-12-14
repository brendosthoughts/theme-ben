<?php
/*
	Template Name: Race-Results
*/
?>

<?php get_header(contentpage); ?>
<?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
<div id="casing" style="background: url('<?php echo $image[0]; ?>') no-repeat center center; background-size: cover; ">
<?php else: 
        echo '<div id="casing">';
 endif; ?>
<script>

jQuery(function($){
  $('#race-results').footable(); 
});
</script>
<div class="incasing">
<div id="content">
<div class="post" id="post-<?php the_ID(); ?>">

<div class="title">
        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
</div>

<div class="entry">

<div class="result-search">Search the table to filter results <input id="filter" type="text" /> 
</div>
<table id="race-results" class="footable" data-filter="#filter">
    <thead>
      <tr>
        <th data-class="expand" data-sort-initial="true" data-type="numeric">Race Date</th>
        <th data-hide="phone,tablet">Location</th>
        <th data-hide="phone">Nation</th>
        <th data-hide="phone">Category</th>
        <th>Discipline</th>
        <th data-type="numeric">Position</th>
        <th data-type="numeric" data-hide="phone,tablet">Points</th>
      </tr>
    </thead>
    <tbody>
<?php
query_posts( 'post_type=result&posts_per_page=-1' );
$i=0; 
while ( have_posts() ) : the_post();
?>
<?php 
$postID= get_the_ID();
$meta =get_post_custom();
?>     
	<tr>
	   <td data-value="<?=$meta['wpcf-result-date'][0]?>"><?=$meta['wpcf-result-date'][0]?></td>
           <td><?=$meta['wpcf-result-location'][0]?></td>
           <td><?=$meta['wpcf-result-nation'][0]?></td>
           <td><?=$meta['wpcf-result-category'][0]?></td>
           <td><?=$meta['wpcf-result-discipline'][0]?></td>
           <td data-value="<?=$meta['wpcf-result-position'][0]?>"><?=$meta['wpcf-result-position'][0]?></td>
	   <td data-value="<?=$meta['wpcf-result-points'][0]?>"><?=$meta['wpcf-result-points'][0]?></td>
	</tr>
<?php endwhile;?> 
       </tbody>
    </table>
</div>
</div>

</div>
</div>
<div class="clear"></div>
</div>  
<?php get_footer(); ?>


