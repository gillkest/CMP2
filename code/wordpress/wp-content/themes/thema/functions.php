<?php
  # …
  function register_menu_locations() {
    register_nav_menus(
      array(
        'primary-menu' => __( 'Primary Menu' ),
        'footer-menu' => __( 'Footer Menu' )
      )
    );
  }
  add_action( 'init', 'register_menu_locations' );



//REGISTREREN EN OPHALEN VAN WIDGETS
# …
function register_sidebar_locations() {
    /* Register the 'primary' widgetzone. */
    register_sidebar(
        array(
            'id'            => 'primary-sidebar',
            'name'          => __( 'Primary Sidebar' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
}
add_action( 'widgets_init', 'register_sidebar_locations' );


//THUMBNAILS kunnen toevoegen
add_theme_support( 'post-thumbnails' ); 

//custom image size aanmaken
add_image_size('header-banner', 400, 50, false);

//custom logo kunnen toevoegen
add_theme_support( 'custom-logo' );

//custom header toevoegen
$header_info = array(
    'flex-width'    => true,
    'width'         => 1440,
    'flex-height'   => true,
    'height'        => 400,
    'default-image' => get_template_directory_uri() . '/foto/sunset.jpg',
);
add_theme_support( 'custom-header', $header_info );


//MYportfolio

function custom_post_type_portfolio() {
  $labels = array(
    'name'               => _x( 'Portfolio', 'post type general name' ),
    'singular_name'      => _x( 'Portfolio item', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New Portfolio item' ),
    'edit_item'          => __( 'Edit Portfolio item' ),
    'new_item'           => __( 'New Portfolio item' ),
    'all_items'          => __( 'All Portfolio items' ),
    'view_item'          => __( 'View Portfolio item' ),
    'search_items'       => __( 'Search Portfolio items' ),
    'not_found'          => __( 'No portfolio item found' ),
    'not_found_in_trash' => __( 'No portfolio item found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Portfolio'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our portfolio items specific data',
    'public'        => true,
    'menu_position' => 5,
	'menu_icon'     => 'dashicons-portfolio',
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments', 'custom-fields'),
    'has_archive'   => true
  );
  register_post_type( 'portfolio', $args );
}

add_action( 'init', 'custom_post_type_portfolio' );

//taxonomie

function taxonomies_portfolio() {
  $labels = array(
    'name'              => _x( 'Portfolio Categories', 'taxonomy general name' ),
    'singular_name'     => _x( 'Portfolio Category', 'taxonomy singular name' ),
    'search_items'      => __( 'Search Portfolio Categories' ),
    'all_items'         => __( 'All Portfolio Categories' ),
    'parent_item'       => __( 'Parent Portfolio Category' ),
    'parent_item_colon' => __( 'Parent Portfolio Category:' ),
    'edit_item'         => __( 'Edit Portfolio Category' ), 
    'update_item'       => __( 'Update Portfolio Category' ),
    'add_new_item'      => __( 'Add New Portfolio Category' ),
    'new_item_name'     => __( 'New Portfolio Category' ),
    'menu_name'         => __( 'Portfolio Categories' )
  );
  $args = array(
    'labels' => $labels,
    'hierarchical' => true,
  );
  register_taxonomy( 'portfolio_category', 'portfolio', $args );
}
add_action( 'init', 'taxonomies_portfolio', 0 );

add_theme_support( 'title-tag' );

?>