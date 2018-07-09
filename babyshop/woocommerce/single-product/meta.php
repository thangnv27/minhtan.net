<?php
/**
 * Single Product Meta
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/meta.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woothemes.com/document/template-structure/
 * @author 		Lindo
 * @version     6.8.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>


<ul class="share_lindo">
<li><span>Share ngay : </span> </li>
<li>
<a title="share Facebook" rel="nofollow" target="_blank" href="https://www.facebook.com/sharer.php?s=100&p[title]=<?php the_title();?>&p[url]=<?php the_permalink() ?>"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
</li>
<li>
<a title="share Google Plus" rel="nofollow" target="_blank" href="https://plus.google.com/share?url=<?php the_permalink() ?>&title=<?php the_title();?>"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
</li>

<li>
<a title="share pinterest" rel="nofollow" target="_blank" href="http://pinterest.com/pin/create/button/?url=<?php the_permalink() ?>&description=&media="><i class="fa fa-pinterest-square" aria-hidden="true"></i></a>
</li>
<li>
<a title="share twitter" rel="nofollow" target="_blank" href="https://twitter.com/share?url=<?php the_permalink() ?>&text="><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
</li>
</ul>

