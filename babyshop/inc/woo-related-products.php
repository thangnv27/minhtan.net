<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
global $post, $product, $woocommerce_loop;
$related = $product->get_related(  );
if ( sizeof( $related ) == 0 ) return;

$args = apply_filters('woocommerce_related_products_args', array(
	'post_type'				=> 'product',
	'post__in' 				=> $related,
	'showposts' => 8,  // Số sản phẩm	 
	'post__not_in'			=> array($product->id)
) );

$products = new WP_Query( $args );
if ( $products->have_posts() ) : ?>
<?php while ( $products->have_posts() ) : $products->the_post(); ?>
<div class="list-slider-fashion">
<?php if ( $product->is_on_sale() ) : ?>
                        <?php echo apply_filters( 'woocommerce_sale_flash', '<span class="onsale">' . __( 'Sale', 'woocommerce' ) . '</span>', $post, $product ); ?>
                        <?php endif; ?>
 <?php
 $image  = get_the_post_thumbnail( $post->ID, apply_filters( 'single_product_large_thumbnail_size', 'shop_single' ));?> 
 <?php if($image !="") {?>
 <a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>"><?php the_post_thumbnail('thumb-home-product'); ?></a>
 <?php } else { ?>
 <a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>">
 <img src="<?php echo show_thumb_image() ?>" alt="<?php the_title_attribute() ?>" class="img-responsive" />
 </a>
 <?php } ?>
                        <h2><a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>"><?php  echo $title = cut_string(get_the_title(),50,'...');  ?></a></h2>
                        
<?php   $price = get_post_meta( get_the_ID(), '_regular_price', true);
		$sale = get_post_meta( get_the_ID(), '_sale_price', true);  ?>
	
	<?php if($price != "" AND $sale != "") { ?> 
		<del><span class="amount"><?php echo number_format ($price,0,'',',');?>  ₫</span></del>
         <ins style="text-decoration:none"> <span class="amount"><?php echo number_format ($sale,0,'',',');?>  ₫</span></ins>
    <?php } else { ?>
	   <ins style="text-decoration:none"> <span class="amount"><?php echo number_format ($price,0,'',',');?> ₫</span>  </ins>
    <?php } ?>

                        <?php // echo $product->get_price_html(); ?>
                        <span><a rel="nofollow" href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>">Xem chi tiết</a></span>		
					
</div><!--end .list-slider-fashion-->                 
<?php endwhile;  ?> 
<?php endif;
wp_reset_postdata();
?>