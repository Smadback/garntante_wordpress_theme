<?php


function garntante_register_neuigkeit_post_type() {

    $singular = 'Neuigkeit';
    $plural = 'Neuigkeiten';

    $labels = array (
        'name'               => $plural,
        'singular_name'      => $singular,
        'add_new'            => sprintf('%s verfassen', $singular),
        'add_new_item'       => sprintf('Neue %s verfassen', $singular),
        'edit_item'          => sprintf('%s bearbeiten', $singular),
        'new_item'           => sprintf('Neue %s', $singular),
        'all_items'          => sprintf('Alle %s', $plural),
        'view'               => sprintf('%s anzeigen', $singular),
        'view_item'          => sprintf('%s anzeigen', $singular),
        'search_term'        => sprintf('%s suchen', $plural),
        'not_found'          => sprintf('Keine %s gefunden', $singular),
        'not_found_in_trash' => sprintf('Keine %s im Papierkorb gefunden', $singular)
    );

    $args = array(
        'public'    => true,
        'labels'    => $labels,
        'label'     => $plural,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => false,
        'menu_position' => 10,
        'menu_icon' => 'dashicons-rss',
        'can_export' => true,
        'delete_with_user' => false,
        'hierarchical' => false,
        'has_archive' => true,
        'query_var' => true,
        'capability_type' => 'page',
        'map_meta_cap' => true,
//        'capabilities' => array(),
        'rewrite' => array(
            'slug' => 'neuigkeiten'
        ),
        'supports' => array(
            'title', 'editor'
        )
    );

    register_post_type('neuigkeit', $args);
}
add_action('init', 'garntante_register_neuigkeit_post_type');
