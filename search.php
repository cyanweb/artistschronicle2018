<?php
/**
 * The template for displaying search results pages
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<div id="slider-wrap"><img src="<?php bloginfo('template_directory'); ?>/images/header-home.jpg" width="auto" height="auto"></div>

<div id="content-wrap">

    <div id="content-lft">
    
    <div id="content-body">
       
      
      <?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentysixteen' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentysixteen' ),
				'next_text'          => __( 'Next page', 'twentysixteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
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

