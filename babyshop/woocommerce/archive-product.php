<?php
/**
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		Lindo
 * @version     6.8.0
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

get_header('shop');
?>

<?php
if (!defined('ABSPATH'))
    exit; // Exit if accessed directly
get_header('shop');
?>
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
<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('lindo-mega-menu')) : else : ?>
<?php  endif; ?>
<div class="background_main" role="main">
    <div class="container">
        <div class="content-top row">
            <div class="col-xs-12 col-sm-3 col-md-3">
                <?php
                do_action('woocommerce_sidebar');
                ?>
            </div><!--end .sidebar-home-->

            <div class="cate-all-child col-xs-12  col-sm-9 col-md-9">
                <div class="cont-cate-all">
                    <?php
                    /**
                     * woocommerce_before_main_content hook.
                     *
                     * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
                     * @hooked woocommerce_breadcrumb - 20
                     */
                    do_action('woocommerce_before_main_content');
                    ?>

<?php if (apply_filters('woocommerce_show_page_title', true)) : ?>

                        <h1 class="page-title"><?php woocommerce_page_title(); ?></h1>

                        <?php endif; ?>

                    <div class="woocommerce_archive_description">
                        <?php
                        /**
                         * woocommerce_archive_description hook.
                         *
                         * @hooked woocommerce_taxonomy_archive_description - 10
                         * @hooked woocommerce_product_archive_description - 10
                         */
                        do_action('woocommerce_archive_description');
                        ?>
                    </div>
                    <?php if (have_posts()) : ?>

                        <?php
                        /**
                         * woocommerce_before_shop_loop hook.
                         *
                         * @hooked woocommerce_result_count - 20
                         * @hooked woocommerce_catalog_ordering - 30
                         */
                        do_action('woocommerce_before_shop_loop');
                        ?>

                        <?php woocommerce_product_loop_start(); ?>

                            <?php woocommerce_product_subcategories(); ?>
                        <div class="row">
                            <?php while (have_posts()) : the_post(); ?>

                                <?php wc_get_template_part('content', 'product'); ?>

                        <?php endwhile; // end of the loop. ?>
                        </div>
                        <?php woocommerce_product_loop_end(); ?>

                        <?php
                        /**
                         * woocommerce_after_shop_loop hook.
                         *
                         * @hooked woocommerce_pagination - 10
                         */
                        do_action('woocommerce_after_shop_loop');
                        ?>

                    <?php elseif (!woocommerce_product_subcategories(array('before' => woocommerce_product_loop_start(false), 'after' => woocommerce_product_loop_end(false)))) : ?>

                        <?php wc_get_template('loop/no-products-found.php'); ?>

                    <?php endif; ?>

                    <?php
                    /**
                     * woocommerce_after_main_content hook.
                     *
                     * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
                     */
                    do_action('woocommerce_after_main_content');
                    ?>


                </div><!--end .cont-cate-all-->
            </div><!--end .cate-all-child-->
        </div><!--end .content-top-->
    </div>
</div>

<?php get_footer('shop'); ?>

