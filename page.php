<?php get_header();?>



	<?php

		$page_id = get_queried_object_id();

		$title = get_post_meta($page_id, "_title", true);
		$subtitle = get_post_meta($page_id, "_subtitle", true);
		$image = get_post_meta($page_id, "_bg-image", true);

	?>





	<section class="page-title parallax">
      <div data-parallax="scroll" data-image-src="<?php echo $image; ?>" class="parallax-bg"></div>
      <div class="parallax-overlay">
        <div class="centrize">
          <div class="v-center">
            <div class="container">
              <div class="title center">
                <!-- blog page title -->
                <h1 class="upper">
                  <?php wp_title(''); ?><span class="red-dot"></span>
                </h1>
                <h4>
                  <?php
                  	if (!empty($subtitle)) {
					    echo  esc_html($subtitle) ;
					}
                  ?>
                </h4>
                <hr>
                <!-- blog page title end  -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


	<?php while(have_posts()): the_post();?>
		<?php the_content();?>
	<?php endwhile;?>







<?php get_footer();?>
