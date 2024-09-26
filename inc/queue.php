<?php
function easy_map_scripts(): void
{
    wp_enqueue_style( 'map-style', plugin_url . '/assets/css/map.css', array(), version );
    wp_enqueue_script('map-js',    plugin_url .'/assets/js/map.js', array('jquery'), version, true);
}
add_action( 'wp_enqueue_scripts', 'easy_map_scripts' );

function easy_map_custom_admin_icon_css() {
    echo '<style>
        .custom-easy-map-icon {
            display: inline-block;
            width: 24px;
            height: 24px;
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZDVkOGRjIiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCI+CiAgPHBhdGggZD0iTTEyIDJDOC4xMyAyIDUgNS4xMyA1IDljMCAzLjAzIDYgMTEgNyAxMnM3LTguOTcgNy0xMmMwLTMuODctMy4xMy03LTctN3oiPjwvcGF0aD4KICA8cGF0aCBkPSJNMTIgMTJsLjAxIDBjLTEuNjYgMC0zLTEuMzQtMy0zczEuMzQtMyAzLTMgMyAxLjM0IDMgMy0xLjM0IDMtMyAzek0xMiAyeiI+PC9wYXRoPjwvc3ZnPg==");
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>';
}
add_action('elementor/editor/after_enqueue_scripts', 'easy_map_custom_admin_icon_css');
