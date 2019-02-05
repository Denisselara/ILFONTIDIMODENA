<?php
  // REGISTRO DE ESTILOS
  function register_enqueue_style() {
  		$theme_data = wp_get_theme();
  		/* Registrando estilos */
  		wp_register_style('bootstrap', get_parent_theme_file_uri('assets/vendor/bootstrap/css/bootstrap.css'), null, '1.0.0', 'screen');
  		wp_register_style('fontawesome', 'https://use.fontawesome.com/releases/v5.6.3/css/all.css', null, '1.0.0', 'screen');
  		wp_register_style('animate', get_parent_theme_file_uri('assets/vendor/animate/animate.css'), null, '1.0.0', 'screen');
  		wp_register_style('icomoon', get_parent_theme_file_uri('assets/vendor/icomoon/icomoon.css'), null, '1.0.0', 'screen');
      wp_register_style('themify-icons', get_parent_theme_file_uri('assets/vendor/themify-icons/themify-icons.css'), null, '1.0.0', 'screen');
      wp_register_style('owlcarousel', get_parent_theme_file_uri('assets/vendor/owl-carousel/css/owl.carousel.min.css'), null, '1.0.0', 'screen');
      wp_register_style('owltheme', get_parent_theme_file_uri('assets/vendor/owl-carousel/css/owl.theme.default.min.css'), null, '1.0.0', 'screen');
	    wp_register_style('miestilo', get_parent_theme_file_uri('assets/css/style.css'), null, '1.0.0', 'screen');

  		/* Enqueue estilos */
  		wp_enqueue_style('bootstrap');
  		wp_enqueue_style('fontawesome');
  		wp_enqueue_style('animate');
  		wp_enqueue_style('icomoon');
  		wp_enqueue_style('themify-icons');
      wp_enqueue_style('owlcarousel');
      wp_enqueue_style('owltheme');
      wp_enqueue_style('miestilo');

	}
	add_action( 'wp_enqueue_scripts', 'register_enqueue_style' );
  // REGISTRO DE SCRIPTS
  function register_enqueue_scripts() {
		$theme_data = wp_get_theme();
		/* Deregister Scripts */
		wp_deregister_script( 'jquery' );
		/*wp_deregister_script( 'jquery-migrate' );*/
		/* Registrando Scripts */
		wp_register_script('jQuery3', get_parent_theme_file_uri('assets/vendor/jquery/jquery.min.js'), null, '3.2.1', true);
		/*wp_register_script('jQuery_migrate', get_parent_theme_file_uri('/assets/vendor/js/jquery-migrate.min.js'), array('jQuery3'), '3.0.0', true);*/
		wp_register_script('bootstrap', get_parent_theme_file_uri('assets/vendor/bootstrap/js/bootstrap.min.js'),array('jQuery3'), null, true);
		wp_register_script('jquery_easing', get_parent_theme_file_uri('assets/vendor/jquery/jquery.easing.1.3.js'),array('jQuery3'), null, true);
		wp_register_script('jquery_waypoints', get_parent_theme_file_uri('assets/vendor/jquery/jquery.waypoints.min.js'),array('jQuery3'), null, true);
		wp_register_script('owlcarousel', get_parent_theme_file_uri('assets/vendor/owl-carousel/js/owl.carousel.min.js'),array('jQuery3'), null, true);
		wp_register_script('main', get_parent_theme_file_uri('assets/vendor/main/main.js'), array('jQuery3'), null, true);
    wp_register_script('modernizr', get_parent_theme_file_uri('assets/vendor/modernizr/modernizr-2.6.2.min.js'),array('jQuery3'), null, true);
		/* Enqueue Scripts */
		wp_enqueue_script('bootstrap');
		wp_enqueue_script('jquery_easing');
		wp_enqueue_script('jquery_waypoints');
		wp_enqueue_script('owlcarousel');
		wp_enqueue_script('main');
    wp_enqueue_script('modernizr');
	}
	add_action( 'wp_enqueue_scripts', 'register_enqueue_scripts' );

  //registrando menu navegaciion

  /*function menus_setup() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'footer-menu' => __( 'Footer Menu' ),
      )
    );
  }
  add_action( 'after_setup_theme',
'menus_setup' )*/

?>


<?php
// Register Custom Post Type
function products_post_type() {
	$labels = array(
		'name'                  => _x( 'Products', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Product', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Products', 'text_domain' ),
		'name_admin_bar'        => __( 'Product', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Product:', 'text_domain' ),
		'all_items'             => __( 'All Products', 'text_domain' ),
		'add_new_item'          => __( 'Add New Product', 'text_domain' ),
		'add_new'               => __( 'New Product', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Product', 'text_domain' ),
		'update_item'           => __( 'Update Product', 'text_domain' ),
		'view_item'             => __( 'View Product', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search products', 'text_domain' ),
		'not_found'             => __( 'No products found', 'text_domain' ),
		'not_found_in_trash'    => __( 'No products found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Product', 'text_domain' ),
		'description'           => __( 'Product information pages.', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'product', $args );
}
add_action( 'init', 'products_post_type', 0 );
?>

<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );
?>
