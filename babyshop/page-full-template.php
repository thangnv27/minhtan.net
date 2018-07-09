<?php get_header(); ?>
<div class="background_main" role="main">
<div class="container">
<div class="content-top row">
				
				<div class="news-page col-xs-12 col-md-12">
                
 <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>

<div class="singpages_lindo">

<div class="cont-news-detail-page">
<!--						<h1 class="single_title"><?php the_title() ?></h1>
-->                        <div class="post_page">
                         <?php the_content(); ?>
                        </div>


					</div><!--end .cont-news-detail-page-->
</div>                
					
                    
				</div><!--end .news-page-->
</div><!--end .content-top-->
</div>
</div>
<?php get_footer(); ?>