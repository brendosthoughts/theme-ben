<?php
/*
	Template Name: News-Clippings
*/
?>

<?php get_header(contentpage); ?>

<?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
<div id="casing" style="background: url('<?php echo $image[0]; ?>') no-repeat center center; background-size: cover; ">
<?php else: 
        echo '<div id="casing">';
 endif; ?>

<div class="incasing">
<div id="content">

<div class="post" id="post-<?php the_ID(); ?>">

<div class="title">
        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
</div>

<div class="entry">
<?php
query_posts( 'post_type=news-links&posts_per_page=-1' );
$i=0; 
while ( have_posts() ) : the_post();
?>
<article>
<?php 
$postID= get_the_ID();
$meta =get_post_custom();
?>
	<a href="<?=$meta['wpcf-link'][0] ?>" title="<?=$meta['wpcf-article-title'][0] ?>"> <?= $meta['wpcf-article-title'][0] ?></a>
	<span class="article-date">Date published: <?= gmdate("Y-m-d", $meta['wpcf-date-published'][0]); ?></span>
	<span class="article-pub-site">Publisher Website: <a href="<?=$meta['wpcf-pub-site'][0]  ?>"> <?=$meta['wpcf-pub-site'][0]  ?></a></span>
</article>

<?php endwhile;?>
<div class="clear"></div>
</div>
</div>
<div class="clear"></div>
</div>
</div>

</div>

<div class="clear"></div>
</div>  
<?php get_footer(); ?>


