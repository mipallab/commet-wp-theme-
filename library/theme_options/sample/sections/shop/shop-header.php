<?php



// shop title page
	Redux::set_section(
		$opt_name,
		array(
			'title'      => __( 'Shop Title Text', 'commet' ),
			'id'         => 'shop-title',
			'subsection' => true,
			'fields'     => array(
				array(
					'id'       => 'shop-title',
					'type'     => 'text',
					'title'    => __( 'Shop Title Text', 'commet' ),
					'subtitle' => __( 'You can shop title here.', 'commet' ),
					'default'  => __('SHOP', 'commet' )
				),
				array(
					'id'       => 'shop-subtitle',
					'type'     => 'text',
					'title'    => __( 'Shop Subtitle Text', 'commet' ),
					'subtitle' => __( 'You can add shop subtitle here.', 'commet' ),
					'default'  => __('Free Delivery Worldwide..', 'commet' )
				),
				array(
					'id'       => 'shop-bg-image',
					'type'     => 'media',
					'title'    => __( 'Background Image', 'commet' ),
					'subtitle' => __( 'You can add background image here.', 'commet' ),
					'default'  => [
						'url'	=> get_template_directory_uri().'/images/bg/19.jpg'
					]
				),
			),
		)
	);

