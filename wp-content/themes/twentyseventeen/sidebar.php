<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<p style="font-weight: bold;" ><?php echo 'Total Test Done:' . wp_count_posts()->publish; ?></p>
	
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	
</aside><!-- #secondary -->
