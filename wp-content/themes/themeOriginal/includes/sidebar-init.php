<?php
function elegance_widgets_init() {
	// Header Widget
	// Location: right after the navigation
	register_sidebar(array(
		'name'					=> 'Header',
		'id' 						=> 'header-sidebar',
		'description'   => __( 'Located at the top of pages.'),
		'before_widget' => '<div id="%1$s" class="widget-header">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	// Request Widget
	// Location: at the top of the content
	register_sidebar(array(
		'name'					=> 'Request',
		'id' 						=> 'request-sidebar',
		'description'   => __( 'Located at the top of the content.'),
		'before_widget' => '<div id="%2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	
	
	// Home Widget 1
	// Location: at the top of the content
	register_sidebar(array(
		'name'					=> 'Home Widget 1',
		'id' 						=> 'home-widget-1',
		'description'   => __( 'Located at the Home page.'),
		'before_widget' => '<div id="%1$s" class="welcome-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h1>',
		'after_title' => '</h1>',
	));
	
	// Home Widget 2
	// Location: at the top of the content
	register_sidebar(array(
		'name'					=> 'Home Widget 2',
		'id' 						=> 'home-widget-2',
		'description'   => __( 'Located at the Home page.'),
		'before_widget' => '<div id="%2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
	
	// Home Widget 3
	// Location: at the top of the content
	register_sidebar(array(
		'name'					=> 'Home Widget 3',
		'id' 						=> 'home-widget-3',
		'description'   => __( 'Located at the Home page.'),
		'before_widget' => '<div id="%2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
	
	// Home Widget 4
	// Location: at the top of the content
	register_sidebar(array(
		'name'					=> 'Home Widget 4',
		'id' 						=> 'home-widget-4',
		'description'   => __( 'Located at the Home page.'),
		'before_widget' => '<div id="%2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
	
	
	// After Content Widget 1
	// Location: the sidebar
	register_sidebar(array(
		'name'					=> 'After Content 1',
		'id' 						=> 'after-content-1',
		'description'   => __( 'Located after content at the home page.'),
		'before_widget' => '<div id="%1$s" class="widget-area">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
	// After Content Widget 2
	// Location: the sidebar
	register_sidebar(array(
		'name'					=> 'After Content 2',
		'id' 						=> 'after-content-2',
		'description'   => __( 'Located after content at the home page.'),
		'before_widget' => '<div id="%1$s" class="widget-area">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
	
	
	
	// Sidebar Widget
	// Location: the sidebar
	register_sidebar(array(
		'name'					=> 'Sidebar',
		'id' 						=> 'main-sidebar',
		'description'   => __( 'Located at the right side of pages.'),
		'before_widget' => '<div id="%1$s" class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));

}
/** Register sidebars by running elegance_widgets_init() on the widgets_init hook. */
add_action( 'widgets_init', 'elegance_widgets_init' );
?>