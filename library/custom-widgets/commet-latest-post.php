<?php
	class Commet_custom_recent_post extends WP_Widget {

		public function __construct(){
			parent:: __construct('commet-recent-post', 'Commet Recent Post', array(

				'description' => __('This is Commet Custom Latest Post Widget','commet')

			));
		}
		// Frontend set
		public function widget($tags, $tumar) {	?>

				<?php echo $tags['before_widget'];?>
				    <?php echo $tags['before_title'];?>
				      	Latest Posts
				    <?php echo  $tags['after_title'];

				    	$posts = new WP_Query(array(
				    		'post_type' 	=> 'post',
				    		'posts_per_page' => $tumar['post_count']
				    	));

				    ?>

				   <!-- checkbox  -->
				   	<ul class="nav">
				        <?php while($posts-> have_posts()): $posts-> the_post();?>
				        <li><a href="<?php echo the_permalink();?>"><?php the_title();?><i class="ti-arrow-right"></i>
				        	<?php if(!empty($tumar['date'])) :?>
				        		<span><?php the_time('d M, Y');?></span>
				        	<?php endif;?>
				        </a></li>
				    	<?php endwhile;?>
				    </ul>
			    <?php echo $tags['after_widget'];?>
<?php  }

		//Backend set
		public function form($instance) { ?>
			<p>
				<label for="<?php echo $this->get_field_id('title_id');?>">Title:</label>
				<input class="widefat" id="<?php echo $this->get_field_id('title_id');?>" name="<?php echo $this-> get_field_name('title');?>" type="text" value="<?php echo $instance['title'];?>">
			</p>

			<p>
				<label for="<?php echo $this-> get_field_id('post_count')?>">Number of posts to show:</label>
				<input class="tiny-text" id="<?php echo $this-> get_field_id('post_count')?>" name="<?php echo $this-> get_field_name('post_count');?>" type="number" step="1" min="1" value="<?php echo $instance['post_count'];?>" size="3">
			</p>
			<p>
				<input type="checkbox" id="<?php echo $this->get_field_id('date')?>" value="shwdate" name="<?php echo $this-> get_field_name('date');?>" <?php echo (!empty($instance['date'])) ? "checked='checked'" : ' ';?>>
				<label for="<?php echo $this->get_field_id('date')?>">Display post date?</label>
			</p>


<?php	}

	}



	add_action('widgets_init','commet_recent_post');

	function commet_recent_post(){
		register_widget('Commet_custom_recent_post');
	}

?>
