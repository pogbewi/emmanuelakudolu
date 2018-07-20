<?php

add_action( 'widgets_init', 'savysoft_widgets_init');
/**
 * Function to register the widget areas(sidebar) and widgets.
 */
function savysoft_widgets_init() {
	// Registering footer sidebar one
	register_sidebar( array(
		'name' 				=> __( 'Footer Sidebar One', 'savysoft' ),
		'id' 					=> 'savysoft_footer_sidebar_one',
		'description'   	=> __( 'Shows widgets at footer sidebar one.', 'savysoft' ),
		'before_widget' 	=> '<aside id="%1$s" class="widget %2$s clearfix">',
		'after_widget'  	=> '</aside>',
		'before_title'  	=> '<h3 class="widget-title"><span>',
		'after_title'   	=> '</span></h3>'
	) );

	// Registering footer sidebar two
	register_sidebar( array(
		'name' 				=> __( 'Footer Sidebar Two', 'savysoft' ),
		'id' 					=> 'savysoft_footer_sidebar_two',
		'description'   	=> __( 'Shows widgets at footer sidebar two.', 'savysoft' ),
		'before_widget' 	=> '<aside id="%1$s" class="widget %2$s clearfix">',
		'after_widget'  	=> '</aside>',
		'before_title'  	=> '<h3 class="widget-title"><span>',
		'after_title'   	=> '</span></h3>'
	) );

   // Registering footer sidebar three
   register_sidebar( array(
      'name'            => __( 'Footer Sidebar Three', 'savysoft' ),
      'id'              => 'savysoft_footer_sidebar_three',
      'description'     => __( 'Shows widgets at footer sidebar three.', 'savysoft' ),
      'before_widget'   => '<aside id="%1$s" class="widget %2$s clearfix">',
      'after_widget'    => '</aside>',
      'before_title'    => '<h3 class="widget-title"><span>',
      'after_title'     => '</span></h3>'
   ) );

   // Registering footer sidebar four
   register_sidebar( array(
      'name'            => __( 'Footer Sidebar Four', 'savysoft' ),
      'id'              => 'savysoft_footer_sidebar_four',
      'description'     => __( 'Shows widgets at footer sidebar four.', 'savysoft' ),
      'before_widget'   => '<aside id="%1$s" class="widget %2$s clearfix">',
      'after_widget'    => '</aside>',
      'before_title'    => '<h3 class="widget-title"><span>',
      'after_title'     => '</span></h3>'
   ) );

   }



   