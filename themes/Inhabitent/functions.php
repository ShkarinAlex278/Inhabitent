<?php
remove_action('shutdown', 'wp_ob_end_flush_all', 1); //My added
//Adds script and stylesheets
function inhabitant_files() {
    wp_enqueue_style('inhabitant_styles', get_stylesheet_uri('/build/css/style.min.css'), NULL, microtime());
    wp_enqueue_style('fonts', "https://fonts.googleapis.com/css?family=Lato&display=swap");
    wp_enqueue_style('font-awesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css");
    wp_enqueue_script('inhabitant_search_toggle', get_template_directory_uri() . '/build/js/search-toggle.min.js', array('jquery'),NULL, true);
    if(is_page('Home')){ 
        
        global $wp_query;           
        wp_enqueue_script('main', get_template_directory_uri() . '/build/js/main.min.js');        
    } 
    // else if(is_page('About')){ 
    //     global $wp_query;           
    //     wp_enqueue_script('main', get_template_directory_uri() . '/build/js/main.min.js');        
    // } 
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
        'description'=>'Add a text blog with your business hours, contact us, etc',
        'before_widgets'=>'<aside id="%1$s">',
        'after_widgets'=>'<aside>',
        'before_title'=>'<h2 class = "widgets=hours">',
        'after_title'=>'</h2>'
    ));
}

add_action('widgets_init', 'inhabitant_widgets');

//

// Hook into the 'init' action

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

    register_post_type('adventure',array( //register_post_type method from https://generatewp.com/
        'has_archive'=> true,
        'show_in_rest'=> true,
        'public'=>true,
        'supports'=> array('title','editor','thumbnail'),
        'labels' =>array(
            'name'=>'Adventure',
            'add_new_item'=>'Add Newe Adventure',
            'edit_item'=>'Edit Adventure',
            'all_items'=>'All Adventure',
            'singular_name'=>'Adventure'
        ),
        'menu_icon'=>'dashicons-admin-site'
    ));
   
//Register Customer Taxo
        $labels = array(
            'name'=> _x( 'Product Types', 'Taxonomy General Name', 'Product Type' ),
            'singular_name'=> _x( 'Product Types', 'Taxonomy Singular Name', 'Product Type' ),
            'menu_name'=> __( 'Product Types', 'Product Type' ),
            'all_items'=> __( 'All Items', 'Product Type' ),
            'parent_item'=> __( 'Parent Item', 'Product Type' ),
            'parent_item_colon'=> __( 'Parent Item:', 'Product Type' ),
            'new_item_name'=> __( 'New Item Name', 'Product Type' ),
            'add_new_item'=> __( 'Add New Item', 'Product Type' ),
            'edit_item'=> __( 'Edit Item', 'Product Type' ),
            'update_item'=> __( 'Update Item', 'Product Type' ),
            'view_item'=> __( 'View Item', 'Product Type' ),
            'separate_items_with_commas' => __( 'Separate items with commas', 'Product Type' ),
            'add_or_remove_items'=> __( 'Add or remove items', 'Product Type' ),
            'choose_from_most_used'=> __( 'Choose from the most used', 'Product Type' ),
            'popular_items'=> __( 'Popular Items', 'Product Type' ),
            'search_items'=> __( 'Search Items', 'Product Type' ),
            'not_found'=> __( 'Not Found', 'Product Type' ),
        );
        $args = array(
            'labels'=> $labels,
            'hierarchical'=> true,
            'public'=> true,
            'show_ui'=> true,
            'show_admin_column'=> true,
            'show_in_nav_menus'=> true,
            'show_tagcloud'=> true,
        );
            register_taxonomy( 'product-type', array( 'product' ), $args );        
}

add_action( 'init', 'inhabitant_post_types' );


function inhabitent_adjust_product($query) {
    if(!is_admin() && is_post_type_archive('product')) :
        $query->set('orderby', 'title');
        $query->set('order', 'ASC');
    endif;
}

add_action('pre_get_posts', 'inhabitent_adjust_product');

?>