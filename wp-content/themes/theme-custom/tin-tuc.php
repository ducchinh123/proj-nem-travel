<?php
/*
    Template Name: Tin Tuc Page
*/
$args = array(

    'post_type' => 'post',

    'posts_per_page' => 20,

    'orderby' => 'date',

    'order' => 'DESC',

    'post_status' => 'publish',

    'paged' => get_query_var('paged') ? get_query_var('paged') : 1,

    'category__not_in' => array(29)

);



$query = new WP_Query($args);

include 'inc/head.php';
?>
<link rel="stylesheet" href="<?= site_url() . '/public/css/library_grid.css' ?>">

<style>


.groupCategory-title {

margin-bottom: 24px;

display: flex;

justify-content: space-between;

flex-wrap: wrap;

align-items: center;

}



.mb-0,

.my-0 {

margin-bottom: 0 !important;

}



.groupCategory-title .groupCategory-tlt {

font-size: 20px;

color: #222;

font-weight: 600;

margin-bottom: 0;

}



.groupCategory-title .readMore {

color: #333 !important;

}

.list-post-home>ul {

display: flex;

flex-wrap: wrap;

margin-left: -20px;

}



.list-post-home>ul>li {

width: 33.333333%;

padding-left: 20px;

margin-top: 20px;

}



.post-home-head {

display: flex;

flex-wrap: wrap;

align-items: center;

margin-bottom: 14px;

}



.post-home-head__item {

width: 32px;

height: 32px;

overflow: hidden;

border-radius: 50%;

}



.post-home-head__item img {

width: 100%;

height: 100%;

-o-object-fit: cover;

object-fit: cover;

}



img {

max-width: 100%;

vertical-align: middle;

}



.post-home-head__text {

width: calc(100% - 32px);

padding-left: 8px;

}



.post-home-head__text .tlt {

color: #444;

font-weight: 600;

line-height: 20px;

display: -webkit-box;

-webkit-line-clamp: 1;

-webkit-box-orient: vertical;

overflow: hidden;

}



.post-home .post-home-thumb {

border-radius: 8px;

overflow: hidden;

position: relative;

margin-bottom: 4px;

padding-top: calc(100% - 50%);

background: #f2f2f2;

}



.post-home .post-home-thumb a {

position: absolute;

top: 0;

height: 100%;

width: 100%;

display: flex;

align-items: center;

justify-content: center;

}



.list-post-home>ul>li .post-home-thumb a img {

max-height: inherit !important;

width: 100%;

}



.post-home .post-home-thumb a img {

max-height: 172px;

}



.wrap-next-image img {

width: auto !important;

height: 100% !important;

min-width: 100% !important;

max-width: 100% !important;

min-height: 0px !important;

max-height: 100% !important;

-o-object-fit: cover;

object-fit: cover;

}



.post-home .post-home-thumb .post-home-lable {

position: absolute;

top: 0;

left: 0;

width: 100%;

padding: 8px;

}



.post-home .post-home-thumb .post-home-lable span {

font-weight: 600;

font-size: 12px;

line-height: 16px;

background: #ff7572;

border-radius: 4px;

color: #fff;

padding: 2px 5px;

display: inline-block;

}



.post-home-item {

display: flex;

flex-wrap: wrap;

margin-left: -8px;

}



.post-home .post-home-title {

margin-top: 10px;

overflow: hidden;

display: -webkit-box;

max-width: 100%;

-webkit-line-clamp: 2;

-webkit-box-orient: vertical;

line-height: 20px;

}



.ml-2,

.mx-2 {

margin-left: 0.5rem !important;

}



.post-home .post-home-title a {

color: #222;

font-size: 16px;

font-weight: 600;

}



.post-home .post-home-date {

margin-top: 4px;

}



.post-home .post-home-date span {

color: #666;

font-size: 13px;

margin-right: 20px;

}



.post-home .post-home-date span {

color: #666;

font-size: 13px;

margin-right: 20px;

}



.post-home .post-home-date span:last-child {

margin-right: 0;

}



ol,

ul,

dl {

padding-left: 0;

list-style: none;

margin: 0;

}



.breadcrumbs-container {

padding: 12px 0;

}



.breadcrumb {

font-size: 14px;

font-weight: 500;

overflow: hidden;

text-overflow: ellipsis;

white-space: nowrap;

}





.fa-chevron-right {

margin: 0 2px;

width: 13px;

display: inline-block;

height: 1em;

vertical-align: -0.125em;

}

.d-flex {

display: flex;

}



.justify-content-start {

-webkit-box-pack: start !important;

-ms-flex-pack: start !important;

justify-content: flex-start !important;

}



.align-items-center {

align-items: center !important;

}



.pl-2,

.px-2 {

padding-left: 0.5rem !important;

}



.pr-2,

.px-2 {

padding-right: 0.5rem !important;

}







p {

margin: 16px 0;

padding: 0;

}



.page-section h2.section-heading,

.page-section .section-heading.h2 {

margin-top: 1.5rem;

margin-bottom: 0;

}



.text-uppercase {

text-transform: uppercase !important;

}



.mb-5 {

margin-bottom: 3rem !important;

}



.align-items-stretch {

align-items: stretch !important;

}



.row {

--bs-gutter-x: 1.5rem;

--bs-gutter-y: 0;

display: flex;

flex-wrap: wrap;

margin-top: calc(-1* var(--bs-gutter-y));

margin-right: calc(-0.5* var(--bs-gutter-x));

margin-left: calc(-0.5* var(--bs-gutter-x));

}



.form-control {

display: block;

width: 100%;

padding: 0.375rem 0.75rem;

font-size: 1rem;

font-weight: 400;

line-height: 1.5;

color: #212529;

background-color: #fff;

background-clip: padding-box;

border: 1px solid #ced4da;

-webkit-appearance: none;

-moz-appearance: none;

appearance: none;

border-radius: 0.375rem;

transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;

}



.invalid-feedback {

display: none;

}



.invalid-feedback {

display: none;

width: 100%;

margin-top: 0.25rem;

font-size: 0.875em;

color: #dc3545;

}



.btn {

--bs-btn-padding-x: 0.75rem;

--bs-btn-padding-y: 0.375rem;

--bs-btn-font-family: ;

--bs-btn-font-size: 1rem;

--bs-btn-font-weight: 400;

--bs-btn-line-height: 1.5;

--bs-btn-color: #212529;

--bs-btn-bg: transparent;

--bs-btn-border-width: 1px;

--bs-btn-border-color: transparent;

--bs-btn-border-radius: 0.375rem;

--bs-btn-hover-border-color: transparent;

--bs-btn-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.15), 0 1px 1px rgba(0, 0, 0, 0.075);

--bs-btn-disabled-opacity: 0.65;

--bs-btn-focus-box-shadow: 0 0 0 0.25rem rgba(var(--bs-btn-focus-shadow-rgb), .5);

display: inline-block;

padding: var(--bs-btn-padding-y) var(--bs-btn-padding-x);

font-family: var(--bs-btn-font-family);

font-size: var(--bs-btn-font-size);

font-weight: var(--bs-btn-font-weight);

line-height: var(--bs-btn-line-height);

color: var(--bs-btn-color);

text-align: center;

text-decoration: none;

vertical-align: middle;

cursor: pointer;

-webkit-user-select: none;

-moz-user-select: none;

user-select: none;

border: var(--bs-btn-border-width) solid var(--bs-btn-border-color);

border-radius: var(--bs-btn-border-radius);

background-color: var(--bs-btn-bg);

transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;

}



.btn-primary {

--bs-btn-color: #fff;

--bs-btn-bg: #ffc800;

--bs-btn-border-color: #ffc800;

--bs-btn-hover-color: #fff;

--bs-btn-hover-bg: #d9aa00;

--bs-btn-hover-border-color: #cca000;

--bs-btn-focus-shadow-rgb: 255, 208, 38;

--bs-btn-active-color: #fff;

--bs-btn-active-bg: #cca000;

--bs-btn-active-border-color: #bf9600;

--bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);

--bs-btn-disabled-color: #fff;

--bs-btn-disabled-bg: #ffc800;

--bs-btn-disabled-border-color: #ffc800;

}



.row>* {

flex-shrink: 0;

width: 100%;

max-width: 100%;

padding-right: calc(var(--bs-gutter-x)* 0.5);

padding-left: calc(var(--bs-gutter-x)* 0.5);

margin-top: var(--bs-gutter-y);

}



.border-yellow-300 {

--tw-border-opacity: 1;

border-color: rgb(252 211 77 / var(--tw-border-opacity));

}



.alert-warning {

background: #fff3cd;

color: #664d03;

border: 1px solid #ffe69c;

}



.alert {

font-size: 13px;

font-weight: bold;

margin-bottom: 0;

font-weight: normal;

padding: 1rem;

border-radius: 0.375rem;

}



.alert-success {

background: #d1e7dd;

color: #0a3622;

border: 1px solid #a3cfbb;

}



.alert-danger {

background: #f8d7da;

color: #58151c;

border: 1px solid #f1aeb5;

}



.mt-3 {

margin-top: 16px;

}



.col {

flex: 1 0 0%;

}

.btn-cate {

outline: none;

text-decoration: underline;

background: none;
border: none;
position: relative;
cursor: pointer;

color: #000;

text-decoration: none;

display: flex;

/*font-family: "Trip Sans Mono",Courier,monospace,Arial,sans-serif;*/

line-height: 18px;

padding: 12px 0;

font-size: 14px;
padding-top: 0;

}

.btn-cate:hover {

color: #333;

text-decoration: underline;

}

.btn-svg-cate {

display: flex;

line-height: 0;
font-size: 14px;
margin-left: 4px;
align-items: center;

}

.btn-cate:not(.collapsed) .btn-svg-cate {

-webkit-transform: rotate(180deg);

-ms-transform: rotate(180deg);

transform: rotate(180deg);

}

.collapse:not(.show) {

display: none;

}

.collapse {

padding-left: 12px;

}

.link-card {

color: #000;

text-decoration: none;

display: flex;

/*font-family: "Trip Sans Mono",Courier,monospace,Arial,sans-serif;*/

line-height: 18px;

padding: 12px 0;

font-size: 14px;

}

.link-card:hover {

color: #333;

text-decoration: underline;

}


.loop-footer {

clear: both;

text-align: center;

}

.load-more,
.load-more-loading {

padding: 12px 35px 12px 35px;

border-color: #E9E9E9;

border-radius: 30px;

color: #333;

font-weight: 600;

border-width: 2px;

font-size: 13px;

line-height: 18px;
position: relative;

display: inline-flex;

align-items: center;

justify-content: center;

outline: none;

vertical-align: middle;

text-align: center;

text-decoration: none;

text-transform: uppercase;

text-shadow: none;
cursor: pointer;
/* border-style: solid; */
margin-top: 16px;

transition: color .3s ease, background-color .25s ease, border-color .25s ease, box-shadow .25s ease, opacity .25s ease;

}

.load-more:hover {
background-color: #212121;
}

.load-more:hover a {
color: white !important;
}

.load-more:hover span {
color: white !important;
}

.load-more-loading:hover a {
color: white !important;
}



.load-more:not(:hover) {

background-color: transparent !important;

}

@media (min-width: 1024px) {



.logo {

    flex: unset;
    /* margin-left: -8px; */

}

.flickity-viewport {
    height: 400.15px !important;
}

}


.session-slider {
display: none;
}

.session-slider-mobi {
display: none;
}

@media (min-width: 1184px) {

.container {

    box-sizing: border-box;

    max-width: 100%;

    width: calc(1136px + 24px* 2);

    margin-left: auto;

    margin-right: auto;

    padding-left: 24px;

    padding-right: 24px;

}

}



@media (max-width: 1024px) {

.sesions-home1 h1 {

    font-size: 32px;

    margin-top: 22px;

}


}

@media (min-width: 992px) {

.align-items-lg-center {

    -webkit-box-align: center !important;

    -ms-flex-align: center !important;

    align-items: center !important;

}



.d-lg-block {

    display: block !important;

}

.session-slider {
    display: block !important;
}


}



@media (max-width: 767px) {

.list-post-home>ul>li {

    width: 100%;

}

.sesions-home1 h1 {

    display: none;

}

}



@media (min-width: 768px) {

.logo-login-navbar {

    display: none;



}



.col-md-6 {

    flex: 0 0 auto;

    width: 50%;

}



.col-md {

    flex: 1 0 0%;

}



h1 {

    font-size: 36px;

}



.btn-login-header {

    background-color: #000;

    padding: 10px 16px;

}



.d-md-block {

    display: block;

}


}


.post-home img {
transition: all 0.5s ease;
}

.post-home:hover img {
transform: scale(1.1, 1.1);
}

.post-home:hover .overlay-post {
opacity: 1;
}

.overlay-post {
position: absolute;
top: 0;
left: 0;
background: rgba(0, 0, 0, .3);
opacity: 0;
transition: opacity .3s ease;
z-index: 99;
width: 100%;
height: 100%;
}
</style>
<?php
include 'inc/header.php';
?>
<main>
    <div class="site-inner mb-3">

        <div class="breadcrumbs-container">

            <div class="container">

                <div class="breadcrumb">

                    <span>

                        <a style="" href="<?= site_url() ?>"><i class="fa fa-home"></i> Trang chủ</a>

                    </span>

                    <svg class="fa-chevron-right" viewBox="0 0 24 24" width="1em" height="1em">

                        <path d="M7.4 5.65l6.4 6.4-6.4 6.3 1.4 1.4 7.8-7.7-7.8-7.8-1.4 1.4z"></path>

                    </svg>

                    <a href="" class="breadcrumb_last" aria-current="page">Bài viết</a>

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
                                    // Lấy ngày tạo bài viết
                                    $post_date = get_the_date('Y-m-d H:i:s', get_the_ID());
                                    $post_timestamp = strtotime($post_date);
                                    $current_timestamp = current_time('timestamp');

                                    // Tính toán số ngày đã trôi qua
                                    $days_diff = floor(($current_timestamp - $post_timestamp) / (60 * 60 * 24));

                            ?>
                                    <li>

                                        <div class="post-home">

                                            <div class="post-home-thumb">

                                                <a href="<?php the_permalink(); ?>" class="wrap-next-image">

                                                    <?php if (has_post_thumbnail()): ?>
                                                        <div class="overlay-post"></div>
                                                        <img layout="fill" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>"
                                                            alt="<?php the_title(); ?>" class="lazy-wave">

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


                    <div class="loop-footer">
                        <div class="load-more"><span>Xem thêm</span></div>

                    </div>



                </section>

            </main>

        </div>

    </div>
</main>
<?php
include 'inc/js.php';
include 'inc/footer.php';
?>