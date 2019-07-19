<?php
/**
 * The template for displaying 404 page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy
 *
 * @package cero
 */
 ?>
 
<?php get_header(); ?>
<div id="primary" class="content-area">
	 <header class="entry-header">
		 <h1 class="entry-title">Error 404</h1>
		 <p>Este es el típico error 404 que encontramos navegando por la red. Sin embargo, puedes buscar lo que necesites a través de este formulario.</p>
	 </header><!-- entry-header -->
	 <div class="entry-content">
		 <?php get_search_form(); ?>
	 </div><!-- .entry-content -->
 </div><!-- #primary -->
<?php get_footer(); ?>