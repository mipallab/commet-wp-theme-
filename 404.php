<?php

	get_header();

?>


		<section id="error-404" class="parallax">
	      <div data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri();?>/images/bg/13.jpg" class="parallax-bg"></div>
	      <div class="parallax-overlay">
	        <div class="centrize">
	          <div class="v-center">
	            <div class="container">
	              <div class="error-page"><i class="icon-sad"></i>
	                <div class="title">
	                  <h2 class="mb-25 upper">Error 404<span class="red-dot"></span></h2>
	                  <h4 class="upper">The requested page was not found on this server. That’s all we know.              </h4>
	                </div>
	                <div class="inline-form center mb-50" style="display: flex;justify-items: center;justify-content: center;">
	                  <div class="input-group">

	                  	<form action="<?php echo home_url();?>" method="GET">
	                  		<span class="input-group-btn text-center">
								  <input type="text" placeholder="Search.." class="form-control">
								  <button type="submit" class="btn btn-light"><span><i class="ti-search"></i>
							  </span>
						</form>
	                  </div>
	                </div><a href="<?php echo home_url();?>" class="btn btn-color">Back to the home</a>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </section>




<?php
	get_footer();
?>