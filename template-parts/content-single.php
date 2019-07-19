<?php
/**
 * Template part
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cero
 */
?>

<article class="post">
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php the_post_thumbnail(); ?>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</article><!-- .post -->