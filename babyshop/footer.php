<div class="clearfix"></div>
<div class="footer_top_logo">
<div class="container">
<div class="lindo_logo">
<div class="owl-carousel owl-theme" id="lindo_logo">
 <?php global $data;  $slides = $data['partner_logo']; foreach ($slides as $slide) {?>
        <div class="item">
        <a href="<?php echo $slide['link']; ?>" title="<?php echo $slide['title']; ?>">
			<img class="img-responsive" data-src="<?php echo $slide['url']; ?>" src="<?php echo $slide['url']; ?>" alt="<?php echo $slide['title']; ?>">
        </a>
        </div>
 <?php } ?> 
</div>
</div>
</div>
</div>
<div class="clearfix"></div>

<div class="footer_news_lindo">
<div class="container">
<div class="lindo_ads_commem_news">
 <div class="col-md-3 col-sm-3 col-xs-12 lindo-left-0">
 <div class="footer_img_ads">
 <?php global $data; echo $data['home_col_4']; ?>
 </div>
 </div>
 <div class="col-md-4 col-sm-4 col-xs-12">
 <div class="footer_news_commen">
<?php dynamic_sidebar( 'widget-footer-comments');?>
 </div>
 </div> 
 <div class="col-md-5 col-sm-5 col-xs-12">
 <div class="footer_news_lindo_right">
<?php
    global $data;
	$category_id = get_cat_ID( $data['footer_category_news'] );
	$category_link = get_category_link( $category_id);
	$args = array(
		'cat' => $category_id,
		'post_type'        => 'post', 
		'showposts' => 5,  
	); 
	$hr = 0;
$my_query = new WP_Query( $args ); 
if ( $my_query->have_posts() ):
?>
<h3 class="title_new_footer"><i class="fa fa-newspaper-o" aria-hidden="true"></i> 
    <a title="<?php echo $data['footer_category_news']; ?>" href="<?php echo esc_url( $category_link ); ?>">
    <?php echo $data['footer_category_news']; ?>
    </a>
    
    <a rel="nofollow" class="xemtc" title="<?php echo $data['footer_category_news']; ?>" href="<?php echo esc_url( $category_link ); ?>">
    Xem tất cả <i class="fa fa-angle-double-right"></i>
    </a>
</h3>
<div class="row">
<?php while ( $my_query->have_posts() ) : $my_query->the_post(); $hr++ ?>
<?php if ($hr ==1) { ?>
<div class="list_news_beweb col-md-12">
<div class="img_news">
	<?php
        if ( has_post_thumbnail() ) {
            $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumbnail ' );
            if ( ! empty( $large_image_url[0] ) ) {
            ?>
            <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
				<?php  echo get_the_post_thumbnail( $post->ID, 'thumbnail', array( 'class' => 'img-responsive' ) );  ?>
            </a>
            <?php
           } 
        }
    ?>
</div>
<div class="info_new">
<h4><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a> <span class="time"> - <?php echo get_the_date(); ?></span></h4>

<?php the_excerpt(); ?>
</div>
</div>
<?php } else { ?>
<div class="list_news_beweb col-md-12">
<div class="info_new_f">
<h4><i class="fa fa-plus-circle" aria-hidden="true"></i> <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a> <span class="icon_news"></span> <span class="time"> - <?php echo get_the_date(); ?></span> </h4>
 </div>
</div>
<?php } ?>
<?php endwhile; ?>
</div>
<?php endif; ?>
<?php wp_reset_query();?>  

 </div>
 </div>
</div>
</div>
</div>

<div class="footer_bottom_end">
<footer>
       <div class="container info" style="position: relative;">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
            
            <?php dynamic_sidebar( 'widget-footer-1' ); ?>
            
                <div id="Subscribe">
                				   <?php global $data; $facebook = $data['url_facebook'];  if($facebook != '') {?>
                                   <a rel="nofollow" title="facebook" href="<?php echo $facebook;?>">
                                        <div class="social-background social-fb"></div>
                                    </a>
                                    <?php } ?>
                                   
                                    <?php global $data; $google_plus = $data['url_google_plus'];  if($google_plus != '') {?>
                                    <a rel="nofollow" title="google plus" href="<?php echo $google_plus;?>">
                                        <div class="social-background social-google"></div>
                                    </a>
                                    <?php } ?>
                                   
                                    <?php global $data; $twitter = $data['url_twitter'];  if($twitter != '') {?>
                                    <a rel="nofollow" title="twitter" href="<?php  echo $twitter;?>">
                                        <div class="social-background social-tw"></div>
                                    </a>
                                    <?php } ?>
                                    
									<?php global $data; $linkedin = $data['url_linkedin_plus'];  if($linkedin != '') {?>
                                    <a rel="nofollow" title="linkedin" href="<?php echo $linkedin;?>">
                                        <div class="social-background social-pint"></div>
                                    </a>
                                     <?php } ?>
                  </div>
                
            </div>
             <div class="col-md-8 col-sm-8 col-xs-12 info_footer_mn">
            <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
			<?php dynamic_sidebar( 'widget-footer-2' ); ?>
               
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
             <?php dynamic_sidebar( 'widget-footer-3' ); ?>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12  padding-foot">
             <?php dynamic_sidebar( 'widget-footer-4' ); ?>
            </div>
            </div>
            </div>
        </div>
    </div>

</footer>
</div>
<div class="clearfix"></div>
<div class="footer_info_lindo">
   <div class="copyright">
        <div class="container">
            <div class="row copyright-content">
                <div class="col-md-3 col-sm-3 col-xs-12 text-center" style="margin-top: 30px;">
                     <?php global $data;
			$logo_magin_top = $data['logo_magin_top'];
			$logo_magin_bottom = $data['logo_magin_bottom'];
			$get_logo_image = $data['media_upload_logo'];
			if($get_logo_image !="" ) { ?>
            <img src="<?php echo $get_logo_image; ?>" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>" class="img-responsive" />
			<?php } ?>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                   <?php dynamic_sidebar( 'widget-footer-info' ); ?>  
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12" style="margin-top:  30px;">
                <?php dynamic_sidebar( 'widget-footer-right' ); ?>  
                </div>
            </div>
            
        </div>
    </div>
    
   
</div>

<div class="clearfix"></div>

<div class="footer_bottom_end" style="padding:15px 0">
<div class="container">
<div class="row">
<div  class="col-md-9 col-sm-6 col-xs-12">
© Copyright 2017 <?php wp_title(); ?>. All right Reserved
</div>
<div  class="col-md-3 col-sm-3 col-xs-12">
<span style="font-size:12px;">Thiết kế bởi công ty<strong> <a title="công ty Minh Tân" href="https://minhtan.com.vn" rel="license">Minh Tân</a> </strong></span>
 </div>
</div>
</div>
</div>
<?php global $data; echo $data['footer_code']; ?>                
<script src="<?php bloginfo('template_url'); ?>/js/jquery-2.1.3.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/owl-carousel/js/owl.carousel.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/js/functions_main.js" type="text/javascript"></script>
  
<script src="<?php bloginfo('template_url'); ?>/js/lindo_menu_cat.js" type="text/javascript"></script>

<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/mmenu/css/jquery.mmenu.all.css" />
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/mmenu/js/jquery.mmenu.all.min.js"></script>
<script type="text/javascript">
			$(function() {
				$('nav#mlindo_mobile').mmenu();
			});
</script>
        
<nav id="mlindo_mobile">
<?php wp_nav_menu( array( 'theme_location' => 'menu_mobile', 'container_class' => 'navbar-mobile') ); ?>
</nav> 
               
 <?php wp_footer(); ?>
</body>
</html>