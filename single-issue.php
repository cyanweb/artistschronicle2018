<?php
/**
 * The template for displaying a single issue
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<!-- issue <?php echo $issue;?> -->
<div id="slider-wrap"><img src="<?php bloginfo('template_directory'); ?>/images/header-home.jpg" width="auto" height="auto"></div>

<div id="content-wrap">

    <div id="content-lft">
    
    <div id="content-body">
       
      
      <?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the single post content template.
			get_template_part( 'template-parts/content', 'single' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			if ( is_singular( 'attachment' ) ) {
				// Parent post navigation.
				the_post_navigation( array(
					'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'twentysixteen' ),
				) );
			} elseif ( is_singular( 'post' ) ) {
				// Previous/next post navigation.
				the_post_navigation( array(
					'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentysixteen' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Next post:', 'twentysixteen' ) . '</span> ' .
						'<span class="post-title">%title</span>',
					'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentysixteen' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Previous post:', 'twentysixteen' ) . '</span> ' .
						'<span class="post-title">%title</span>',
				) );
			}

			// End of the loop.
		endwhile;
		?>
        
        </div>
      <!-- /content-body-->
        
         <!-- subscribe section-->
      <div id="subscribe-wrap">
      
      <div id="subscribe-inner">
         <h2>SUBSCRIBE TO THE ARTISTS CHRONICLE AND GET EVERY ISSUE DELIVERED + ACCESS TO EVERY ONLINE ARTICLE, FEATURE & PDF DOWNLOAD</span></h2>
         
         <div id="subscribe-callout">
          <h3>$30/yr online only or $33/yr print + online subscription</h3>
         <div class="today"><a href="#">SUBSCRIBE TODAY</a></div>
      </div> 
        
      </div> 
      
    
      </div>
      <!-- /subscribe section-->
 
    </div>
    <!-- /content-lft -->
    
<?php get_sidebar( 'body' ); ?> 
<?php get_footer(); ?>


