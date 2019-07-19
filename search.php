<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package cero
 */
 ?>
 
<?php get_header(); ?>
<div id="primary" class="content-area">
	<header class="entry-header">
		<h1 class="entry-title">Resultados de la búsqueda</h1>
	</header><!-- .entry-header -->
	<section class="posts-wrapper">
	<?php if(have_posts()): ?>
		<?php while(have_posts()): the_post();?>
			<?php get_template_part( 'template-parts/content-search', get_post_type() ); ?>
		<?php endwhile; else: ?>
		<?php get_template_part( 'template-parts/content-none', get_post_type() ); ?>
	<?php endif; ?>
	</section><!-- .posts-wrapper -->
	<?php get_template_part( 'template-parts/pagination', get_post_type() ); ?>
</div><!-- #primary -->
<?php get_footer(); ?>