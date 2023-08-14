<?php get_header();?>


    <section class="page-title parallax">
      <div data-parallax="scroll" data-image-src="<?php global $commet_options;  echo $commet_options['shop-bg-image']['url'];?>" class="parallax-bg"></div>
      <div class="parallax-overlay">
        <div class="centrize">
          <div class="v-center">
            <div class="container">
              <div class="title center">
                <!-- shop page title -->
                <h1 class="upper"><?php  echo $commet_options['shop-title'];?><span class="red-dot"></span>
                </h1>
                <h4><?php $commet_options; echo $commet_options['shop-subtitle'];?></h4>
                <hr>
                <!-- shop page title end  -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    


	<?php woocommerce_content();?>







<?php get_footer();?>
