<?php
	
	/**
	 * 
	 * This is Home page commet slider section
	 * 
	 * @ Home Slider Section
	 * 
	 */

	add_shortcode('homepage_slider_section', function(){
		ob_start();
		?>

		<section id="home">
	      <div id="home-slider" class="flexslider">
	        <ul class="slides">
	          


	        <?php 

	        $home_Slider = new WP_Query(array(
	        	'post_type'		=> 'commet-home-slider',
	        	'posts_per_page'	=> 3
	        ));	

	        while($home_Slider -> have_posts()): $home_Slider -> the_post();?>

	          	<li><?php the_post_thumbnail();?>
		            <div class="slide-wrap">
		              	<div class="slide-content">
		                	<div class="container">
			                  	<h1><?php the_title();?><span class="red-dot"></span></h1>
			                  	<h6><?php echo get_post_meta( get_the_ID(), '_subtitle-text', true);?></h6>
			                  	<p>
			                  		<!-- first button  -->
				                  		<?php
				                  			$frist_button_text = get_post_meta(get_the_id(),'_first-button-text', true);
				                  			if($frist_button_text != ''):
				                  		?>
				                  		<a href="<?php echo the_permalink();?>" class="btn 


				                  		<?php 
				                  			$frist_button_type_color = get_post_meta(get_the_id(), '_first-button-type', true);

				                  			echo ($frist_button_type_color == 'transparent') ? 'btn-light-out' : 'btn-color btn-full'

				                  		?>">
				                  			
				                  			<?php echo $frist_button_text;?>

				                  		</a>

				                  		<?php endif;?>
			                  		<!-- first button end -->

			                  		<!-- second button  -->
				                  		<?php
				                  			$second_button_text = get_post_meta(get_the_id(),'_second-button-text', true);
				                  			if($second_button_text != ''):
				                  		?>
				                  		<a href="<?php echo the_permalink();?>" class="btn 


				                  		<?php 
				                  			$second_button_type_color = get_post_meta(get_the_id(), '_second-button-type', true);

				                  			echo ($second_button_type_color == 'red') ? 'btn-color btn-full' : 'btn-light-out'

				                  		?>">
				                  			
				                  			<?php echo $second_button_text;?>

				                  		</a>

				                  		<?php endif;?>
			                  		<!-- second button end -->
			                  	</p>
		                	</div>
		              	</div>
		            </div>
	          	</li>
		          
	      	<?php endwhile;?>

	        </ul>
	      </div>
	    </section>




		<?php
		return ob_get_clean();
	});



	/**
	 * 
	 * This is Home page section
	 * 
	 * @ About Section
	 * 
	 */

	add_shortcode('about_section', function($attr, $content){

		$aboutAttributes = extract( shortcode_atts(array(
			'title'			=> 'Who We Are',
			'subtitle'		=> 'We are driven by creative.'
		),$attr));

		ob_start();
		?>

		<section id="about">
	      <div class="container">
	        <div class="title center">
	          <h4 class="upper"><?php echo $subtitle;?></h4>
	          <h2><?php echo $title; ?><span class="red-dot"></span></h2>
	          <hr>
	        </div>
	        <div class="section-content">
	          <div class="col-md-8 col-md-offset-2">
	            <p class="lead-text serif text-center"><?php echo do_shortcode( $content ); ?></p>
	          </div>
	        </div>
	      </div>
	    </section>


		<?php
		return ob_get_clean();
	});






	/**
	 * 
	 * This is Home page section
	 * 
	 * @ Expertise Section
	 * 
	 */

	add_shortcode('expertise_section', function($attr, $content){

		$expertiseAttributes = extract( shortcode_atts(array(
			'title'			=> 'Expertise',
			'subtitle'		=> 'This is what we love to do.',
			'bg_img'		=> '',

			//frist block
			'frist_back_icon'		=> 'icon-focus',
			'frist_front_icon'		=> 'icon-focus',
			'frist_title'					=> 'Branding',
			'frist_content'				=> 'Facilis doloribus illum quis, expedita mollitia voluptate non iure, perspiciatis repellat eveniet volup.',

			//second block
			'second_back_icon'		=> 'icon-layers',
			'second_front_icon'		=> 'icon-layers',
			'second_title'					=> 'Interactive',
			'second_content'				=> 'Facilis doloribus illum quis, expedita mollitia voluptate non iure, perspiciatis repellat eveniet volup.',

			//Third block
			'third_back_icon'		=> 'icon-mobile',
			'third_front_icon'		=> 'icon-mobile',
			'third_title'					=> 'Production',
			'third_content'				=> 'Facilis doloribus illum quis, expedita mollitia voluptate non iure, perspiciatis repellat eveniet volup.',

			//Forth block
			'forth_back_icon'		=> 'icon-focus',
			'forth_front_icon'		=> 'icon-focus',
			'forth_title'					=> 'Editing',
			'forth_content'				=> 'Facilis doloribus illum quis, expedita mollitia voluptate non iure, perspiciatis repellat eveniet volup.'
		),$attr));

		ob_start();
		?>

			<section class="p-0 b-0">
		      <div class="col-md-6 col-sm-4 img-side img-left mb-0">
		        <div class="img-holder"><img src="<?php echo $bg_img;?>" alt="" class="bg-img">
		          <div class="centrize">
		            <div class="v-center">
		              <div class="title txt-xs-center">
		                <h4 class="upper"><?php echo $subtitle;?></h4>
		                <h3><?php echo $title;?><span class="red-dot"></span></h3>
		                <hr>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
		      <div class="col-md-6 col-md-offset-6 col-sm-8 col-sm-offset-4">
		        <div class="row">
		          <div class="services">
		          	<!-- frist  -->
		            <div class="col-sm-6 border-bottom border-right">
		              <div class="service"><i class="<?php echo $frist_front_icon; ?>"></i><span class="back-icon"><i class="<?php echo $frist_back_icon; ?>"></i></span>
		                <h4><?php echo $frist_title;?></h4>
		                <hr>
		                <p class="alt-paragraph"><?php echo $frist_content;?></p>
		              </div>
		            </div>

		            <!-- second -->
		            <div class="col-sm-6 border-bottom">
		              <div class="service"><i class="<?php echo $second_front_icon; ?>"></i><span class="back-icon"><i class="<?php echo $second_back_icon; ?>"></i></span>
		                <h4><?php echo $second_title;?></h4>
		                <hr>
		                <p class="alt-paragraph"><?php echo $second_content;?></p>
		              </div>
		            </div>

		            <!-- third -->
		            <div class="col-sm-6 border-bottom border-right">           
		              <div class="service"><i class="<?php echo $third_front_icon; ?>"></i><span class="back-icon"><i class="<?php echo $third_back_icon; ?>"></i></span>
		                <h4><?php echo $third_title;?></h4>
		                <hr>
		                <p class="alt-paragraph"><?php echo $third_content;?></p>
		              </div>
		            </div>

		            <!-- forth -->
		            <div class="col-sm-6 border-bottom">           
		              <div class="service"><i class="<?php echo $forth_front_icon; ?>"></i><span class="back-icon"><i class="<?php echo $forth_back_icon; ?>"></i></span>
		                <h4><?php echo $forth_title;?></h4>
		                <hr>
		                <p class="alt-paragraph"><?php echo $forth_content;?></p>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
		    </section>


		<?php
		return ob_get_clean();
	});




	/**
	 * 
	 * This is Home page section
	 * 
	 * @ Vision Section
	 * 
	 */

	add_shortcode('vision_section', function($attr, $content){

		$visionAttributes = extract( shortcode_atts(array(
			'title'			=> 'The Vision',
			'subtitle'		=> 'Not just code.',
			'bg_img'		=> '',

			//frist block			
			'frist_title'					=> 'Branding',
			'frist_content'				=> 'Natus totam adipisci illum aut nihil consequuntur ut, ducimus alias iusto facili.',

			//second block			
			'second_title'					=> 'Interactive',
			'second_content'				=> 'Facilis doloribus illum quis, expedita mollitia voluptate non iure, perspiciatis repellat eveniet volup.',

			//Third block			
			'third_title'					=> 'Production',
			'third_content'				=> 'Facilis doloribus illum quis, expedita mollitia voluptate non iure, perspiciatis repellat eveniet volup.',

			//Forth block
			'forth_title'					=> 'Editing',
			'forth_content'				=> 'Facilis doloribus illum quis, expedita mollitia voluptate non iure, perspiciatis repellat eveniet volup.'
		),$attr));

		ob_start();
		?>

			<section>
		      <div class="col-md-6 col-sm-4 img-side img-right">
		        <div class="img-holder"><img src="<?php echo $bg_img;?>" alt="" class="bg-img"></div>
		      </div>
		      <div class="container">
		        <div class="col-md-5 col-sm-8">
		          <div class="title">
		            <h4 class="upper"><?php echo $subtitle;?></h4>
		            <h3><?php echo $title;?><span class="red-dot"></span></h3>
		            <hr>
		          </div>
		          <div class="col-md-6 col-sm-6">
		            <div class="row">
		              <div class="text-box">
		                <h4 class="upper small-heading"><?php echo $frist_title;?></h4>
		                <p><?php echo $frist_content;?></p>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-sm-6">
		            <div class="row">
		              <div class="text-box">
		                <h4 class="upper small-heading"><?php echo $second_title;?></h4>
		                <p><?php  echo $second_content;?></p>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-sm-6">
		            <div class="row">
		              <div class="text-box">
		                <h4 class="upper small-heading"><?php echo $third_title;?></h4>
		                <p><?php echo $third_content;?></p>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-sm-6">
		            <div class="row">
		              <div class="text-box">
		                <h4 class="upper small-heading"><?php echo $forth_title;?></h4>
		                <p><?php echo $forth_content;?></p>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
		    </section>


		<?php
		return ob_get_clean();
	});






	/**
	 * 
	 * This is Home page section
	 * 
	 * @ Protfolio Section
	 * 
	 */

	add_shortcode('protfolio_section', function($attr, $content){

		$visionAttributes = extract( shortcode_atts(array(
			'title'			=> 'Selected Works',
			'posts_per_count'	=> 8
		),$attr));

		ob_start();
		?>

			<section id="portfolio" class="pb-0">
		      <div class="container">
		        <div class="col-md-6">
		          <div class="title m-0 txt-xs-center txt-sm-center">
		            <h2 class="upper"><?php echo $title;?><span class="red-dot"></span></h2>
		            <hr>
		          </div>
		        </div>
		        <div class="col-md-6">
		          <ul id="filters" class="no-fix mt-25">

		            <li data-filter="*" class="active">All</li>
		          	<?php 
		          		$types = get_terms('commet-protfolio-type');

		          		foreach($types as $type):
		          	?>
		            <li data-filter=".<?php echo $type->slug;?>"><?php echo $type->name;?></li>
		            <?php
		            	endforeach;
		            ?>
		          </ul>
		        </div>
		      </div>
		      <div class="section-content pb-0">     
		        <div id="works" class="four-col wide mt-50">
		          
		          <?php 
		          	$commet_portfolio = new WP_Query(array(
		          		'post_type'	=> 'protfolio',
		          		'posts_per_page' => $posts_per_count
		          	));

		          	while($commet_portfolio -> have_posts()): $commet_portfolio -> the_post();?>
			          	<div class="work-item 

			          		<?php
	                  			$types = get_the_terms(get_the_id(),'commet-protfolio-type');

	                  			foreach($types as $type) {
	                  				echo $type->slug. " ";
	                  			}		                      			
		                    ?>

			          	">
			            <div class="work-detail"><a href="<?php echo the_permalink();?>"><?php echo the_post_thumbnail();?>
			                <div class="work-info">
			                  <div class="centrize">
			                    <div class="v-center">
			                      <h3><?php echo the_title();?></h3>
			                      <p>			                      	
		                      		<?php

		                      			$types = get_the_terms(get_the_id(),'commet-protfolio-type');
		                      		
		                      			$num_of_items = count($types);
		                      			$num_count = 0;

		                      			foreach($types as $type) {
		                      				echo $type->name;

		                      				$num_count = $num_count + 1;
											   if ($num_count < $num_of_items) {
											     echo ", ";
											}
		                      			}                    			

		                      		?>
			                      </p>
			                    </div>
			                  </div>
			                </div></a></div>
			          </div>
			        <?php endwhile;?>

		        </div>
		      </div>
		    </section>


		<?php
		return ob_get_clean();
	});








	/**
	 * 
	 * This is Home page section
	 * 
	 * @ Our Client Section
	 * 
	 */

	add_shortcode('client_section', function($attr, $content){

		$visionAttributes = extract( shortcode_atts(array(
			'title'				=> 'Our Client',
			'subtitle'			=> 'SOME OF THE BEST.',
			'posts_per_count'	=> 6
		),$attr));

		ob_start();
		?>

			<section id="client-section">
		      <div class="container">
		        <div class="title center">
		          <h4 class="upper"><?php echo $subtitle;?></h4>
		          <h3><?php echo $title;?><span class="red-dot"></span></h3>
		          <hr>
		        </div>
		        <div class="section-content">
		          <div class="boxes clients">
		            <?php

		            	$client = new WP_Query(array(
		            		'post_type'	=> 'client',
		            		'posts_per_page' => $posts_per_count
		            	));

		            	while($client->have_posts()): $client->the_post();

		            ?>

		            <div class="col-sm-4 col-xs-6 border-right border-bottom ">

		            	<?php echo the_post_thumbnail('full',array(
		            		'class'		=> ' client-image ',
		            		'data-animated' => 'true'
		            	));?>

		            </div>	

		            <?php
		            	endwhile;
		            ?>
		          </div>
		        </div>
		      </div>
		    </section>


		<?php
		return ob_get_clean();
	});






	/**
	 * 
	 * This is Home page section
	 * 
	 * @ Our Client Section
	 * 
	 */

	add_shortcode('testimonials_section', function($attr, $content){

		$visionAttributes = extract( shortcode_atts(array(
			'title'				=> 'What They Say',
			'posts_per_count'	=> 4
		),$attr));

		ob_start();
		?>

			<?php 

				$testimonials = new WP_Query(array(
					'posts_per_page'	=> $posts_per_count,
					'post_type'			=> 'testimonials',
					'bg_img'			=> 'http://localhost/class56/wp-content/themes/commet/images/bg/10.jpg'
				));
			?>

			<section class="parallax">
		      <div data-parallax="scroll" data-image-src="<?php echo $bg_img;?>" class="parallax-bg"></div>
		      <div class="parallax-overlay pb-50 pt-50">
		        <div class="container">
		          <div class="title center">
		            <h3><?php echo $title;?><span class="red-dot"></span></h3>
		            <hr>
		          </div>
		          <div class="section-content">
		            <div id="testimonials-slider" data-options="{&quot;animation&quot;: &quot;slide&quot;, &quot;controlNav&quot;: true}" class="flexslider nav-outside">
		              <ul class="slides">
		                <?php 
		                	while($testimonials->have_posts()): $testimonials->the_post();
		                ?>
		                <li>
		                  <blockquote>
		                    <?php echo the_content();?>
		                    <footer><?php echo the_title();?></footer>
		                  </blockquote>
		                </li>
	                	<?php
		    				endwhile;
		    			?>
		                
		              </ul>
		            </div>
		          </div>
		        </div>
		      </div>
		    </section>
		   

		<?php
		return ob_get_clean();
	});







	/**
	 * 
	 * This is Home page section
	 * 
	 * @ Our Blog Section
	 * 
	 */

	add_shortcode('blog_section', function($attr, $content){

		$visionAttributes = extract( shortcode_atts(array(
			'title'				=> 'The Blog',
			'subtitle'			=> 'we have a few tips for you',
			'posts_per_count'	=> 2,
			'blog_link'			=> 'http://localhost/class56/blog/'
		),$attr));

		ob_start();
		?>

			 <section>
		      <div class="container">
		        <div class="title center">
		          <h4 class="upper"><?php echo $subtitle;?></h4>
		          <h2><?php echo $title;?><span class="red-dot"></span></h2>
		          <hr>
		        </div>
		        <div class="section-content">
		          <div class="col-md-8 col-md-offset-2">
		            
		          	<?php

		          		$posts = new WP_Query(array(
		          			'posts_per_page'	=> $posts_per_count,
		          			'post_type'			=> 'post'
		          		));

		          		while($posts->have_posts()): $posts->the_post();
		          	?>

		            <div class="blog-post">
		              <div class="post-body">
		                <h3 class="serif"><a href="<?php the_permalink();?>"><?php echo the_title();?></a></h3>
		                <hr>
		                <p class="serif"><?php echo wp_trim_words(get_the_content(), 30, '[...]')?> </p>
		                <div class="post-info upper"><a href="<?php  the_permalink();?>">Read More</a><span class="pull-right black-text"><?php the_time('d F Y');?></span></div>
		              </div>
		            </div>
		            
		            <?php
		            	endwhile;
		            ?>
		          </div>
		          <div class="clearfix"></div>
		          <div class="mt-25">
		            <p class="text-center"><a href="<?php echo $blog_link;?>" class="btn btn-color-out">View Full Blog</a></p>
		          </div>
		        </div>
		      </div>
		    </section>
		   

		<?php
		return ob_get_clean();
	});


