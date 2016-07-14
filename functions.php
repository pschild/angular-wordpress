<?php

if (function_exists('register_nav_menus')) {
    register_nav_menus(
        array(
            'main-nav' => __('Hauptmenue')
        )
    );
}

function bootstrapAngular() {
    wp_register_script(
        'angularjs',
        get_stylesheet_directory_uri() . '/node_modules/angular/angular.min.js'
    );

    wp_register_script(
        'angularjs-route',
        get_stylesheet_directory_uri() . '/node_modules/angular-route/angular-route.min.js'
    );

    wp_register_script(
        'angularjs-sanitize',
        get_stylesheet_directory_uri() . '/node_modules/angular-sanitize/angular-sanitize.min.js'
    );

    wp_enqueue_script(
        'app',
        get_stylesheet_directory_uri() . '/js/app.js',
        array('angularjs', 'angularjs-route', 'angularjs-sanitize')
    );

    wp_enqueue_script(
        'NavigationService',
        get_stylesheet_directory_uri() . '/js/services/navigation.service.js',
        array('app')
    );

    wp_enqueue_script(
        'PageService',
        get_stylesheet_directory_uri() . '/js/services/page.service.js',
        array('app')
    );

    wp_enqueue_script(
        'NavigationCtrl',
        get_stylesheet_directory_uri() . '/js/controller/navigation.controller.js',
        array('app')
    );

    wp_enqueue_script(
        'PageCtrl',
        get_stylesheet_directory_uri() . '/js/controller/page.controller.js',
        array('app')
    );

    wp_localize_script(
        'app',
        'settings',
        array(
            'partialsPath' => trailingslashit( get_template_directory_uri() ) . 'partials/',
            'defaultPageId' => get_option('page_on_front')
        )
    );
}
add_action('wp_enqueue_scripts', 'bootstrapAngular');