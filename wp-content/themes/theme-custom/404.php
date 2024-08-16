<?php
$title = '404 - Không tìm thấy';
$description = 'Có vẻ như không có trang nào ở đây.';
?>
<html lang="en-US">
<head>
<title><?= $title; ?></title>
<meta name="description" content="<?= $description; ?>">
<link rel="icon" type="image/x-icon" href="<?= $favicon ?>" />
<?php include 'inc/head.php'; ?>
<link href="<?= site_url() ?>/public/css/style_404.css?v=<?= time() ?>" rel="stylesheet"> 
<style>.footer .logo {height: unset !important;}</style>
</head>
<body>
<?php include 'inc/header.php'; ?>

<main>
<div id="notfound">
<div class="notfound">
<div class="notfound-404">
<h1>404</h1>
</div>
<h2>Ồ! Không có gì được tìm thấy</h2>
<p>Trang bạn đang tìm kiếm có thể đã bị xóa hoặc đã thay đổi tên hoặc tạm thời không khả dụng.<a href="/">Trở về</a></p>
</div>
</div>
</main>
<?php include 'inc/footer.php'; ?>

<?php include 'inc/js.php'; ?>

</body>
</html>