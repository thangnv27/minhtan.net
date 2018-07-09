<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
global $product, $woocommerce_loop; $post;
$tag_count = sizeof( get_the_terms( $post->ID, 'product_tag' ) );

if($tag_count > 1) {
$taxonomy = 'product_tag';
$tax_args=array('orderby' => 'date');
$tags = wp_get_post_terms( $post->ID , $taxonomy, $tax_args);

$args = apply_filters('woocommerce_related_products_args', array(
	'post_type'				=> 'product',
	'product_tag' 	 => $tags [1]->slug,
	'ignore_sticky_posts'	=> 1,
	'no_found_rows' 		=> 1,
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
                        <a href="#"><?php the_post_thumbnail('thumb-home-product'); ?></a>
                        <h2><a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>"><?php  echo $title = cut_string(get_the_title(),50,'...');  ?></a></h2>
                        <?php echo $product->get_price_html(); ?>
                        <span><a rel="nofollow" href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>">Xem chi tiết</a></span>		
					
</div><!--end .list-slider-fashion-->                 
<?php endwhile;  ?> 
<?php endif;
wp_reset_postdata();
} else {
	$args = apply_filters('woocommerce_related_products_args', array(
	'post_type'				=> 'product',
	'ignore_sticky_posts'	=> 1,
	'no_found_rows' 		=> 1,
	'showposts' => 8,  // Số sản phẩm	 
	'post__not_in'			=> array($product->id),
	'orderby'=> "rand"
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
                      
                        <span><a rel="nofollow" href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>">Xem chi tiết</a></span>		
					
</div><!--end .list-slider-fashion-->                 
<?php endwhile;  ?> 
<?php endif;
wp_reset_postdata();
	}
	
	