<?php

function register_custom_post_types() {
    register_post_type('company', [
        'labels' => [
            'name' => 'Companies',
            'singular_name' => 'Company',
        ],
        'public' => true,
        'has_archive' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
    ]);

    register_post_type('employer', [
        'labels' => [
            'name' => 'Employers',
            'singular_name' => 'Employer',
        ],
        'public' => true,
        'has_archive' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
    ]);
}

add_action('init', 'register_custom_post_types');