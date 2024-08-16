<?php
/*
Template Name: Project Page
*/


$args = array(

    'post_type' => 'post',

    'posts_per_page' => 12,

    'orderby' => 'date',

    'order' => 'DESC',

    'post_status' => 'publish',

    'paged' => get_query_var('paged') ? get_query_var('paged') : 1

);



$query = new WP_Query($args);

$title = 'Bài viết -'. get_option('blogname');;

$description = $description_home;


?>

<!DOCTYPE html>

<html lang="en-US">



<head>

    <title><?= $title; ?></title>

    <meta name="description" content="<?= $description; ?>">

    <?php include 'inc/head.php'; ?>

    <style type="text/css">



    </style>

	<!-- Event snippet for Lượt xem trang conversion page -->
	<script>
	  gtag('event', 'conversion', {'send_to': 'AW-11137653179/6KM0CM7w9MYZELuz7L4p'});
	</script>
	
</head>

<body>

    <?php include 'inc/header.php'; ?>

    <div class="site-inner mb-3">

        <div class="breadcrumbs-container">

            <div class="container">

                <div class="breadcrumb">

                    <span>

                        <a style="color: black;" href="https://gacmai.vn">Trang chủ</a>

                    </span>

                    <svg class="fa-chevron-right" viewBox="0 0 24 24" width="1em" height="1em">

                        <path d="M7.4 5.65l6.4 6.4-6.4 6.3 1.4 1.4 7.8-7.7-7.8-7.8-1.4 1.4z"></path>

                    </svg>

                    <span class="breadcrumb_last" aria-current="page">Bài viết</span>

                </div>
            </div>

        </div>

        <div class="container">

            <main>

                <section class="showcase">

                    <div class="groupCategory-title mb-0">

                        <h2 class="groupCategory-tlt">Bài viết</h2>

                    </div>

                    <div class="list-post-home">

                        <ul>

                            <?php if ($query->have_posts()):

                                while ($query->have_posts()):
                                    $query->the_post();

                                    ?>



                                    <li>

                                        <div class="post-home">

                                            <div class="post-home-thumb">

                                                <a href="<?php the_permalink(); ?>" class="wrap-next-image">

                                                    <?php if (has_post_thumbnail()): ?>

                                                        <img layout="fill" src="<?php the_post_thumbnail_url(); ?>"
                                                            alt="<?php the_title(); ?>" class="">

                                                    <?php else: ?>

                                                        <img layout="fill"
                                                            src="https://gacmai.vn/wp-content/uploads/2024/06/default_image.png"
                                                            alt="default image" class="">

                                                    <?php endif; ?>

                                                </a>

                                                <div class="post-home-lable"><span>Mới</span></div>

                                            </div>

                                            <h2 class="post-home-title">

                                                <a href="<?php the_permalink(); ?>" style="width:100%"><?php the_title(); ?></a>

                                            </h2>

                                            <div class="post-home-date" style="position:relative">

                                                <span><?php echo get_the_date('d/m/Y H:i'); ?></span>

                                                <!--<span style="position:absolute;right:0">-->

                                                <!--    <?php echo get_post_meta(get_the_ID(), 'post_likes', true); ?> lượt thích | -->

                                                <!--    <?php echo get_post_meta(get_the_ID(), 'post_views', true); ?> lượt xem-->

                                                <!--</span>-->

                                            </div>

                                        </div>

                                    </li>



                                    <?php

                                endwhile;

                                wp_reset_postdata();

                            else:

                                echo '<p>Không có bài viết nào.</p>';

                            endif; ?>

                        </ul>

                    </div>

                    <?php if ($query->found_posts > 9): ?>

                        <div class="loop-footer">

                            <div class="load-more"><span>Xem thêm</span></div>

                            <div class="load-more-loading" style="display: none;"><span>Loading...</span></div>

                        </div>

                    <?php endif; ?>



                </section>

            </main>

        </div>

    </div>



    <?php include 'inc/footer.php'; ?>

    <?php include 'inc/js.php'; ?>

    <script>

        jQuery(document).ready(function ($) {

            var page = 1;

            $('.load-more').on('click', function () {

                var button = $(this);

                var loading = $('.load-more-loading');

                button.hide();

                loading.show();

                page++;

                $.ajax({

                    url: '<?= admin_url('admin-ajax.php') ?>',

                    type: 'post',

                    data: {

                        action: 'load_more_posts',

                        page: page,

                        posts_per_page: 12

                    },

                    success: function (response) {

                        $('.list-post-home ul').append(response.html);

                        if (response.status == 'success') {

                            $('.load-more').show();

                        }

                        $('.load-more-loading').hide();

                        loading = false;

                    }

                });

            });

        });



    </script>

</body>



</html>