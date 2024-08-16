<?php
/*
Template Name: Search Page
 */


 if (isset($_GET['q'])) {
    $posts = search_post_with_title_client($_GET['q']);
    $posts_result = $posts['posts'];
    $total_posts = count($posts_result['posts']); // Đếm số lượng bài viết
    $views_total = $posts['views_total'];
   
    $total_posts = $views_total - 1;
    $title = "{$total_posts}+ kết quả về {$_GET['q']}"." - Nội thất Gác Mái";

     // Lấy ID của danh mục cần loại trừ
    $exclude_category = get_category_by_slug('cong-trinh-thuc-te');
    $exclude_category_id = $exclude_category ? $exclude_category->term_id : 0;
    $category_id = $exclude_category_id;
    $q = $_GET['q'];

}

function search_post_with_title_client($kw, $paged = 1)
{
    // Làm sạch và kiểm tra tham số đầu vào
    $keyword = sanitize_text_field($kw); // Áp dụng sanitize_text_field
    $paged = intval($paged);

    // Kiểm tra tính hợp lệ của tham số 'paged'
    if ($paged < 1) {
        $paged = 1;
    }

    // Lấy ID của danh mục cần loại trừ
    $exclude_category = get_category_by_slug('cong-trinh-thuc-te');
    $exclude_category_id = $exclude_category ? $exclude_category->term_id : 0;

    // Tạo đối số cho truy vấn WP_Query
    $args = [
        'post_type' => 'post',
        's' => $keyword,
        'posts_per_page' => 9, // Số bài viết mỗi trang
        'paged' => $paged, // Trang hiện tại
        'category__not_in' => [$exclude_category_id], // Loại trừ danh mục
    ];

    $query = new WP_Query($args);
    $posts = [];
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $data = [
                'ID' => get_the_ID(),
                'post_title' => esc_html(get_the_title()),
                'post_permalink' => esc_url(get_the_permalink()),
                'post_thumb' => esc_url(get_the_post_thumbnail_url(get_the_ID())), // Trả về URL của thumbnail
                'post_date' => esc_html(get_the_date('d/m/Y H:i')),
                'post_date_old' => get_the_date('Y-m-d H:i:s', get_the_ID())
             ];
            $posts[] = $data;  
        }
    }

    // Khôi phục lại truy vấn gốc sau khi hoàn thành
    wp_reset_postdata();

    return [
        'posts' => $posts,
        'max_num_pages' => $query->max_num_pages, // Tổng số trang,
        'views_total' => $query->found_posts 
    ];
}



$description = $description_home != '' ? $description_home : get_option('meta_description', '');;
$meta_keywords = get_option('meta_keywords', '');

?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<title><?= $title; ?></title>
<meta name="description" content="<?= $description; ?>">
<meta name="keywords" content="<?php get_meta_kws($meta_keywords); ?>">
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
<a style="color: black;" href="https://gacmai.vn">Tìm kiếm</a>
</span>
<svg class="fa-chevron-right" viewBox="0 0 24 24" width="1em" height="1em">
<path d="M7.4 5.65l6.4 6.4-6.4 6.3 1.4 1.4 7.8-7.7-7.8-7.8-1.4 1.4z"></path>
</svg>
<span class="breadcrumb_last" aria-current="page"><?= $_GET['q'] ?></span>
</div>
</div>
</div>
<div class="container">
<main>
<section class="showcase">
<div class="groupCategory-title mb-0">
<h2 class="groupCategory-tlt"><?= $category_name ?></h2>
</div>
<div class="list-post-home">
<ul>
<?php if (!empty($posts_result)):

foreach($posts_result as $post):
$post_date = $post['post_date_old'];
$post_timestamp = strtotime($post_date);
$current_timestamp = current_time('timestamp');
$days_diff = floor(($current_timestamp - $post_timestamp) / (60 * 60 * 24));
?>
<li>
<div class="post-home">
<div class="post-home-thumb">
<a href="<?php echo $post['post_permalink']; ?>" class="wrap-next-image">
<?php if ($post['post_thumb']): ?>
<img layout="fill" lazy-src="<?php echo $post['post_thumb']; ?>"
lazy-alt="<?php $post['post_title']; ?>" class="lazy-wave">
<?php else: ?>
<img layout="fill"
src="https://gacmai.vn/wp-content/uploads/2024/06/default_image.png"
alt="default image" class="">
<?php endif; ?>
</a>
<?php if ($days_diff < 2): ?>
<div class="post-home-lable" style="width: unset !important;"><span>Mới</span>
</div>
<?php endif; ?>
</div>
<h2 class="post-home-title">
<a href="<?php echo $post['post_permalink']; ?>" style="width:100%"><?php echo $post['post_title']; ?></a>
</h2>
<div class="post-home-date" style="position:relative">
<span><?php echo $post['post_date']; ?></span>
</div>
</div>
</li>
<?php

endforeach;

wp_reset_postdata();

else:

echo '<p>Không có bài viết nào.</p>';

endif; ?>
</ul>
</div>

<?php if ($views_total > 9): ?>

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
    jQuery(document).ready(function($) {
        var page = 1;
        var loading = false;
        var $loadMoreButton = $('.load-more'); // Selector cho nút tải thêm
        var $loadMoreLoading = $('.load-more-loading'); // Selector cho phần loading

        $loadMoreButton.click(function(e) {
            e.preventDefault();

            if (loading) return;

            loading = true;

            $loadMoreButton.hide();
            $loadMoreLoading.show();

            page++;

            $.ajax({
                url: '<?php echo admin_url('admin-ajax.php'); ?>',
                type: 'POST',
                dataType: 'json', // Kiểu dữ liệu trả về từ server
                data: {
                    action: 'load_more_posts_search',
                    page: page,
                    posts_per_page: 9,
                    cate: '<?php echo $category_id; ?>' ,
                    q: '<?php echo $q; ?>' ,
                },
                success: function(response) {
                    if (response.success) {
                        var posts = response.data.posts;

                        // Xử lý dữ liệu nhận được, ví dụ: append vào danh sách bài viết
                        $('.list-post-home ul').append(response.html);

                        if (response.data.has_more) {
                            $loadMoreButton.show();
                        } else {
                            $loadMoreButton.hide();
                        }
                    } else {
                        return '';
                    }

                    $loadMoreLoading.hide();
                    loading = false;
                },
                error: function(xhr, status, error) {
                    console.log('Lỗi khi gửi yêu cầu AJAX: ' + error.responseText);
                    $loadMoreLoading.hide();
                    loading = false;
                }
            });
        });
    });
</script>

</body>
</html>