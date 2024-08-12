<?php

// Modify the permalink structure
function modify_acf_post_type_link($post_link, $post) {
    $post_types = ['service', 'product'];

    if (in_array($post->post_type, $post_types)) {
        $post_link = home_url('/' . $post->post_name . '/');
    }

    return $post_link;
}
add_filter('post_type_link', 'modify_acf_post_type_link', 10, 2);

// Intercept requests and modify the query
function handle_flat_url_structure($query) {
    // Check if this is a single post request and the main query
    if (!$query->is_main_query() || is_admin() || !$query->is_single) {
        return;
    }

    // Loop through post types to match the query
    $post_types = ['service', 'product'];
    $name = $query->get('name');
    
    if ($name) {
        foreach ($post_types as $post_type) {
            $post = get_page_by_path($name, OBJECT, $post_type);
            if ($post) {
                // Found the post, set the post type and ID in the query
                $query->set('post_type', $post_type);
                $query->set('page_id', $post->ID);
                break;
            }
        }
    }
}
add_action('pre_get_posts', 'handle_flat_url_structure');
?>
