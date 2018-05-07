<?php
/**
 * The template for displaying 404 pages (not found)
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
       
      
     <section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentysixteen' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentysixteen' ); ?></p>

					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->
        
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

