<?php
/**
 * The template for displaying all pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cero
 */
?>

<?php get_header(); ?>
<div id="primary" class="content-area">
<?php if(have_posts()): ?>
	<?php while(have_posts()): the_post();?>
		<?php get_template_part( 'template-parts/content-page', get_post_type() ); ?>
	<?php endwhile; ?>
<?php endif; ?>
</div><!-- #primary -->
<?php get_footer(); ?>