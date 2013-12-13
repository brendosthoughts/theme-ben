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
  $('#race-results').tablesorter(); 
});
</script>
<div class="incasing">
<div id="content">
<div class="post" id="post-<?php the_ID(); ?>">

<div class="title">
        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
</div>

<div class="entry">

<table id="race-results" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
        <th><span>Race Date</span></th>
        <th><span>Location</span></th>
        <th><span>Nation</span></th>
        <th><span>Category</span></th>
        <th><span>Discipline</span></th>
        <th><span>Position</span></th>
        <th><span>Points</span></th>
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
	   <td><?=$meta['wpcf-result-date'][0]?></td>
           <td><?=$meta['wpcf-result-location'][0]?></td>
           <td><?=$meta['wpcf-result-nation'][0]?></td>
           <td><?=$meta['wpcf-result-category'][0]?></td>
           <td><?=$meta['wpcf-result-discipline'][0]?></td>
           <td><?=$meta['wpcf-result-position'][0]?></td>
	   <td><?=$meta['wpcf-result-points'][0]?></td>
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


