<?php
/**
 * Template Name: Home Page Template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header();

?>
<!-- page-front -->
<?php
// get issueid from GLOBALS
$issueid = $GLOBALS['issue'];

// get cover image
$coverimage = get_issue_cover_image($issueid);
$size = 'full';
if($coverimage) {
    $coverimageurl = wp_get_attachment_image($coverimage,$size);
}

$covercaption = get_cover_caption($issueid);

// get issue image
$issueimage = get_issue_image($issueid);
$size = 'full';
if($issueimage) {
    $issueimageurl = wp_get_attachment_image($issueimage,$size);
}

// get issue editorial title


?>
<div id="slider-wrap"><?php if($coverimageurl) {echo $coverimageurl;}?>
<div class="covercaption"><?php if($covercaption){echo $covercaption;}?></div>
</div>

<div id="content-wrap">

    <div id="content-lft">

       <!-- editorial section-->
      <div id="editorial-wrap">
            
      <div id="cont-issue-title">
         <h2>IN THIS ISSUE</h2>
        <?php
        // if user has membership that allows download - show download link
        if ( check_subscription()) {
            $edition_pdf_link = get_pdf_download_link($issueid);?>
         <div class="download"><a href="<?php echo $edition_pdf_link['url']; ?>" target="_blank">#<?php echo $issueid;?> PDF Download</a></div>
        <?php } else { ?>
          <div class="download"><a href="<?php echo get_field('subscription_page','option');?>">Subscribe for PDF</a></div>
        <?php } ?>
     </div> 
      
         
    <!-- editorial listing-->
    <div id="editorial-list">
       <div id="editorial-list-lft"><?php if($issueimageurl){echo $issueimageurl;}?></div>
      
       <div id="editorial-list-rt">
          <?php
          // get editorial title and content as $editorial_title and $editorial_content based on the current issue

          ?>
           <h3>EDITORIAL</h3>
           <p>This edition, we feature a survey of the work of NSW artists Joyce Hinterding and David Haines, on show at the Perth Institute of Contemporary Arts. Radio waves, solar winds and aroma molecules are the medium of choice for the two, who encourage visitors to the exhibition to reimagine the world around us as buzzing with invisible energy.</p>
            <p>Using unlikely antennas such as graphite drawings, viewers can listen to this invisible energy and add their own by touching the drawings. Both solo and collaborative works in Energies: Haines & Hinterding reveal a passion for science in the two artists’ aesthetically-driven work...</p>

             <div class="full"><a href="#">click to read full editorial</a></div>
       </div> 
   

       </div> 
      <!-- /editorial listing-->
      
      
        <!-- editorial listing-->
      <div id="editorial-list">
    
      <div id="editorial-list-lft"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/sidebar-video1.png" alt="#" title="#"></a></div>
      
       <div id="editorial-list-rt">
       
       <h4><a href="#">Frank Norton: Painter and Collector at Fremantle Arts Centre </a></h4>
      
       
       <p>This is a short excerpt descption of this article.  You can control this text via the excerpt field on this articles edit page.</p>


       </div> 
   

       </div> 
      <!-- /editorial listing-->
      
      
        <!-- editorial listing-->
      <div id="editorial-list">
    
      <div id="editorial-list-lft"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/sidebar-video1.png" alt="#" title="#"></a></div>
      
       <div id="editorial-list-rt">
       
       <h4><a href="#">40 Years of Fremantle Press<img src="<?php bloginfo('template_directory'); ?>/images/icon-lock.png" alt="#" title="#"></a></h4>
      
       
       <p>This is a short excerpt descption of this article.  You can control this text via the excerpt field on this articles edit page.</p>


       </div> 
   

       </div> 
      <!-- /editorial listing-->
      
      
        <!-- editorial listing-->
      <div id="editorial-list">
    
      <div id="editorial-list-lft"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/sidebar-video1.png" alt="#" title="#"></a></div>
      
       <div id="editorial-list-rt">
       
       <h4><a href="#">Art & food: Fothergills, Fremantle<img src="<?php bloginfo('template_directory'); ?>/images/icon-lock.png" alt="#" title="#"></a></h4>
      
       
       <p>This is a short excerpt descption of this article.  You can control this text via the excerpt field on this articles edit page.</p>


       </div> 
   

       </div> 
      <!-- /editorial listing-->
      
       
      </div>
      <!-- /editorial section-->
      
      
       <!-- more section-->
      <div id="more-wrap">
      
      <div id="more-title">
         <h2>MORE INSIDE <span>PDF & PRINT COPY ONLY</span></h2>
      </div> 
      
       
       <!-- more listing-->
      <div id="more-list">
    
       <h3><a href="#">Book Review:</a></h3>
       <p>Art and The Eightfold Path</p>

       </div> 
      <!-- /more listing-->
      
      <!-- more listing-->
      <div id="more-list">
    
       <h3><a href="#">Bulletin:</a></h3>
       <p>who, what and where</p>

       </div> 
      <!-- /more listing-->
      
      <!-- more listing-->
      <div id="more-list">
    
       <h3><a href="#">Featured Exhibition:</a></h3>
       <p>Ian R. Hill @ Gomboc Gallery</p>

       </div> 
      <!-- /more listing-->
      
      <!-- more listing-->
      <div id="more-list">
    
       <h3><a href="#">Business Directory:</a></h3>
       <p>art supplies and other services</p>

       </div> 
      <!-- /more listing-->
  
      </div>
      <!-- /more section-->
      
      
      
     
      
         <!-- archive section-->
      <div id="archive-wrap">
      
      <div id="archive-title">
          <h2>EDITION ARCHIVES</h2>
         <div class="all"><a href="#">view all</a></div>
      </div> 
      
      <!-- archive listing-->
      <div id="archive-list">
    
      <div id="archive-list-lft"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/issue-cover.jpg" alt="#" title="#"></a></div>
      
       <div id="archive-list-rt">
       
       <h3><a href="#">May / June 2017</a></h3>
      
        <p>This edition, we feature a survey of the work of NSW artists Joyce Hinterding and David Haines</p>

<p>Using unlikely antennas such as graphite drawings, viewers can listen.</p>

       </div> 
   

       </div> 
      <!-- /archive listing-->
      
      
            <!-- archive listing-->
      <div id="archive-list">
    
      <div id="archive-list-lft"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/issue-cover.jpg" alt="#" title="#"></a></div>
      
       <div id="archive-list-rt">
       
       <h3><a href="#">May / June 2017</a></h3>
      
       
        <p>This edition, we feature a survey of the work of NSW artists Joyce Hinterding and David Haines</p>

<p>Using unlikely antennas such as graphite drawings, viewers can listen.</p>

       </div> 
   

       </div> 
      <!-- /archive listing-->
      
      
       <!-- archive listing-->
      <div id="archive-list">
    
      <div id="archive-list-lft"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/issue-cover.jpg" alt="#" title="#"></a></div>
      
       <div id="archive-list-rt">
       
       <h3><a href="#">May / June 2017</a></h3>
      
       
       <p>This edition, we feature a survey of the work of NSW artists Joyce Hinterding and David Haines</p>

<p>Using unlikely antennas such as graphite drawings, viewers can listen.</p>

       </div> 
   

       </div> 
      <!-- /archive listing-->
      
       <!-- archive listing-->
      <div id="archive-list">
    
      <div id="archive-list-lft"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/issue-cover.jpg" alt="#" title="#"></a></div>
      
       <div id="archive-list-rt">
       
       <h3><a href="#">May / June 2017</a></h3>
      
       
       <p>This edition, we feature a survey of the work of NSW artists Joyce Hinterding and David Haines</p>

<p>Using unlikely antennas such as graphite drawings, viewers can listen.</p>

       </div> 
   

       </div> 
      <!-- /archive listing-->
      
       <!-- archive listing-->
      <div id="archive-list">
    
      <div id="archive-list-lft"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/issue-cover.jpg" alt="#" title="#"></a></div>
      
       <div id="archive-list-rt">
       
       <h3><a href="#">May / June 2017</a></h3>
      
       
       <p>This edition, we feature a survey of the work of NSW artists Joyce Hinterding and David Haines</p>

<p>Using unlikely antennas such as graphite drawings, viewers can listen.</p>

       </div> 
   

       </div> 
      <!-- /archive listing-->
      
       <!-- archive listing-->
      <div id="archive-list">
    
      <div id="archive-list-lft"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/issue-cover.jpg" alt="#" title="#"></a></div>
      
       <div id="archive-list-rt">
       
       <h3><a href="#">May / June 2017</a></h3>
      
       
       <p>This edition, we feature a survey of the work of NSW artists Joyce Hinterding and David Haines</p>

<p>Using unlikely antennas such as graphite drawings, viewers can listen.</p>

       </div> 
   

       </div> 
      <!-- /archive listing-->
      
      
     
      </div>
      <!-- /archive section-->
      
      
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

<?php get_sidebar(); ?>
<?php get_footer(); ?>

