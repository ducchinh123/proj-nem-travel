<?php


$post_id = get_the_ID();

if ($post_id) {

    $title = get_the_title();

    $post_slug = get_post_field('post_name', $post_id);

    if ($post_slug == 'home-page') {

        wp_redirect(home_url());

    }

    $post = get_post($post_id);

    $slug = $post->post_name;

    $content = get_the_content();

    $content = preg_replace('/<p>Last updated:.*?<\/p>/', '', $content);

    $description = preg_replace('/\s+/', ' ', strip_tags($content));

    $description = str_replace('"', "'", $description);

    $description = substr($description, 0, 150);

    if (strlen(strip_tags($content)) > 150) {

        $description .= '...';

    }

} else {

    header("Location: /404");

    exit();

}

if ($description == '') {

    $description = $description_home;

}

$blogname = get_option('blogname');
$meta_keywords = get_option('meta_keywords');
?>

<?php
include 'inc/head.php';
include 'inc/header.php';
?>
<style>
    .groupCategory-title {

        display: flex;

        justify-content: space-between;

        flex-wrap: wrap;

        align-items: center;

    }

    .groupCategory-title .groupCategory-tlt {

        font-size: 20px;

        color: #40a6f2;

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

    .fa-chevron-right {
        margin: 0 2px;
        width: 13px;
        display: inline-block;
        height: 1em;
        vertical-align: -0.125em;
    }
</style>
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

                <a href="" class="breadcrumb_last" aria-current="page"><?= ucfirst($title) ?></a>

            </div>
        </div>

    </div>
    <div class="container">
        <main class="">
            <article>
                <h1 class="entry-title text-center"><?= $title ?></h1>
                <div class="entry-content">
                    <?= $content ?>
                </div>
            </article>
        </main>
    </div>
</div>
<?php include 'inc/footer.php'; ?>
<?php include 'inc/js.php'; ?>