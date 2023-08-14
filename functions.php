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
		add_theme_support('woocommerce');

	

		/**
		 * 
		 * 
		 * @ register custom Commet PROTFOLIO post type
		 * 
		 * 
		 */
			// capabilities
			if(current_user_can('manage_options')) {
				

				register_post_type('protfolio',[
					'public'		       => true,
					'labels'		       => [
						'menu_name'		   => __('Commet Protfolios','commet'),
						'name'			     => __('Protfolios','commet'),
						'singular_name'	 => __('Commet Protfolio','commet'),
						'add_new'		     => __('Add new protfolio','commet'),
						'add_new_item'	 => __('Add new protfolio','commet'),
						'set_featured_image'	=> 'set protfolio image',
						'remove_featured_image'	=> 'remove protfolio image'
					],
					"menu_icon"	       	=> "dashicons-groups",
					'supports'			=> array('title','thumbnail')
				]);

				register_taxonomy('commet-protfolio-type', 'protfolio', array(
					'public'		=> true,
					'hierarchical'	=> true,
					'labels'	=> array(
						'name' => 'Protfolio type',
						'add_new'	=> 'Add new type',
						'add_new_item'	=> 'Add new item'
					))
				);
			}
		


		/**
		 * 
		 * 
		 * @ register custom testimonials post type
		 * 
		 * 
		 */
			// capabilities
			if(current_user_can('manage_options')) {
				

				register_post_type('testimonials',[
					'public'		       => true,
					'labels'		       => [
						'menu_name'		   => __('Testimonials','commet'),
						'name'			     => __('Testimonials','commet'),
						'singular_name'	 => __('Testimonial','commet'),
						'add_new'		     => __('Add new testimonials','commet'),
						'add_new_item'	 => __('Add new testimonials','commet')
					],
					"menu_icon"	       	=> "dashicons-testimonial",
					'supports'			=> array('title','editor')
				]);
			}


		

		/**
		 * 
		 * 
		 * @ register custom Client post type
		 * 
		 * 
		 */
			// capabilities
			if(current_user_can('manage_options')) {
				

				register_post_type('client',[
					'public'		       => true,
					'labels'		       => [
						'menu_name'		   => __('Happy Client','commet'),
						'name'			     => __('Client','commet'),
						'add_new'		     => __('Add new client','commet'),
						'add_new_item'	 => __('Add new client','commet'),
						'set_featured_image'	=> 'set client logo',
						'remove_featured_image'	=> 'remove client logo'
					],
					"menu_icon"	       	=> "dashicons-smiley",
					'supports'			=> array('title','thumbnail')
				]);
			}


		

		/**
		 * 
		 * 
		 * 
		 * 
		 * @ Custom Home Slider
		 * 
		 * 
		 **/

			register_post_type('commet-home-slider', array(

				'public'		=> true,
				'supports'		=> array('title','editor','thumbnail'),
				'labels'		=> array(
					'name'		=> 'Home Slider',
					'add_new_item'	=> 'Add New Item',
					'add_new'		=> 'Add New Item',
					'featured_image'=> 'Add Slider Image',
					'remove_featured_image'=> 'Remove Slider Image',
					'set_featured_image'  => 'Set Slider Image'
				),
				'menu_icon' 	=> 'dashicons-slides'

			));





	}


	/**
	 * 
	 * 	Sidebar widgets
	 * 
	 */


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

		'footer-menu'		=> 'Footer Menu',
		'main-menu'			=> 'Main Menu'

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
		wp_enqueue_style('comment-reply');
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
			wp_enqueue_script('comment-reply');
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

// custom walker menu
	if(file_exists(dirname(__FILE__).'/library/custom-nav-menu/commet-class-walker-nav-menu.php')) {
		require_once(dirname(__FILE__).'/library/custom-nav-menu/commet-class-walker-nav-menu.php');
	}

// shortcode
	if(file_exists(dirname(__FILE__).'/library/shortcode/shortcode.php')) {
		require_once(dirname(__FILE__).'/library/shortcode/shortcode.php');
	}

// TGM plugins
	// if(file_exists(dirname(__FILE__).'/library/plugins/example.php')) {
	// //	require_once(dirname(__FILE__).'/library/plugins/example.php');
	// }







/**
 * Add custom admin menu 
 **/

add_action('wp_nav_menu_item_custom_fields', 'commet_admin_custom_fields', 10, 5);

function commet_admin_custom_fields($item_id, $menu_item, $depth, $args, $current_object_id) {

	if($depth == 0):
	?>

		<p class="field-css-megamenu">
			<label for="edit-menu-item-megamenu-<?php echo $item_id; ?>">
				<?php _e( 'Megamenu Options' ); ?><br />
				<input type="checkbox" id="edit-menu-item-megamenu-<?php echo $item_id; ?>" class="edit-menu-item-megamenu" name="menu-item-megamenu[<?php echo $item_id; ?>]" 
				value="checked"

				 <?php checked('checked',get_post_meta($item_id, 'megamenu_key',true ), true);?> />
				Megamenu
			</label>
		</p>

	<?php
	endif;
}

add_action('wp_update_nav_menu_item', 'update_commet_admin_custom_fields', 10, 3);

function update_commet_admin_custom_fields($menu_id, $_actual_db_id, $args ) {
	$megamenu_type = (isset($_POST['menu-item-megamenu'][$_actual_db_id])) ? $_POST['menu-item-megamenu'][$_actual_db_id] : '';

	if(empty($megamenu_type)) {
		delete_post_meta($_actual_db_id, 'megamenu_key');
	}else{
		update_post_meta($_actual_db_id, 'megamenu_key', $megamenu_type);
	}
}



register_activation_hook(__FILE__, 'flush_rewrite');

	function flush_rewrite() {
		flush_rewrite_rules();
	}


add_action('vc_before_init', function(){
	vc_set_as_theme();
});






/**
 * 
 * 
 * Comments.php
 * 
 * comment styling here
 *
 */


function commet_custom_comment_fields(){

	$commenter = wp_get_current_commenter();
	$req = get_option('require_name_email');
	$arial_req = ($req ? " aria-required='true' " : ' ');

	$fields = array(
			'author'		=> '<div class="form-double">
									<div class="form-group">
	                    				<input name="author" type="text" placeholder="Name" class="form-control" value="'.esc_attr($commenter['comment_author']).'"/>
	                  				</div>',
		    'email'		=> ' 		<div class="form-group last">
		                    			<input name="email" type="text" placeholder="Email" class="form-control" value"'. esc_attr($commenter['comment_author_email']) .'"/>
		                  			</div>
	                  			</div>'




	);

	return $fields;
}
add_filter('comment_form_default_fields', 'commet_custom_comment_fields');


function commet_custom_comment_form($defaults){
	$defaults['comment_notes_before'] = '';
	$defaults['comment_notes_after'] = '';
	$defaults['action'] = 'POST';
	$defaults['id_submit'] = 'comment-id-submit';
	$defaults['class_form'] = 'comment-form';
	$defaults['class_form'] = 'comment-form';
	$defaults['class_form'] = 'comment-form';
	$defaults['class_form'] = 'comment-form';
	$defaults['title_reply'] = __('<h5 class="upper">Leave a comment</h5>', 'commet');
	$defaults['comment_field'] = '<div class="form-group"><textarea placeholder="Comment" class="form-control"></textarea></div>';
	$defaults['submit_button']	= '<div class="form-submit text-right">
                  <button type="submit" class="btn btn-color-out">Post Comment</button>
                </div>';

	return $defaults;

}

add_filter('comment_form_defaults', 'commet_custom_comment_form');


/**
 * 
 * Shop page custimization
 * 
 */
	// shop title none
	add_filter('woocommerce_show_page_title', function() {
		return ;
	});


	remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5);
	remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10);




// custom DB table register when commet theme active

	function active_hook(){

		// create a custom db in wordpress

		global $wpdb;
			
		$prefix = $wpdb->prefix;
		$table_name = $prefix. "pallab";
		
		$sql = "CREATE TABLE $table_name (

			id INT AUTO_INCREMENT,
			name VARCHAR(250),
			roll INT,

			UNIQUE KEY ID (id)

		)";

		require_once( ABSPATH . "wp-admin/includes/upgrade.php" );

		dbDelta( $sql );
	}

	register_activation_hook( __FILE__, "active_hook" );

	

// custom DB table delete when commet theme deactive

function your_plugin_deactivate_function() {
    global $wpdb;

    $prefix = $wpdb->prefix;
	$table_name = $prefix. "pallab";


    // SQL query to drop the custom table
    $sql = "DROP TABLE IF EXISTS $table_name;";

    $wpdb->query($sql);
}

register_deactivation_hook(__FILE__, 'your_plugin_deactivate_function');



global $wpdb;

if( isset( $_POST['submit'] ) ) {
	$tableName = $wpdb->prefix . "pallab";
	$name = $_POST['name'];
	$roll = $_POST['roll'];


	$wpdb->insert($tableName, array(
		'name'	=> $name,
		'roll'	=> $roll
	));

	wp_redirect(home_url().'/wpdb-practice/');
	exit;
}


 

if( isset( $_POST['updatesubmit'] ) ) {
	$tableName = $wpdb->prefix . "pallab";
	$name = $_POST['name'];
	$id = $_GET['edit'];

	$wpdb->update($tableName, array(
		'name'	=> $name
		),
		array(

			'id'	=> $id
		)
	);

	wp_redirect(home_url().'/wpdb-practice/');
	exit;
}
