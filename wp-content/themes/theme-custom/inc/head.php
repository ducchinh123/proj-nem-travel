<?php
// Lấy trang gốc
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

$url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

$main_site = trim($url);
?>
<!DOCTYPE html>
<html class="no-js" lang="vi" style="--vh: 4px;">

<head>
  <meta charset="UTF-8">
  <!-- <meta name="robots" content="index, follow"> -->
  <meta name="viewport"
    content="width=device-width,initial-scale=1,user-scalable=no, height=device-height, viewport-fit=cover">
  <link rel="canonical" href="https://www.nemtravel.vn/">
  <meta name="description"
    content="Đặt phòng khách sạn tại nemtravel.vn với hơn 2.000 khách sạn Việt Nam và 30.000 khách sạn Quốc tế. Đặt trực tuyến hoặc gọi 19001870. XÁC NHẬN NGAY qua SMS. Hỗ trợ chu đáo 24/7. Thanh toán an toàn &amp; đa dạng.">
  <meta name="keywords"
    content="khách sạn, phòng khách sạn, đặt khách sạn, đặt khách sạn trực tuyến, đặt khách sạn giá rẻ, dịch vụ đặt phòng khách sạn">
  <meta http-equiv="content-language" content="vi">
  <link rel="alternate" href="https://www.nemtravel.vn/" hreflang="vi-vn">
  <meta property="og:url" content="https://www.nemtravel.vn/">
  <meta property="og:title" content="Đặt phòng khách sạn trực tuyến giá rẻ, khuyến mãi đến 75%">
  <meta property="og:description"
    content="Đặt phòng khách sạn tại nemtravel.vn với hơn 2.000 khách sạn Việt Nam và 30.000 khách sạn Quốc tế. Đặt trực tuyến hoặc gọi 19001870. XÁC NHẬN NGAY qua SMS. Hỗ trợ chu đáo 24/7. Thanh toán an toàn &amp; đa dạng.">
  <script type="text/javascript" async=""
    src="https://analytics.tiktok.com/i18n/pixel/static/identify_c2008b8c.js"></script>
  <title>Đặt phòng khách sạn trực tuyến giá rẻ, khuyến mãi đến 75%</title>
  <link href="<?= site_url() ?>/public/css/style.css?v=<?= time() ?>" rel="stylesheet">
  <link rel="stylesheet" href="https://res.ivivu.com/hotel/vendor/ivivu_icons/ivivu_icons.min.css?v=89.8" as="style" onload="this.rel='stylesheet'">
  <!-- <link rel="stylesheet" href="<?= site_url() ?>/public/css/bootstrap-daterangepicker/daterangepicker.css?v=<?= time() ?>"
    as="style" onload="this.rel='stylesheet'"> -->
  <link
    rel="stylesheet"
    href="https://res.ivivu.com/hotel/vendor/bootstrap-daterangepicker/daterangepicker.css?v=89.8"
    as="style"
    onload="this.rel='stylesheet'" />
  <link rel="stylesheet" href="<?= site_url() ?>/public/css/animate/animate.min.css?v=<?= time() ?>" as="style"
    onload="this.rel='stylesheet'">
  <link rel="stylesheet" href="<?= site_url() ?>/public/css/owlcarousel2/owl.carousel.min.css?v=<?= time() ?>"
    as="style" onload="this.rel='stylesheet'">
  <link rel="stylesheet" href="<?= site_url() ?>/public/css/owlcarousel2/owl.theme.default.min.css?v=<?= time() ?>"
    as="style" onload="this.rel='stylesheet'">
  <style>
  </style>
  <link rel="shortcut icon" href="<?= site_url() ?>/wp-content/uploads/2024/08/1-removebg-preview-123.png?v=<?= time() ?>" type="image/x-icon">
  <link href="https://plus.google.com/109621980211258897268/" rel="author">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="<?= site_url() ?>/public/css/custom-home.css?v=<?= time() ?>" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="<?= site_url() . '/public/css/responsive.css' ?>">
</head>