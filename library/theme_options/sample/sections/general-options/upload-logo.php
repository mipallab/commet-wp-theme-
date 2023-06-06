<?php
/**
 * Redux Framework upload logo config.
 *
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

// logo upload
	Redux::set_section(
		$opt_name,
		array(
			'title'      => __( 'Upload Logo', 'commet' ),
			'id'         => 'upload-logo',
			'subsection' => true,
			'fields'     => array(
				array(
					'id'       => 'light-logo',
					'type'     => 'media',
					'title'    => __( 'Light-logo', 'commet' ),
					'subtitle' => __( 'You can add light logo here.', 'commet' ),
					'default'  => [
						'url'	=> get_template_directory_uri().'/images/logo_light.png'
					]
				),
				array(
					'id'       => 'dark-logo',
					'type'     => 'media',
					'title'    => __( 'Dark-logo', 'commet' ),
					'subtitle' => __( 'You can add dark logo here.', 'commet' ),
					'default'  => [
						'url'	=> get_template_directory_uri().'/images/logo_dark.png'
					]
				),
			),
		)
	);


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
			),
		)
	);

// blog title page
	Redux::set_section(
		$opt_name,
		array(
			'title'      => __( 'Footer Copyright Text', 'commet' ),
			'id'         => 'footer-copyright',
			'subsection' => true,
			'fields'     => array(
				array(
					'id'       => 'footer-copyright-text',
					'type'     => 'text',
					'title'    => __( 'Footer Copyright Text', 'commet' ),
					'subtitle' => __( 'You can add copyright here.', 'commet' ),
					'default'  => __('&copy; 2015 Comet Agency.', 'commet' )
				)
			),
		)
	);


// blog title page
	Redux::set_section(
		$opt_name,
		array(
			'title'      => __( 'Footer Social Fields', 'commet' ),
			'id'         => 'footer-social',
			'subsection' => true,
			'fields'     => array(
				array(
					'id'       => 'facebook-url',
					'type'     => 'text',
					'title'    => __( 'Facebook', 'commet' ),
					'default'  => 'https://facebook.com'
				),
				array(
					'id'       => 'twitter-url',
					'type'     => 'text',
					'title'    => __( 'Twiiter', 'commet' ),
					'default'  => 'https://twitter.com'
				),
				array(
					'id'       => 'linkedin-url',
					'type'     => 'text',
					'title'    => __( 'LinkedIn', 'commet' ),
					'default'  => 'https://linkedin.com'
				),

				array(
					'id'       => 'instagram-url',
					'type'     => 'text',
					'title'    => __( 'Instagram', 'commet' ),
					'default'  => 'https://instagram.com'
				),
				array(
					'id'       => 'dribbble-url',
					'type'     => 'text',
					'title'    => __( 'Dribbble', 'commet' ),
					'default'  => 'https://dribbble.com'
				)
			)
		)
	);
