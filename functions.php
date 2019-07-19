<?php
	
/*
* Cero WordPress Theme functions and definitions
*
* @link https://developer.wordpress.org/themes/basics/theme-functions/
*
* @package WordPress
* @subpackage cero
* @since 1.0
* @version 1.0
*/

// Enqueue Scripts and Styles
add_action('wp_enqueue_scripts','cero_scripts_styles');
if(!function_exists('cero_scripts_styles')):
	function cero_scripts_styles() {
		wp_enqueue_style('cero-main-styles', get_stylesheet_uri(), array('cero-google-fonts'), '1.0', 'all');
		wp_enqueue_style('cero-google-fonts', '//fonts.googleapis.com/css?family=Material+Icons|Nobile:400,700', array(), '1.0', 'all');
	}
endif;

// Register menus
add_action('init','cero_nav_menus');
function cero_nav_menus() {
	register_nav_menus( array(
		'main_menu' => 'Menú Principal',
		'social_menu' => 'Menú social',
		)
	);
}

// Register widget areas
add_action('widgets_init', 'cero_register_sidebar');
function cero_register_sidebar() {
	register_sidebar( array(
		'name' 			=> ('After Entry'),
		'description' 	=> ('Widget area para nuestro tema'),
		'id' 			=> 'after-entry',
		'before_widget' => '<article id="%1$s" class="widget %2$s">',
		'after_widget'	=> '</article>',
		'before_title'	=> '<h3>',
		'after_title'	=> '</h3>'
		) 
	);	
}

// Colocamos el nombre el field en placeholder
add_filter( 'comment_form_default_fields', 'bs_comment_form_fields' );
function bs_comment_form_fields( $fields ) {
	foreach( $fields as &$field ) {
		$field = str_replace( 'id="author"', 'id="author" placeholder="Nombre *"', $field );
		$field = str_replace( 'id="email"', 'id="email" placeholder="Email *"', $field );
		$field = str_replace( 'id="url"', 'id="url" placeholder="Web *"', $field );
	}
	return $fields;
}

// Colocamos el nombre el field en placeholder
add_filter( 'comment_form_defaults', 'bs_comment_textarea_placeholder' );
function bs_comment_textarea_placeholder( $args ) {
	$args['comment_field'] = str_replace( 'textarea', 'textarea placeholder="Comentario *"', $args['comment_field'] );
	return $args;
}

// Setup theme
add_action('after_setup_theme','cero_theme_setup');
function cero_theme_setup() {
	add_theme_support('post-thumbnails');
	add_theme_support('html5', array(
		'comment-list',
		'comment-form',
		'search-form',
		'gallery',
		'caption',
		)
	);
	add_theme_support('post-formats', array(
		'aside',
		'gallery',
		'link',
		'image',
		'quote',
		'status',
		'video',
		'audio',
		'chat',
		)
	);
	add_theme_support('automatic-feed-links');
	remove_action('wp_head','wp_generation');
	remove_action('wp_print_styles','print_emoji_styles');
	remove_action('wp_head','print_emoji_detection_script');
	add_filter('show_admin_bar', '__return_false');
}

// Creamos un CPT con soporte para Genesis

if ( ! function_exists('cero_crear_cpt_testimonio') ) {

// Registramos el CPT

function cero_crear_cpt_testimonio() {

	$labels = array(
		'name'                => _x( 'Testimonios', 'Nombre general', 'cero_crear_cpt_testimonio' ),
		'singular_name'       => _x( 'Testimonio', 'Singular del CPT', 'cero_crear_cpt_testimonio' ),
		'menu_name'           => __( 'Testimonios', 'cero_crear_cpt_testimonio' ),
		'name_admin_bar'      => __( 'Testimonio', 'cero_crear_cpt_testimonio' ),
		'parent_item_colon'   => __( 'Padre:', 'cero_crear_cpt_testimonio' ),
		'all_items'           => __( 'Todos', 'cero_crear_cpt_testimonio' ),
		'add_new_item'        => __( 'Añadir Testimonio', 'cero_crear_cpt_testimonio' ),
		'add_new'             => __( 'Añadir testimonio', 'cero_crear_cpt_testimonio' ),
		'new_item'            => __( 'Nuevo Testimonio', 'cero_crear_cpt_testimonio' ),
		'edit_item'           => __( 'Editar Testimonio', 'cero_crear_cpt_testimonio' ),
		'update_item'         => __( 'Actualizar Testimonio', 'cero_crear_cpt_testimonio' ),
		'view_item'           => __( 'Ver Testimonio', 'cero_crear_cpt_testimonio' ),
		'search_items'        => __( 'Buscar Testimonio', 'cero_crear_cpt_testimonio' ),
		'not_found'           => __( 'No encontrado', 'cero_crear_cpt_testimonio' ),
		'not_found_in_trash'  => __( 'No encontrado', 'cero_crear_cpt_testimonio' ),
	);
	$args = array(
		'label'               => __( 'cero_post_type_testimonio', 'cero_crear_cpt_testimonio' ),
		'description'         => __( 'Descripción del post type', 'cero_crear_cpt_testimonio' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'excerpt', 'thumbnail' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'menu_icon' => 'dashicons-testimonial',
	);
	register_post_type( 'testimonio', $args );

}

// Colocamos la función del CPT en el hook "init"

add_action( 'init', 'cero_crear_cpt_testimonio', 0 );

}