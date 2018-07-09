<?php
/**
 * @see 	    https://docs.woothemes.com/document/template-structure/
 * @author 		Lindo
 * @package 	WooCommerce/Templates
 * @version     6.8
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post;

if ( ! $post->post_excerpt ) {
	return;
}

?>
<div itemprop="description" class="description">
	<?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?>
</div>
