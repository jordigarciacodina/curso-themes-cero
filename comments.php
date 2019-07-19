<?php
/**
 * The template for displaying comments
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cero
 */
 ?>
 
<aside id="comments" class="comments-area">
	<?php if(have_comments()): ?>
	 	<h3 class="comments-title">Comentarios del post</h3>
	 	<ol class="comment-list">
		 	<?php wp_list_comments(); ?>
	 	</ol>
	<?php endif; ?>
	<?php comment_form(); ?>
</aside><!-- #comments -->