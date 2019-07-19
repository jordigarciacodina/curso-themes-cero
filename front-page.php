<?php
/**
 * The template for displaying the front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cero
 */
?>

<?php get_header(); ?>
<div id="primary" class="content-area">
	 <section class="hero">
	 	<div class="wrap">
		 	<div class="box">
			 	<h1><?php the_field('hero_title'); ?></h1>
			 	<p><?php the_field('hero_description'); ?></p>
			 	<div class="cta">
				 	<a class="button" href="<?php the_field('hero_cta_link'); ?>"><?php the_field('hero_cta_text'); ?></a>
			 	</div><!-- .cta -->
		 	</div><!-- .box -->
	 	</div><!-- .wrap -->
	</section><!-- .hero -->
	<section id="features" class="features">
		<div class="wrap">
			<div class="feature">
				<i class="material-icons"><?php the_field('features_icon_1'); ?></i>
				<h3><?php the_field('features_title_1'); ?></h3>
				<p><?php the_field('features_description_3'); ?></p>
			</div><!-- .feature -->
			<div class="feature">
				<i class="material-icons"><?php the_field('features_icon_2'); ?></i>
				<h3><?php the_field('features_title_2'); ?></h3>
				<p><?php the_field('features_description_3'); ?></p>
			</div><!-- .feature -->
			<div class="feature">
				<i class="material-icons"><?php the_field('features_icon_3'); ?></i>
				<h3><?php the_field('features_title_3'); ?></h3>
				<p><?php the_field('features_description_3'); ?></p>
			</div><!-- .feature -->
		</div><!-- .wrap -->
	</section><!-- .features -->
	<section id="about-us" class="about-us">
		<div class="wrap">
			<div class="image">
				<img src="<?php the_field('about_us_img'); ?>" alt="">
			</div>
			<div class="copy">
				<p class="section-title"><?php the_field('about_us_title'); ?></p>
				<div class="section_description">
					<?php the_field('about_us_description'); ?>
				</div>
			</div><!-- .copy -->
		</div><!-- wrap -->
	</section><!-- #about-us -->
	<section id="pricing" class="pricing">
		<div class="wrap">
			<p class="section-title"><?php the_field('pricing_section_title'); ?></p>
			<div class="row">
				<div class="price">
					<div class="box">
						<p class="price-title"><?php the_field('pricing_table_title_1'); ?></p>
						<p class="price-amount"><?php the_field('pricing_table_amount_1'); ?></p>
						<div class="price-features">
							<ul>
								<li><?php the_field('pricing_table_1_feature_1'); ?></li>
								<li><?php the_field('pricing_table_1_feature_2'); ?></li>
								<li><?php the_field('pricing_table_1_feature_3'); ?></li>
							</ul>
						</div><!-- .price-features -->
						<div class="cta">
							<a class="button" href="<?php the_field('pricing_table_1_cta_link'); ?>"><?php the_field('pricing_table_1_cta_text'); ?></a>
						</div><!-- .cta -->
					</div><!-- .box -->
				</div><!-- .price -->
				<div class="price">
					<div class="box top">
						<p class="price-title"><?php the_field('pricing_table_title_2'); ?></p>
						<p class="price-amount"><?php the_field('pricing_table_amount_2'); ?></p>
						<div class="price-features">
							<ul>
								<li><?php the_field('pricing_table_2_feature_1'); ?></li>
								<li><?php the_field('pricing_table_2_feature_2'); ?></li>
								<li><?php the_field('pricing_table_2_feature_3'); ?></li>
							</ul>
						</div><!-- .price-features -->
						<div class="cta">
							<a class="button" href="<?php the_field('pricing_table_2_cta_link'); ?>"><?php the_field('pricing_table_2_cta_text'); ?></a>
						</div><!-- .cta -->
					</div><!-- .box -->
				</div><!-- .price -->
			</div><!-- .row -->
		</div><!-- .wrap -->
	</section><!-- .pricing -->
	<section id="testimonials" class="testimonials">
		<div class="wrap">
			<p class="section-title"><?php the_field('testimonials_section_title'); ?></p>
			<?php
			
			global $post;
	
				$args = array(
				'posts_per_page' => 4,
				'post_type' => 'testimonio',
			);
	
			$myposts = get_posts( $args );
	
			foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
				<article class="testimonial">
					<header class="entry-header">
						<?php the_post_thumbnail(); ?>
					</header>
					<div class="entry-content">
						<?php the_excerpt(); ?>
						<p class="testimoinial-name"><?php the_title(); ?></p>
					</div><!-- .entry-content -->
				</article><!-- .testimonial -->
			<?php endforeach;
			wp_reset_postdata(); ?>
		</div><!-- .wrap -->
	</section><!-- .testimonials -->
	<section class="clients">
		<div class="wrap">
			<p class="section-title"><?php the_field('clients_section_title'); ?></p>
			<div class="row">
				<div class="logo">
					<img src="<?php the_field('client_logo_1'); ?>" alt="">
				</div>
				<div class="logo">
					<img src="<?php the_field('client_logo_2'); ?>" alt="">
				</div>
				<div class="logo">
					<img src="<?php the_field('client_logo_3'); ?>" alt="">
				</div>
				<div class="logo">
					<img src="<?php the_field('client_logo_4'); ?>" alt="">
				</div><!-- .logo -->
			</div><!-- .row -->
		</div><!-- .wrap -->
	</section><!-- .clients -->
	<section id="contact" class="contact">
		<div class="wrap">
			<p class="section-title"><?php the_field('contact_section_title'); ?></p>
			<?php echo do_shortcode('[ninja_form id=2]'); ?>
		</div><!-- wrap -->
	</section><!-- #contact -->
</div><!-- #primary -->
<?php get_footer(); ?>