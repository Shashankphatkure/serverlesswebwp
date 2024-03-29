<?php 
listeo_Kirki::add_section( 'shop', array(
    'title'          => esc_html__( 'Shop Options', 'listeo'  ),
    'description'    => esc_html__( 'Shop related options', 'listeo'  ),
    'panel'          => '', // Not typically needed.
    'priority'       => 27,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

	listeo_Kirki::add_field( 'listeo', array(
	    'type'        => 'radio-image',
	    'settings'     => 'pp_shop_layout',
	    'label'       => esc_html__( 'Shop layout', 'listeo' ),
	    'description' => esc_html__( 'Choose the sidebar side for shop', 'listeo' ),
	    'section'     => 'shop',
	    'default'     => 'full-width',
	    'priority'    => 10,
	    'choices'     => array(
	        'left-sidebar' => trailingslashit( trailingslashit( get_template_directory_uri() )) . '/images/left-sidebar.png',
	        'right-sidebar' => trailingslashit( trailingslashit( get_template_directory_uri() )) . '/images/right-sidebar.png',
	        'full-width' => trailingslashit( trailingslashit( get_template_directory_uri() )) . '/images/full-width.png',
	    ),
	) );
	

	listeo_Kirki::add_field( 'listeo', array(
	    'type'        => 'radio',
	    'settings'    => 'pp_shop_ordering',
	    'label'       => esc_html__( 'Show/hide results count and order select on shop page', 'listeo' ),
	    'section'     => 'shop',
	   
	    'default'     => 'show',
	    'priority'    => 10,
	     'choices'     => array(
            'show'  => esc_attr__( 'Show', 'listeo' ),
            'hide' => esc_attr__( 'Hide', 'listeo' ),
        ),
	) );


	listeo_Kirki::add_field( 'listeo', array(
		    'type'        => 'image',
		    'settings'     => 'listeo_shop_header_bg',
		    'label'       => esc_html__( 'Background for shop banner', 'listeo' ),
		    'description' => esc_html__( 'Set image for header banner, should be 1920px wide', 'listeo' ),
		    'section'     => 'shop',
		    'default'     => '',
		    'priority'    => 2,
		   
		) );

		listeo_Kirki::add_field( 'listeo', array(
			'type'        => 'slider',
			'settings'    => 'listeo_shop_header_bg_opacity',
			'label'       => esc_html__( 'Header opacity', 'listeo' ),
			'section'     => 'shop',
			'default'     => '0.8',
			'choices'     => array(
				'min'  => '0',
				'max'  => '1',
				'step' => '0.01',
			),
			'priority'    => 3,
		
		) ); 

		listeo_Kirki::add_field( 'listeo', array(
		    'type'        => 'color',
		    'settings'     => 'listeo_shop_header_color',
		    'label'       => esc_html__( 'Color for the image overlay on shop header banner', 'listeo' ),
		    'section'     => 'shop',
		    'default'     => '#333333',
		    'priority'    => 4,
		     
		) );

 ?>