<?php get_header();?>
    <section class="page-title parallax">
      <div data-parallax="scroll" data-image-src="<?php global $commet_options;  echo $commet_options['blog-bg-image']['url'];?>" class="parallax-bg"></div>
      <div class="parallax-overlay">
        <div class="centrize">
          <div class="v-center">
            <div class="container">
              <div class="title center">
                <!-- blog page title -->
                <h1 class="upper">
                  <?php  echo $commet_options['blog-title'];?>
                  <span class="red-dot"></span>
                </h1>
                <h4>
                  <?php $commet_options; echo $commet_options['blog-subtitle'];?>
                </h4>
                <hr>
                <!-- blog page title end  -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="col-md-8">
          <div class="blog-posts">
            <!-- dyanmic post  -->
              <?php while(have_posts()): the_post();?>
                <?php get_template_part('post-format/content', get_post_format());?>
              <?php endwhile;?>
            <!-- dyanmic post end -->
          </div>

          <!-- pagination -->
            <?php
              
              the_posts_pagination([
                'mid_size'          => 1,
                'prev_next'         => true,
                'prev_text'         => __('<span aria-hidden="true"><i class="ti-arrow-left"></i></span>','commet'),
                'next_text'         => __('<span aria-hidden="true"><i class="ti-arrow-right"></i></span>', 'commet'),
                'screen_reader_text' => __(' ','commet'),
                'type'              => 'list',
                'end_size'          => 1,
                'mid_size'          => 2

              ]);



            ?>
          <!-- pagination end -->
        </div>
        <!-- sidebar start -->
          <?php get_sidebar();?>
        <!-- sidebar end -->
      </div>
    </section>
<?php get_footer();?>
