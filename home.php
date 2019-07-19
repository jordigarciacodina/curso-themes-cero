<?php
/**
 * The template for displaying home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cero
 */
 ?>
 
<?php get_header(); ?>
<div id="primary" class="content-area">
	<header class="entry-header">
		<div class="archive-title">
			<h1 class="entry-title"><?php single_post_title(); ?></h1>
		</div><!-- .archive-title -->
	</header><!-- entry-header -->
	<section class="posts-wrapper">
	<?php if(have_posts()): ?>
		<?php while(have_posts()): the_post();?>
			<?php get_template_part( 'template-parts/content-main', get_post_type() ); ?>
		<?php endwhile; ?>
	<?php endif; ?>
	</section><!-- .posts-wrapper -->
	<?php get_template_part( 'template-parts/pagination', get_post_type() ); ?>
</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>