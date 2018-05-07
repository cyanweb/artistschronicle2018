<?php
/**
 * The template for the content bottom widget areas on posts and pages
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?>
<?php if ( is_active_sidebar( 'sidebar-2' )  ) : ?>
	<aside id="sidebar">
		<?php dynamic_sidebar( 'sidebar-2' ); ?>
	</aside>
	<!-- /#sidebar -->
<?php endif; ?>
