<?php



// blog title page
	Redux::set_section(
		$opt_name,
		array(
			'title'      => __( 'Blog Title Text', 'commet' ),
			'id'         => 'blog-title',
			'subsection' => true,
			'fields'     => array(
				array(
					'id'       => 'blog-title',
					'type'     => 'text',
					'title'    => __( 'Blog Title Text', 'commet' ),
					'subtitle' => __( 'You can add blog title here.', 'commet' ),
					'default'  => __('This is our blog', 'commet' )
				),
				array(
					'id'       => 'blog-subtitle',
					'type'     => 'text',
					'title'    => __( 'Blog Subtitle Text', 'commet' ),
					'subtitle' => __( 'You can add blog subtitle here.', 'commet' ),
					'default'  => __('We have a few tips for you.', 'commet' )
				),
				array(
					'id'       => 'blog-bg-image',
					'type'     => 'media',
					'title'    => __( 'Background Image', 'commet' ),
					'subtitle' => __( 'You can add background image here.', 'commet' ),
					'default'  => [
						'url'	=> get_template_directory_uri().'/images/bg/18.jpg'
					]
				),
			),
		)
	);




