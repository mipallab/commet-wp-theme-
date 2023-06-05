<?php get_header();?>
    <section class="page-title parallax">
      <div data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri();?>/images/bg/18.jpg" class="parallax-bg"></div>
      <div class="parallax-overlay">
        <div class="centrize">
          <div class="v-center">
            <div class="container">
              <div class="title center">
                <h1 class="upper">This is our blog<span class="red-dot"></span></h1>
                <h4>We have a few tips for you.</h4>
                <hr>
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
        <div class="col-md-3 col-md-offset-1">
          <div class="sidebar hidden-sm hidden-xs">
            <!-- sidebar start -->
            <?php dynamic_sidebar('right_sidebar');?>
            <!-- sidebar end -->
          </div>
        </div>
      </div>
    </section>
<?php get_footer();?>
