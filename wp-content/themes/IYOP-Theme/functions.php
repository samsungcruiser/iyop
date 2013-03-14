<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   //wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"), false);
       wp_register_script('jquery', ("http://code.jquery.com/jquery-1.7.1.min.js"), false);
	   wp_enqueue_script('jquery');

       wp_register_script('carousel3', get_bloginfo('template_directory') . "/js/jquery.infinitecarousel3.min.js");
       wp_enqueue_script('carousel3');

       wp_register_script('easing', get_bloginfo('template_directory') . "/js/easing.js");
       wp_enqueue_script('easing');

       wp_register_script('nivo', get_bloginfo('template_directory') . "/js/jquery.nivo.slider.pack.js");
       wp_enqueue_script('nivo');

       wp_register_script('volver', get_bloginfo('template_directory') . "/js/jquery.quovolver.js");
       wp_enqueue_script('volver');

       wp_register_script('final', get_bloginfo('template_directory') . "/js/final.js");
       wp_enqueue_script('final.js');
	}
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
	// Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }

    if (function_exists('register_nav_menus')) {
    register_nav_menus(
            array (
                    'main_nav' => "Main Navigation Menu"
                )
        );
}

?>