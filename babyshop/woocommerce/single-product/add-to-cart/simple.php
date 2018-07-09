<?php
/**
 * Simple product add to cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/add-to-cart/simple.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

if ( ! $product->is_purchasable() ) {
	return;
}

?>

<?php
	// Availability
	$availability      = $product->get_availability();
	$availability_html = empty( $availability['availability'] ) ? '' : '<p class="stock ' . esc_attr( $availability['class'] ) . '">' . esc_html( $availability['availability'] ) . '</p>';

	echo apply_filters( 'woocommerce_stock_html', $availability_html, $availability['availability'], $product );
?>

<?php if ( $product->is_in_stock() ) : ?>

	<?php do_action( 'woocommerce_before_add_to_cart_form' ); ?>

     <!-- Modal -->
<div style="padding-top:105px" class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">THÔNG TIN KHÁCH HÀNG</h4>
      </div>
      <div class="modal-body">
      <div class="row">
<div class="col-xs-12 col-md-6 hidden-xs hidden-sm">
      <div class="cartsap">
  <?php
 $image  = get_the_post_thumbnail( $post->ID, apply_filters( 'single_product_large_thumbnail_size', 'shop_single' ));?> 
 <?php if($image !="") {?>
 <?php the_post_thumbnail('thumb-home-product'); ?>
 <?php } else { ?>
 <img src="<?php echo show_thumb_image() ?>" alt="<?php the_title_attribute() ?>" class="img-responsive center-block" />
 <?php } ?>
 
        <h2><a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>"><?php the_title_attribute() ?></a></h2>
       <div class="giasanph">
       	<p class="price"><?php echo $product->get_price_html(); ?></p>
        </div>
</div>
</div>

<div class="col-xs-12 col-sm-6">
<div class="phandathang">

<h5>Thông tin nhận hàng</h5>
                       <form action="https://docs.google.com/forms/u/1/d/e/1FAIpQLSdjb_Q3QQU_UBtD4QdMD4MdEGyYHAgZXVaz5JxwbnkH9Z5H6A/formResponse" target="_self" method="POST" id="mG61Hd">
                          
<div class="clearfix"></div>

                          <input style="margin-bottom:10px"  style="margin-bottom:6px" placeholder="Họ tên" class="form-control quantumWizTextinputPaperinputInput exportInput" jsname="YPqjbf" autocomplete="off" tabindex="0" aria-label="Họ tên" aria-describedby="i.desc.1047691090 i.err.1047691090" name="entry.2033179539" value="" required dir="auto" data-initial-dir="auto" data-initial-value="" type="text">
                          
<div class="clearfix"></div>

                          <input style="margin-bottom:10px"  placeholder="Đia chỉ nhận hàng" class="form-control quantumWizTextinputPaperinputInput exportInput" jsname="YPqjbf" autocomplete="off" tabindex="0" aria-label="Địa chỉ nhận hàng" aria-describedby="i.desc.101450146 i.err.101450146" name="entry.1297493807" value="" required dir="auto" data-initial-dir="auto" data-initial-value="" type="text">
                          
<div class="clearfix"></div>

                          <input style="margin-bottom:10px"  placeholder="Điện thoại" class="form-control quantumWizTextinputPaperinputInput exportInput" jsname="YPqjbf" autocomplete="off" tabindex="0" aria-label="Số điện thoại" aria-describedby="i.desc.1519440672 i.err.1519440672" name="entry.666266520" value="" required dir="auto" data-initial-dir="auto" data-initial-value="" type="text">
                          
<div class="clearfix"></div>

                          <textarea style="height:80px; margin-bottom:10px" placeholder="Ghi chú" class="form-control quantumWizTextinputPapertextareaInput exportTextarea" jsname="YPqjbf" data-rows="1" tabindex="0" aria-label="Ghi chú đơn hàng" jscontroller="gZjhIf" jsaction="input:Lg5SV;ti6hGc:XMgOHc;rcuQ6b:WYd;" name="entry.338937674" dir="auto" data-initial-dir="auto" data-initial-value=""></textarea>
                          
<div class="clearfix"></div>

                          <input style=" display:none"  class="form-control quantumWizTextinputPaperinputInput exportInput" jsname="YPqjbf" autocomplete="off" tabindex="0" aria-label="Url đặt hàng" aria-describedby="i.desc.1631657900 i.err.1631657900" name="entry.2054550271" value="<?php the_permalink() ?>" dir="auto" data-initial-dir="auto" data-initial-value="" type="url">
                          
<div class="clearfix"></div>

                          <button class="btn btn-danger" type="submit">GỬI ĐƠN HÀNG</button>
                          <input name="fvv" value="1" type="hidden">
                          <input name="draftResponse" value="[null,null,&quot;-8738566705220981525&quot;]
" type="hidden">
                          <input name="pageHistory" value="0" type="hidden">
                          <input name="fbzx" value="-8738566705220981525" type="hidden">
                        </form>
                        <p style="MARGIN-TOP: 15PX;">CHÚNG TÔI GIAO HÀNG TOÀN QUỐC CÓ TÍNH PHÍ THEO KHU VỰC</p>
</div>
</div>


</div>
      </div>
 
    </div>
  </div>
</div>
<div class="clearfix"></div>

 <?php do_action( 'woocommerce_before_single_product' ); if ( post_password_required() ) {	echo get_the_password_form(); return; } ?>
	<form class="cart" method="post" enctype='multipart/form-data'>
	 	<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>	  		 	
<button type="button" class="single_add_to_cart_button" data-toggle="modal" data-target="#myModal"> ĐẶT HÀNG NHANH <span>Tính phụ phí giao hàng theo từng khu vực</span>
	<script>
function gtag_report_conversion(url) {
  var callback = function () {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-847097400/HHIECN_vw3sQuNz2kwM',
      'transaction_id': '',
      'event_callback': callback
  });
  return false;
}
</script>
</button>
		<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
	</form>

	<?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>

<?php endif; ?>
<div class="clearfix"></div>