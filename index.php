<?php get_header();?>
    <section class="page-title parallax">
      <div data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri();?>/images/bg/18.jpg" class="parallax-bg"></div>
      <div class="parallax-overlay">
        <div class="centrize">
          <div class="v-center">
            <div class="container">
              <div class="title center">
                <!-- blog page title -->
                <h1 class="upper">
                  <?php global $commet_options; echo $commet_options['blog-title'];?>
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
                'screen_reader_text' => __(' ','commet')
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
