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

                <?php if (have_posts()) : ?>
                    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
                        <?php
                        if (function_exists('bcn_display')) {
                            bcn_display();
                        }
                        ?>
                    </div>


                    <div class="title-cate-all">
                        <?php if (is_category()) { ?>
                            <h1 class="pagetitle"><?php single_cat_title(); ?></h1>
                        <?php } elseif (is_tag()) { ?>
                            <h1 class="pagetitle"><?php single_tag_title(); ?></h1>
                        <?php } elseif (is_day()) { ?>
                            <h1 class="pagetitle"><?php the_time('F, Y'); ?></h1>
                        <?php } elseif (is_year()) { ?>
                            <h1 class="pagetitle"> <?php the_time('Y'); ?></h1>
                        <?php } elseif (is_search()) { ?>
                            <h1 class="pagetitle"><?php _e('Tìm kiếm', 'linhit'); ?></h1>
                        <?php } ?>
                    </div><!--end .pos-link-->


                    <div class="cont-news-page">
    <?php while (have_posts()) : the_post(); ?>
                            <div class="list-news-page">

                                <div class="cat_img">
                                    <?php
                                    if (has_post_thumbnail()) {
                                        $large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail ');
                                        if (!empty($large_image_url[0])) {
                                            ?>
                                            <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                                            <?php echo get_the_post_thumbnail($post->ID, 'thumbnail', array('class' => 'img-responsive')); ?>
                                            </a>
                                            <?php
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="cat_note">
                                    <h2><a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>"><?php the_title() ?></a></h2>
        <?php the_excerpt(); ?>
                                </div>
                            </div><!--end .list-news-page-->
                            <?php endwhile; ?>
                        <div class="panigation-page">
                        <?php wp_pagenavi(); ?>
                        </div><!--end .panigation-page-->
<?php endif; ?>  
                </div><!--end .cont-news-page-->
            </div><!--end .news-page-->
        </div><!--end .content-top-->
    </div>
</div>
<?php get_footer(); ?>