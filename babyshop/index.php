<?php get_header(); ?>
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

<div class="ads_home_lindo_three_col">
<div class="container">
<div class="row">
<div class="col-sm-4 col-md-4">
<div class="lindo_ads_3">
<?php global $data; echo $data['home_col_1']; ?>
</div>
</div>
<div class="col-sm-4 col-md-4">
<div class="lindo_ads_3">
<?php global $data; echo $data['home_col_2']; ?>
</div>
</div>
<div class="col-sm-4 col-md-4">
<div class="lindo_ads_3">
<?php global $data; echo $data['home_col_3']; ?>
</div>
</div>
</div>
</div>
</div>

<div role="main" class="home_main_lindo">
<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('lindo-product-categories')) : else : ?>
<?php  endif; ?>
</div>
<?php get_footer(); ?>