<?php
    class lindo_nav_pro extends WP_Widget {
	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'lindo-nav-menu', 
			__( '01. Custom Mega Menu Pro', 'lindo' ), // Name
			array( 'description' => __( 'Chọn sản phẩm hiển thị dạng đơn giản cho trang chủ', 'lindo' ), ) // Args
		);
	}
	
	
	function widget($args, $instance) {
		extract ( $args );
		
		$category_1 = apply_filters ( 'catecategory_1', isset ( $instance ['category_1'] ) ? esc_attr ( $instance ['category_1'] ) : '' );
		$term1 = get_term( $category_1, 'product_cat' );
		$slug1 = $term1->slug;
		$name_produc_1 = $term1->name;
		
		$category_2 = apply_filters ( 'catecategory_2', isset ( $instance ['category_2'] ) ? esc_attr ( $instance ['category_2'] ) : '' );
		$term2 = get_term( $category_2, 'product_cat' );
		$slug2 = $term2->slug;
		$name_produc_2 = $term2->name;
		
		$category_3 = apply_filters ( 'catecategory_3', isset ( $instance ['category_3'] ) ? esc_attr ( $instance ['category_3'] ) : '' );
		$term3 = get_term( $category_3, 'product_cat' );
		$slug3 = $term3->slug;
		$name_produc_3 = $term3->name;
		
		
		$category_4 = apply_filters ( 'catecategory_4', isset ( $instance ['category_4'] ) ? esc_attr ( $instance ['category_4'] ) : '' );
		$term4 = get_term( $category_4, 'product_cat' );
		$slug4 = $term4->slug;
		$name_produc_4 = $term4->name;
		
		$category_5 = apply_filters ( 'catecategory_5', isset ( $instance ['category_5'] ) ? esc_attr ( $instance ['category_5'] ) : '' );
		$term5 = get_term( $category_5, 'product_cat' );
		$slug5 = $term5->slug;
		$name_produc_5 = $term5->name;
		
		
		$category_6 = apply_filters ( 'catecategory_6', isset ( $instance ['category_6'] ) ? esc_attr ( $instance ['category_6'] ) : '' );
		$term6 = get_term( $category_6, 'product_cat' );
		$slug6 = $term6->slug;
		$name_produc_6 = $term6->name;
		
		$category_7 = apply_filters ( 'catecategory_7', isset ( $instance ['category_7'] ) ? esc_attr ( $instance ['category_7'] ) : '' );
		$term7 = get_term( $category_7, 'product_cat' );
		$slug7 = $term7->slug;
		$name_produc_7 = $term7->name;
		
		
		$category_8 = apply_filters ( 'catecategory_8', isset ( $instance ['category_8'] ) ? esc_attr ( $instance ['category_8'] ) : '' );
		$term8 = get_term( $category_8, 'product_cat' );
		$slug8 = $term8->slug;
		$name_produc_8 = $term8->name;
		
		$category_9 = apply_filters ( 'catecategory_9', isset ( $instance ['category_9'] ) ? esc_attr ( $instance ['category_9'] ) : '' );
		$term9 = get_term( $category_9, 'product_cat' );
		$slug9 = $term9->slug;
		$name_produc_9 = $term9->name;
		
		
		$category_10 = apply_filters ( 'catecategory_10', isset ( $instance ['category_10'] ) ? esc_attr ( $instance ['category_10'] ) : '' );
		$term10 = get_term( $category_10, 'product_cat' );
		$slug10 = $term10->slug;
		$name_produc_10 = $term10->name;
		
		$category_11 = apply_filters ( 'catecategory_11', isset ( $instance ['category_11'] ) ? esc_attr ( $instance ['category_11'] ) : '' );
		$term11 = get_term( $category_11, 'product_cat' );
		$slug11 = $term11->slug;
		$name_produc_11 = $term11->name;
		
		$category_12 = apply_filters ( 'catecategory_12', isset ( $instance ['category_12'] ) ? esc_attr ( $instance ['category_12'] ) : '' );
		$term12 = get_term( $category_12, 'product_cat' );
		$slug12 = $term12->slug;
		$name_produc_12 = $term12->name;
		
		$category_13 = apply_filters ( 'catecategory_13', isset ( $instance ['category_13'] ) ? esc_attr ( $instance ['category_13'] ) : '' );
		$term13 = get_term( $category_13, 'product_cat' );
		$slug13 = $term13->slug;
		$name_produc_13 = $term13->name;
		
		$category_14 = apply_filters ( 'catecategory_14', isset ( $instance ['category_14'] ) ? esc_attr ( $instance ['category_14'] ) : '' );
		$term14 = get_term( $category_14, 'product_cat' );
		$slug14 = $term14->slug;
		$name_produc_14 = $term14->name;
		
		
		$category_15 = apply_filters ( 'catecategory_15', isset ( $instance ['category_15'] ) ? esc_attr ( $instance ['category_15'] ) : '' );
		$term15 = get_term( $category_15, 'product_cat' );
		$slug15 = $term15->slug;
		$name_produc_15 = $term15->name;
		
		
		
		
		$icon_1 = apply_filters ( 'icon_1', isset ( $instance ['icon_1'] ) ? $instance ['icon_1'] : '' );
		$icon_2 = apply_filters ( 'icon_2', isset ( $instance ['icon_2'] ) ? $instance ['icon_2'] : '' );
		$icon_3 = apply_filters ( 'icon_3', isset ( $instance ['icon_3'] ) ? $instance ['icon_3'] : '' );
		$icon_4 = apply_filters ( 'icon_4', isset ( $instance ['icon_4'] ) ? $instance ['icon_4'] : '' );
		$icon_5 = apply_filters ( 'icon_5', isset ( $instance ['icon_5'] ) ? $instance ['icon_5'] : '' );
		$icon_6 = apply_filters ( 'icon_6', isset ( $instance ['icon_6'] ) ? $instance ['icon_6'] : '' );
		$icon_7 = apply_filters ( 'icon_7', isset ( $instance ['icon_7'] ) ? $instance ['icon_7'] : '' );
		$icon_8 = apply_filters ( 'icon_8', isset ( $instance ['icon_8'] ) ? $instance ['icon_8'] : '' );
		$icon_9 = apply_filters ( 'icon_9', isset ( $instance ['icon_9'] ) ? $instance ['icon_9'] : '' );
		$icon_10 = apply_filters ( 'icon_10', isset ( $instance ['icon_10'] ) ? $instance ['icon_10'] : '' );
		$icon_11 = apply_filters ( 'icon_11', isset ( $instance ['icon_11'] ) ? $instance ['icon_11'] : '' );
		$icon_12 = apply_filters ( 'icon_12', isset ( $instance ['icon_12'] ) ? $instance ['icon_12'] : '' );
		$icon_13 = apply_filters ( 'icon_13', isset ( $instance ['icon_13'] ) ? $instance ['icon_13'] : '' );
		$icon_14 = apply_filters ( 'icon_14', isset ( $instance ['icon_14'] ) ? $instance ['icon_14'] : '' );
		$icon_13 = apply_filters ( 'icon_15', isset ( $instance ['icon_15'] ) ? $instance ['icon_15'] : '' );


		
		$sup_menu_1 = apply_filters ( 'sup_menu_1', isset ( $instance ['sup_menu_1'] ) ? $instance ['sup_menu_1'] : '' );
		$sup_menu_2 = apply_filters ( 'sup_menu_2', isset ( $instance ['sup_menu_2'] ) ? $instance ['sup_menu_2'] : '' );
		$sup_menu_3 = apply_filters ( 'sup_menu_3', isset ( $instance ['sup_menu_3'] ) ? $instance ['sup_menu_3'] : '' );
		$sup_menu_4 = apply_filters ( 'sup_menu_4', isset ( $instance ['sup_menu_4'] ) ? $instance ['sup_menu_4'] : '' );
		$sup_menu_5 = apply_filters ( 'sup_menu_5', isset ( $instance ['sup_menu_5'] ) ? $instance ['sup_menu_5'] : '' );
		$sup_menu_6 = apply_filters ( 'sup_menu_6', isset ( $instance ['sup_menu_6'] ) ? $instance ['sup_menu_6'] : '' );
		$sup_menu_7 = apply_filters ( 'sup_menu_7', isset ( $instance ['sup_menu_7'] ) ? $instance ['sup_menu_7'] : '' );
		$sup_menu_8 = apply_filters ( 'sup_menu_8', isset ( $instance ['sup_menu_8'] ) ? $instance ['sup_menu_8'] : '' );
		$sup_menu_9 = apply_filters ( 'sup_menu_9', isset ( $instance ['sup_menu_9'] ) ? $instance ['sup_menu_9'] : '' );
		$sup_menu_10 = apply_filters ( 'sup_menu_10', isset ( $instance ['sup_menu_10'] ) ? $instance ['sup_menu_10'] : '' );
		$sup_menu_11 = apply_filters ( 'sup_menu_11', isset ( $instance ['sup_menu_11'] ) ? $instance ['sup_menu_11'] : '' );
		$sup_menu_12 = apply_filters ( 'sup_menu_12', isset ( $instance ['sup_menu_12'] ) ? $instance ['sup_menu_12'] : '' );
		$sup_menu_13 = apply_filters ( 'sup_menu_13', isset ( $instance ['sup_menu_13'] ) ? $instance ['sup_menu_13'] : '' );
		$sup_menu_14 = apply_filters ( 'sup_menu_14', isset ( $instance ['sup_menu_14'] ) ? $instance ['sup_menu_14'] : '' );
		$sup_menu_13 = apply_filters ( 'sup_menu_15', isset ( $instance ['sup_menu_15'] ) ? $instance ['sup_menu_15'] : '' );

		
		$banner_1 = apply_filters ( 'banner_1', isset ( $instance ['banner_1'] ) ? $instance ['banner_1'] : '' );
		$banner_2 = apply_filters ( 'banner_2', isset ( $instance ['banner_2'] ) ? $instance ['banner_2'] : '' );
		$banner_3 = apply_filters ( 'banner_3', isset ( $instance ['banner_3'] ) ? $instance ['banner_3'] : '' );
		$banner_4 = apply_filters ( 'banner_4', isset ( $instance ['banner_4'] ) ? $instance ['banner_4'] : '' );
		$banner_5 = apply_filters ( 'banner_5', isset ( $instance ['banner_5'] ) ? $instance ['banner_5'] : '' );
		$banner_6 = apply_filters ( 'banner_6', isset ( $instance ['banner_6'] ) ? $instance ['banner_6'] : '' );
		$banner_7 = apply_filters ( 'banner_7', isset ( $instance ['banner_7'] ) ? $instance ['banner_7'] : '' );
		$banner_8 = apply_filters ( 'banner_8', isset ( $instance ['banner_8'] ) ? $instance ['banner_8'] : '' );
		$banner_9 = apply_filters ( 'banner_9', isset ( $instance ['banner_9'] ) ? $instance ['banner_9'] : '' );
		$banner_10 = apply_filters ( 'banner_10', isset ( $instance ['banner_10'] ) ? $instance ['banner_10'] : '' );
		$banner_11 = apply_filters ( 'banner_11', isset ( $instance ['banner_11'] ) ? $instance ['banner_11'] : '' );
		$banner_12 = apply_filters ( 'banner_12', isset ( $instance ['banner_12'] ) ? $instance ['banner_12'] : '' );
		$banner_13 = apply_filters ( 'banner_13', isset ( $instance ['banner_13'] ) ? $instance ['banner_13'] : '' );
		$banner_14 = apply_filters ( 'banner_14', isset ( $instance ['banner_14'] ) ? $instance ['banner_14'] : '' );
		$banner_13 = apply_filters ( 'banner_15', isset ( $instance ['banner_15'] ) ? $instance ['banner_15'] : '' );

		
		

		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ). $args['after_title'];
		}
?>

<div class="lindo_category_bg">
  <div class="container">
   <div class="lindo-row">
    <div class="lindo-width-20">
   <div class="categories">
    <ul class="lindo_mega_left">
    
    <?php if (isset($category_1)){ ?> 
      <li data-category-hover="cat1">
      <a title="<?php echo $name_produc_1; ?>" href="<?php echo get_term_link($term1, 'product_cat'); ?>"><?php echo $icon_1; ?><?php echo $name_produc_1; ?></a>
			<?php  echo $sup_menu_1; ?>	        
           </li>
      <?php } ?>     
      
      
       <?php if (isset($category_2)){ ?> 
      <li data-category-hover="cat2">
      <a title="<?php echo $name_produc_2; ?>" href="<?php echo get_term_link($term2, 'product_cat'); ?>"><?php echo $icon_2; ?><?php echo $name_produc_2; ?></a>
			<?php  echo $sup_menu_2; ?>	        
           </li>
      <?php } ?>  
      
      
     <?php if (isset($category_3)){ ?> 
      <li data-category-hover="cat3">
      <a title="<?php echo $name_produc_3; ?>" href="<?php echo get_term_link($term3, 'product_cat'); ?>"><?php echo $icon_3; ?><?php echo $name_produc_3; ?></a>
			<?php  echo $sup_menu_3; ?>	        
           </li>
      <?php } ?>    
      
      <?php if (isset($category_4)){ ?> 
      <li data-category-hover="cat4">
      <a title="<?php echo $name_produc_4; ?>" href="<?php echo get_term_link($term4, 'product_cat'); ?>"><?php echo $icon_4; ?><?php echo $name_produc_4; ?></a>
			<?php  echo $sup_menu_4; ?>	        
           </li>
      <?php } ?>   
      
      <?php if (isset($category_5)){ ?> 
      <li data-category-hover="cat5">
      <a title="<?php echo $name_produc_5; ?>" href="<?php echo get_term_link($term5, 'product_cat'); ?>"><?php echo $icon_5; ?><?php echo $name_produc_5; ?></a>
			<?php  echo $sup_menu_5; ?>	        
           </li>
      <?php } ?>     
     
     <?php if (isset($category_6)){ ?> 
      <li data-category-hover="cat6">
      <a title="<?php echo $name_produc_6; ?>" href="<?php echo get_term_link($term6, 'product_cat'); ?>"><?php echo $icon_6; ?><?php echo $name_produc_6; ?></a>
			<?php  echo $sup_menu_6; ?>	        
           </li>
      <?php } ?>   
      
      <?php if (isset($category_7)){ ?> 
      <li data-category-hover="cat7">
      <a title="<?php echo $name_produc_7; ?>" href="<?php echo get_term_link($term7, 'product_cat'); ?>"><?php echo $icon_7; ?><?php echo $name_produc_7; ?></a>
			<?php  echo $sup_menu_7; ?>	        
           </li>
      <?php } ?>   
      
      <?php if (isset($category_8)){ ?> 
      <li data-category-hover="cat8">
      <a title="<?php echo $name_produc_8; ?>" href="<?php echo get_term_link($term8, 'product_cat'); ?>"><?php echo $icon_8; ?><?php echo $name_produc_8; ?></a>
			<?php  echo $sup_menu_8; ?>	        
           </li>
      <?php } ?>   
      
      <?php if (isset($category_9)){ ?> 
      <li data-category-hover="cat9">
      <a title="<?php echo $name_produc_9; ?>" href="<?php echo get_term_link($term9, 'product_cat'); ?>"><?php echo $icon_9; ?><?php echo $name_produc_9; ?></a>
			<?php  echo $sup_menu_9; ?>	        
           </li>
      <?php } ?>   
      
      <?php if (isset($category_10)){ ?> 
      <li data-category-hover="cat10">
      <a title="<?php echo $name_produc_10; ?>" href="<?php echo get_term_link($term10, 'product_cat'); ?>"><?php echo $icon_10; ?><?php echo $name_produc_10; ?></a>
			<?php  echo $sup_menu_10; ?>	        
           </li>
      <?php } ?>   
      
      <?php if (isset($category_11)){ ?> 
      <li data-category-hover="cat11">
      <a title="<?php echo $name_produc_11; ?>" href="<?php echo get_term_link($term11, 'product_cat'); ?>"><?php echo $icon_11; ?><?php echo $name_produc_11; ?></a>
			<?php  echo $sup_menu_11; ?>	        
           </li>
      <?php } ?>  
      
      <?php if (isset($category_12)){ ?> 
      <li data-category-hover="cat12">
      <a title="<?php echo $name_produc_12; ?>" href="<?php echo get_term_link($term12, 'product_cat'); ?>"><?php echo $icon_12; ?><?php echo $name_produc_12; ?></a>
			<?php  echo $sup_menu_12; ?>	        
           </li>
      <?php } ?>   
      
     <?php /*?> <?php if (isset($category_13)){ ?> 
      <li data-category-hover="cat13">
      <a title="<?php echo $category_13; ?>" href="<?php echo get_term_link($term13, 'product_cat'); ?>"><?php echo $icon_13; ?><?php echo $name_produc_13; ?></a>
			<?php  echo $sup_menu_13; ?>	        
           </li>
      <?php } ?>    
      
      <?php if (isset($category_14)){ ?> 
      <li data-category-hover="cat14">
      <a title="<?php echo $name_produc_14; ?>" href="<?php echo get_term_link($term14, 'product_cat'); ?>"><?php echo $icon_14; ?><?php echo $name_produc_14; ?></a>
			<?php  echo $sup_menu_14; ?>	        
           </li>
      <?php } ?>   
      
      <?php if (isset($category_15)){ ?> 
      <li data-category-hover="cat15">
      <a title="<?php echo $name_produc_15; ?>" href="<?php echo get_term_link($term15, 'product_cat'); ?>"><?php echo $icon_15; ?><?php echo $name_produc_15; ?></a>
			<?php  echo $sup_menu_15; ?>	        
           </li>
      <?php } ?>  <?php */?> 
   
     
      
    </ul>
  </div>
  </div>
  
<div class="lindo-width-80">
  <div class="image-info">
   <?php if (isset($category_1)){ ?> 
    <div class="img active" data-category-active="cat1">
     <div class="lindo-row-sup">
	 <div class="lindo-witch-8" style="padding-left:0; padding-right:0">
	 <?php echo $banner_1;?>
     </div>
     <div class="lindo-witch-2" style="padding-left:0">
     <div class="lindo_pr_right">
     <?php 
                    if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
                    global $post, $woocommerce, $product;
                     $wp_query = new WP_Query( array('post_type' => 'product', 
                    'product_cat' => $slug1, 
                    'posts_per_page' => 2,
                    'nopagging' => true));
					 global  $post, $product;
                    while ($wp_query->have_posts()) : $wp_query->the_post();?>						
                    <div class="header_style_produc">
                        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
					   <?php
                        /**
                         * woocommerce_before_shop_loop_item_title hook.
                         *
                         * @hooked woocommerce_show_product_loop_sale_flash - 10
                         * @hooked woocommerce_template_loop_product_thumbnail - 10
                         */
                        do_action( 'woocommerce_before_shop_loop_item_title' );
                    
                        /**
                         * woocommerce_shop_loop_item_title hook.
                         *
                         * @hooked woocommerce_template_loop_product_title - 10
                         */
                        do_action( 'woocommerce_shop_loop_item_title' );
                    ?>
                    </a>
					<?php
                        /**
                         * woocommerce_after_shop_loop_item_title hook.
                         *
                         * @hooked woocommerce_template_loop_rating - 5
                         * @hooked woocommerce_template_loop_price - 10
                         */
                        do_action( 'woocommerce_after_shop_loop_item_title' );
                    ?>
                    </div>
                    <?php
                    endwhile;
                    wp_reset_query();
                    ?>	
                    </div>
     </div>
     </div>
    </div>
    <?php } ?>   
    
    <?php if (isset($category_2)){ ?> 
    <div class="img" data-category-active="cat2">
     <div class="lindo-row-sup">
	 <div class="lindo-witch-8">
	 <?php echo $banner_2;?>
     </div>
     <div class="lindo-witch-2">
     <div class="lindo_pr_right">
     <?php 
                    if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
                    global $post, $woocommerce, $product;
                    $wp_query = new WP_Query( array('post_type' => 'product', 
                    'product_cat' => $slug2, 
                    'posts_per_page' => 2,
                    ));
                    while ($wp_query->have_posts()) : $wp_query->the_post(); global  $post, $product;?>						
                    <div class="header_style_produc">
                        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
					   <?php
                        /**
                         * woocommerce_before_shop_loop_item_title hook.
                         *
                         * @hooked woocommerce_show_product_loop_sale_flash - 10
                         * @hooked woocommerce_template_loop_product_thumbnail - 10
                         */
                        do_action( 'woocommerce_before_shop_loop_item_title' );
                    
                        /**
                         * woocommerce_shop_loop_item_title hook.
                         *
                         * @hooked woocommerce_template_loop_product_title - 10
                         */
                        do_action( 'woocommerce_shop_loop_item_title' );
                    ?>
                    </a>
					<?php
                        /**
                         * woocommerce_after_shop_loop_item_title hook.
                         *
                         * @hooked woocommerce_template_loop_rating - 5
                         * @hooked woocommerce_template_loop_price - 10
                         */
                        do_action( 'woocommerce_after_shop_loop_item_title' );
                    ?>
                    </div>
                    <?php
                    endwhile;
                    wp_reset_query();
                    ?>	
                    </div>
     </div>
     </div>
    </div>
    <?php } ?> 
    
    <?php if (isset($category_3)){ ?> 
    <div class="img" data-category-active="cat3">
     <div class="lindo-row-sup">
	 <div class="lindo-witch-8">
	 <?php echo $banner_3;?>
     </div>
     <div class="lindo-witch-2">
     <div class="lindo_pr_right">
     <?php 
                    if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
                    global $post, $woocommerce, $product;
                    $wp_query = new WP_Query( array('post_type' => 'product', 
                    'product_cat' => $slug3, 
                    'posts_per_page' => 2,
                    'nopagging' => true));
                    while ($wp_query->have_posts()) : $wp_query->the_post(); global  $post, $product;?>						
                    <div class="header_style_produc">
                        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
					   <?php
                        /**
                         * woocommerce_before_shop_loop_item_title hook.
                         *
                         * @hooked woocommerce_show_product_loop_sale_flash - 10
                         * @hooked woocommerce_template_loop_product_thumbnail - 10
                         */
                        do_action( 'woocommerce_before_shop_loop_item_title' );
                    
                        /**
                         * woocommerce_shop_loop_item_title hook.
                         *
                         * @hooked woocommerce_template_loop_product_title - 10
                         */
                        do_action( 'woocommerce_shop_loop_item_title' );
                    ?>
                    </a>
					<?php
                        /**
                         * woocommerce_after_shop_loop_item_title hook.
                         *
                         * @hooked woocommerce_template_loop_rating - 5
                         * @hooked woocommerce_template_loop_price - 10
                         */
                        do_action( 'woocommerce_after_shop_loop_item_title' );
                    ?>
                    </div>
                    <?php
                    endwhile;
                    wp_reset_query();
                    wp_reset_postdata();
                    ?>	
                    </div>
     </div>
     </div>
    </div>
     <?php } ?> 
     
     
     
     <?php if (isset($category_4)){ ?> 
    <div class="img" data-category-active="cat4">
     <div class="lindo-row-sup">
	 <div class="lindo-witch-8">
	 <?php echo $banner_4;?>
     </div>
     <div class="lindo-witch-2">
     <div class="lindo_pr_right">
     <?php 
                    if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
                    global $post, $woocommerce, $product;
                    $wp_query = new WP_Query( array('post_type' => 'product', 
                    'product_cat' => $slug4, 
                    'posts_per_page' => 2,
                    'nopagging' => true));
                    while ($wp_query->have_posts()) : $wp_query->the_post(); global  $post, $product;?>						
                    <div class="header_style_produc">
                        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
					   <?php
                        /**
                         * woocommerce_before_shop_loop_item_title hook.
                         *
                         * @hooked woocommerce_show_product_loop_sale_flash - 10
                         * @hooked woocommerce_template_loop_product_thumbnail - 10
                         */
                        do_action( 'woocommerce_before_shop_loop_item_title' );
                    
                        /**
                         * woocommerce_shop_loop_item_title hook.
                         *
                         * @hooked woocommerce_template_loop_product_title - 10
                         */
                        do_action( 'woocommerce_shop_loop_item_title' );
                    ?>
                    </a>
					<?php
                        /**
                         * woocommerce_after_shop_loop_item_title hook.
                         *
                         * @hooked woocommerce_template_loop_rating - 5
                         * @hooked woocommerce_template_loop_price - 10
                         */
                        do_action( 'woocommerce_after_shop_loop_item_title' );
                    ?>
                    </div>
                    <?php
                    endwhile;
                    wp_reset_query();
                    wp_reset_postdata();
                    ?>	
                    </div>
     </div>
     </div>
    </div>
     <?php } ?> 
     
     
     <?php if (isset($category_5)){ ?> 
    <div class="img" data-category-active="cat5">
     <div class="lindo-row-sup">
	 <div class="lindo-witch-8">
	 <?php echo $banner_5;?>
     </div>
     <div class="lindo-witch-2">
     <div class="lindo_pr_right">
     <?php 
                    if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
                    global $post, $woocommerce, $product;
                    $wp_query = new WP_Query( array('post_type' => 'product', 
                    'product_cat' => $slug5, 
                    'posts_per_page' => 2,
                    'nopagging' => true));
                    while ($wp_query->have_posts()) : $wp_query->the_post(); global  $post, $product;?>						
                    <div class="header_style_produc">
                        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
					   <?php
                        /**
                         * woocommerce_before_shop_loop_item_title hook.
                         *
                         * @hooked woocommerce_show_product_loop_sale_flash - 10
                         * @hooked woocommerce_template_loop_product_thumbnail - 10
                         */
                        do_action( 'woocommerce_before_shop_loop_item_title' );
                    
                        /**
                         * woocommerce_shop_loop_item_title hook.
                         *
                         * @hooked woocommerce_template_loop_product_title - 10
                         */
                        do_action( 'woocommerce_shop_loop_item_title' );
                    ?>
                    </a>
					<?php
                        /**
                         * woocommerce_after_shop_loop_item_title hook.
                         *
                         * @hooked woocommerce_template_loop_rating - 5
                         * @hooked woocommerce_template_loop_price - 10
                         */
                        do_action( 'woocommerce_after_shop_loop_item_title' );
                    ?>
                    </div>
                    <?php
                    endwhile;
                    wp_reset_query();
                    wp_reset_postdata();
                    ?>	
                    </div>
     </div>
     </div>
    </div>
     <?php } ?> 
     
     
     <?php if (isset($category_6)){ ?> 
    <div class="img" data-category-active="cat6">
     <div class="lindo-row-sup">
	 <div class="lindo-witch-8">
	 <?php echo $banner_6;?>
     </div>
     <div class="lindo-witch-2">
     <div class="lindo_pr_right">
     <?php 
                    if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
                    global $post, $woocommerce, $product;
                    $wp_query = new WP_Query( array('post_type' => 'product', 
                    'product_cat' => $slug6, 
                    'posts_per_page' => 2,
                    'nopagging' => true));
                    while ($wp_query->have_posts()) : $wp_query->the_post(); global  $post, $product;?>						
                    <div class="header_style_produc">
                        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
					   <?php
                        /**
                         * woocommerce_before_shop_loop_item_title hook.
                         *
                         * @hooked woocommerce_show_product_loop_sale_flash - 10
                         * @hooked woocommerce_template_loop_product_thumbnail - 10
                         */
                        do_action( 'woocommerce_before_shop_loop_item_title' );
                    
                        /**
                         * woocommerce_shop_loop_item_title hook.
                         *
                         * @hooked woocommerce_template_loop_product_title - 10
                         */
                        do_action( 'woocommerce_shop_loop_item_title' );
                    ?>
                    </a>
					<?php
                        /**
                         * woocommerce_after_shop_loop_item_title hook.
                         *
                         * @hooked woocommerce_template_loop_rating - 5
                         * @hooked woocommerce_template_loop_price - 10
                         */
                        do_action( 'woocommerce_after_shop_loop_item_title' );
                    ?>
                    </div>
                    <?php
                    endwhile;
                    wp_reset_query();
                    wp_reset_postdata();
                    ?>	
                    </div>
     </div>
     </div>
    </div>
     <?php } ?> 
     
     
     <?php if (isset($category_7)){ ?> 
    <div class="img" data-category-active="cat7">
     <div class="lindo-row-sup">
	 <div class="lindo-witch-8">
	 <?php echo $banner_7;?>
     </div>
     <div class="lindo-witch-2">
     <div class="lindo_pr_right">
     <?php 
                    if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
                    global $post, $woocommerce, $product;
                    $wp_query = new WP_Query( array('post_type' => 'product', 
                    'product_cat' => $slug7, 
                    'posts_per_page' => 2,
                    'nopagging' => true));
                    while ($wp_query->have_posts()) : $wp_query->the_post(); global  $post, $product;?>						
                    <div class="header_style_produc">
                        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
					   <?php
                        /**
                         * woocommerce_before_shop_loop_item_title hook.
                         *
                         * @hooked woocommerce_show_product_loop_sale_flash - 10
                         * @hooked woocommerce_template_loop_product_thumbnail - 10
                         */
                        do_action( 'woocommerce_before_shop_loop_item_title' );
                    
                        /**
                         * woocommerce_shop_loop_item_title hook.
                         *
                         * @hooked woocommerce_template_loop_product_title - 10
                         */
                        do_action( 'woocommerce_shop_loop_item_title' );
                    ?>
                    </a>
					<?php
                        /**
                         * woocommerce_after_shop_loop_item_title hook.
                         *
                         * @hooked woocommerce_template_loop_rating - 5
                         * @hooked woocommerce_template_loop_price - 10
                         */
                        do_action( 'woocommerce_after_shop_loop_item_title' );
                    ?>
                    </div>
                    <?php
                    endwhile;
                    wp_reset_query();
                    wp_reset_postdata();
                    ?>	
                    </div>
     </div>
     </div>
    </div>
     <?php } ?> 
     
     
     <?php if (isset($category_8)){ ?> 
    <div class="img" data-category-active="cat8">
     <div class="lindo-row-sup">
	 <div class="lindo-witch-8">
	 <?php echo $banner_8;?>
     </div>
     <div class="lindo-witch-2">
     <div class="lindo_pr_right">
     <?php 
                    if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
                    global $post, $woocommerce, $product;
                    $wp_query = new WP_Query( array('post_type' => 'product', 
                    'product_cat' => $slug8, 
                    'posts_per_page' => 2,
                    'nopagging' => true));
                    while ($wp_query->have_posts()) : $wp_query->the_post(); global  $post, $product;?>						
                    <div class="header_style_produc">
                        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
					   <?php
                        /**
                         * woocommerce_before_shop_loop_item_title hook.
                         *
                         * @hooked woocommerce_show_product_loop_sale_flash - 10
                         * @hooked woocommerce_template_loop_product_thumbnail - 10
                         */
                        do_action( 'woocommerce_before_shop_loop_item_title' );
                    
                        /**
                         * woocommerce_shop_loop_item_title hook.
                         *
                         * @hooked woocommerce_template_loop_product_title - 10
                         */
                        do_action( 'woocommerce_shop_loop_item_title' );
                    ?>
                    </a>
					<?php
                        /**
                         * woocommerce_after_shop_loop_item_title hook.
                         *
                         * @hooked woocommerce_template_loop_rating - 5
                         * @hooked woocommerce_template_loop_price - 10
                         */
                        do_action( 'woocommerce_after_shop_loop_item_title' );
                    ?>
                    </div>
                    <?php
                    endwhile;
                    wp_reset_query();
                    wp_reset_postdata();
                    ?>	
                    </div>
     </div>
     </div>
    </div>
     <?php } ?> 
     
     <?php if (isset($category_9)){ ?> 
    <div class="img" data-category-active="cat9">
     <div class="lindo-row-sup">
	 <div class="lindo-witch-8">
	 <?php echo $banner_9;?>
     </div>
     <div class="lindo-witch-2">
     <div class="lindo_pr_right">
     <?php 
                    if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
                    global $post, $woocommerce, $product;
                    $wp_query = new WP_Query( array('post_type' => 'product', 
                    'product_cat' => $slug9, 
                    'posts_per_page' => 2,
                    'nopagging' => true));
                    while ($wp_query->have_posts()) : $wp_query->the_post(); global  $post, $product;?>						
                    <div class="header_style_produc">
                        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
					   <?php
                        /**
                         * woocommerce_before_shop_loop_item_title hook.
                         *
                         * @hooked woocommerce_show_product_loop_sale_flash - 10
                         * @hooked woocommerce_template_loop_product_thumbnail - 10
                         */
                        do_action( 'woocommerce_before_shop_loop_item_title' );
                    
                        /**
                         * woocommerce_shop_loop_item_title hook.
                         *
                         * @hooked woocommerce_template_loop_product_title - 10
                         */
                        do_action( 'woocommerce_shop_loop_item_title' );
                    ?>
                    </a>
					<?php
                        /**
                         * woocommerce_after_shop_loop_item_title hook.
                         *
                         * @hooked woocommerce_template_loop_rating - 5
                         * @hooked woocommerce_template_loop_price - 10
                         */
                        do_action( 'woocommerce_after_shop_loop_item_title' );
                    ?>
                    </div>
                    <?php
                    endwhile;
                    wp_reset_query();
                    wp_reset_postdata();
                    ?>	
                    </div>
     </div>
     </div>
    </div>
     <?php } ?> 
     
     
     <?php if (isset($category_10)){ ?> 
    <div class="img" data-category-active="cat10">
     <div class="lindo-row-sup">
	 <div class="lindo-witch-8">
	 <?php echo $banner_10;?>
     </div>
     <div class="lindo-witch-2">
     <div class="lindo_pr_right">
     <?php 
                    if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
                    global $post, $woocommerce, $product;
                    $wp_query = new WP_Query( array('post_type' => 'product', 
                    'product_cat' => $slug10, 
                    'posts_per_page' => 2,
                    'nopagging' => true));
                    while ($wp_query->have_posts()) : $wp_query->the_post(); global  $post, $product;?>						
                    <div class="header_style_produc">
                        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
					   <?php
                        /**
                         * woocommerce_before_shop_loop_item_title hook.
                         *
                         * @hooked woocommerce_show_product_loop_sale_flash - 10
                         * @hooked woocommerce_template_loop_product_thumbnail - 10
                         */
                        do_action( 'woocommerce_before_shop_loop_item_title' );
                    
                        /**
                         * woocommerce_shop_loop_item_title hook.
                         *
                         * @hooked woocommerce_template_loop_product_title - 10
                         */
                        do_action( 'woocommerce_shop_loop_item_title' );
                    ?>
                    </a>
					<?php
                        /**
                         * woocommerce_after_shop_loop_item_title hook.
                         *
                         * @hooked woocommerce_template_loop_rating - 5
                         * @hooked woocommerce_template_loop_price - 10
                         */
                        do_action( 'woocommerce_after_shop_loop_item_title' );
                    ?>
                    </div>
                    <?php
                    endwhile;
                    wp_reset_query();
                    wp_reset_postdata();
                    ?>	
                    </div>
     </div>
     </div>
    </div>
     <?php } ?> 
     
     
     <?php if (isset($category_11)){ ?> 
    <div class="img" data-category-active="cat11">
     <div class="lindo-row-sup">
	 <div class="lindo-witch-8">
	 <?php echo $banner_11;?>
     </div>
     <div class="lindo-witch-2">
     <div class="lindo_pr_right">
     <?php 
                    if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
                    global $post, $woocommerce, $product;
                    $wp_query = new WP_Query( array('post_type' => 'product', 
                    'product_cat' => $slug11, 
                    'posts_per_page' => 2,
                    'nopagging' => true));
                    while ($wp_query->have_posts()) : $wp_query->the_post(); global  $post, $product;?>						
                    <div class="header_style_produc">
                        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
					   <?php
                        /**
                         * woocommerce_before_shop_loop_item_title hook.
                         *
                         * @hooked woocommerce_show_product_loop_sale_flash - 10
                         * @hooked woocommerce_template_loop_product_thumbnail - 10
                         */
                        do_action( 'woocommerce_before_shop_loop_item_title' );
                    
                        /**
                         * woocommerce_shop_loop_item_title hook.
                         *
                         * @hooked woocommerce_template_loop_product_title - 10
                         */
                        do_action( 'woocommerce_shop_loop_item_title' );
                    ?>
                    </a>
					<?php
                        /**
                         * woocommerce_after_shop_loop_item_title hook.
                         *
                         * @hooked woocommerce_template_loop_rating - 5
                         * @hooked woocommerce_template_loop_price - 10
                         */
                        do_action( 'woocommerce_after_shop_loop_item_title' );
                    ?>
                    </div>
                    <?php
                    endwhile;
                    wp_reset_query();
                    wp_reset_postdata();
                    ?>	
                    </div>
     </div>
     </div>
    </div>
     <?php } ?> 
     
     
     <?php if (isset($category_12)){ ?> 
    <div class="img" data-category-active="cat12">
     <div class="lindo-row-sup">
	 <div class="lindo-witch-8">
	 <?php echo $banner_12;?>
     </div>
     <div class="lindo-witch-2">
     <div class="lindo_pr_right">
     <?php 
                    if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
                    global $post, $woocommerce, $product;
                    $wp_query = new WP_Query( array('post_type' => 'product', 
                    'product_cat' => $slug12, 
                    'posts_per_page' => 2,
                    'nopagging' => true));
                    while ($wp_query->have_posts()) : $wp_query->the_post(); global  $post, $product;?>						
                    <div class="header_style_produc">
                        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
					   <?php
                        /**
                         * woocommerce_before_shop_loop_item_title hook.
                         *
                         * @hooked woocommerce_show_product_loop_sale_flash - 10
                         * @hooked woocommerce_template_loop_product_thumbnail - 10
                         */
                        do_action( 'woocommerce_before_shop_loop_item_title' );
                    
                        /**
                         * woocommerce_shop_loop_item_title hook.
                         *
                         * @hooked woocommerce_template_loop_product_title - 10
                         */
                        do_action( 'woocommerce_shop_loop_item_title' );
                    ?>
                    </a>
					<?php
                        /**
                         * woocommerce_after_shop_loop_item_title hook.
                         *
                         * @hooked woocommerce_template_loop_rating - 5
                         * @hooked woocommerce_template_loop_price - 10
                         */
                        do_action( 'woocommerce_after_shop_loop_item_title' );
                    ?>
                    </div>
                    <?php
                    endwhile;
                    wp_reset_query();
                    wp_reset_postdata();
                    ?>	
                    </div>
     </div>
     </div>
    </div>
     <?php } ?> 
     
     
     <?php if (isset($category_13)){ ?> 
    <div class="img" data-category-active="cat13">
     <div class="lindo-row-sup">
	 <div class="lindo-witch-8">
	 <?php echo $banner_13;?>
     </div>
     <div class="lindo-witch-2">
     <div class="lindo_pr_right">
     <?php 
                    if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
                    global $post, $woocommerce, $product;
                    $wp_query = new WP_Query( array('post_type' => 'product', 
                    'product_cat' => $slug13, 
                    'posts_per_page' => 2,
                    'nopagging' => true));
                    while ($wp_query->have_posts()) : $wp_query->the_post(); global  $post, $product;?>						
                    <div class="header_style_produc">
                        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
					   <?php
                        /**
                         * woocommerce_before_shop_loop_item_title hook.
                         *
                         * @hooked woocommerce_show_product_loop_sale_flash - 10
                         * @hooked woocommerce_template_loop_product_thumbnail - 10
                         */
                        do_action( 'woocommerce_before_shop_loop_item_title' );
                    
                        /**
                         * woocommerce_shop_loop_item_title hook.
                         *
                         * @hooked woocommerce_template_loop_product_title - 10
                         */
                        do_action( 'woocommerce_shop_loop_item_title' );
                    ?>
                    </a>
					<?php
                        /**
                         * woocommerce_after_shop_loop_item_title hook.
                         *
                         * @hooked woocommerce_template_loop_rating - 5
                         * @hooked woocommerce_template_loop_price - 10
                         */
                        do_action( 'woocommerce_after_shop_loop_item_title' );
                    ?>
                    </div>
                    <?php
                    endwhile;
                    wp_reset_query();
                    wp_reset_postdata();
                    ?>	
                    </div>
     </div>
     </div>
    </div>
     <?php } ?> 
     
     <?php if (isset($category_14)){ ?> 
    <div class="img" data-category-active="cat14">
     <div class="lindo-row-sup">
	 <div class="lindo-witch-8">
	 <?php echo $banner_14;?>
     </div>
     <div class="lindo-witch-2">
     <div class="lindo_pr_right">
     <?php 
                    if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
                    global $post, $woocommerce, $product;
                    $wp_query = new WP_Query( array('post_type' => 'product', 
                    'product_cat' => $slug14, 
                    'posts_per_page' => 2,
                    'nopagging' => true));
                    while ($wp_query->have_posts()) : $wp_query->the_post(); global  $post, $product;?>						
                    <div class="header_style_produc">
                        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
					   <?php
                        /**
                         * woocommerce_before_shop_loop_item_title hook.
                         *
                         * @hooked woocommerce_show_product_loop_sale_flash - 10
                         * @hooked woocommerce_template_loop_product_thumbnail - 10
                         */
                        do_action( 'woocommerce_before_shop_loop_item_title' );
                    
                        /**
                         * woocommerce_shop_loop_item_title hook.
                         *
                         * @hooked woocommerce_template_loop_product_title - 10
                         */
                        do_action( 'woocommerce_shop_loop_item_title' );
                    ?>
                    </a>
					<?php
                        /**
                         * woocommerce_after_shop_loop_item_title hook.
                         *
                         * @hooked woocommerce_template_loop_rating - 5
                         * @hooked woocommerce_template_loop_price - 10
                         */
                        do_action( 'woocommerce_after_shop_loop_item_title' );
                    ?>
                    </div>
                    <?php
                    endwhile;
                    wp_reset_query();
                    wp_reset_postdata();
                    ?>	
                    </div>
     </div>
     </div>
    </div>
     <?php } ?> 
     
     
      <?php if (isset($category_15)){ ?> 
    <div class="img" data-category-active="cat15">
     <div class="lindo-row-sup">
	 <div class="lindo-witch-8">
	 <?php echo $banner_15;?>
     </div>
     <div class="lindo-witch-2">
     <div class="lindo_pr_right">
     <?php 
                    if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
                    global $post, $woocommerce, $product;
                    $wp_query = new WP_Query( array('post_type' => 'product', 
                    'product_cat' => $slug15, 
                    'posts_per_page' => 2,
                    'nopagging' => true));
                    while ($wp_query->have_posts()) : $wp_query->the_post(); global  $post, $product;?>						
                    <div class="header_style_produc">
                        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
					   <?php
                        /**
                         * woocommerce_before_shop_loop_item_title hook.
                         *
                         * @hooked woocommerce_show_product_loop_sale_flash - 10
                         * @hooked woocommerce_template_loop_product_thumbnail - 10
                         */
                        do_action( 'woocommerce_before_shop_loop_item_title' );
                    
                        /**
                         * woocommerce_shop_loop_item_title hook.
                         *
                         * @hooked woocommerce_template_loop_product_title - 10
                         */
                        do_action( 'woocommerce_shop_loop_item_title' );
                    ?>
                    </a>
					<?php
                        /**
                         * woocommerce_after_shop_loop_item_title hook.
                         *
                         * @hooked woocommerce_template_loop_rating - 5
                         * @hooked woocommerce_template_loop_price - 10
                         */
                        do_action( 'woocommerce_after_shop_loop_item_title' );
                    ?>
                    </div>
                    <?php
                    endwhile;
                    wp_reset_query();
                    wp_reset_postdata();
                    ?>	
                    </div>
     </div>
     </div>
    </div>
     <?php } ?> 
  </div>
  </div>
  </div>
</div>

</div>


	<?php
	echo $args['after_widget'];
	}
	
	function update($new_instance, $old_instance) {
		return $new_instance;
	}
	
	function form($instance) {
		$category_1 = isset ( $instance ['category_1'] ) ? esc_attr ( $instance ['category_1'] ) : '';
		$category_2 = isset ( $instance ['category_2'] ) ? esc_attr ( $instance ['category_2'] ) : '';
		$category_3 = isset ( $instance ['category_3'] ) ? esc_attr ( $instance ['category_3'] ) : '';
		$category_4 = isset ( $instance ['category_4'] ) ? esc_attr ( $instance ['category_4'] ) : '';
		$category_5 = isset ( $instance ['category_5'] ) ? esc_attr ( $instance ['category_5'] ) : '';
		$category_6 = isset ( $instance ['category_6'] ) ? esc_attr ( $instance ['category_6'] ) : '';
		$category_7 = isset ( $instance ['category_7'] ) ? esc_attr ( $instance ['category_7'] ) : '';
		$category_8 = isset ( $instance ['category_8'] ) ? esc_attr ( $instance ['category_8'] ) : '';
		$category_9 = isset ( $instance ['category_9'] ) ? esc_attr ( $instance ['category_9'] ) : '';
		$category_10 = isset ( $instance ['category_10'] ) ? esc_attr ( $instance ['category_10'] ) : '';
		$category_11 = isset ( $instance ['category_11'] ) ? esc_attr ( $instance ['category_11'] ) : '';
		$category_12 = isset ( $instance ['category_12'] ) ? esc_attr ( $instance ['category_12'] ) : '';
		$category_13 = isset ( $instance ['category_13'] ) ? esc_attr ( $instance ['category_13'] ) : '';
		$category_14 = isset ( $instance ['category_14'] ) ? esc_attr ( $instance ['category_14'] ) : '';
		$category_15 = isset ( $instance ['category_15'] ) ? esc_attr ( $instance ['category_15'] ) : '';
		
	    $icon_1 = isset ( $instance ['icon_1'] ) ? esc_attr ( $instance ['icon_1'] ) : '';
		$icon_2 = isset ( $instance ['icon_2'] ) ? esc_attr ( $instance ['icon_2'] ) : '';
		$icon_3 = isset ( $instance ['icon_3'] ) ? esc_attr ( $instance ['icon_3'] ) : '';
		$icon_4 = isset ( $instance ['icon_4'] ) ? esc_attr ( $instance ['icon_4'] ) : '';
		$icon_5 = isset ( $instance ['icon_5'] ) ? esc_attr ( $instance ['icon_5'] ) : '';
		$icon_6 = isset ( $instance ['icon_6'] ) ? esc_attr ( $instance ['icon_6'] ) : '';
		$icon_7 = isset ( $instance ['icon_7'] ) ? esc_attr ( $instance ['icon_7'] ) : '';
		$icon_8 = isset ( $instance ['icon_8'] ) ? esc_attr ( $instance ['icon_8'] ) : '';
		$icon_9 = isset ( $instance ['icon_9'] ) ? esc_attr ( $instance ['icon_9'] ) : '';
		$icon_10 = isset ( $instance ['icon_10'] ) ? esc_attr ( $instance ['icon_10'] ) : '';
		$icon_11 = isset ( $instance ['icon_11'] ) ? esc_attr ( $instance ['icon_11'] ) : '';
		$icon_12 = isset ( $instance ['icon_12'] ) ? esc_attr ( $instance ['icon_12'] ) : '';
		$icon_13 = isset ( $instance ['icon_13'] ) ? esc_attr ( $instance ['icon_13'] ) : '';
		$icon_14 = isset ( $instance ['icon_14'] ) ? esc_attr ( $instance ['icon_14'] ) : '';
		$icon_15 = isset ( $instance ['icon_15'] ) ? esc_attr ( $instance ['icon_15'] ) : '';
		
		
		
		
		$banner_1 = isset ( $instance ['banner_1'] ) ? esc_attr ( $instance ['banner_1'] ) : '';
		$banner_2 = isset ( $instance ['banner_2'] ) ? esc_attr ( $instance ['banner_2'] ) : '';
		$banner_3 = isset ( $instance ['banner_3'] ) ? esc_attr ( $instance ['banner_3'] ) : '';
		$banner_4 = isset ( $instance ['banner_4'] ) ? esc_attr ( $instance ['banner_4'] ) : '';
		$banner_5 = isset ( $instance ['banner_5'] ) ? esc_attr ( $instance ['banner_5'] ) : '';
		$banner_6 = isset ( $instance ['banner_6'] ) ? esc_attr ( $instance ['banner_6'] ) : '';
		$banner_7 = isset ( $instance ['banner_7'] ) ? esc_attr ( $instance ['banner_7'] ) : '';
		$banner_8 = isset ( $instance ['banner_8'] ) ? esc_attr ( $instance ['banner_8'] ) : '';
		$banner_9 = isset ( $instance ['banner_9'] ) ? esc_attr ( $instance ['banner_9'] ) : '';
		$banner_10 = isset ( $instance ['banner_10'] ) ? esc_attr ( $instance ['banner_10'] ) : '';
		$banner_11 = isset ( $instance ['banner_11'] ) ? esc_attr ( $instance ['banner_11'] ) : '';
		$banner_12 = isset ( $instance ['banner_12'] ) ? esc_attr ( $instance ['banner_12'] ) : '';
		$banner_13 = isset ( $instance ['banner_13'] ) ? esc_attr ( $instance ['banner_13'] ) : '';
		$banner_14 = isset ( $instance ['banner_14'] ) ? esc_attr ( $instance ['banner_14'] ) : '';
		$banner_15 = isset ( $instance ['banner_15'] ) ? esc_attr ( $instance ['banner_15'] ) : '';
		
		$sup_menu_1 = isset ( $instance ['sup_menu_1'] ) ? esc_attr ( $instance ['sup_menu_1'] ) : '';
		$sup_menu_2 = isset ( $instance ['sup_menu_2'] ) ? esc_attr ( $instance ['sup_menu_2'] ) : '';
		$sup_menu_3 = isset ( $instance ['sup_menu_3'] ) ? esc_attr ( $instance ['sup_menu_3'] ) : '';
		$sup_menu_4 = isset ( $instance ['sup_menu_4'] ) ? esc_attr ( $instance ['sup_menu_4'] ) : '';
		$sup_menu_5 = isset ( $instance ['sup_menu_5'] ) ? esc_attr ( $instance ['sup_menu_5'] ) : '';
		$sup_menu_6 = isset ( $instance ['sup_menu_6'] ) ? esc_attr ( $instance ['sup_menu_6'] ) : '';
		$sup_menu_7 = isset ( $instance ['sup_menu_7'] ) ? esc_attr ( $instance ['sup_menu_7'] ) : '';
		$sup_menu_8 = isset ( $instance ['sup_menu_8'] ) ? esc_attr ( $instance ['sup_menu_8'] ) : '';
		$sup_menu_9 = isset ( $instance ['sup_menu_9'] ) ? esc_attr ( $instance ['sup_menu_9'] ) : '';
		$sup_menu_10 = isset ( $instance ['sup_menu_10'] ) ? esc_attr ( $instance ['sup_menu_10'] ) : '';
		$sup_menu_11 = isset ( $instance ['sup_menu_11'] ) ? esc_attr ( $instance ['sup_menu_11'] ) : '';
		$sup_menu_12 = isset ( $instance ['sup_menu_12'] ) ? esc_attr ( $instance ['sup_menu_12'] ) : '';
		$sup_menu_13 = isset ( $instance ['sup_menu_13'] ) ? esc_attr ( $instance ['sup_menu_13'] ) : '';
		$sup_menu_14 = isset ( $instance ['sup_menu_14'] ) ? esc_attr ( $instance ['sup_menu_14'] ) : '';
		$sup_menu_15 = isset ( $instance ['sup_menu_15'] ) ? esc_attr ( $instance ['sup_menu_15'] ) : '';
		
		
		
		/*$count = isset ( $instance ['count'] ) && is_numeric ( $instance ['count'] ) ? esc_attr ( $instance ['count'] ) : '5';
		$orderby = isset ( $instance ['orderby'] ) ? $instance ['orderby'] : '';
		$order = isset ( $instance ['order'] ) ? $instance ['order'] : '';
		$html_link = isset ( $instance ['html_link'] ) ? $instance ['html_link'] : '';*/
?>

<div class="admin_lindo_mega_menu">

    <div class="widgets-holder-wrap">
		<div class="widgets-sortables ui-droppable ui-sortable">
        <div class="sidebar-name">
			<div class="sidebar-name-arrow"><br></div>
            <h2>Mega Menu 1<span class="spinner"></span></h2>
		</div>
        <div class="widget open">
  <label>Menu produc (Lựa chọn)</label>    
 <select class="lindo_style" id="<?php echo $this->get_field_id('category_1'); ?>"
	name="<?php echo $this->get_field_name('category_1'); ?>">
    <option value=" ">Lựa chọn danh mục</option>
	<?php $cats = get_categories(array('taxonomy' => 'product_cat'));
	foreach ($cats as $cat) {
		echo '<option value="' . $cat->term_id . '" ' .( $cat->term_id == $category_1 ? 'selected="selected"' : '' ). '>' . $cat->name . '</option>';
	} ?>
</select>
<hr>
<label>Icon (Text or images)</label> 
<textarea class="lindo_style" id="<?php echo $this->get_field_id('icon_1'); ?>"
	name="<?php echo $this->get_field_name('icon_1'); ?>"><?php echo $icon_1 ; ?>
</textarea> 
<hr>
<label>Banner Slider (*  Images)</label> 
<textarea class="lindo_style" id="<?php echo $this->get_field_id('banner_1'); ?>"
	name="<?php echo $this->get_field_name('banner_1'); ?>"><?php echo $banner_1 ; ?>
</textarea> 
<hr>
<label>Sub menu (hệ thống menu con)</label> 
<textarea class="lindo_style" id="<?php echo $this->get_field_id('sup_menu_1'); ?>"
	name="<?php echo $this->get_field_name('sup_menu_1'); ?>"><?php echo $sup_menu_1 ; ?>
</textarea> 
      
        </div>
     </div>
    </div>  <!--- end Mega Menu 1 -->
    
   
   
   <div class="widgets-holder-wrap closed">
		<div class="widgets-sortables ui-droppable ui-sortable">
        <div class="sidebar-name">
			<div class="sidebar-name-arrow"><br></div>
            <h2>Mega Menu 2<span class="spinner"></span></h2>
		</div>
        <div class="widget open">
  <label>Menu produc (Lựa chọn)</label>    
 <select class="lindo_style" id="<?php echo $this->get_field_id('category_2'); ?>"
	name="<?php echo $this->get_field_name('category_2'); ?>">
    <option value=" ">Lựa chọn danh mục</option>
	<?php $cats = get_categories(array('taxonomy' => 'product_cat'));
	foreach ($cats as $cat) {
		echo '<option value="' . $cat->term_id . '" ' .( $cat->term_id == $category_2 ? 'selected="selected"' : '' ). '>' . $cat->name . '</option>';
	} ?>
</select>
<hr>
<label>Icon (Text or images)</label> 
<textarea class="lindo_style" id="<?php echo $this->get_field_id('icon_2'); ?>"
	name="<?php echo $this->get_field_name('icon_2'); ?>"><?php echo $icon_2 ; ?>
</textarea> 
<hr>
<label>Banner Slider (*  Images)</label> 
<textarea class="lindo_style" id="<?php echo $this->get_field_id('banner_2'); ?>"
	name="<?php echo $this->get_field_name('banner_2'); ?>"><?php echo $banner_2 ; ?>
</textarea> 
<hr>
<label>Sub menu (hệ thống menu con)</label> 
<textarea class="lindo_style" id="<?php echo $this->get_field_id('sup_menu_2'); ?>"
	name="<?php echo $this->get_field_name('sup_menu_2'); ?>"><?php echo $sup_menu_2 ; ?>
</textarea> 
      
        </div>
     </div>
    </div>  <!--- end Mega Menu 2 -->
    
    <div class="widgets-holder-wrap closed">
		<div class="widgets-sortables ui-droppable ui-sortable">
        <div class="sidebar-name">
			<div class="sidebar-name-arrow"><br></div>
            <h2>Mega Menu 3<span class="spinner"></span></h2>
		</div>
        <div class="widget open">
  <label>Menu produc (Lựa chọn)</label>    
 <select class="lindo_style" id="<?php echo $this->get_field_id('category_3'); ?>"
	name="<?php echo $this->get_field_name('category_3'); ?>">
    <option value=" ">Lựa chọn danh mục</option>
	<?php $cats = get_categories(array('taxonomy' => 'product_cat'));
	foreach ($cats as $cat) {
		echo '<option value="' . $cat->term_id . '" ' .( $cat->term_id == $category_3 ? 'selected="selected"' : '' ). '>' . $cat->name . '</option>';
	} ?>
</select>
<hr>
<label>Icon (Text or images)</label> 
<textarea class="lindo_style" id="<?php echo $this->get_field_id('icon_3'); ?>"
	name="<?php echo $this->get_field_name('icon_3'); ?>"><?php echo $icon_3 ; ?>
</textarea> 
<hr>
<label>Banner Slider (*  Images)</label> 
<textarea class="lindo_style" id="<?php echo $this->get_field_id('banner_3'); ?>"
	name="<?php echo $this->get_field_name('banner_3'); ?>"><?php echo $banner_3 ; ?>
</textarea> 
<hr>
<label>Sub menu (hệ thống menu con)</label> 
<textarea class="lindo_style" id="<?php echo $this->get_field_id('sup_menu_3'); ?>"
	name="<?php echo $this->get_field_name('sup_menu_3'); ?>"><?php echo $sup_menu_3 ; ?>
</textarea> 
      
        </div>
     </div>
    </div>  <!--- end Mega Menu 3 -->
    
    
    <div class="widgets-holder-wrap closed">
		<div class="widgets-sortables ui-droppable ui-sortable">
        <div class="sidebar-name">
			<div class="sidebar-name-arrow"><br></div>
            <h2>Mega Menu 4<span class="spinner"></span></h2>
		</div>
        <div class="widget open">
  <label>Menu produc (Lựa chọn)</label>    
 <select class="lindo_style" id="<?php echo $this->get_field_id('category_4'); ?>"
	name="<?php echo $this->get_field_name('category_4'); ?>">
    <option value=" ">Lựa chọn danh mục</option>
	<?php $cats = get_categories(array('taxonomy' => 'product_cat'));
	foreach ($cats as $cat) {
		echo '<option value="' . $cat->term_id . '" ' .( $cat->term_id == $category_4 ? 'selected="selected"' : '' ). '>' . $cat->name . '</option>';
	} ?>
</select>
<hr>
<label>Icon (Text or images)</label> 
<textarea class="lindo_style" id="<?php echo $this->get_field_id('icon_4'); ?>"
	name="<?php echo $this->get_field_name('icon_4'); ?>"><?php echo $icon_4 ; ?>
</textarea> 
<hr>
<label>Banner Slider (*  Images)</label> 
<textarea class="lindo_style" id="<?php echo $this->get_field_id('banner_4'); ?>"
	name="<?php echo $this->get_field_name('banner_4'); ?>"><?php echo $banner_4 ; ?>
</textarea> 
<hr>
<label>Sub menu (hệ thống menu con)</label> 
<textarea class="lindo_style" id="<?php echo $this->get_field_id('sup_menu_4'); ?>"
	name="<?php echo $this->get_field_name('sup_menu_4'); ?>"><?php echo $sup_menu_4 ; ?>
</textarea> 
      
        </div>
     </div>
    </div>  <!--- end Mega Menu 4 -->
    
    
    <div class="widgets-holder-wrap closed">
		<div class="widgets-sortables ui-droppable ui-sortable">
        <div class="sidebar-name">
			<div class="sidebar-name-arrow"><br></div>
            <h2>Mega Menu 5<span class="spinner"></span></h2>
		</div>
        <div class="widget open">
  <label>Menu produc (Lựa chọn)</label>    
 <select class="lindo_style" id="<?php echo $this->get_field_id('category_5'); ?>"
	name="<?php echo $this->get_field_name('category_5'); ?>">
    <option value=" ">Lựa chọn danh mục</option>
	<?php $cats = get_categories(array('taxonomy' => 'product_cat'));
	foreach ($cats as $cat) {
		echo '<option value="' . $cat->term_id . '" ' .( $cat->term_id == $category_5 ? 'selected="selected"' : '' ). '>' . $cat->name . '</option>';
	} ?>
</select>
<hr>
<label>Icon (Text or images)</label> 
<textarea class="lindo_style" id="<?php echo $this->get_field_id('icon_5'); ?>"
	name="<?php echo $this->get_field_name('icon_5'); ?>"><?php echo $icon_5 ; ?>
</textarea> 
<hr>
<label>Banner Slider (*  Images)</label> 
<textarea class="lindo_style" id="<?php echo $this->get_field_id('banner_5'); ?>"
	name="<?php echo $this->get_field_name('banner_5'); ?>"><?php echo $banner_5 ; ?>
</textarea> 
<hr>
<label>Sub menu (hệ thống menu con)</label> 
<textarea class="lindo_style" id="<?php echo $this->get_field_id('sup_menu_5'); ?>"
	name="<?php echo $this->get_field_name('sup_menu_5'); ?>"><?php echo $sup_menu_5 ; ?>
</textarea> 
      
        </div>
     </div>
    </div>  <!--- end Mega Menu 5 -->
    
    <div class="widgets-holder-wrap closed">
		<div class="widgets-sortables ui-droppable ui-sortable">
        <div class="sidebar-name">
			<div class="sidebar-name-arrow"><br></div>
            <h2>Mega Menu 6<span class="spinner"></span></h2>
		</div>
        <div class="widget open">
  <label>Menu produc (Lựa chọn)</label>    
 <select class="lindo_style" id="<?php echo $this->get_field_id('category_6'); ?>"
	name="<?php echo $this->get_field_name('category_6'); ?>">
    <option value=" ">Lựa chọn danh mục</option>
	<?php $cats = get_categories(array('taxonomy' => 'product_cat'));
	foreach ($cats as $cat) {
		echo '<option value="' . $cat->term_id . '" ' .( $cat->term_id == $category_6 ? 'selected="selected"' : '' ). '>' . $cat->name . '</option>';
	} ?>
</select>
<hr>
<label>Icon (Text or images)</label> 
<textarea class="lindo_style" id="<?php echo $this->get_field_id('icon_6'); ?>"
	name="<?php echo $this->get_field_name('icon_6'); ?>"><?php echo $icon_6 ; ?>
</textarea> 
<hr>
<label>Banner Slider (*  Images)</label> 
<textarea class="lindo_style" id="<?php echo $this->get_field_id('banner_6'); ?>"
	name="<?php echo $this->get_field_name('banner_6'); ?>"><?php echo $banner_6 ; ?>
</textarea> 
<hr>
<label>Sub menu (hệ thống menu con)</label> 
<textarea class="lindo_style" id="<?php echo $this->get_field_id('sup_menu_6'); ?>"
	name="<?php echo $this->get_field_name('sup_menu_6'); ?>"><?php echo $sup_menu_6 ; ?>
</textarea> 
      
        </div>
     </div>
    </div>  <!--- end Mega Menu 6 -->
    
    
    <div class="widgets-holder-wrap closed">
		<div class="widgets-sortables ui-droppable ui-sortable">
        <div class="sidebar-name">
			<div class="sidebar-name-arrow"><br></div>
            <h2>Mega Menu 7<span class="spinner"></span></h2>
		</div>
        <div class="widget open">
  <label>Menu produc (Lựa chọn)</label>    
 <select class="lindo_style" id="<?php echo $this->get_field_id('category_7'); ?>"
	name="<?php echo $this->get_field_name('category_7'); ?>">
    <option value=" ">Lựa chọn danh mục</option>
	<?php $cats = get_categories(array('taxonomy' => 'product_cat'));
	foreach ($cats as $cat) {
		echo '<option value="' . $cat->term_id . '" ' .( $cat->term_id == $category_7 ? 'selected="selected"' : '' ). '>' . $cat->name . '</option>';
	} ?>
</select>
<hr>
<label>Icon (Text or images)</label> 
<textarea class="lindo_style" id="<?php echo $this->get_field_id('icon_7'); ?>"
	name="<?php echo $this->get_field_name('icon_7'); ?>"><?php echo $icon_7 ; ?>
</textarea> 
<hr>
<label>Banner Slider (*  Images)</label> 
<textarea class="lindo_style" id="<?php echo $this->get_field_id('banner_7'); ?>"
	name="<?php echo $this->get_field_name('banner_7'); ?>"><?php echo $banner_7 ; ?>
</textarea> 
<hr>
<label>Sub menu (hệ thống menu con)</label> 
<textarea class="lindo_style" id="<?php echo $this->get_field_id('sup_menu_7'); ?>"
	name="<?php echo $this->get_field_name('sup_menu_7'); ?>"><?php echo $sup_menu_7 ; ?>
</textarea> 
      
        </div>
     </div>
    </div>  <!--- end Mega Menu 7 -->
    
    
    <div class="widgets-holder-wrap closed">
		<div class="widgets-sortables ui-droppable ui-sortable">
        <div class="sidebar-name">
			<div class="sidebar-name-arrow"><br></div>
            <h2>Mega Menu 8<span class="spinner"></span></h2>
		</div>
        <div class="widget open">
  <label>Menu produc (Lựa chọn)</label>    
 <select class="lindo_style" id="<?php echo $this->get_field_id('category_8'); ?>"
	name="<?php echo $this->get_field_name('category_8'); ?>">
    <option value=" ">Lựa chọn danh mục</option>
	<?php $cats = get_categories(array('taxonomy' => 'product_cat'));
	foreach ($cats as $cat) {
		echo '<option value="' . $cat->term_id . '" ' .( $cat->term_id == $category_8 ? 'selected="selected"' : '' ). '>' . $cat->name . '</option>';
	} ?>
</select>
<hr>
<label>Icon (Text or images)</label> 
<textarea class="lindo_style" id="<?php echo $this->get_field_id('icon_8'); ?>"
	name="<?php echo $this->get_field_name('icon_8'); ?>"><?php echo $icon_8 ; ?>
</textarea> 
<hr>
<label>Banner Slider (*  Images)</label> 
<textarea class="lindo_style" id="<?php echo $this->get_field_id('banner_8'); ?>"
	name="<?php echo $this->get_field_name('banner_8'); ?>"><?php echo $banner_8 ; ?>
</textarea> 
<hr>
<label>Sub menu (hệ thống menu con)</label> 
<textarea class="lindo_style" id="<?php echo $this->get_field_id('sup_menu_8'); ?>"
	name="<?php echo $this->get_field_name('sup_menu_8'); ?>"><?php echo $sup_menu_8 ; ?>
</textarea> 
      
        </div>
     </div>
    </div>  <!--- end Mega Menu 8 -->
    
    <div class="widgets-holder-wrap closed">
		<div class="widgets-sortables ui-droppable ui-sortable">
        <div class="sidebar-name">
			<div class="sidebar-name-arrow"><br></div>
            <h2>Mega Menu 9<span class="spinner"></span></h2>
		</div>
        <div class="widget open">
  <label>Menu produc (Lựa chọn)</label>    
 <select class="lindo_style" id="<?php echo $this->get_field_id('category_9'); ?>"
	name="<?php echo $this->get_field_name('category_9'); ?>">
    <option value=" ">Lựa chọn danh mục</option>
	<?php $cats = get_categories(array('taxonomy' => 'product_cat'));
	foreach ($cats as $cat) {
		echo '<option value="' . $cat->term_id . '" ' .( $cat->term_id == $category_9 ? 'selected="selected"' : '' ). '>' . $cat->name . '</option>';
	} ?>
</select>
<hr>
<label>Icon (Text or images)</label> 
<textarea class="lindo_style" id="<?php echo $this->get_field_id('icon_9'); ?>"
	name="<?php echo $this->get_field_name('icon_9'); ?>"><?php echo $icon_9 ; ?>
</textarea> 
<hr>
<label>Banner Slider (*  Images)</label> 
<textarea class="lindo_style" id="<?php echo $this->get_field_id('banner_9'); ?>"
	name="<?php echo $this->get_field_name('banner_9'); ?>"><?php echo $banner_9 ; ?>
</textarea> 
<hr>
<label>Sub menu (hệ thống menu con)</label> 
<textarea class="lindo_style" id="<?php echo $this->get_field_id('sup_menu_9'); ?>"
	name="<?php echo $this->get_field_name('sup_menu_9'); ?>"><?php echo $sup_menu_9 ; ?>
</textarea> 
      
        </div>
     </div>
    </div>  <!--- end Mega Menu 9 -->
    
    
    <div class="widgets-holder-wrap closed">
		<div class="widgets-sortables ui-droppable ui-sortable">
        <div class="sidebar-name">
			<div class="sidebar-name-arrow"><br></div>
            <h2>Mega Menu 10<span class="spinner"></span></h2>
		</div>
        <div class="widget open">
  <label>Menu produc (Lựa chọn)</label>    
 <select class="lindo_style" id="<?php echo $this->get_field_id('category_10'); ?>"
	name="<?php echo $this->get_field_name('category_10'); ?>">
    <option value=" ">Lựa chọn danh mục</option>
	<?php $cats = get_categories(array('taxonomy' => 'product_cat'));
	foreach ($cats as $cat) {
		echo '<option value="' . $cat->term_id . '" ' .( $cat->term_id == $category_10 ? 'selected="selected"' : '' ). '>' . $cat->name . '</option>';
	} ?>
</select>
<hr>
<label>Icon (Text or images)</label> 
<textarea class="lindo_style" id="<?php echo $this->get_field_id('icon_10'); ?>"
	name="<?php echo $this->get_field_name('icon_10'); ?>"><?php echo $icon_10 ; ?>
</textarea> 
<hr>
<label>Banner Slider (*  Images)</label> 
<textarea class="lindo_style" id="<?php echo $this->get_field_id('banner_10'); ?>"
	name="<?php echo $this->get_field_name('banner_10'); ?>"><?php echo $banner_10 ; ?>
</textarea> 
<hr>
<label>Sub menu (hệ thống menu con)</label> 
<textarea class="lindo_style" id="<?php echo $this->get_field_id('sup_menu_10'); ?>"
	name="<?php echo $this->get_field_name('sup_menu_10'); ?>"><?php echo $sup_menu_10 ; ?>
</textarea> 
      
        </div>
     </div>
    </div>  <!--- end Mega Menu 10 -->
    
    
    <div class="widgets-holder-wrap closed">
		<div class="widgets-sortables ui-droppable ui-sortable">
        <div class="sidebar-name">
			<div class="sidebar-name-arrow"><br></div>
            <h2>Mega Menu 11<span class="spinner"></span></h2>
		</div>
        <div class="widget open">
  <label>Menu produc (Lựa chọn)</label>    
 <select class="lindo_style" id="<?php echo $this->get_field_id('category_11'); ?>"
	name="<?php echo $this->get_field_name('category_11'); ?>">
    <option value=" ">Lựa chọn danh mục</option>
	<?php $cats = get_categories(array('taxonomy' => 'product_cat'));
	foreach ($cats as $cat) {
		echo '<option value="' . $cat->term_id . '" ' .( $cat->term_id == $category_11 ? 'selected="selected"' : '' ). '>' . $cat->name . '</option>';
	} ?>
</select>
<hr>
<label>Icon (Text or images)</label> 
<textarea class="lindo_style" id="<?php echo $this->get_field_id('icon_11'); ?>"
	name="<?php echo $this->get_field_name('icon_11'); ?>"><?php echo $icon_11 ; ?>
</textarea> 
<hr>
<label>Banner Slider (*  Images)</label> 
<textarea class="lindo_style" id="<?php echo $this->get_field_id('banner_11'); ?>"
	name="<?php echo $this->get_field_name('banner_11'); ?>"><?php echo $banner_11 ; ?>
</textarea> 
<hr>
<label>Sub menu (hệ thống menu con)</label> 
<textarea class="lindo_style" id="<?php echo $this->get_field_id('sup_menu_11'); ?>"
	name="<?php echo $this->get_field_name('sup_menu_11'); ?>"><?php echo $sup_menu_11 ; ?>
</textarea> 
      
        </div>
     </div>
    </div>  <!--- end Mega Menu 11 -->
    
    <div class="widgets-holder-wrap closed">
		<div class="widgets-sortables ui-droppable ui-sortable">
        <div class="sidebar-name">
			<div class="sidebar-name-arrow"><br></div>
            <h2>Mega Menu 12<span class="spinner"></span></h2>
		</div>
        <div class="widget open">
  <label>Menu produc (Lựa chọn)</label>    
 <select class="lindo_style" id="<?php echo $this->get_field_id('category_12'); ?>"
	name="<?php echo $this->get_field_name('category_12'); ?>">
    <option value=" ">Lựa chọn danh mục</option>
	<?php $cats = get_categories(array('taxonomy' => 'product_cat'));
	foreach ($cats as $cat) {
		echo '<option value="' . $cat->term_id . '" ' .( $cat->term_id == $category_12 ? 'selected="selected"' : '' ). '>' . $cat->name . '</option>';
	} ?>
</select>
<hr>
<label>Icon (Text or images)</label> 
<textarea class="lindo_style" id="<?php echo $this->get_field_id('icon_12'); ?>"
	name="<?php echo $this->get_field_name('icon_12'); ?>"><?php echo $icon_12 ; ?>
</textarea> 
<hr>
<label>Banner Slider (*  Images)</label> 
<textarea class="lindo_style" id="<?php echo $this->get_field_id('banner_12'); ?>"
	name="<?php echo $this->get_field_name('banner_12'); ?>"><?php echo $banner_12 ; ?>
</textarea> 
<hr>
<label>Sub menu (hệ thống menu con)</label> 
<textarea class="lindo_style" id="<?php echo $this->get_field_id('sup_menu_12'); ?>"
	name="<?php echo $this->get_field_name('sup_menu_12'); ?>"><?php echo $sup_menu_12 ; ?>
</textarea> 
      
        </div>
     </div>
    </div>  <!--- end Mega Menu 12 -->
    
    <div class="widgets-holder-wrap closed">
		<div class="widgets-sortables ui-droppable ui-sortable">
        <div class="sidebar-name">
			<div class="sidebar-name-arrow"><br></div>
            <h2>Mega Menu 13<span class="spinner"></span></h2>
		</div>
        <div class="widget open">
  <label>Menu produc (Lựa chọn)</label>    
 <select class="lindo_style" id="<?php echo $this->get_field_id('category_13'); ?>"
	name="<?php echo $this->get_field_name('category_13'); ?>">
    <option value=" ">Lựa chọn danh mục</option>
	<?php $cats = get_categories(array('taxonomy' => 'product_cat'));
	foreach ($cats as $cat) {
		echo '<option value="' . $cat->term_id . '" ' .( $cat->term_id == $category_13 ? 'selected="selected"' : '' ). '>' . $cat->name . '</option>';
	} ?>
</select>
<hr>
<label>Icon (Text or images)</label> 
<textarea class="lindo_style" id="<?php echo $this->get_field_id('icon_13'); ?>"
	name="<?php echo $this->get_field_name('icon_13'); ?>"><?php echo $icon_13 ; ?>
</textarea> 
<hr>
<label>Banner Slider (*  Images)</label> 
<textarea class="lindo_style" id="<?php echo $this->get_field_id('banner_13'); ?>"
	name="<?php echo $this->get_field_name('banner_13'); ?>"><?php echo $banner_13 ; ?>
</textarea> 
<hr>
<label>Sub menu (hệ thống menu con)</label> 
<textarea class="lindo_style" id="<?php echo $this->get_field_id('sup_menu_13'); ?>"
	name="<?php echo $this->get_field_name('sup_menu_13'); ?>"><?php echo $sup_menu_13 ; ?>
</textarea> 
      
        </div>
     </div>
    </div>  <!--- end Mega Menu 13 -->
    
    <div class="widgets-holder-wrap closed">
		<div class="widgets-sortables ui-droppable ui-sortable">
        <div class="sidebar-name">
			<div class="sidebar-name-arrow"><br></div>
            <h2>Mega Menu 14<span class="spinner"></span></h2>
		</div>
        <div class="widget open">
  <label>Menu produc (Lựa chọn)</label>    
 <select class="lindo_style" id="<?php echo $this->get_field_id('category_14'); ?>"
	name="<?php echo $this->get_field_name('category_14'); ?>">
    <option value=" ">Lựa chọn danh mục</option>
	<?php $cats = get_categories(array('taxonomy' => 'product_cat'));
	foreach ($cats as $cat) {
		echo '<option value="' . $cat->term_id . '" ' .( $cat->term_id == $category_14 ? 'selected="selected"' : '' ). '>' . $cat->name . '</option>';
	} ?>
</select>
<hr>
<label>Icon (Text or images)</label> 
<textarea class="lindo_style" id="<?php echo $this->get_field_id('icon_14'); ?>"
	name="<?php echo $this->get_field_name('icon_14'); ?>"><?php echo $icon_14 ; ?>
</textarea> 
<hr>
<label>Banner Slider (*  Images)</label> 
<textarea class="lindo_style" id="<?php echo $this->get_field_id('banner_14'); ?>"
	name="<?php echo $this->get_field_name('banner_14'); ?>"><?php echo $banner_14 ; ?>
</textarea> 
<hr>
<label>Sub menu (hệ thống menu con)</label> 
<textarea class="lindo_style" id="<?php echo $this->get_field_id('sup_menu_14'); ?>"
	name="<?php echo $this->get_field_name('sup_menu_14'); ?>"><?php echo $sup_menu_14 ; ?>
</textarea> 
      
        </div>
     </div>
    </div>  <!--- end Mega Menu 14 --><br>




<div class="widgets-holder-wrap closed">
		<div class="widgets-sortables ui-droppable ui-sortable">
        <div class="sidebar-name">
			<div class="sidebar-name-arrow"><br></div>
            <h2>Mega Menu 15<span class="spinner"></span></h2>
		</div>
        <div class="widget open">
  <label>Menu produc (Lựa chọn)</label>    
 <select class="lindo_style" id="<?php echo $this->get_field_id('category_15'); ?>"
	name="<?php echo $this->get_field_name('category_15'); ?>">
    <option value=" ">Lựa chọn danh mục</option>
	<?php $cats = get_categories(array('taxonomy' => 'product_cat'));
	foreach ($cats as $cat) {
		echo '<option value="' . $cat->term_id . '" ' .( $cat->term_id == $category_15 ? 'selected="selected"' : '' ). '>' . $cat->name . '</option>';
	} ?>
</select>
<hr>
<label>Icon (Text or images)</label> 
<textarea class="lindo_style" id="<?php echo $this->get_field_id('icon_15'); ?>"
	name="<?php echo $this->get_field_name('icon_15'); ?>"><?php echo $icon_15 ; ?>
</textarea> 
<hr>
<label>Banner Slider (*  Images)</label> 
<textarea class="lindo_style" id="<?php echo $this->get_field_id('banner_15'); ?>"
	name="<?php echo $this->get_field_name('banner_15'); ?>"><?php echo $banner_15 ; ?>
</textarea> 
<hr>
<label>Sub menu (hệ thống menu con)</label> 
<textarea class="lindo_style" id="<?php echo $this->get_field_id('sup_menu_15'); ?>"
	name="<?php echo $this->get_field_name('sup_menu_15'); ?>"><?php echo $sup_menu_15 ; ?>
</textarea> 
      
        </div>
     </div>
    </div>  <!--- end Mega Menu 15 -->
     
    
    
</div>    
    
<?php 
    }
	
} // end class 

add_action('widgets_init', create_function('', 'return register_widget("lindo_nav_pro");'));



/**
 * Enqueue a script in the WordPress admin, excluding edit.php.
 *
 * @param int $hook Hook suffix for the current admin page.
 */
function lindo_nav_pro_stylescript() {
  wp_enqueue_style( 'lindo_admin-css', get_template_directory_uri() . '/inc/lindo-nav/css/admin-lindo.css', null, 'all' );
//  wp_enqueue_script( 'lindo_admin-init', get_template_directory_uri() . '/inc/lindo-nav/js/admin-lindo.js', null, true );

}
add_action('admin_enqueue_scripts', 'lindo_nav_pro_stylescript' );