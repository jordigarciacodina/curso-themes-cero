 <?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package cero
 */
?>

<?php get_header(); ?>
<div id="primary" class="content-area">
	<?php if(have_posts()): ?>
		<?php while(have_posts()): the_post();?>
			<?php get_template_part( 'template-parts/content-single', get_post_type() ); ?>
		<?php endwhile; ?>
	<?php endif; ?>
</div><!-- #primary -->
<?php comments_template(); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>