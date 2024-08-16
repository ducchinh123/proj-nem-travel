<?php
/* 
Template Name: Collection Detail
*/

global $post;

$post_title = get_the_title();


function custom_breadcrumb()
{

    if (!is_home()) {

        echo '<div class="breadcrumb"><span><span><a style="color: black;" href="';

        echo get_option('home');

        echo '">Trang chủ</a></span><svg class="fa-chevron-right" viewBox="0 0 24 24" width="1em" height="1em"><path d="M7.4 5.65l6.4 6.4-6.4 6.3 1.4 1.4 7.8-7.7-7.8-7.8-1.4 1.4z"></path></svg>';



        if (is_category() || is_single()) {

            $categories = get_the_category();

            if ($categories && $categories[0]->name != 'Uncategorized') {

                $category = $categories[0];

                echo '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>';

                echo '<svg class="fa-chevron-right" viewBox="0 0 24 24" width="1em" height="1em"><path d="M7.4 5.65l6.4 6.4-6.4 6.3 1.4 1.4 7.8-7.7-7.8-7.8-1.4 1.4z"></path></svg>';

            }



            if (is_single()) {

                echo '<span class="breadcrumb_last" aria-current="page">';

                the_title();

                echo '</span>';

            }

        } elseif (is_page()) {

            echo '<span class="breadcrumb_last" aria-current="page">';

            the_title();

            echo '</span>';

        }

        echo '</div>';

    }

}
global $wpdb;
$slug_name = trim(get_query_var('custom_param'));
if (!empty($slug_name)) {
    $queryEdit = $wpdb->prepare(
        "SELECT * FROM wp_collection WHERE wp_collection.slug_name = %s",
        $slug_name
    );
    $result = $wpdb->get_row($queryEdit);
    $queryImage = $wpdb->prepare(
        "SELECT wp_collection.id_collection, wp_collection.name, wp_collection_image.detail, wp_collection_image.class_name, wp_collection.description, wp_collection_image.id_image, wp_posts.guid, wp_collection_image.detail, wp_collection.updated_at
FROM wp_collection_image
INNER JOIN wp_posts ON wp_collection_image.id_image = wp_posts.ID
INNER JOIN wp_collection ON wp_collection.id_collection = wp_collection_image.id_collection
WHERE wp_collection_image.id_collection = %d",
        $result->id_collection
    );

    $imageCollects = $wpdb->get_results($queryImage);
}

$logo_name = get_option('blogname');
$title = (count($imageCollects) - 1) > 0 ? "Top " . (count($imageCollects) - 1) . "+ Mẫu " . $result->name : " Mẫu " . str_replace('-', ' ', $result->name);
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <title><?= ucfirst($title) . " - " . "Gác Mái"; ?></title>
    <meta name="description" content="<?= $description; ?>">
    <?php include 'inc/head.php'; ?>
    <script type="application/ld+json">
{

"@context": "http://schema.org",

"@type": "CreativeWorkSeason",

"aggregateRating": {

"@type": "AggregateRating",

"bestRating": "5",

"ratingCount": "<?= $number_rating ?>",

"ratingValue": "<?= $rating ?>"

},

"image": "<?= $image_share_social ?>",

"name": "<?php echo $title; ?>",

"description": "<?php echo $description; ?>"

}

</script>

    <style type="text/css">
        #the-blog {
            font-family: sans-serif;
            font-size: 18px;
            font-weight: normal;
            line-height: 1.5;
            color: #3d3d3d;
            text-align: left;
        }

        #the-blog ul {
            display: block;
            list-style-type: disc;
            margin-block-start: 1em;
            margin-block-end: 1em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            padding-inline-start: 40px;
        }

        .jump-link-div ul {
            list-style-type: none !important;
            padding-inline-start: 0 !important;
            margin-block-start: 0 !important;
        }

        h1.heading {
            font-size: 1.5em !important;
        }

        .jump-link-div {
            padding-left: 0;
        }

        .col-lg-9 {
            padding: 0;
        }

        #the-blog .guide-nav {
            position: -webkit-sticky;
            position: sticky;
            top: 80px;
            min-width: 300px;
            margin-right: 16PX;
        }

        #the-blog ol li,
        #the-blog ul li {
            margin-top: 0.25rem;
        }

        #the-blog .guide-nav .nav-item .nav-link {
            font-size: 14px;
            color: #8F9396;
            padding: 0.25rem 0 0 0.5rem;
        }

        #the-blog .guide-nav .nav-item-heading .nav-link {
            color: #000000;
            font-weight: bold;
            padding: 0.4rem 0 0 0;
        }

        .wp-block-image img {
            width: 100%;
        }

        .star {
            cursor: pointer;
        }

        .gfs-14 {
            font-size: 14px;
        }

        #number-star {
            font-size: 18px;
            color: #F2994A;
            margin-right: .25rem;
        }

        .gap-2 {
            gap: 2px;
        }

        .text-yellow-800 {
            color: #F2994A;
        }

        .border-yellow-300 {
            border-color: #F2994A;
        }

        .bg-yellow-50 {
            background-color: #FFF8F2;
        }

        .has-text-align-center {
            text-align: center;
        }

        .wp-block-table table {
            border-collapse: collapse;
            width: 100%;
        }

        table {
            width: 100%;
            margin-bottom: 1em;
            border: 1px solid #dedede;
            color: #333;
        }

        .wp-block-table {
            margin: 0 0 1em;
        }

        .wp-block-table {
            overflow-x: auto;
            display: block;
        }

        table tbody tr:nth-child(odd) {
            background-color: #f7f7f7;
        }

        table tr {
            border-bottom: 1px solid #dedede;
        }

        .wp-block-table td,
        .wp-block-table th {
            word-break: normal;
        }

        .wp-block-table td,
        .wp-block-table th {
            border: 1px solid;
            padding: .5em;
        }

        table td,
        table th {
            border-inline-end: 1px solid #dedede;
        }

        .aligncenter {
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }

        .alignleft {
            text-align: left;
        }

        .alignright {
            text-align: right;
        }

        .wp-block-embed__wrapper:before {
            content: "";
            display: block;
            padding-top: 50%;
        }

        .wp-block-embed__wrapper:before {
            padding-top: 56.25%;
        }

        .wp-block-embed__wrapper {
            position: relative;
        }

        .wp-block-embed {
            clear: both;
            margin-left: 0;
            margin-right: 0;
        }

        .wp-block-embed iframe {
            max-width: 100%;
        }

        html.wp-has-aspect-ratio,
        body.wp-has-aspect-ratio,
        body.wp-has-aspect-ratio>div,
        body.wp-has-aspect-ratio>div iframe {
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .wp-has-aspect-ratio iframe {
            bottom: 0;
            height: 100%;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            width: 100%;
        }

        .wp-caption {
            width: 100% !important;
        }

        .wp-caption-text {
            font-size: 15px;
            color: #333;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            margin-top: 5px;
            margin-bottom: 0;
            font-style: italic;
        }

        .div-cate-footer {
            border-top: 1px solid #e0e0e0;
            padding-top: 48px;
            padding-bottom: 24px;
            margin-top: 10px;
        }

        .d-grid {
            display: grid;
        }

        img {
            max-width: 100%;
            height: auto;
            vertical-align: middle;
            display: inline-block;
        }

        .grid-wrapper>div {
            overflow: hidden;
            border-radius: 16px;
        }

        .grid-wrapper .bi-arrows-fullscreen {
            position: absolute;
            top: 10px;
            right: 15px;
            color: white;
            cursor: pointer;
            display: none;
            transition: 0.5s ease-in-out;
        }

        .grid-wrapper>div:hover .bi-arrows-fullscreen {
            display: block;

        }

        .grid-wrapper>div:hover span {
            left: 0;
            display: block;
        }

        .grid-wrapper>div>img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 15px;
        }


        .grid-wrapper>div>span {
            content: '';
            position: absolute;
            background: rgba(0, 0, 0, 0.3);
            bottom: 10px;
            left: -100%;
            width: 100%;
            height: auto;
            padding: 5px 5px;
            color: white;
            font-size: 0.8em;
            transition: left 0.8s ease;
        }


        .grid-wrapper {
            display: grid;
            grid-gap: 15px;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            grid-auto-rows: 200px;
            grid-auto-flow: dense;
            margin-top: 30px;
        }

        .grid-wrapper .wide {
            grid-column: span 2;
        }

        .grid-wrapper .tall {
            grid-row: span 2;
        }

        .grid-wrapper .big {
            grid-column: span 2;
            grid-row: span 2;
        }

        .overlay {
            display: none;
            position: fixed;
            z-index: 9999;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            overflow: auto;
        }

        .myImg {
            border-radius: 5px;
            cursor: pointer;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 9999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            background-color: rgba(0, 0, 0, 0.7);
            justify-content: center;
            align-content: center;
        }


        .modal-content {
            object-fit: cover;
            height: 100%;
            width: auto;
        }

        #caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            height: 150px;
        }

        .modal-content,
        #caption {
            -webkit-animation-name: zoom;
            -webkit-animation-duration: 0.6s;
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @-webkit-keyframes zoom {
            from {
                -webkit-transform: scale(0)
            }

            to {
                -webkit-transform: scale(1)
            }
        }

        @keyframes zoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }

        .close {
            position: absolute;
            /* top: 15px; */
            right: 29px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
            z-index: 1000;
            padding: 20px 20px;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        @media only screen and (max-width: 700px) {
            .modal-content {
                width: 100%;
            }
        }

        .zoom {
            animation: zoomIn 0.6s;
        }

        @keyframes zoomIn {
            from {
                transform: scale(0.5);
            }

            to {
                transform: scale(1);
            }
        }

        .image-list {
            position: absolute;
            bottom: 20px;
            width: 100%;
            text-align: center;
        }

        .thumbnails {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .thumbnail {
            margin: 0 10px;
            cursor: pointer;
            max-width: 100px;
            height: 100px;
            transition: opacity 0.3s ease;
            object-fit: cover;
        }

        .thumbnail:hover {
            opacity: 0.7;
        }

        .thumbnail.active {
            opacity: 0.7;
        }

        .prev,
        .next,
        .swiper-button-next,
        .swiper-button-prev {
            cursor: pointer;
            position: fixed !important;
            top: 50%;
            width: 60px;
            height: 60px;
            margin-top: -30px;
            padding: 16px;
            color: white;
            font-weight: bold;
            font-size: 20px;
            transition: 0.6s ease;
            border-radius: 30px;
            user-select: none;
            z-index: 1000;
            color: black;
            color: #FDFDFD;
        }

        .prev {
            left: 10px;
        }

        .next {
            right: 10px;
        }

        .prev:hover,
        .next:hover,
        .swiper-button-next:hover,
        .swiper-button-prev:hover {
            background-color: #E1E1E3;
        }

        .border-img {
            border: 2px solid white;
        }

        .modal .modal-content {
            display: none;
        }

        .modal .image-list {
            display: none;
        }

        .mySwiper {
            display: none;
        }

        @media screen and (min-width: 1024px) {
            .modal .modal-content {
                display: block;
            }

            .modal .image-list {
                display: block;
            }
        }

        @media screen and (max-width: 431px) {
           

            .modal .modal-content {
                display: block;
            }

            .modal .image-list {
                display: block;
            }

            #myModal div {
                height: 50% !important;
            }

            .modal-content{
                position: absolute;
                top: 45%;
            }
        }

        body.modal-open {
            overflow: hidden;
        }

        .swiper-initialized {
            margin-left: -28px !important;
        }

        #myModal .modal-content:hover {
            cursor: grabbing;
        }
    </style>
	
	<!-- Event snippet for Lượt xem trang conversion page -->
	<script>
	  gtag('event', 'conversion', {'send_to': 'AW-11137653179/6KM0CM7w9MYZELuz7L4p'});
	</script>
	
</head>

<body>
    <?php include 'inc/header.php'; ?>
    <div class="site-inner">
        <div class="breadcrumbs-container">
            <div class="container">
                <?php custom_breadcrumb(); ?>
            </div>
        </div>
        <div class="container">
            <section class="section pt-0 mt-0">
                <div id="the-blog">
                    <div class="d-flex justify-content-between pb-0 pb-lg-2">
                        <?php
                        if (!empty($imageCollects)) {
                            ?>
                            <div class="page-section mb-3 w-100" id="contact1">
                                <div class="text-center">
                                    <h2 class="section-heading text-uppercase"></h2>
                                </div>
                                <div style="border-bottom: 1px solid #EEEEEE;">
                                    <h1 class="heading">
                                        <?php echo (count($imageCollects) - 1) . "+ Mẫu " . $result->name; ?>
                                    </h1>
                                    <p style="color: #000000; font-size: 1rem !important;">
                                        <?php echo $result->description; ?>
                                    </p>
                                    <p style="color: #000000; font-size: 1rem !important;">
                                        Cập nhật lần cuối:
                                        <?php echo format_date_time($result->updated_at); ?>
                                    </p>
                                </div>
                                <div class="grid-wrapper">
                                    <?php
                                    if (!empty($imageCollects)) {
                                        foreach ($imageCollects as $k => $collect) {
                                            ?>
                                            <div class="<?php echo $collect->class_name; ?> image-container"
                                                style="position: relative;">

                                                <img data-index="<?php echo $k; ?>" data-image="<?php echo $collect->detail; ?>"
                                                    data-id="<?php echo $collect->id_image; ?>"
                                                    data-collect="<?php echo $collect->id_collection; ?>" class="myImg lazy-wave"
                                                    lazy-src="<?php echo $collect->guid; ?>"
                                                    lazy-alt="<?php echo (count($imageCollects) - 1) . "+ Mẫu " . $result->name . " | " . $collect->detail; ?>" />
                                                <div class="bg-img"></div>
                                                <i class="bi bi-arrows-fullscreen"></i>
                                                <?php
                                                if ($collect->detail != "") {
                                                    ?>
                                                    <span><?php echo $collect->detail; ?></span>
                                                    <?php

                                                }
                                                ?>

                                            </div>
                                            <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <?php
                        } else {
                            echo '<p>Chưa có mẫu ảnh phù hợp nào.</p>';
                        }
                        ?>
                    </div>
                </div>
        </div>
        </section>
    </div>
    </div>
    <input type="hidden" id="domainSite" name="" value="<?php echo get_bloginfo('wpurl'); ?>">
    <div class="overlay"></div>
    <div id="myModal" class="modal">

        <div style="
        position: absolute;
        height: 100%;
        width: 100%;
        ">
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
            <span class="title-image" style="
        position: fixed;
        left: 50%;
        bottom: 5px;
        transform: translate(-50%, -50%);
        background: #000000;
        color: white;
        padding: 5px 10px;
"></span>
        </div>
        <div id="caption"></div>
        <div class="image-list">
            <a class="prev" style="z-index: 1000;" onclick="preFunc()">&#10094;</a>
            <a class="next" style="z-index: 1000;" onclick="nextFuc()">&#10095;</a>
            <div class="thumbnails" style="display: none;">
            </div>
        </div>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
    <?php include 'inc/footer.php'; ?>
    <?php include 'inc/js.php'; ?>
    <script>
        // var swiper = new Swiper(".mySwiper", {
        //     navigation: {
        //         nextEl: ".swiper-button-next",
        //         prevEl: ".swiper-button-prev",
        //     },
        // });
        var modal = document.getElementById("myModal");
        var body = document.body;
        var imgs = document.getElementsByClassName("myImg");
        var thumbnails = document.querySelector('.thumbnails');
        var swiperWrapper = document.querySelector('.swiper-wrapper');
        var fullScreens = document.querySelectorAll('.image-container .bi-arrows-fullscreen');
        var header = document.querySelector('header');

        for (let j = 0; j < fullScreens.length; j++) {

            fullScreens[j].addEventListener("click", function () {

                modal.style.display = "flex";

                modalImg.src = imgs[j].src;
                modalImg.alt = imgs[j].alt;
                header.style.display = 'none';
                captionText.innerHTML = imgs[j].alt;
                if (imgs[j].dataset.image != '') {
                    captionText.innerHTML = imgs[j].dataset.image;
                } else {
                    captionText.style.display = 'none';
                }
                modalImg.dataset.id = imgs[j].dataset.id;
                modalImg.dataset.index = imgs[j].dataset.index;
                body.classList.add('modal-open');
                const domain = document.getElementById('domainSite').value;
                $.ajax({
                    'url': `${domain}/wp-json/gacmai/api/select-data/${imgs[j].dataset.collect}/${imgs[j].dataset.id}`,
                    'medthod': 'GET',
                    'success': function (res) {
                        if (res.data.length > 1) {
                            var htmls = '';
                            var swiperSliderLists = '';
                            res.data.forEach((img, j) => {
                                htmls += `
                            <img data-id="${img.id_image}" data-image="${img.detail}" src="${img.guid}"
                            class="thumbnail" alt="${img.detail}">
                            `;
                                swiperSliderLists += `
                            <div class="swiper-slide" style="display: flex !important">
                            <img  class='' src="${img.guid}"
                            alt="${img.detail}" style="object-fit: contain;">
                            </div>
                            `;
                            });
                            thumbnails.innerHTML = htmls;
                            swiperWrapper.innerHTML = swiperSliderLists;
                            var thumbnail_list = document.querySelectorAll('.thumbnail');
                            thumbnail_list.forEach((item, ind) => {
                                if (modalImg.dataset.id == item.dataset.id) {
                                    item.classList.add('border-img');
                                    item.dataset.j = modalImg.dataset.j;
                                }
                                item.addEventListener('click', () => {
                                    thumbnail_list.forEach(thumbnail => {
                                        thumbnail.classList.remove('border-img');
                                    });
                                    modalImg.src = item.src;
                                    item.classList.add('border-img');
                                })
                            })
                        }
                    },
                    'error': function (e) {
                        console.log(e);
                    }
                });

            })

        }

        let startX;
        let currentX;
        let isDragging = false;
        let initialPos = 0;


        for (let index = 0; index < imgs.length; index++) {
            imgs[index].onclick = function () {
                modal.style.display = 'flex';
                modalImg.src = this.src;
                header.style.display = 'none';
                modalImg.alt = this.alt;
                captionText.innerHTML = this.alt;
                if (this.dataset.image != '') {
                    captionText.innerHTML = this.dataset.image;
                } else {
                    captionText.style.display = 'none';
                }
                modalImg.dataset.id = imgs[index].dataset.id;
                modalImg.dataset.index = imgs[index].dataset.index;
                body.classList.add('modal-open');
                const domain = document.getElementById('domainSite').value;
                $.ajax({
                    'url': `${domain}/wp-json/gacmai/api/select-data/${imgs[index].dataset.collect}/${imgs[index].dataset.id}`,
                    'method': 'GET',
                    'success': function (res) {
                        if (res.data.length > 1) {
                            var htmls = '';
                            var swiperSliderLists = '';
                            res.data.forEach((img, index) => {
                                htmls += `
                            <img data-id="${img.id_image}" data-image="${img.detail}" src="${img.guid}"
                            class="thumbnail" alt="${img.detail}">
                        `;
                                swiperSliderLists += `
                            <div class="swiper-slide" style="display: flex !important">
                            <img src="${img.guid}" alt="${img.detail}" style="object-fit: contain;">
                            </div>
                        `;
                            });
                            thumbnails.innerHTML = htmls;
                            swiperWrapper.innerHTML = swiperSliderLists;
                            var thumbnail_list = document.querySelectorAll('.thumbnail');
                            thumbnail_list.forEach((item, ind) => {
                                if (modalImg.dataset.id == item.dataset.id) {
                                    item.classList.add('border-img');
                                    item.dataset.index = modalImg.dataset.index;
                                }
                                item.addEventListener('click', () => {
                                    thumbnail_list.forEach(thumbnail => {
                                        thumbnail.classList.remove('border-img');
                                    });
                                    modalImg.src = item.src;
                                    item.classList.add('border-img');
                                });
                            });
                        }
                    },
                    'error': function (e) {
                        console.log(e);
                    }
                });
            };
        }

        var modalImg = document.getElementById("img01");
        var captionText = document.querySelector("span.title-image");
        var span = document.getElementsByClassName("close")[0];
        span.onclick = function () {
            modal.style.display = "none";
            body.classList.remove('modal-open');
            header.style.display = 'block';
        };

        function nextFuc() {
            var imgActive = document.querySelector('.border-img');
            var thumbnail_list = document.querySelectorAll('.thumbnail');
            var currentIndex = Array.from(thumbnail_list).indexOf(imgActive);
            imgActive.classList.remove('border-img');
            var nextIndex = (currentIndex + 1) % thumbnail_list.length;
            thumbnail_list[nextIndex].classList.add('border-img');
            document.getElementById('img01').src = thumbnail_list[nextIndex].src;
            if (thumbnail_list[nextIndex].dataset.image != '') {
                document.getElementById('img01').alt = thumbnail_list[nextIndex].dataset.image;
                captionText.innerHTML = thumbnail_list[nextIndex].dataset.image;
                captionText.style.display = 'block';
            } else {
                captionText.style.display = 'none';
            }
        }

        function preFunc() {
            var imgActive = document.querySelector('.border-img');
            var thumbnail_list = document.querySelectorAll('.thumbnail');
            var currentIndex = Array.from(thumbnail_list).indexOf(imgActive);
            imgActive.classList.remove('border-img');
            var prevIndex = (currentIndex - 1 + thumbnail_list.length) % thumbnail_list.length;
            thumbnail_list[prevIndex].classList.add('border-img');
            document.getElementById('img01').src = thumbnail_list[prevIndex].src;
            if (thumbnail_list[prevIndex].dataset.image != '') {
                document.getElementById('img01').alt = thumbnail_list[prevIndex].dataset.image;
                captionText.innerHTML = thumbnail_list[prevIndex].dataset.image;
                captionText.style.display = 'block';
            } else {
                captionText.style.display = 'none';
            }
        }

        // Thêm sự kiện để xử lý việc vuốt chuyển ảnh
        const startDragging = (x) => {
            isDragging = true;
            startX = x;
            modalImg.style.transition = 'none';
        };

        const stopDragging = (x) => {
            if (!isDragging) return;
            isDragging = false;
            const deltaX = x - startX;
            const modalWidth = modalImg.clientWidth;
            if (Math.abs(deltaX) > modalWidth * 0.3) {
                if (deltaX > 0) {
                    preFunc();
                } else {
                    nextFuc();
                }
            }
            modalImg.style.transform = 'translateX(0)';
        };

        const onDragMove = (x) => {
            if (!isDragging) return;
            currentX = x;
            const deltaX = currentX - startX;
            modalImg.style.transform = `translateX(${deltaX}px)`;
        };

        // Sự kiện chuột
        modalImg.addEventListener('mousedown', (e) => {
            e.preventDefault();
            startDragging(e.pageX);
        });
        modalImg.addEventListener('mousemove', (e) => {
            if (isDragging) {
                e.preventDefault();
                onDragMove(e.pageX);
            }
        });
        modalImg.addEventListener('mouseup', (e) => {
            e.preventDefault();
            stopDragging(e.pageX);
        });
        modalImg.addEventListener('mouseleave', (e) => {
            if (isDragging) {
                e.preventDefault();
                stopDragging(e.pageX);
            }
        });

        // Sự kiện cảm ứng
        modalImg.addEventListener('touchstart', (e) => startDragging(e.touches[0].pageX));
        modalImg.addEventListener('touchmove', (e) => onDragMove(e.touches[0].pageX));
        modalImg.addEventListener('touchend', (e) => stopDragging(e.changedTouches[0].pageX));
    </script>
</body>

</html>