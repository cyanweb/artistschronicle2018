<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

$currentissue = get_field('home_edition', 'option');
$currentissue = $currentissue->name;

// get current published edition number
  if (is_front_page()) {
      $issue = $currentissue;
  } else {
      $post = $wp_query->post;
      $postid = $post->ID;
      if (get_post_type($postid) == 'issues' && !is_front_page()) {
          $issue = get_the_title($postid);
      }
  }

  if(isset($issue)) {
      // get edition month year
      $monthtext = get_issue_month_text($issue);
      // $cover = get_field('cover_image', $postid)
  }

  $GLOBALS['issue'] = $issue;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>

    <meta name="viewport" content="width=device-width,minimum-scale=1">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/jquery.sidr/2.2.1/stylesheets/jquery.sidr.dark.min.css">
     
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="container-header">
	<div id="pagewrap">
    
    <div class="header-box-lft">
			<div class="site-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php bloginfo('template_directory'); ?>/images/logo-artists-chronicle.png" alt="Artists Chronicle" title="Artists Chronicle" ></a></div>
    </div>
           
			
	 <div class="header-box-rt">
	  
       <div class="issue-no-box"><h2>ISSUE NO <?php if (isset($issue)) { echo $issue; }?></h2>
<?php if (isset($monthtext)) { echo $monthtext; }?></div>
      
      <div class="social-box"><a id="social-icon" href="#" title="facebook" class="face">facebook</a> <a id="social-icon" href="#" title="Instagram" class="instagram">Instagram</a></div>
      
       <div class="nav-box">
       <div class="nav-box-sm">
      <a id="simple-menu" href="#sidr-right"></a>
     </div>
       <nav id="nav-wrap">
       <?php
			wp_nav_menu( array(
			   'theme_location' => 'primary',
			   'container' => 'div',// wraps menu in <div> tags
		       'menu_id' => 'nav',//change ul id
			   'menu_class' => ''//ul class name
			) );
		 ?>
       
       </nav><!--//-->
     </div> 
            
      

	</div>
    
    </div>
	
</div>
<!-- /#container-header -->


 
<div id="container-body">

<div id="pagewrap"> 
