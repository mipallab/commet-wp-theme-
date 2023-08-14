<?php 

/* Template Name: Commet Protfolio */

get_header()?>
	
	<div class="text-center" style="padding:100px 0">

          <?php
	          $current_page =  max(1, get_query_var('paged'));
	          $commetProtfolio = new WP_Query(array(
	          	'post_type'	=> 'protfolio',
	          	'posts_per_page'	=> 1,
	          	'paged'	=> $current_page
	          ));
	          	while( $commetProtfolio-> have_posts()): $commetProtfolio-> the_post();
          ?>

       	<h4>pagination_links type "custom"</h4>

          	<h2><?php echo the_title();?></h2>
          		<?php the_post_thumbnail('medium');?>
          	

          <?php
          	endwhile;
          ?>

          <?php
          /**
           * 
           * 
           * @ type="custom" 
           * 
           * Custom Post pagiantion 
           * 
           **/
				function custom_pagination($args) {
				    // Extract the current and total page numbers from the arguments.
				    $current_page = $args['current'];
				    $total_pages = $args['total'];

				    // Set default values for 'mid_size' and 'end_size'.
				    $mid_size = isset($args['mid_size']) ? $args['mid_size'] : 2;
				    $end_size = isset($args['end_size']) ? $args['end_size'] : 1;

				    // Define the custom HTML structure for the pagination links.
				    $output = '<ul class="pagination">';

				    // Previous link.
				    if ($args['prev_next'] && $current_page > 1) {
				        $prev_page = $current_page - 1;
				        $output .= '<li><a href="' . esc_url(get_pagenum_link($prev_page)) . '">' . $args['prev_text'] . '</a></li>';
				    }

				     // Individual page numbers.
					    for ($i = 1; $i <= $total_pages; $i++) {
					        // Show page numbers in the range of current page +/- 'mid_size'.
					        if (abs($i - $current_page) <= $mid_size || $i <= $end_size || $i > $total_pages - $end_size) {
					            if ($i === $current_page) {
					                $output .= '<li> <span class="current">' . $args['before_page_number'] . $i . $args['after_page_number'] . '</span></li>';
					            } else {
					                $output .= '<li><a href="' . esc_url(get_pagenum_link($i)) . '">' . $args['before_page_number'] . $i . $args['after_page_number'] . '</a></li>';
					            }
					        } elseif (abs($i - $current_page) === $mid_size + 1 && $i > $mid_size + $end_size + 1) {
					            // If the gap between page numbers is greater than 'mid_size', show ellipsis (...).
					            $output .= '<span class="page-numbers dots">...</span>';
					        }
					    }

				    // Next link.
				    if ($args['prev_next'] && $current_page < $total_pages) {
				        $next_page = $current_page + 1;
				        $output .= '<li><a href=" aria-label="Next"' . esc_url(get_pagenum_link($next_page)) . '">' . $args['next_text'] . '</a></li>';
				    }

				    $output .= '</ul>';

				    return $output;
				}

				// Usage example:
				$args = array(

				    'current'      => $current_page,
				    'total'        => $commetProtfolio->max_num_pages,
				    'prev_next'    => true,
				    'prev_text'    => __('<span aria-hidden="true"><i class="ti-arrow-left"></i></span>','commet'),
				    'next_text'    => __('<span aria-hidden="true"><i class="ti-arrow-right"></i></span>','commet'),
				    'mid_size'     => 2,
				    'end_size'     => 1,
				    'type'         => 'custom', // Set the type to custom.
				    'before_page_number'	=> '<span class="page-number">',
				    'after_page_number'		=> '</span>'
				);

				// Generate the custom pagination output using the custom_pagination_output function.
				echo custom_pagination($args);

          ?>
		<hr>
       <div class="pagination">
       	<h4>pagination_links type "list"</h4>
		<?php 

			/**
			 * 
			 * 
			 * type "list"
			 */		     

			echo paginate_links(array(
				'current'		=> $current_page,
				'total'			=> $commetProtfolio->max_num_pages,
				'prev_next'		=> true,
				'prev_text'		=> __('<span aria-hidden="true"><i class="ti-arrow-left"></i></span>','commet'),
				'next_text'		=> __('<span aria-hidden="true"><i class="ti-arrow-right"></i></span>','commet'),
				'mid_size'		=> 2,
				'end_size'		=> 1,
				'type' 			=> 'list'

			));

		?>
		</div>
	</div>


<?php get_footer(); ?>