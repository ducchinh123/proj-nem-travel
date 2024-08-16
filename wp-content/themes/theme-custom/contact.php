<?php
/* 
Template Name: Contact Site
*/


global $post;

global $jumpLink_check;

function getJumpLinksFromContent($content)
{
global $jumpLink_check;
$doc = new DOMDocument();
libxml_use_internal_errors(true);
$content = mb_convert_encoding($content, 'HTML-ENTITIES', 'UTF-8');
$doc->loadHTML($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
$xpath = new DOMXPath($doc);
$query = '//*[contains(concat(" ", normalize-space(@class), " "), " jump-link ")]';
$jumpLinks = $xpath->query($query);
$result = '';
if ($jumpLinks->length > 0) {
$jumpLink_check = true;
$result .= '<div class="order-lg-1 d-none d-lg-block jump-link-div"><ul class="nav flex-column guide-nav">';
foreach ($jumpLinks as $jumpLink) {
$id = $jumpLink->getAttribute('id');

$text = trim($jumpLink->textContent);
$tag_name = $jumpLink->tagName;
if ($tag_name == 'h2') {

$result .= '<li class="nav-item nav-item-heading"><a class="nav-link" href="#' . $id . '">' . $text . '</a></li>';

} else {

$result .= '<li class="nav-item"><a class="nav-link" href="#' . $id . '">' . $text . '</a></li>';

}

// var_dump($tag_name);

}

$result .= '</ul></div>';
return $result;
}
}
function hashFromDate($date)
{

return crc32($date);

}

function randomFromDateTime($dateTime)
{
$hash = hashFromDate($dateTime);
mt_srand($hash);
$min = 400;
$max = 500; 
$randomNum = mt_rand($min, $max) / 100;
mt_srand();
return round($randomNum, 1);

}

if ($post) {

$post_title = get_the_title();

$title = $post_title;

$post_content = get_the_content();

$post_content = apply_filters('the_content', $post_content);

$description = substr(wp_strip_all_tags(get_the_excerpt()), 0, 150) . '...';

$post_id = get_the_ID();

$image_share_social = get_the_post_thumbnail_url($post_id);

$author_id = $post->post_author;

$author_name = get_the_author_meta('display_name', $author_id);



$months = array(

1 => 'Tháng Một',

2 => 'Tháng Hai',

3 => 'Tháng Ba',

4 => 'Tháng Tư',

5 => 'Tháng Năm',

6 => 'Tháng Sáu',

7 => 'Tháng Bảy',

8 => 'Tháng Tám',

9 => 'Tháng Chín',

10 => 'Tháng Mười',

11 => 'Tháng Mười Một',

12 => 'Tháng Mười Hai'

);

$lastUpdated = new DateTime(get_the_modified_date('c'));

$day = $lastUpdated->format('d');

$month = $months[(int) $lastUpdated->format('n')]; 
$year = $lastUpdated->format('Y');

$last_updated_date = sprintf('%s %s, %s', $day, $month, $year);

$div_jump_link = getJumpLinksFromContent($post_content);

$date_rating = $lastUpdated->format('d/m/Y');

$query = $wpdb->prepare("SELECT * FROM tbl_post_ratings WHERE post_id = '$post_id'");

$row = $wpdb->get_row($query);

if ($row) {

$rating = $row->rating;

$number_rating = $row->number_rating;

$id_post_ratings = $row->id;

} else {

$id_post_ratings = 0;

$date_parts = explode('/', $date_rating);

$day = intval($date_parts[0]);

$month = intval($date_parts[1]);

$year = intval($date_parts[2]);

$year = $year - $post_id;

$number_rating = round(($day * $month * $year) / $post_id);

$rating = randomFromDateTime("$year-$month-$day");

}

wp_reset_postdata();

} else {

header('Location: ' . site_url() . '/404');

die();

}

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

$logo_name =  get_option('blogname');

?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<title><?= ucfirst($title); ?> - Gác Mái</title>
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
<div class="page-section mb-3 w-100" id="contact">

<div class="text-center">

<h2 class="section-heading text-uppercase">Liên Hệ</h2>

</div>

<form id="contactForm" action="" enctype="multipart/form-data">

<div>

<div class="form-group form-group-textarea mb-md-0">

<label for="message" class="form-label">Nội dung</label>

<textarea class="form-control" name="message" id="message"></textarea>

</div>

<div class="form-group mt-3">

<div class="row">

<div class="col-md col-12 pr-md-1 mb-3">

<label for="name" class="form-label">Tên<span
class="field_required">(*)</span></label>

<input class="form-control" name="name" id="name" type="text">

<div class="invalid-feedback" data-feedback="name:required">Họ và
tên không được trống.</div>

</div>

<div class="col-md col-12 pl-lg-1 mb-3">

<label for="email" class="form-label">Email<span
class="field_required">(*)</span></label>

<input class="form-control is-invalid" name="email" id="email"
type="email">

<div class="invalid-feedback" data-feedback="email:required">Email
không được trống.</div>

<div class="invalid-feedback" data-feedback="email:email">Email
không đúng định dạng.</div>

</div>

<div class="col-md col-12 pl-lg-1 mb-3">

<label for="phone" class="form-label">Số điện thoại<span
class="field_required">(*)</span></label>

<input class="form-control" name="phone" id="phone" type="tel">

<div class="invalid-feedback" data-feedback="phone:required">Số điện
thoại không đúng định dạng.</div>
</div>
</div>
</div>
</div>
<div>
<div class="d-none mt-3" id="loadingMessage">
<div class="alert alert-warning" role="alert">
Đang gửi...
</div>
</div>
<div class="d-none mt-3" id="submitSuccessMessage">
<div class="alert alert-success" role="alert">
Tin nhắn đã được gửi thành công!
</div>
</div>
<div class="d-none mt-3" id="submitErrorMessage">
<div class="alert alert-danger" role="alert">
Lỗi khi gửi tin nhắn!
</div>
</div>
</div>
<div>
<button class="btn btn-blue text-uppercase" id="submitButton" type="submit">Gửi
yêu cầu</button>
</div>
</form>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
<?php include 'inc/footer.php'; ?>
<?php include 'inc/js.php'; ?>
<script>
$(document).ready(function () {
var $form = document.querySelector('#contactForm')
$form.addEventListener('submit', function (e) {
e.preventDefault()
if (!checkValidity()) {
return 1
} else {
var formData = new FormData(this)
$('button[type=submit]').attr('disabled', true)
$.ajax({

url: '/ajax/contact.php',

method: 'post',

data: formData,

processData: false,

contentType: false,

afterSend: function () {

$('#loadingMessage').removeClass('d-none')

},

success: function (res) {

try {


if (res.data.status == 'success') {

$('#submitSuccessMessage').removeClass('d-none')

} else {

$('#submitErrorMessage').removeClass('d-none')

}

} catch (e) {

$('#submitErrorMessage').removeClass('d-none')

}

},

error: function (xhr, status, error) {

$('#submitErrorMessage').removeClass('d-none')

},

complete: function () {

$('#loadingMessage').addClass('d-none')

}

})

}

})

})
function checkValidity() {

var form = document.getElementById("contactForm");

var nameInput = $("#name");

var emailInput = $("#email");

var phoneInput = $("#phone");

var isValid = true;

$('[data-feedback="name:required"]').hide()

$('[data-feedback="email:required"]').hide()

$('[data-feedback="email:email"]').hide()

$('[data-feedback="phone:required"]').hide()

$('[data-feedback="phone:phone"]').hide()

if (!nameInput.val()) {

$('[data-feedback="name:required"]').show()

isValid = false;

}

if (!emailInput.val()) {

$('[data-feedback="email:required"]').show()

isValid = false;

} else if (!validateEmail(emailInput.val())) {

$('[data-feedback="email:email"]').show()

isValid = false;

}

if (!phoneInput.val()) {

$('[data-feedback="phone:required"]').show()

isValid = false;

} else if (phoneInput.val().length < 10) {

$('[data-feedback="phone:phone"]').show()

isValid = false;

} else if (phoneInput.val().length > 11) {

$('[data-feedback="phone:phone"]').show()

isValid = false;

} else if (isNaN(phoneInput.val())) {

$('[data-feedback="phone:phone"]').show()

isValid = false;

}



return isValid;

}



function validateEmail(email) {

var re = /\S+@\S+\.\S+/;

return re.test(email);

}

document.querySelectorAll('a[href^="#"]').forEach(anchor => {

anchor.addEventListener('click', function (e) {

e.preventDefault();

let target = document.querySelector(this.getAttribute('href'));

let headerOffset = 100; // Chiều cao của header cố định

let elementPosition = target.getBoundingClientRect().top;

let offsetPosition = elementPosition + window.pageYOffset - headerOffset;



window.scrollTo({

top: offsetPosition,

behavior: "smooth"

});

history.pushState(null, null, this.getAttribute('href'));

});

});

$(".star").on("mouseover", function () {

var e = parseInt($(this).data("value"), 10);

$(this).parent().children(".star").each(function (t) {

t < e ? $(this).find("img").attr("src", "/public/images/star-rating-full.svg") : $(this).not(".selected").find("img").attr("src", "https://giaithanso.com/public/images/star-rating.svg")

})

}).on("mouseout", function () {

$(this).parent().children(".star:not(.selected)").each(function (e) {

$(this).find("img").attr("src", "/public/images/star-rating.svg")

})

}).on("click", function () {

var e = $('#number-star').text(),

t = $(this).parent().children(".star");

for (i = 0; i < t.length; i++)

$(t[i]).removeClass("selected"),

$(this).find("img").attr("src", "/public/images/star-rating.svg");

for (i = 0; i < e; i++)

$(t[i]).addClass("selected"),

$(this).find("img").attr("src", "/public/images/star-rating-full.svg");

var number_rating = $('#number_rating').text();

number_rating = parseInt(number_rating) + 1;



$.ajax({

url: "/ajax/post_ratings.php",

type: "POST",

data: {

id_post: <?= $post_id ?>,

rating: e,

number_rating: number_rating,

date: '<?= $last_updated_date ?>'

},

success: function (response) {

response = JSON.parse(response);

if (response.status == 'success') {

$('#number_rating').text(number_rating);

$('.rating-stars').addClass('d-none');

$('.thank-review').show();

}

console.log(response);

},

error: function (xhr, status, error) {

console.error(error);

}

});

})

</script>
</body>
</html>