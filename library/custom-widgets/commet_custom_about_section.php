 <?php
	class Commet_footer_about_sec extends WP_Widget {

		public function __construct() {
			parent:: __construct('commet-footer-custom-about-section', 'Commet Footer About',array(
				'description'		=> __('You can add about section here.','commet')
			));
		}
		// front end
		public function widget($args, $instance) { ?>
			<?php echo $args['before_widget'];?>
	              <?php echo $args['before_title'];?>
	              	<?php echo $instance['about-title'];?>
	              <?php echo $args['after_title'];?>
	              <p>
	              	<?php echo $instance['about-text'];?>
	              </p>
	              <a href="<?php echo $instance['about-button-url'];?>" class="btn btn-color-out btn-sm"><?php echo $instance['about-button-text'];?></a>
	         <?php echo $args['after_widget'];?>
		<?php }

		// backend
		public function form($instance){ ?>
			<!-- title -->
			<p>
				<label for="<?php echo $this-> get_field_id('about')?>">Title:</label><input class="widefat" type="text" id="<?php echo $this-> get_field_id('about')?>" name="<?php echo $this-> get_field_name('about-title');?>" value="<?php echo $instance['about-title'];?>">
			</p>
			<!-- text -->
			<p>
				<label for="<?php echo $this-> get_field_id('about-text-id')?>"> About Text </label><input class="widefat" type="text" id="<?php echo $this-> get_field_id('about-text-id')?>" name="<?php echo $this-> get_field_name('about-text');?>" value="<?php echo $instance['about-text'];?>">
			</p>
			<!-- button text-->
			<p>
				<label for="<?php echo $this-> get_field_id('about-button-text-id');?>">Button Text:</label><input type="text" class="widefat" id="<?php echo $this-> get_field_id('about-button-text-id');?>" value='<?php echo $instance['about-button-text'];?>' name="<?php echo $this->get_field_name('about-button-text');?>">
			</p>
			<!-- button text url-->
			<p>
				<label for="<?php echo $this-> get_field_id('about-button-url-id');?>">Button URL:</label><input type="text" class="widefat" id="<?php echo $this-> get_field_id('about-button-url-id');?>" value='<?php echo $instance['about-button-url'];?>' name="<?php echo $this->get_field_name('about-button-url');?>">
			</p>
		<?php }
	}
register_widget('Commet_footer_about_sec');
?>
