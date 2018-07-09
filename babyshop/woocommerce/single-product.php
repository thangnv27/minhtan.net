<?php
/**
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		Lindo
 * @version     6.8.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>
<?php if(!wp_is_mobile()): ?>
<div class="header_menu_bottom">
    <div class="container">
    <div class="lindo_row">
          <div class="lindo-width-20" style="padding-right:0">
          <h2 class="nav_lindo"><i class="fa fa-bars" aria-hidden="true"></i> DANH MỤC SẢN PHẨM</h2>
          </div>
           <div class="lindo-width-80" style="padding-left:0">
           <?php  if(function_exists('wp_nav_menu')) {
                wp_nav_menu( 'theme_location=menu_main&menu_id=menu_main');
                }   ?>
           </div>
    </div>
    </div>
</div>
<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('lindo-mega-menu')) : else : endif; ?>
<?php  endif; ?>
<div class="background_list_product">
<div class="container">
	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>
    </div>
    </div>
<?php get_footer( 'shop' ); ?>
