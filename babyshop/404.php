<?php 
   /* Template Name: Page Full*/
    
   ?>
<?php get_header(); ?>
<section class="content-home">
		<div class="container">
			<div class="content-top">
			
				<div class="news-detail-page col-xs-12">
					<div class="title-cate-all">
						<div class="pos-link">
						<?php  if(function_exists('lifeweb_breadcrumbs'))
							{
								lifeweb_breadcrumbs();
							}
						?>
						</div><!--end .pos-link-->
					</div><!--end .title-cate-all-->

					<div class="cont-news-detail-page">
						<h1 class="single_title">Link không tồn tại 404</h1>
                        <div class="post_page">
                        <div class="page-404">
                        	<div class="col-xs-12 col-md-8">
                         <h2>LỖI 404 :Page not found </h2>
                         <p> Lỗi này thường xảy ra khi link không tồn tại, hoặc đã xóa sản phẩm, xóa bài viêt, thay đổi đường dẫn trong admin</p>
                         <p>Hãy thông báo lỗi này với ban quản trị Hotline : <?php global $data; $hotline = $data['hotline_website'];  if($hotline != '') {?> <strong><?php echo $hotline ; ?></strong>  <?php } ?> </p>
                         <p>Thanks !</p>
                         
                         <p>Quay về <a rel="nofollow" href="<?php bloginfo('url'); ?>" title="Trang chủ"><span class="label label-danger">TRANG CHỦ</span></a></p>

                         </div>
                         <div class="col-xs-12 col-md-4">
                         
                         <img class="img-responsive" src="http://lifeweb.vn/wp-content/uploads/2014/11/oho404.gif" alt="404">
                         </div>
                         
                         
                        </div>

						<div class="share-post">

						</div><!--end .share-post-->

					</div><!--end .cont-news-detail-page-->
				</div><!--end .news-detail-page-->
			</div><!--end .content-top-->
		</div>
	</section><!--end .content-home-->
<?php get_footer(); ?>