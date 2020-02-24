<?php
remove_action('shutdown', 'wp_ob_end_flush_all', 1); //My added
//Adds script and stylesheets
function inhabitant_files() {
    wp_enqueue_style('inhabitant_styles', get_stylesheet_uri('/build/css/style.min.css'), NULL, microtime());
    wp_enqueue_style('fonts', "https://fonts.googleapis.com/css?family=Lato&display=swap");
    wp_enqueue_style('font-awesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css");
    }

add_action('wp_enqueue_scripts', 'inhabitant_files');

//Adds theme support - ex: title tag
function inhabitant_features() {
    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    register_nav_menus (array('main' =>'Main Menu'));

}

add_action('after_setup_theme', 'inhabitant_features');

//SideBar coding...
function inhabitant_widgets() {
    register_sidebar(array(
        'name' =>'Sidebar Info',
        'id'=>'sidebar-info',
        'description'=>'Add atext blog with your business hours, contact us, etc',
        'before_widgets'=>'<aside id="%1$s">',
        'after_widgets'=>'<aside>',
        'before_title'=>'<h2 class = "widgets=hours">',
        'after_title'=>'</h2>'
    ));

}

add_action('widgets_init', 'inhabitant_widgets');

function inhabitant_post_types(){
    register_post_type('product',array( //register_post_type method from https://generatewp.com/
        'has_archive'=> true,
        'show_in_rest'=> true,
        'public'=>true,
        'supports'=> array('title','editor','thumbnail'),
        'labels' =>array(
            'name'=>'Products',
            'add_new_item'=>'Add Newe Product',
            'edit_item'=>'Edit Product',
            'all_items'=>'All Products',
            'singular_name'=>'Product'
        ),
        'menu_icon'=>'dashicons-store'
    ));
}

add_action( 'init', 'inhabitant_post_types' );


?>