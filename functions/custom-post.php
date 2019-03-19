<?php 
// Custom post type deportistas
if ( ! function_exists('deportistas_destacados') ) {

    // Register Custom Post Type
    function deportistas_destacados() {
    
        $labels = array(
            'name'                  => _x( 'Deportista', 'Post Type General Name', 'text_domain' ),
            'singular_name'         => _x( 'deportista', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'             => __( 'Deportistas Destacados', 'text_domain' ),
            'name_admin_bar'        => __( 'Deportistas Destacados', 'text_domain' ),
            'archives'              => __( 'Item Archives', 'text_domain' ),
            'attributes'            => __( 'Item Attributes', 'text_domain' ),
            'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
            'all_items'             => __( 'Todos los deportistas', 'text_domain' ),
            'add_new_item'          => __( 'Agregar nuevo deportista', 'text_domain' ),
            'add_new'               => __( 'Agregar nuevo', 'text_domain' ),
            'new_item'              => __( 'Nuevo deportista', 'text_domain' ),
            'edit_item'             => __( 'Editar deportista', 'text_domain' ),
            'update_item'           => __( 'Actualizar deportista', 'text_domain' ),
            'view_item'             => __( 'Ver deportista', 'text_domain' ),
            'view_items'            => __( 'Ver deportistas', 'text_domain' ),
            'search_items'          => __( 'Buscar deportista', 'text_domain' ),
            'not_found'             => __( 'No encontrado', 'text_domain' ),
            'not_found_in_trash'    => __( 'No encontrado en la papelera', 'text_domain' ),
            'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
            'set_featured_image'    => __( 'Agregar Imagen destacada', 'text_domain' ),
            'remove_featured_image' => __( 'Remover Imagen destacada', 'text_domain' ),
            'use_featured_image'    => __( 'Usar Imagen destacada', 'text_domain' ),
            'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
            'items_list'            => __( 'Items list', 'text_domain' ),
            'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
            'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
        );
        $args = array(
            'label'                 => __( 'Deportistas', 'text_domain' ),
            'description'           => __( 'Deportistas Team Chile', 'text_domain' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'revisions', 'thumbnail' ),
            'taxonomies'            => array( 'tipo' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => get_bloginfo('template_directory') . '/assets/img/icono-custom-team-01.png',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
            'show_in_rest'          => true,
        );
        register_post_type( 'deportistas', $args );
    }
    add_action( 'init', 'deportistas_destacados', 0 );
}
?>