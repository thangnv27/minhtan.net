<?php

add_action('init','of_options');

if (!function_exists('of_options'))
{
	function of_options()
	{
		//Access the WordPress Categories via an Array
		$of_categories 		= array();  
		$of_categories_obj 	= get_categories('hide_empty=0');
		foreach ($of_categories_obj as $of_cat) {
		
		$of_categories[$of_cat->cat_ID] = $of_cat->cat_name;}
		$categories_tmp 	= array_unshift($of_categories, "Select a category:");    
	       
		//Access the WordPress Pages via an Array
		$of_pages 			= array();
		$of_pages_obj 		= get_pages('sort_column=post_parent,menu_order');    
		foreach ($of_pages_obj as $of_page) {
		    $of_pages[$of_page->ID] = $of_page->post_name; }
		$of_pages_tmp 		= array_unshift($of_pages, "Select a page:");       
	
	


/*-----------------------------------------------------------------------------------*/
/* The Options Array */
/*-----------------------------------------------------------------------------------*/

// Set the Options Array
global $of_options;
$of_options = array();

// Tong quan

$of_options[] = array( 	"name" 		=> "Cấu hình chung",
						"type" 		=> "heading",
						"icon"		=> ADMIN_IMAGES . "general.png",
				);

$of_options[] = array( 	"name" 		=> "Ảnh Favicon",
						"desc" 		=> "",
						"id" 		=> "media_upload_favicon",
						"std" 		=> "http://mauwebsitedep.com/wp-content/uploads/2015/09/favicon1.png",
						"type" 		=> "upload"
				);


$of_options[] = array( 	"name" 		=> "Header Code",
						"desc" 		=> "Đoạn code sẽ được chèn vào trước thẻ đóng </head>. Sử dụng nếu bạn muốn chèn  CSS, JS hoặc Google Analytic.",
						"id" 		=> "header_code",
						"std" 		=> "",
						"type" 		=> "textarea"
				);
				
				
$of_options[] = array( 	"name" 		=> "Footer Code",
						"desc" 		=> "Đoạn code được chèn vào trước thẻ đóng </body>. Sử dụng nếu bạn muốn chèn HTML, CSS, JS.",
						"id" 		=> "footer_code",
						"std" 		=> "",
						"type" 		=> "textarea"
				);				


// Heading
$of_options[] = array( 	"name" 		=> "Cấu hình phần đầu trang",
						"type" 		=> "heading",
						"icon"		=> ADMIN_IMAGES . "header.png",

				);

$of_options[] = array( 	"name" 		=> "Logo",
						"desc" 		=> "Upload logo cho website",
						"id" 		=> "media_upload_logo",
						"std" 		=> "http://dienthoai01.beweb.vn/wp-content/uploads/2016/02/logo.png",
						"type" 		=> "upload"
				);
				
				
$of_options[] = array( 	"name" 		=> "Header Hotline",
						"desc" 		=> "Thay số điện thoại cho website",
						"id" 		=> "header_hotline",
						"std" 		=> '<a href="tel:0945656346" title="Call">0945656346</a>',
						"type" 		=> "textarea"
				);	


$of_options[] = array( 	"name" 		=> "Banner website ads",
						"desc" 		=> "Html Ads Banner ",
						"id" 		=> "switch_slider_online",
						"std" 		=> '<div class="adv-header" style="background-color: #f26e21">
<div class="container">
<a href="#">
<img class="img-responsive" alt="banner ads" src="http://babyshop.mauwebsitedep.com/wp-content/uploads/2016/07/1190x60.jpg">
</a>
</div>
</div>',
						"type" 		=> "textarea"
				);  
								
$of_options[] = array( 	"name" 		=> "Cấu hình trang chủ",
						"type" 		=> "heading",
						"icon"		=> ADMIN_IMAGES . "icon-home.png",
				);
				
				
$of_options[] = array( 	"name" 		=> "Banner Home 1",
						"desc" 		=> "Html Ads Banner Home 1 (Kích Thước).",
						"id" 		=> "home_col_1",
						"std" 		=> '<a title="seo title" href="#" target="_blank">
                        <img alt="seo alt" src="http://babyshop.mauwebsitedep.com/wp-content/uploads/2016/07/ads_banner.gif">
						</a>',
						"type" 		=> "textarea"
				);
				
$of_options[] = array( 	"name" 		=> "Banner Home 2",
						"desc" 		=> "Html Ads Banner Home 2 (Kích Thước).",
						"id" 		=> "home_col_2",
						"std" 		=> '<a title="seo title" href="#" target="_blank">
                        <img alt="seo alt" src="http://babyshop.mauwebsitedep.com/wp-content/uploads/2016/07/ads_banner.png">
						</a>',
						"type" 		=> "textarea"
				);
				
				
$of_options[] = array( 	"name" 		=> "Banner Home 3",
						"desc" 		=> "Html Ads Banner Home 3 (Kích Thước).",
						"id" 		=> "home_col_3",
						"std" 		=> '<a title="seo title" href="#" target="_blank">
                        <img alt="seo alt" src="http://babyshop.mauwebsitedep.com/wp-content/uploads/2016/07/ads_banner.jpg">
						</a>',
						"type" 		=> "textarea"
				);
				
				
				$of_options[] = array( 	"name" 		=> "Banner Home 4",
						"desc" 		=> "Html Ads Banner Home 3 (Kích Thước).",
						"id" 		=> "home_col_4",
						"std" 		=> '<a title="seo title" href="#" target="_blank">
                        <img alt="seo alt" src="http://babyshop.mauwebsitedep.com/wp-content/uploads/2016/07/floor-nhabep-0707.jpg">
						</a>',
						"type" 		=> "textarea"
				);
			

					
				


$of_options[] = array( 	"name" 		=> "Cấu hình Slider",
						"type" 		=> "heading",
						"icon"		=> ADMIN_IMAGES . "slideshow.png",

				);
				


				
$of_options[] = array( 	"name" 		=> "Ảnh Slider",
						"desc" 		=> "Nên chọn ảnh chất lượng và cùng kích thước cho các Slider để đạt chế độ hiển thị tốt nhất.",
						"id" 		=> "slider_show",
						"std" 		=> "",
						"type" 		=> "slider"
				);
								

		
$of_options[] = array( 	"name" 		=> "Logo đối tác",
						"type" 		=> "heading",
						"icon"		=> ADMIN_IMAGES . "partner.png",
						
				);
			
$of_options[] = array( 	"name" 		=> "Logo đối tác",
						"desc" 		=> "Logo của đối tác.",
						"id" 		=> "partner_logo",
						"std" 		=> "",
						"type" 		=> "slider"
				);


$of_options[] = array( 	"name" 		=> "Cấu hình chân trang",
						"type" 		=> "heading",
						"icon"		=> ADMIN_IMAGES . "footer.png",

				);	
	/*
$of_options[] = array( 	"name" 		=> "ADS Bannner Footer",
						"desc" 		=> "HTML banner Footer.",
						"id" 		=> "home_col_4",
						"std" 		=> '<a title="seo title" href="#" target="_blank">
                        <img alt="seo alt" src="http://babyshop.mauwebsitedep.com/wp-content/uploads/2016/07/floor-nhabep-0707.jpg">
						</a>',
						"type" 		=> "textarea"
				);	*/		

$of_options[] = array( 	"name" 		=> "Chọn chuyên mục tin tức",
						"desc" 		=> "Bạn hãy chọn chuyên mục tin tức hiển thị dưới chân trang.",
						"id" 		=> "footer_category_news",
						"std" 		=> "Chuyên mục tin tức",
						"type" 		=> "select",
						"options" 	=> $of_categories
				);		

				/*
$of_options[] = array( 	"name" 		=> "THÔNG TIN LIÊN HỆ",
						"desc" 		=> "THÔNG TIN LIÊN HỆ HTML.",
						"id" 		=> "thongtinlienhe_textarea",
						"std" 		=> "<h5>THÔNG TIN LIÊN HỆ</h5>
<strong>CÔNG TY CỔ PHẦN LANG RUA (LANG RUA.,JSC)</strong>
<p>Biệt thự 19 Liền kề 13 - Xa La - Phúc La - Hà đông - Hà Nội</p>
<p>Điện thoại: 046.259.3344 - Hotline 094.5656.346</p>
<p>Email: cskh@beweb.vn</p>",
						"type" 		=> "textarea"
				);

*/

$of_options[] = array( 	"name" 		=> "Mạng xã hội",
						"type" 		=> "heading",
						"icon"		=> ADMIN_IMAGES . "Social.png",
				);

$of_options[] = array( 	"name" 		=> "Feed URL",
						"desc" 		=> "e.g. http://feedburner.com/userid",
						"id" 		=> "url_feed",
						"std" 		=> "",
						"type" 		=> "text"
				);

$of_options[] = array( 	"name" 		=> "Mạng xã hội",
						"desc" 		=> "",
						"id" 		=> "social_setworkings",
						"std" 		=> "<h3 style=\"margin: 0 0 10px;\">Mạng xã hội</h3>
						Đừng quên phần 'http://' bạn nhé.",
						"icon" 		=> true,
						"type" 		=> "info"
				);


$of_options[] = array( 	"name" 		=> "Facebook URL",
						"desc" 		=> "Facebook URL",
						"id" 		=> "url_facebook",
						"std" 		=> "",
						"type" 		=> "text"
				);
				
				
$of_options[] = array( 	"name" 		=> "Twitter URL",
						"desc" 		=> "Twitter URL",
						"id" 		=> "url_twitter",
						"std" 		=> "",
						"type" 		=> "text"
				);
				

$of_options[] = array( 	"name" 		=> "Google+ URL",
						"desc" 		=> "Google+ URL",
						"id" 		=> "url_google_plus",
						"std" 		=> "",
						"type" 		=> "text"
				);		
				
$of_options[] = array( 	"name" 		=> "Pinterest URL",
						"desc" 		=> "LinkedIn URL",
						"id" 		=> "url_linkedin_plus",
						"std" 		=> "",
						"type" 		=> "text"
				);											

$of_options[] = array( 	"name" 		=> "YouTube URL",
						"desc" 		=> "YouTube URL",
						"id" 		=> "url_youtube",
						"std" 		=> "",
						"type" 		=> "text"
				);											
			
					
$of_options[] = array( 	"name" 		=> "Cấu hình font chữ",
						"type" 		=> "heading",
					    "icon"		=> ADMIN_IMAGES . "typography.png",

				);
				
$of_options[] = array( 	"name" 		=> "Body Font",
						"desc" 		=> "Chọn Font chữ cho website của bạn.",
						"id" 		=> "body_font",
						"std" 		=> array('size' => '12px','face' => 'arial','style' => 'normal','color' => '#000000'),
						"type" 		=> "typography"
				); 
				
$of_options[] = array( 	"name" 		=> "Main Typography",
						"desc" 		=> "",
						"id" 		=> "introduction_sad_homsses",
						"std" 		=> "<h3 style=\"margin: 0 0 10px;\">Cấu hình Font chữ cho Website của bạn</h3>Vui lòng chọn thông số cho từng mục.",
						"icon" 		=> true,
						"type" 		=> "info"
				);
	
$of_options[] = array( 	"name" 		=> "Tiêu đề danh mục",
						"desc" 		=> "",
						"id" 		=> "page_title_font",
						"std" 		=> array('size' => '16px','face' => 'arial','style' => 'normal','color' => '#000000'),
						"type" 		=> "typography"
				); 

$of_options[] = array( 	"name" 		=> "Tiêu đề bài viết",
						"desc" 		=> "",
						"id" 		=> "single_title_font",
						"std" 		=> array('size' => '16px','face' => 'arial','style' => 'normal','color' => '#000000'),
						"type" 		=> "typography"
				);
				
$of_options[] = array( 	"name" 		=> "Tiêu đề Widgets",
						"desc" 		=> "",
						"id" 		=> "widgets_title_font",
						"std" 		=> array('size' => '16px','face' => 'arial','style' => 'normal','color' => '#000000'),
						"type" 		=> "typography"
				);
				
$of_options[] = array( 	"name" 		=> "Tiêu đề Widgets chân trang",
						"desc" 		=> "",
						"id" 		=> "footer_widgets_title_font",
						"std" 		=> array('size' => '16px','face' => 'arial','style' => 'normal','color' => '#000000'),
						"type" 		=> "typography"
				);
													 
				
				
$of_options[] = array( 	"name" 		=> "Cấu hình nâng cao",
						"type" 		=> "heading",
						"icon"		=> ADMIN_IMAGES . "advanced.png"
				);
				
$of_options[] = array( 	"name" 		=> "Logo trang đăng nhập",
						"desc" 		=> "Logo xuất hiện tại trang đăng nhập Quản trị hệ thống",
						"id" 		=> "media_logo_login",
						"std" 		=> "",
						"type" 		=> "upload"
				);				
								
	
$of_options[] = array( 	"name" 		=> "Hotline",
						"desc" 		=> "Xuất hiện tại trang chủ website. vd: 094.5656.346",
						"id" 		=> "hotline_website",
						"std" 		=> "094.5656.346",
						"type" 		=> "text"
				);	

// Backup Options
$of_options[] = array( 	"name" 		=> "Chi tiết trang sản phẩm",
						"type" 		=> "heading",
						"icon"		=> ADMIN_IMAGES . "icon-info.png"
				);
				
$of_options[] = array( 	"name" 		=> "Cam kết chi tiết sản phẩm",
						"desc" 		=> "Cam kết chi tiết sản phẩm HTML.",
						"id" 		=> "camketchitietsp_textarea",
						"std" 		=> '<p><i class="fa fa-thumbs-o-up"></i>Đảm bảo 100% hàng chính hãng</p>
<p><i class="fa fa-refresh"></i>Đổi trả trong 3 ngày (*)</p>
<p><i class="fa fa-heart"></i>Dịch vụ khách hàng tốt nhất</p>',
						"type" 		=> "textarea"
				);

				
$of_options[] = array( 	"name" 		=> "Hotline hỗ trợ",
						"desc" 		=> "Hotline hỗ trợ HTML.",
						"id" 		=> "hotlinesp_textarea",
						"std" 		=> '
<div class="list-number-info-service">
<i class="fa fa-phone"></i>
<p>04. 37939431</p>
<span>( Đặt hàng qua điện thoại )</span>
</div>

<div class="list-number-info-service">
<i class="fa fa-phone"></i>
<p>04. 37939431</p>
<span>( Đặt hàng qua điện thoại )</span>
</div>',
						"type" 		=> "textarea"
				);
				
// Backup Options
$of_options[] = array( 	"name" 		=> "Màu sắc và Background",
						"type" 		=> "heading",
						"icon"		=> ADMIN_IMAGES . "styling.png"
				);
				
$of_options[] = array( 	"name" 		=> "Tone màu chính",
										"desc" 		=> "Tone màu của toàn trang",
										"id" 		=> "page_colorpicker",
										"std" 		=> "#206693",
										"type" 		=> "color"
								);	
								
$of_options[] = array( 	"name" 		=> "Tone màu phụ",
										"desc" 		=> "Tone màu phụ của trangs",
										"id" 		=> "color2_colorpicker",
										"std" 		=> "#206693",
										"type" 		=> "color"
								);	
				

				
				
// Backup Options
$of_options[] = array( 	"name" 		=> "Sao lưu và Phục hồi",
						"type" 		=> "heading",
						"icon"		=> ADMIN_IMAGES . "icon-backup.png"
				);
				
$of_options[] = array( 	"name" 		=> "Sao lưu và Phục hồi",
						"id" 		=> "of_backup",
						"std" 		=> "",
						"type" 		=> "backup",
						"desc" 		=> 'Bạn có thể sử dụng nút "Sao lưu" và "Phục hồi" để sao lưu các lựa chọn hiện tại của bạn. Điều này sẽ rất hữu ích cho bạn nếu bạn muốn thử trải nghiệm các tùy chọn trong phần cấu hình nhưng muốn khôi phục lại các thiết lập khi cần thiết..',
				);
				
$of_options[] = array( 	"name" 		=> "Dữ liệu lưu trữ",
						"id" 		=> "of_transfer",
						"std" 		=> "",
						"type" 		=> "transfer",
						"desc" 		=> 'Bạn có thể truyền dữ liệu tùy chọn giữa các cài đặt khác nhau bằng cách sao chép văn bản trong hộp văn bản. Để nhập dữ liệu, thay thế dữ liệu trong hộp văn bản nhấn "Nhập tùy chọn".',
				);
				
	}//End function: of_options()
}//End chack if function exists: of_options()
?>
