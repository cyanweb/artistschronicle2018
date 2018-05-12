<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

     </div>
     <!-- /#content-wrap -->
                
     </div> 
    <!-- /#pagewrap -->      
       
</div>
<!-- /#container-body -->


 
     
<div id="container-footer">	
  
  <div id="pagewrap">
	<footer id="footer">
    
    <div id="footer-top">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php bloginfo('template_directory'); ?>/images/logo-artists-chronicle.png" alt="Artists Chronicle" title="Artists Chronicle" width="144"></a>
            
        </div> 
	
    <div class="footer-bott">&copy; <?php echo date('Y'); ?> ARTIST’S CHRONICLE  
         <?php
			wp_nav_menu( array(
			   'theme_location' => 'footermenu',
			   'container' => '',// wraps menu in <div> tags
			   'menu_id' => '',//change ul id
			   'menu_class' => ''//ul class name
		      ) );
		 ?>
        site by : <a href="http://www.cyanweb.com.au/" target="_blank">CYANWEB</a></div>
	
	
		
	</footer>
	<!-- /#footer -->
   </div>
<!-- /#pagewrap -->
	
</div>

<?php wp_footer(); ?>

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://www.mysitepreview.com.au/artistschronicle/wp-content/themes/artistschronicle2018/js/readmore.js"></script>
<!-- Read More -->
<script type='text/javascript'>//<![CDATA[
    $(document).ready(function(){
        $('.dolessmore').dolessmore();
    });
</script>


</body>
</html>