<?php

/* Add style theme */
require_once ('admin/index.php');

if (!function_exists('of_get_option')) {

    function of_get_option($name, $default = false) {
        $optionsframework_settings = get_option('optionsframework');
        // Gets the unique option id
        $option_name = $optionsframework_settings['id'];
        if (get_option($option_name)) {
            $options = get_option($option_name);
        }
        if (isset($options[$name])) {
            return $options[$name];
        } else {
            return $default;
        }
    }

}
require("inc/functions/widget_products_style_one.php");
require("inc/lindo-nav/lindo-nav.php");
require("inc/woo-cart.php");
// Enable featured image
add_theme_support('post-thumbnails');

// Add 	Sidebar
if (function_exists('register_sidebar')) {

    register_sidebar(array(
        'name' => __('Mega Menu Pro'),
        'id' => 'lindo-mega-menu',
        'description' => __('Lựa chọn mega menu cho website', 'beweb'),
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="title-megamenu">',
        'after_title' => '</h3>',
    ));

    $a = $_SERVER['SERVER_NAME'];
    if ($a == 'minhtan.net') {
        register_sidebar(array(
            'name' => __('Product Home Pro'),
            'id' => 'lindo-product-categories',
            'description' => __('Hiển thị sản phẩm ngoài trang chủ | * Lưu ý  : Chỉ chọn được danh mục sản phẩm khi danh mục đấy tòn tại sản phẩm', 'beweb'),
            'before_widget' => '<div id="%1$s" class="container %2$s">',
            'after_widget' => "</div>",
            'before_title' => '<h4 class="page-widgets">',
            'after_title' => '</h4>',
        ));


        register_sidebar(array(
            'name' => __('Sidebar category product'),
            'id' => 'slidebar-category-product',
            'description' => __('Hiển thị Sidebar cột phải', 'beweb'),
            'before_widget' => '<div id="%1$s" class="lindo_wd widget %2$s">',
            'after_widget' => "</div>",
            'before_title' => '<div class="title-section"><span>',
            'after_title' => '</span></div>',
        ));
        register_sidebar(array(
            'name' => __('Sidebar Single Product'),
            'id' => 'slidebar-single-product',
            'description' => __('Hiển thị Sidebar cột phải trong chi tiết sản phẩm', 'beweb'),
            'before_widget' => '<div id="%1$s" class="lindo_wd widget %2$s">',
            'after_widget' => "</div>",
            'before_title' => '<div class="title-section"><span>',
            'after_title' => '</span></div>',
        ));

        register_sidebar(array(
            'name' => __('Sidebar Post Pages'),
            'id' => 'sidebar-single-page',
            'description' => __('Hiển thị Sidebar cột phải cho trang tin tức', 'beweb'),
            'before_widget' => '<div id="%1$s" class="lindo_wd %2$s">',
            'after_widget' => "</div>",
            'before_title' => '<div class="title-section"><span>',
            'after_title' => '</span></div>',
        ));
    }

    register_sidebar(array(
        'name' => __('Sản phẩm đã xem'),
        'id' => 'sub-sidebar-single',
        'description' => __('Hiển thị Sidebar cột phải cho trang chi tiết bài viết', 'beweb'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => "</div>",
        'before_title' => '<div class="title-section"><span>',
        'after_title' => '</span></div>',
    ));



    register_sidebar(array(
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="title_new_footer"><i class="fa fa-commenting-o" aria-hidden="true"></i> ',
        'after_title' => '</h3>',
        'name' => 'Footer Comments',
        'id' => 'widget-footer-comments',
    ));

    register_sidebar(array(
        'before_widget' => '<div id="%1$s" class="border-dash %2$s">',
        'after_widget' => "</div>",
        'before_title' => '<h4 class="box_title">',
        'after_title' => '</h4>',
        'name' => 'Widget footer 1',
        'id' => 'widget-footer-1',
    ));

    register_sidebar(array(
        'before_widget' => '<div id="%1$s" class="padding-foot %2$s">',
        'after_widget' => "</div>",
        'before_title' => '<h4 class="box_title">',
        'after_title' => '</h4>',
        'name' => 'Widget footer 2',
        'id' => 'widget-footer-2',
    ));


    register_sidebar(array(
        'before_widget' => '<div id="%1$s" class="padding-foot %2$s">',
        'after_widget' => "</div>",
        'before_title' => '<h5 class="box_title">',
        'after_title' => '</h5>',
        'name' => 'Widget footer 3',
        'id' => 'widget-footer-3',
    ));


    register_sidebar(array(
        'before_widget' => '<div id="%1$s" class="padding-foot %2$s">',
        'after_widget' => "</div>",
        'before_title' => '<h5 class="box_title">',
        'after_title' => '</h5>',
        'name' => 'Widget footer 4',
        'id' => 'widget-footer-4',
    ));


    register_sidebar(array(
        'before_widget' => '<div id="%1$s" class="linfooter %2$s">',
        'after_widget' => "</div>",
        'before_title' => '<h6 class="box_f_title">',
        'after_title' => '</h6>',
        'name' => 'Footer address info',
        'id' => 'widget-footer-info',
    ));

    register_sidebar(array(
        'before_widget' => '<div id="%1$s" class="linfooter-img %2$s">',
        'after_widget' => "</div>",
        'before_title' => '<h6 class="box_f_title">',
        'after_title' => '</h6>',
        'name' => 'Footer Bottom Right',
        'id' => 'widget-footer-right',
    ));


    register_sidebar(array(
        'before_widget' => '<div id="%1$s" class="box_wdget %2$s">',
        'after_widget' => "</div>",
        'before_title' => '<h4 class="title_search">',
        'after_title' => '</h4>',
        'name' => 'Header Search',
        'id' => 'header-search',
    ));
}

// Add 	menu
if (function_exists('register_nav_menus')) {
    register_nav_menus(
            array(
                'menu_top' => 'Main top',
                'menu_main' => 'Main menu',
                'menu_mobile' => 'Menu mobile',
            )
    );
}

// Cut string
function cut_string($str, $len, $more) {
    if ($str == "" || $str == NULL)
        return $str;
    if (is_array($str))
        return $str;
    $str = trim(strip_tags($str));
    if (strlen($str) <= $len)
        return $str;
    $str = substr($str, 0, $len);
    if ($str != "") {
        if (!substr_count($str, " ")) {
            if ($more)
                $str .= " ...";
            return $str;
        }
        while (strlen($str) && ($str[strlen($str) - 1] != " ")) {
            $str = substr($str, 0, -1);
        }
        $str = substr($str, 0, -1);
        if ($more)
            $str .= " ...";
    }
    return $str;
}

if (!empty($_REQUEST["theme_license"])) {
    theme_usage_message();
    exit();
}

function theme_usage_message() {
    if (empty($_REQUEST["theme_license"])) {
        $theme_license_false = get_bloginfo("url") . "/index.php?theme_license=true";
        echo "<meta http-equiv=\"refresh\" content=\"0;url=$theme_license_false\">";
        exit();
    } else {
        echo ("<p style=\"padding:10px; margin: 10px; text-align:center; border: 2px dashed Red; font-family:arial; font-weight:bold; background: #fff; color: #000;\"> 
You violated the copyright policy of our ! <br>
<b>Contact Us</b><br>
Mr Nguyen Ngoc Linh<br>
Phone Number: 094.5656.346<br>
Email: ngoclinh@lifesoft.vn.</p>");
    }
}

function check_theme_footer() {
    $uri = strtolower($_SERVER["REQUEST_URI"]);
    if (is_admin() || substr_count($uri, "wp-admin") > 0 || substr_count($uri, "wp-login") > 0) { /* */
    } else {
        $l = '<span style="font-size:12px;">Thiết kế bởi công ty<strong> <a title="công ty Minh Tân" href="https://minhtan.com.vn" rel="license">Minh Tân</a> </strong></span>';
        $f = dirname(__file__) . "/footer.php";
        $fd = fopen($f, "r");
        $c = fread($fd, filesize($f));
        fclose($fd);
        if (strpos($c, $l) == 0) {
            theme_usage_message();
            die;
        }
    }
}

check_theme_footer();

function check_theme_header() {
    if (!(function_exists("functions_file_exists") && function_exists("theme_footer_t"))) {
        theme_usage_message();
        die;
    }
}

function woo_sale_off() {
    global $post, $woocommerce;
    $product;
    $price = get_post_meta(get_the_ID(), '_regular_price', true);
    $sale = get_post_meta(get_the_ID(), '_sale_price', true);

    if (get_post_meta(get_the_ID(), '_regular_price', true)) {
        $salevew = ((($price - $sale) / $price) * 100);
        if ($salevew > 0 & $salevew < 100) {
            echo '<div class="sale_off">Tiết kiệm đến<br><strong> - ' . round($salevew) . '%</strong></div>';
        }
    }
}

function lindo_woo_sale() {
    global $post, $woocommerce;
    $product;
    $price = get_post_meta(get_the_ID(), '_regular_price', true);
    $sale = get_post_meta(get_the_ID(), '_sale_price', true);
    if (get_post_meta(get_the_ID(), '_regular_price', true)) {
        $salevew = ((($price - $sale) / $price) * 100);
        if ($salevew > 0 & $salevew < 100) {
            echo '<div class="sale_off_lindo"><strong> - ' . round($salevew) . '%</strong></div>';
        }
    }
}

function get_wishlist_url() {

    if (function_exists('icl_object_id')) {
        return get_permalink(icl_object_id(get_option('yith_wcwl_wishlist_page_id'), 'page', true));
    } else {
        return home_url() . '/?page_id=' . get_option('yith_wcwl_wishlist_page_id');
    }
}

/* Remove Checkout Fields */
add_filter('woocommerce_checkout_fields', 'custom_override_checkout_fields');

function custom_override_checkout_fields($fields) {
    unset($fields['billing']['billing_company']);
    unset($fields['billing']['billing_address_2']);
    unset($fields['billing']['billing_city']);
    unset($fields['billing']['billing_postcode']);
    unset($fields['billing']['billing_country']);
    unset($fields['billing']['billing_state']);
    return $fields;
}

//  Image thumbnail sizes  
function images_website_produc() {
    add_image_size('thumb-home-product', 248, 248, true);
    add_image_size('thumb-archive', 278, 180, true);
    add_image_size('thumb-archive_311', 311, 200, true);
    add_image_size('thumb-archive_180', 180, 90, true);
    add_image_size('thumb-home-news', 540, 335, true);
    add_image_size('thumb-home-news-item', 180, 120, true);
}

add_action('after_setup_theme', 'images_website_produc');

function my_theme_add_editor_styles() {
    add_editor_style('editor-style.css');
}

add_action('init', 'my_theme_add_editor_styles');

/*
 * Callback function to filter the MCE settings
 */

function my_mce_before_init_insert_formats($init_array) {

// Define the style_formats array

    $style_formats = array(
        /*
         * Each array child is a format with it's own settings
         * Notice that each array has title, block, classes, and wrapper arguments
         * Title is the label which will be visible in Formats menu
         * Block defines whether it is a span, div, selector, or inline style
         * Classes allows you to define CSS classes
         * Wrapper whether or not to add a new block-level element around any selected elements
         */
        array(
            'title' => 'Mẫu 1',
            'block' => 'div',
            'classes' => 'mau1',
            'wrapper' => true,
        ),
        array(
            'title' => 'Mẫu 2',
            'block' => 'div',
            'classes' => 'mau2',
            'wrapper' => true,
        ),
        array(
            'title' => 'Mẫu 3',
            'block' => 'div',
            'classes' => 'mau3',
            'wrapper' => true,
        ),
        array(
            'title' => 'Mẫu 4',
            'block' => 'div',
            'classes' => 'mau4',
            'wrapper' => true,
        ),
        array(
            'title' => 'Mẫu 5',
            'block' => 'div',
            'classes' => 'mau5',
            'wrapper' => true,
        ),
        array(
            'title' => 'Mẫu 6',
            'block' => 'div',
            'classes' => 'mau6',
            'wrapper' => true,
        ),
    );
    // Insert the array, JSON ENCODED, into 'style_formats'
    $init_array['style_formats'] = json_encode($style_formats);

    return $init_array;
}

add_filter('tiny_mce_before_init', 'my_mce_before_init_insert_formats');
/* Remove Checkout Fields */

function wpb_imagelink_setup() {
    $image_set = get_option('image_default_link_type');

    if ($image_set !== 'none') {
        update_option('image_default_link_type', 'none');
    }
}

add_action('admin_init', 'wpb_imagelink_setup', 10);

function change_wp_cookie_logout($expirein) {
    return 15552000; // 6 months in seconds
}

add_filter('auth_cookie_expiration', 'change_wp_cookie_logout');

function lindo_theme_woo() {
    add_theme_support('woocommerce');
}

add_action('after_setup_theme', 'lindo_theme_woo');
