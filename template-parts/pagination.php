<?php
/**
 * Template part
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cero
 */
?>

<?php if(get_next_posts_link() || get_preview_post_link()): ?>
<div class="pagination">
	<nav>
		<?php 
		echo paginate_links( 
			array(
				'prev_text' => 'Anteriores', 
				'next_text' => 'Siguientes', 
			)
		);
	?>
	</nav>
</div><!-- .pagination -->
<?php endif; ?>