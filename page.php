<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
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
       
      
      <?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'page' );

			
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

