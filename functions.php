<?php

// Register Sidebar
function quercus_header()  {
	$args = array(
		'id'            => 'quercus_header',
		'name'          => 'Header',
		'description'   => 'Header region, beside logo.',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
	);

	register_sidebar( $args );
}

// Hook into the 'widgets_init' action
add_action( 'widgets_init', 'quercus_header' );

?>
