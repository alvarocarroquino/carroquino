<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 *
 * @package MARINAVIBOT
 */

get_header();
?>

<div class="menu_intro">
	
<a href="<?php echo get_page_link( get_page_by_title( work )->ID ); ?>">WORK</a>

 
<a href="<?php echo get_page_link( get_page_by_title( tienda )->ID ); ?>">SHOP</a>

</div>


<div class="videofalse"> </div>
<div class="imagen_intro">

	<?php query_posts('post_type=videointro'); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<div class="video_container" style="<?php if( get_field('videotxt2') ): ?>background-image: url(<?php the_field('videotxt2'); ?> <?php endif; ?>">
	

	</div>


	

	


	<?php endwhile; endif; ?>


</div>
<div class="out">

	<?php query_posts('post_type=videointro'); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<div class="imagen_container" style="<?php if( get_field('imagen_a') ): ?> background-image: url(<?php the_field('imagen_a'); ?> <?php endif; ?>">
	

	</div>

	

	


	<?php endwhile; endif; ?>


</div>
<div class="logo">

	<?php query_posts('post_type=videointro'); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<a href="<?php echo get_page_link( get_page_by_title( home )->ID ); ?>">
	<?php 
		$image = get_field('logo');
if( !empty( $image ) ): ?>
<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
</a>							
<?php endif; ?>

	

	


	<?php endwhile; endif; ?>


</div>


	


