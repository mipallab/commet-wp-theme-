<?php

/**
 * Commet functions and definitions
 *
 * Anyone can use the theme
 *
 *
 */

// theme setup functions
	add_action('after_setup_theme', 'commet_functions');

	function commet_functions() {
		//Text Domain
		load_theme_textdomain('commet', get_template_directory()."/lang");

		//theme supports
		add_theme_support('post-thumbnails');
		add_theme_support('title-tag');
		add_theme_support('post-formats',['audio','video','quote','gallery']);

	// register CUSTOM PROTFOLIO post type
		register_post_type('protfolio',[
			'public'		       => true,
			'labels'		       => [
				'menu_name'		   => __('Commet Protfolios','commet'),
				'name'			     => __('Protfolios','commet'),
				'singular_name'	 => __('Commet Protfolio','commet'),
				'add_new'		     => __('Add new protfolio','commet'),
				'add_new_item'	 => __('Add new protfolio','commet'),
			],
			"menu_icon"	       => "dashicons-groups"
		]);
	}

	add_action('widgets_init', 'sidebar_option');
	function sidebar_option() {
		register_sidebar(array(
			'id'			           => 'right_sidebar',
			'name'			         => __('Right Sidebar', 'commet'),
			'description'	       => __('You can add  right sidebar widgets here..', 'commet'),
			'class'			         => '',
			'before_widget'	     => '<div class="widget">',
			'after_widget'	     => '</div>',
			'before_title'	     => '<h6 class="upper">',
			'after_title'	       => '</h6>',
			'before_sidebar'     => '',
			'after_sidebar'	     => ''
		));
	}

// Register Footer Menu
	register_nav_menus([

		'footer-menu'		=> 'Footer Menu'

	]);

// Footer About widget register
	add_action('widgets_init','footer_first');
	function footer_first() {

		register_sidebar(array(
			'id'			           => 'footer_firstarea',
			'name'			         => __('Footer First Area', 'commet'),
			'description'	       => __('You can add footer widgets here..','commet'),
			'class'			         => '',
			'before_widget'	     => '<div class="col-sm-4"><div class="widget">',
			'after_widget' 	     => '</div> </div>',
			'before_title'	     => '<h6 class="upper">',
			'after_title'	       => '</h6>'
		));

	}

// Footer Subscribe widgets register
	add_action('widgets_init', 'subscribe_widget');
	function subscribe_widget() {
		register_sidebar(array(
			'id'			             => 'subscribe-email',
			'name'			           => __('Subscribe Widget', 'commet'),
			'description'	         => __('You can add subscribe here..', 'commet'),
			'class'			           => '',
			'before_widget'	       => '<div class="widget">',
			'after_widget'	       => '</div>',
			'before_title'	       => '<h6 class="upper">',
			'after_title'	         => '</h6>',
			'before_sidebar'       => '',
			'after_sidebar'	       => ''
		));
	}

// linkup the styles
	add_action('wp_enqueue_scripts', 'commet_styles_functions');

    //Commet Fonts
    function return_commet_fonts(){
    	$fonts = [];
    	$fonts[] = "Montserrat:400,700";
    	$fonts[] = "Raleway:300,400,500";
    	$fonts[] = "Halant:300,400";

    	$commet_fonts = add_query_arg(array(
    		'family'	=> urlencode(implode('|', $fonts))
    	),'https://fonts.googleapis.com/css');

    	return $commet_fonts;
    }

	function commet_styles_functions() {
		wp_enqueue_style('bundle', get_template_directory_uri().'/css/bundle.css',[], '', false);
		wp_enqueue_style('main-stylesheet', get_template_directory_uri().'/css/style.css', [] ,'', false);
		wp_enqueue_style('google-fonts',return_commet_fonts());
		wp_enqueue_style('stylesheet', get_stylesheet_uri());
	}

// linkup scripts

	// for IE 9
		add_action('wp_enqueue_scripts', 'commet_conditional_function');

		function commet_conditional_function() {
			wp_enqueue_script('html5shim', 'http://html5shim.googlecode.com/svn/trunk/html5.js',[],'',false);
			wp_script_add_data('html5shim', 'conditional','lt IE 9');

			wp_enqueue_script('respond','https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js',[],'',false);
			wp_script_add_data('respond','conditional','lt IE 9');
		}

	// scripts link
		add_action('wp_enqueue_scripts','commet_scripts_function');

		function commet_scripts_function() {
			wp_enqueue_script('js', get_template_directory_uri().'/js/jquery.js', '', array(), true);
			wp_enqueue_script('bundle', get_template_directory_uri().'/js/bundle.js', '' , array('jquery'), true);
			wp_enqueue_script('google-map', 'https://maps.googleapis.com/maps/api/js?v=3.exp', '' , array('jquery','bundle'), true);
			wp_enqueue_script('main-js', get_template_directory_uri().'/js/main.js','',array('jquery','bundle'),true);
		}

	// admin script here
		add_action('admin_print_scripts','cumtom_admin_script_run',1000);

			function cumtom_admin_script_run() { ?>

				<?php if(get_post_type() === 'post') :?>
					<script>

						jQuery(document).ready(function() {

							let id = jQuery('input[name="post_format"]:checked').attr('id');

							if(id === 'post-format-audio') {
								jQuery('.cmb2-id--audio-url').show();
								jQuery('#_additional-fields').show();

								jQuery('.cmb2-id--gallery-file').hide();
								jQuery('.cmb2-id--video-url').hide();
							}
							else if (id === 'post-format-video') {
								jQuery('.cmb2-id--video-url').show();
								jQuery('#_additional-fields').show();

								jQuery('.cmb2-id--gallery-file').hide();
								jQuery('.cmb2-id--audio-url').hide();
							}
							else if(id === 'post-format-gallery') {
								jQuery('.cmb2-id--gallery-file').show();
								jQuery('#_additional-fields').show();

								jQuery('.cmb2-id--video-url').hide();
								jQuery('.cmb2-id--audio-url').hide();
							}else {
								jQuery('#_additional-fields').hide();
							}

							jQuery('input[name="post_format"]').change(function(){
								let id = jQuery('input[name="post_format"]:checked').attr('id');

								if(id === 'post-format-audio') {
									jQuery('.cmb2-id--audio-url').show();
									jQuery('#_additional-fields').show();

									jQuery('.cmb2-id--gallery-file').hide();
									jQuery('.cmb2-id--video-url').hide();
								}
								else if (id === 'post-format-video') {
									jQuery('.cmb2-id--video-url').show();
									jQuery('#_additional-fields').show();

									jQuery('.cmb2-id--gallery-file').hide();
									jQuery('.cmb2-id--audio-url').hide();
								}
								else if(id === 'post-format-gallery') {
									jQuery('.cmb2-id--gallery-file').show();
									jQuery('#_additional-fields').show();

									jQuery('.cmb2-id--video-url').hide();
									jQuery('.cmb2-id--audio-url').hide();
								}else {
									jQuery('#_additional-fields').hide();
								}
							});
						});

					</script>

				<?php endif;?>


<?php
			}


// commet gallery function
	// if(file_exists(dirname(__FILE__)."/custom-widgets/gallery.php")) {
	// 	require_once(dirname(__FILE__).'/custom-widgets/gallery.php');
	// }

// commet custom latest post Widgets
	if(file_exists(dirname(__FILE__).'/library/custom-widgets/commet-latest-post.php')) {
		require_once(dirname(__FILE__).'/library/custom-widgets/commet-latest-post.php');
	}

// commet custom footer about Widgets
	if(file_exists(dirname(__FILE__).'/library/custom-widgets/commet_custom_about_section.php')) {
		require_once(dirname(__FILE__).'/library/custom-widgets/commet_custom_about_section.php');
	}

// commet theme options add
	if(file_exists(dirname(__FILE__).'/library/theme_options/redux-core/framework.php')) {
		require_once(dirname(__FILE__).'/library/theme_options/redux-core/framework.php');
	}

	if(file_exists(dirname(__FILE__).'/library/theme_options/sample/options.php')) {
		require_once(dirname(__FILE__).'/library/theme_options/sample/options.php');
	}

// post META BOX
	if(file_exists(dirname(__FILE__).'/library/additional-fields(metabox)/init.php')) {
		require_once(dirname(__FILE__).'/library/additional-fields(metabox)/init.php');
	}

	if(file_exists(dirname(__FILE__).'/library/additional-fields(metabox)/config.php')) {
		require_once(dirname(__FILE__).'/library/additional-fields(metabox)/config.php');
	}



?>
