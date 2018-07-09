<?php
/**
 * @see 	    https://docs.woothemes.com/document/template-structure/
 * @author        Lindo
 * @package       WooCommerce/Templates
 * @version       6.8
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

$heading = apply_filters( 'woocommerce_product_additional_information_heading', __( 'Additional Information', 'woocommerce' ) );

?>


<?php $product->list_attributes(); ?>
