<?php 
global $data; $bg = $data['page_colorpicker'];
global $data; $color =  $data['color2_colorpicker'];
?>
<style type="text/css">
.sidebar-home ul li .sub-menu, .sidebar-home ul li.haicot .sub-menu, .sidebar-home ul li.bacot .sub-menu, .sidebar-home ul li.boncot .sub-menu   {border-left: 5px solid <?php echo $bg; ?>;}
.camket ul.ck-group li p  i.fa { color:<?php echo $color; ?>}
::-moz-selection {background:<?php echo $bg; ?>;color: #fff;}
.title-section h2 a { color:<?php echo $color; ?>}
.beweb_mobile .hotline_mobile_beweb a { color:<?php echo $color; ?>}
.title-section span  { color:<?php echo $bg; ?>}
.woocommerce .widget_price_filter .price_slider_amount .button {background: <?php echo $color; ?>;}
.sidebar-home ul { background:#FFF}
.cart-header:hover{background: <?php echo $bg; ?>;}
.cart-header p{background: <?php echo $bg; ?>;}
.cart-hover{background: <?php echo $bg; ?>;}
.menu-header{background: <?php echo $bg; ?>;}
.menu-header nav{background: <?php echo $bg; ?>;}
.menu-header nav ul li:hover{background: <?php echo $color; ?>;}
.menu-header nav ul li ul li{background:<?php echo $bg; ?>;}
.title-section .link-cat a {background:<?php echo $bg; ?>;}
.title-section .link-cat a:hover {background:<?php echo $color; ?>;}

.search-header  .yith-ajaxsearchform-container form {border:2px solid  <?php echo $bg; ?>}
.opt-content-top .list-opt-content-top i.fa {  color: <?php echo $bg; ?>}
.search-header  .yith-ajaxsearchform-container form #yith-searchsubmit { background: <?php echo $bg; ?>;}
#carousel-slider-home .carousel-control{background:  <?php echo $bg; ?> !important;}
.sidebar-home h6{background:  <?php echo $bg; ?>;}
.list-slider-fashion span.onsale, .slider-top-buy span.onsale, .slider-detail span.onsale{background: #3f5c9a;}
.sidebar-home .widget_price_filter form .ui-slider-range.ui-widget-header.ui-corner-all{background:  <?php echo $bg; ?>;}
.sidebar-home .price_slider_amount button[type="submit"]:hover{background:  <?php echo $bg; ?> !important;}
.woocommerce-pagination ul li a:hover, .woocommerce-pagination ul li span{background:  <?php echo $bg; ?> !important;}
.title-info-service p{background:  <?php echo $bg; ?>;}
.tab-prod-rel .nav-tabs>li.active>a, .tab-prod-rel .nav-tabs>li.active>a:hover, .tab-prod-rel .nav-tabs>li.active>a:focus{background: #009bcb;}
.post_page .woocommerce form table tbody tr td input[type="submit"]{background:  <?php echo $bg; ?>;}
.post_page .woocommerce form table tbody tr td input[type="submit"].checkout-button{background:  <?php echo $bg; ?>;}
.order-client button{background:  <?php echo $bg; ?>;}
.post_page .ninja-forms-cont .field-wrap input[type="text"]{background: #fbfbfb;}
.post_page .ninja-forms-cont .field-wrap input[type="submit"]{background:  <?php echo $bg; ?>;}
.woocommerce-message a.button:hover{background:  <?php echo $bg; ?>;color: #fff !important;}
.footer.footer {background:  <?php echo $bg; ?> ;}
.woocommerce .widget_price_filter .ui-slider .ui-slider-range {background:  <?php echo $bg; ?> ;}
.woocommerce .widget_price_filter .ui-slider .ui-slider-handle {background: <?php echo $bg ;?> }
.woocommerce .widget_price_filter .ui-slider .ui-slider-handle {background: <?php echo $bg ;?> }
</style>