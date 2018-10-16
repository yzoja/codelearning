function books() {

	$labels = array(
		'name'	            => _x( 'Książki', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Książka', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Książki', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
		'all_items'           => __( 'Wszystkie książki', 'text_domain' ),
		'view_item'           => __( 'Pokaż książkę', 'text_domain' ),
		'add_new_item'        => __( 'Dodaj nową', 'text_domain' ),
		'add_new'             => __( 'Dodaj nową', 'text_domain' ),
		'edit_item'           => __( 'Edytuj', 'text_domain' ),
		'update_item'         => __( 'Aktualizuj', 'text_domain' ),
		'search_items'        => __( 'Szukaj książek', 'text_domain' ),
		'not_found'           => __( 'Nie znaleziono', 'text_domain' ),
		'not_found_in_trash'  => __( 'Nie ma w koszu', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'books', 'text_domain' ),
		'description'         => __( 'Książki', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt', 'revisions', 'custom-fields' ),
		'taxonomies'          => array( 'post_tag', 'genre' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-book',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'books', $args );

}

add_action( 'init', 'books', 0 );
