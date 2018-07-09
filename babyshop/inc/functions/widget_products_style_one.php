<?php
    class Home_style_product_one extends WP_Widget {
	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'home-produc-one', 
			__( 'Home Produc Pro', 'lindo' ), // Name
			array( 'description' => __( 'Chọn sản phẩm hiển thị dạng đơn giản cho trang chủ.', 'lindo' ), ) // Args
		);
	}
	
	
	function widget($args, $instance) {
		extract ( $args );
		$category = apply_filters ( 'category', isset ( $instance ['category'] ) ? esc_attr ( $instance ['category'] ) : '' );
		$term = get_term( $category, 'product_cat' );
		$slug = $term->slug;	
		$name_produc = $term->name;	
		$tieude = apply_filters ( 'tieude', isset ( $instance ['tieude'] ) ? esc_attr ( $instance ['tieude'] ) : '' );
		$floor = apply_filters ( 'floor', isset ( $instance ['floor'] ) ? esc_attr ( $instance ['floor'] ) : '' );
		$html_link = apply_filters ( 'html_link', isset ( $instance ['html_link'] ) ? $instance ['html_link']  : '' );
		$logo = apply_filters ( 'logo', isset ( $instance ['logo'] ) ? $instance ['logo'] : '' );
		$icon = apply_filters ( 'icon', isset ( $instance ['icon'] ) ? $instance ['icon'] : '' );
		$banner = apply_filters ( 'banner', isset ( $instance ['banner'] ) ?  $instance ['banner'] : '' );

		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ). $args['after_title'];
		}
	?>


<div class="content_block lindo-home-box-pro" itemtype="http://schema.org/ItemList">
  <div class="row category_box">
            <div class="col-sm-3 col-md-2 lindo-right-0">
            <div class="lindo_tang_<?php echo $floor; ?> lindotang">
                 <div class="lindo-category_icon"><?php echo $floor; ?></div>
                 <a title="<?php echo $name_produc; ?>" href="<?php echo get_term_link($slug, 'product_cat'); ?>">
                    <div class="pro-lindo-title">
                        <p class="icon-lindo"><?php echo $icon; ?></p>
                        <h2><?php echo $tieude;?></h2>
                    </div>
                </a>
                <div class="brand_logo">
                        <div id="tang<?php echo $floor; ?>" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                            <?php echo $logo ; ?>
                            <!-- Controls -->
                            <a class="left carousel-control control" href="#tang<?php echo $floor; ?>" role="button" data-slide="prev">
                            <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control control" href="#tang<?php echo $floor; ?>" role="button" data-slide="next">
                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
              </div>
            
            </div>
             <ul class="sub_category">
               <?php echo $html_link ; ?>           
            </ul>
         </div>
          </div>
            <div class="col-sm-12 col-md-4 lindo-left-0 lindo-right-0 banner hidden-sm">
                <?php echo $banner;?>
        </div>
            <div class="col-sm-9 col-md-6 lindo-left-0">
            	<div class="items lindo-pro-style-sp">
                   <?php 
                    if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
                    global $post, $woocommerce, $product;
                    $wp_query = new WP_Query( array('post_type' => 'product', 
                    'product_cat' => $slug, 
                    'posts_per_page' => 6,
					));
                    while ($wp_query->have_posts()) : $wp_query->the_post(); global  $post, $product;?>	
<div itemprop="itemListElement" itemscope="" itemtype="http://schema.org/Product" class="col-md-4 col-sm-4 col-xs-6 item">
<?php lindo_woo_sale(); ?>
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
	<?php
	echo $args['after_widget'];
	}
	
	function update($new_instance, $old_instance) {
		return $new_instance;
	}
	
	function form($instance) {
		$c = $_SERVER['SERVER_NAME']; if($c =='minhtan.net') { 
		$category = isset ( $instance ['category'] ) ? esc_attr ( $instance ['category'] ) : '';
		$tieude = isset ( $instance ['tieude'] ) ? esc_attr ( $instance ['tieude'] ) : '';
		$floor = isset ( $instance ['floor'] ) ? esc_attr ( $instance ['floor'] ) : '';
		$html_link = isset ( $instance ['html_link'] ) ? $instance ['html_link'] : '';
		$logo = isset ( $instance ['logo'] ) ? $instance ['logo'] : '';
		$icon = isset ( $instance ['icon'] ) ? $instance ['icon'] : '';}
		$banner = isset ( $instance ['banner'] ) ? $instance ['banner'] : '';
		
?>


<p><h4>Tầng sản phẩm</h4>
<select
	id="<?php echo $this->get_field_id('floor'); ?>"
	name="<?php echo $this->get_field_name('floor'); ?>">
<option value="1f" <?php echo '1f' == $floor ? 'selected="selected"' : '' ?>><?php _e('1f', $this->localizationDomain); ?></option>
<option value="2f" <?php echo '2f' == $floor ? 'selected="selected"' : '' ?>><?php _e('2f', $this->localizationDomain); ?></option>
<option value="3f" <?php echo '3f' == $floor ? 'selected="selected"' : '' ?>><?php _e('3f', $this->localizationDomain); ?></option>
<option value="4f" <?php echo '4f' == $floor ? 'selected="selected"' : '' ?>><?php _e('4f', $this->localizationDomain); ?></option>
<option value="5f" <?php echo '5f' == $floor ? 'selected="selected"' : '' ?>><?php _e('5f', $this->localizationDomain); ?></option>
<option value="6f" <?php echo '6f' == $floor ? 'selected="selected"' : '' ?>><?php _e('6f', $this->localizationDomain); ?></option>
<option value="7f" <?php echo '7f' == $floor ? 'selected="selected"' : '' ?>><?php _e('7f', $this->localizationDomain); ?></option>
<option value="8f" <?php echo '8f' == $floor ? 'selected="selected"' : '' ?>><?php _e('8f', $this->localizationDomain); ?></option>
<option value="9f" <?php echo '9f' == $floor ? 'selected="selected"' : '' ?>><?php _e('9f', $this->localizationDomain); ?></option>
<option value="10f" <?php echo '10f' == $floor ? 'selected="selected"' : '' ?>><?php _e('10f', $this->localizationDomain); ?></option>
<option value="11f" <?php echo '11f' == $floor ? 'selected="selected"' : '' ?>><?php _e('11f', $this->localizationDomain); ?></option>
<option value="12f" <?php echo '12f' == $floor ? 'selected="selected"' : '' ?>><?php _e('12f', $this->localizationDomain); ?></option>
<option value="13f" <?php echo '13f' == $floor ? 'selected="selected"' : '' ?>><?php _e('13f', $this->localizationDomain); ?></option>
<option value="14f" <?php echo '14f' == $floor ? 'selected="selected"' : '' ?>><?php _e('14f', $this->localizationDomain); ?></option>
<option value="15f" <?php echo '15f' == $floor ? 'selected="selected"' : '' ?>><?php _e('15f', $this->localizationDomain); ?></option>
</select>
</p>


<hr>
 <p><h4>Danh mục sản phẩm</h4>
 <select style="width:100%"
	id="<?php echo $this->get_field_id('category'); ?>"
	name="<?php echo $this->get_field_name('category'); ?>">
	<?php 
	$cats = get_categories(array('hide_empty' => 1, 'taxonomy' => 'product_cat', 'hierarchical' => true));
	foreach ($cats as $cat) {
		echo '<option value="' . $cat->term_id . '" ' .( $cat->term_id == $category ? 'selected="selected"' : '' ). '>' . $cat->name . '</option>';
	} ?>
	</select></p>
 <hr>   
 <p><h4>Tiêu đề hiển thị</h4>
<textarea style="width:100%" id="<?php echo $this->get_field_id('tieude'); ?>"
	name="<?php echo $this->get_field_name('tieude'); ?>"><?php echo $tieude ; ?>
</textarea>
</p>
<hr>
<p><h4>Icon</h4>
<fieldset>
<label>* Cú pháp thẻ icon</label><br>
<p>&nbsp; &lt;img src="http://babyshop.mauwebsitedep.com/wp-content/uploads/2016/07/qua-tang-2-1.png" alt="icon"&gt;</p></fieldset>
<textarea style="width:100%" id="<?php echo $this->get_field_id('icon'); ?>"
	name="<?php echo $this->get_field_name('icon'); ?>"><?php echo $icon ; ?>
</textarea>
</p>

 <hr>   

<p><h4>Menu danh mục con</h4>
<fieldset>
<label>* Cú pháp thẻ menu</label><br>
<div class="w3-code notranslate htmlHigh">
<span class="highLT">&lt;</span><span class="highELE">li</span><span class="highGT">&gt;</span><span class="highLT">&lt;</span><span class="highELE">a</span> <span class="highATT">href=</span><span class="highVAL">"http://lindo.vn/gioi-thieu/"</span><span class="highGT">&gt;</span>Giới thiệu<span class="highLT">&lt;</span><span class="highELE">/a</span><span class="highGT">&gt;</span>
<span class="highLT">&lt;</span><span class="highELE">/li</span><span class="highGT">&gt;</span>
</div><br></fieldset>
<textarea style="width:100%" id="<?php echo $this->get_field_id('html_link'); ?>"
	name="<?php echo $this->get_field_name('html_link'); ?>"><?php echo $html_link ; ?>
</textarea>
</p>
<hr>
<p><h4>Custom Logo</h4>
<p>&lt;div class="item"&gt;<br />&nbsp;&nbsp; &lt;img src="http://babyshop.mauwebsitedep.com/wp-content/uploads/2016/07/logo-lindo.png" alt="logo"&gt;<br />&lt;/div&gt; <br>
Lưu ý : class đầu tiên thêm active</p>
<textarea style="width:100%" id="<?php echo $this->get_field_id('logo'); ?>"
	name="<?php echo $this->get_field_name('logo'); ?>"><?php echo $logo ; ?>
</textarea>
</p>

<hr>

<p><h4>Banner (Kích thước 390px *472px )</h4>
<fieldset>
<label>* Cú pháp thẻ banner</label><br>
<p>&nbsp; &lt;img src="http://babyshop.mauwebsitedep.com/wp-content/uploads/2016/07/sua_380x460_1.jpg" alt="banner"&gt;</p></fieldset>
<textarea style="width:100%" id="<?php echo $this->get_field_id('banner'); ?>"
	name="<?php echo $this->get_field_name('banner'); ?>"><?php echo $banner ; ?>
</textarea>
</p>


<?php 
    }
	
} // end class 

add_action('widgets_init', create_function('', 'return register_widget("Home_style_product_one");'));