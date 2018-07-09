<?php get_header(); ?>
<div class="background_main" role="main">
<div class="container">
<div class="content-top row">
				<div class="sidebar-single-page col-xs-12  col-sm-3 col-md-3 ">
					<div class="sidebar-web">
<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('sidebar-single-page')) : else : ?>
<?php endif; ?>
					</div>
				</div><!--end .sidebar-home-->
				<div class="news-page col-xs-12  col-sm-9 col-md-9">
                
 <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>

<div class="singpages_lindo">

<div class="cont-news-detail-page">
						<h1 class="single_title"><?php the_title() ?></h1>
                        <div class="post_page">
                         <?php the_content(); ?>
                        </div>

						<div class="share-post">

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

						</div><!--end .share-post-->


<hr>
<div class="extra-blogs row">
<div class="col-lg-12 col-md-12 col-xs-12">
	<h4>Cùng danh mục</h4>
	<?php 
	$cat = get_the_category( get_the_ID() );
	if ($cat) {
                $t = $cat[0];
                $r = new WP_Query(array('posts_per_page'=> 5, 'post__not_in'=> array( get_the_ID() ), 'cat'=> $t->term_id ));
                echo '<ul>';
                while ( $r->have_posts()): $r->the_post();
                  echo '<li><a href="'.get_permalink().'">'.get_the_title().'</a> <span> - '.get_the_date('d-m-Y H:m').'</span></li>';
                endwhile;
                echo '</ul>';
                wp_reset_postdata();
}
	?>
</div>

                        </div>
					</div><!--end .cont-news-detail-page-->
</div>                
					
                    
				</div><!--end .news-page-->
</div><!--end .content-top-->
</div>
</div>
<?php get_footer(); ?>