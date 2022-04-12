<?php 

include('enqueue.php'); 

// Adderar features, menu & widegt-support på sidor
add_theme_support("menus");
add_theme_support("widgets");
add_theme_support("post-thumbnails");


// Functions Menus 
function register_menu() {
        register_nav_menu("headermenu", "Header");
        register_nav_menu("footermenu", "Footer");
        register_nav_menu("sidemenu", "");
    }

add_action("after_setup_theme", "register_menu");


// Functions Image

add_image_size("blogImage_size", 635, 423, true ); 

// Functions sidebar
function widget_sidebar() {

    register_sidebar(
        [
            "name" => "sidebar menu",
            "id" => "sidebar-menu",
            "description" => "Sidebar menu"
        ]
    );
}

add_action("after_setup_theme", "widget_sidebar",);

// Functions widgets 
function widget_footer() {

    register_sidebar(
        [
            "name" => "wigdet footer1",
            "id" => "widgetfooter1",
            "description" => "About us"
        ]
    );
}

add_action("after_setup_theme", "widget_footer");

?>





