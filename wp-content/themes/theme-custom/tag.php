<?php

/* 
Template Name: Tag Post
*/

$args = array(

'post_type' => 'post',

'posts_per_page' => 9,

'orderby' => 'date',

'order' => 'DESC', 

'post_status' => 'publish'

);

$query = new WP_Query($args);
$tag_title = get_query_var('custom_param');
$term = get_term_by('slug', $tag_title, 'post_tag');
$title = ucfirst($term->name)." | Gác Mái";

$description = $description_home;

?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<title><?= $title; ?></title>
<?php
$meta_description = get_option('meta_description', '');
$meta_keywords = get_option('meta_keywords', '');
$tag_name = slug_to_normal(get_query_var('custom_param'));
$args = array(
'post_type' => 'post',
'posts_per_page' => -1,
'tax_query' => array(
array(
'taxonomy' => 'post_tag',
'field'    => 'slug',
'terms'    => $tag_name,
),
),
);
$query = new WP_Query($args);
?>
<meta name="description" content="<?php if (is_single()) {
echo $description;
} else {
echo $meta_description;
} ?>">
<meta content="<?php get_meta_kws($meta_keywords); ?>" name="keywords">
<?php include 'inc/head.php'; ?>
<style type="text/css">
.gm-column {

position: relative;

min-height: 1px;

box-sizing: border-box;

width: 100%;

}

.sesions-home4,

.sesions-home5 {

width: 100%;

margin-bottom: 60px;

}

.gm_wrapper {

--grid-gap-x: 40px;

--grid-gap-y: 15px;

--grid-col: 3;

display: flex;

flex-wrap: wrap;

gap: var(--grid-gap-y) var(--grid-gap-x);

}

.gm_wrapper>* {

--grid-gap-x-total: calc(var(--grid-gap-x) * (var(--grid-col) - 1));

--grid-space-each: calc(var(--grid-gap-x-total) / var(--grid-col));

width: calc(100% / var(--grid-col) - var(--grid-space-each));

}

@keyframes wpb_btt {

0% {

transform: translate(0, 10%);

opacity: 0
}



100% {

transform: translate(0, 0);

opacity: 1
}

}

.gm-icon-description__item {

animation: wpb_btt .7s 1 cubic-bezier(.175, .885, .32, 1.275);

opacity: 1;

display: flex;

justify-content: space-between;

flex-direction: column;

border: 1px solid #9c9c9c;

border-radius: 20px;

padding: 26px 20px;

animation-duration: 1s;

animation-fill-mode: both;

}

.gm-icon-description__item-image {

height: 96px;

margin-bottom: 20px;

}

.gm-icon-description__item-image img {

object-position: left;

object-fit: contain;

height: 100%;

width: 100%;

min-height: 100%;

min-width: 100%;

max-height: 100%;

max-width: 100%;

}

.gm-icon-description__item-heading {

margin-bottom: 5px;

}

.gm-icon-description__item-title {

font-size: 25px;

margin-bottom: 0;

font-weight: 700;

}

.gm-icon-description__item-content {

font-size: 18px;

font-weight: 500;

}

.gm-icon-description__item-content p {

margin-bottom: 0;

}

.gm-icon-description__item-button {

text-align: right;

padding-top: 40px;

}

.gm-icon-description__item-button a.btn.btn-color-black {

--btn-bg-color: #ffc814;

--btn-color: #000;

--btn-bg-color-hover: #000;

--btn-color-hover: #fff;

display: inline-flex;

align-items: center;

justify-content: center;

gap: 5px 10px;

text-align: center;

text-decoration: none;

font-weight: 700;

font-size: 18px;

background: var(--btn-bg-color);

color: var(--btn-color);

border-radius: 15px;

padding: 5px 25px;

min-height: 62px;

min-width: 260px;

font-family: "Montserrat", Arial, Helvetica, sans-serif;

}

.gm-features-item {

display: flex;

position: relative;

z-index: 2;

}

.gm-mb-60 {

margin-bottom: 60px !important;

}

.gm-features-item .gm-number {

min-width: 62px;

margin-right: 30px;

font-family: 'Monoton', cursive;

color: #f5c332;

font-size: 42px;

line-height: 36px;

white-space: nowrap;

}

.title-saa2 {

margin-bottom: 15px !important;

line-height: 120%;

font-size: 22px;

letter-spacing: -1px;

font-weight: 700;

}

.gm-text {

color: #6f6f87;

margin: 0;

font-size: 15px;

}

.sesions-home5 {

font-family: 'Rubik', sans-serif;

letter-spacing: .03em;

line-height: 1.5;

}

@media only screen and (max-width: 1280px) {

.gm_wrapper {

--grid-gap-x: 15px;

}

}

@media only screen and (max-width: 1024px) {
.gm-icon-description__item-content,

.gm-icon-description__item-button a.btn.btn-color-black {

font-size: 16px;

}

.gm-icon-description__item-button a.btn.btn-color-black {

min-width: unset;

max-width: 100%;

min-height: 54px;

}

}

@media (min-width: 992px) {

.col-lg-4 {

-ms-flex: 0 0 33.333333%;

flex: 0 0 33.333333%;

max-width: 33.333333%;

}

}

@media only screen and (max-width: 920px) {

.gm_wrapper {

--grid-col: 2;

}

}

@media (min-width: 768px) {

.elementor-column {

width: 100%;

}

}

@media only screen and (max-width: 600px) {

.gm_wrapper {

--grid-col: 1;

}

.gm-icon-description__item-button {

padding-top: 30px;

}

.gm-icon-description__item-image {

height: 80px;

}

}

.colect-item a:hover {
text-decoration: underline;
}
</style>
<!-- Event snippet for Lượt xem trang conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-11137653179/6KM0CM7w9MYZELuz7L4p'});
</script>
	
</head>
<body>
<?php include 'inc/header.php'; ?>
<div class="site-inner mb-3">
<div class="container">
<main>
<div class="sesions-home3">
<div class="groupCategory-title mb-0">
<a href=""><h2 class="groupCategory-tlt">#<?php echo ucfirst($term->name); ?></h2><a href="/bai-viet" class="readMore "></a></a>
</div>
<div class="list-post-home">
<ul>
<?php if ($query->have_posts()): ?>
<?php while ($query->have_posts()): $query->the_post();
$post_date = get_the_date('Y-m-d H:i:s', get_the_ID());
$post_timestamp = strtotime($post_date);
$current_timestamp = current_time('timestamp');
$days_diff = floor(($current_timestamp - $post_timestamp) / (60 * 60 * 24));
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
<?php if ($days_diff < 2): ?>
<div class="post-home-lable" style="width: unset !important;"><span>Mới</span>
</div>
<?php endif; ?>
</div>
<ul class="post-home-item"></ul>
<h2 class="post-home-title">
<a href="<?php the_permalink(); ?>" style="width:100%"><?php the_title(); ?></a>
</h2>
<div class="post-home-date" style="position:relative">
<span><?php echo get_the_date('d/m/Y H:i'); ?></span>
</div>
</div>
</li>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php else: ?>
<p>Không có bài viết nào.</p>
<?php endif; ?>
</ul>
</div>
</div>
</main>
</div>
</div>
<?php include 'inc/footer.php'; ?>
<?php include 'inc/js.php'; ?>
</body>
</html>