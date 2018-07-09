<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js"><head>
	<meta name="language" content="vietnamese">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	<title><?php wp_title(); ?></title>
	<meta name="copyright" content="MINH TAN CO., LTD">
	<meta property="article:author" content="MINH TAN">	
	<meta name="geo.placename" content="6/19 Tân Thới Nhất 10, Khu Phố 6, Phường Tân Thới Nhất, Quận 12, Hồ Chí Minh, Việt Nam" />
	<meta name="geo.region" content="VN-SG" />
	<meta name="geo.position" content="10.834881;106.613222" />
	<meta name="ICBM" content="10.834881, 106.613222" />
	<meta name="revisit-after" content="1 days">
	<meta name="dc.description" content="Minh Tân là website thương mại điện tử chuyên mua bán tất cả các sản phẩm công nghệ, phụ kiện, thời trang nam nữ, gia dụng, mẹ và bé … chính hãng chất lượng cao.">
	<meta name="dc.keywords" content="sản phẩm công nghệ, shop thời trang, mua sắm trực tuyến, mua sắm online, phu kien cong nghe">
	<meta name="dc.subject" content="Công Ty">
	<meta name="dc.created" content="2017-12-01">
	<meta name="dc.publisher" content="CÔNG TY TNHH MINH tÂN">
	<meta name="dc.rights.copyright" content="MINH TAN">
	<meta name="dc.creator.name" content="MINH TAN CO.,LTD">
	<meta name="dc.creator.email" content="info.minhtan@gmail.com">
	<meta name="dc.identifier" content="https://minhtan.net/">
	<meta name="dc.language" content="vi-VN">			
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' /> 
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<title><?php wp_title(); ?></title>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/reset.css" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/owl-carousel/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/owl-carousel/css/owl.theme.default.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/product.css" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/lindo_menu_cat.css" /> 
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/responsive.css" />
<?php wp_head(); ?>  
<?php global $data; $favicon = $data['media_upload_favicon'];  if($favicon != '') {?>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo $favicon; ?>"/>
<?php } ?>
<?php global $data; echo $data['header_code']; ?>
</head>
<body <?php body_class(); ?>>
<?php global $data; echo $data['switch_slider_online']; ?>
<div id="page">
 <header>
    <nav class="navbar_lindo">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                    <div class="header_info">
                       <?php
					if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a title="<?php bloginfo( 'name' ); ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a title="<?php bloginfo( 'name' ); ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif;

				?>
                
                 <?php global $data; $hotline = $data['header_hotline'];  if($hotline != '') {?>
                            <p class="hotline_header"><i class="fa fa-volume-control-phone" aria-hidden="true"></i> Tổng đài: <strong><?php echo $hotline ; ?></strong></p>
                  <?php } ?>
                
                    </div>
                 <div class="lindo-header_top_menu">

				<?php  if(function_exists('wp_nav_menu')) {
                    wp_nav_menu( 'theme_location=menu_top&menu_class=nav navbar-nav navbar-right');
                } ?>
                </div>
                </div><!-- /.navbar-collapse -->
        </div>
    </div>
</nav>
<div class="clearfix"></div>
    <div class="header_maincontent">
        <div class="container">
            <div class="row">
              
              <div class="col-sm-3 col-md-3">
              <div class="row">              
               <div class="col-xs-7 col-md-10" style="margin-top: 10px;">
              <?php global $data;
			$logo_magin_top = $data['logo_magin_top'];
			$logo_magin_bottom = $data['logo_magin_bottom'];
			$get_logo_image = $data['media_upload_logo'];
			if($get_logo_image !="" ) { ?>
			<a class="a_pading"  title="<?php bloginfo('name'); ?>" href="<?php bloginfo('url'); ?>">
            <img src="<?php echo $get_logo_image; ?>" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>" class="img-responsive" />
            </a>
			<?php } else { ?>
			<div class="logo_text_wrap">
			<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
			</div>
			<?php }?>
              </div> 
				<div class="col-xs-5 visible-xs" style="text-align: right; margin-top: 13px;">
                <a class="mlindo_mobile" href="#mlindo_mobile"><i class="fa fa-bars" aria-hidden="true"></i> SẢN PHẨM</a>
              </div>
              </div>
              </div>
              <div class="col-sm-5 col-md-6">
              <div class="search_box">
              
<form role="search" method="get" class="woocommerce-product-search" id="search-form" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
	<div class="form-group search_input">
    <input type="search" id="input_searchword" class="form-control" placeholder="<?php echo esc_attr_x( 'Nhập vào đây&hellip;', 'placeholder', 'woocommerce' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for :', 'label', 'woocommerce' ); ?>" />
    </div>
	<input type="submit" class="btn btn-default pull-right button" value="<?php echo esc_attr_x( 'Search', 'submit button', 'woocommerce' ); ?>" />
	<input type="hidden" name="post_type" value="product" />
</form>
              
         </div>
              </div>
               <div class="col-sm-4 col-md-3">
             
<div class="group_like_cart">
<div class="row">
<div class=" col-xs-6 col-sm-6 col-md-6">
<div class="fl header_like">
<a rel="nofollow" target="_blank" title="Yêu thích" href="<?php bloginfo('url'); ?>/wishlist/" class="follow">
<i class="icon_vg40 icon_vg40_like"></i>
<span>Yêu thích</span>
<div class="notify" style="margin-left: 10px;"><?php echo yith_wcwl_count_products(); ?>
</div>
</a>
</div>
</div>
<div class=" col-xs-6 col-sm-6 col-md-6">
<div class="fr header_cart">
 <?php global $woocommerce; ?>
<a rel="nofollow" target="_blank" title="Giỏ hàng" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" class="cart">
<i class="icon_vg40 icon_vg40_cart"></i>
<span>Giỏ hàng</span>
<div class="notify"><?php echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'ocshop'), $woocommerce->cart->cart_contents_count);?></div>
</a>
</div>
</div>
</div>
<div class="clear"></div>
</div>
              </div>
            </div>
        </div>
    </div>
	 <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</header>
<div class="clearfix"></div>