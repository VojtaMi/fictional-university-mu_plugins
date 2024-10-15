<?php  
function university_post_types() {
    register_post_type(
        'event',
        array(
            'public' => true,
            'show_in_rest' => true,
            'labels' => array(
                'name' => 'Events',
                'singular_name' => 'Event',
                'add_new' => 'Add New Event',
                'add_new_item' => 'Add New Event',
                'edit_item' => 'Edit Event',
                'new_item' => 'New Event',
                'view_item' => 'View Event',
                'view_items' => 'View Events',
                'search_items' => 'Search Events',
                'not_found' => 'No events found',
                'not_found_in_trash' => 'No events found in trash',
                'all_items' => 'All Events',
                'archives' => 'Event Archives',
                'attributes' => 'Event Attributes',
                'insert_into_item' => 'Insert into event',
                'uploaded_to_this_item' => 'Uploaded to this event',
                'featured_image' => 'Featured image',
                'set_featured_image' => 'Set featured image',
                'remove_featured_image' => 'Remove featured image',
                'use_featured_image' => 'Use as featured image',
                'menu_name' => 'Events',
                'filter_items_list' => 'Filter events list',
                'items_list_navigation' => 'Events list navigation',
                'items_list' => 'Events list',
            ),
            'menu_icon' => 'dashicons-calendar-alt',
        )
    );
}
add_action('init', 'university_post_types');
