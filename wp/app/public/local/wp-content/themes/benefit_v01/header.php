<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M6KJN82');</script>
<!-- End Google Tag Manager -->

<title>妊活・不妊治療 福利厚生サポート</title>

<!--google-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/common.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/query.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/nav.css">
<link rel="stylesheet" href="https://famione.com/css/footer.css">
<!--JS-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min.js"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

<!--ヘッダー JS-->
<script>
(function ($) { // Begin jQuery
$(function () { // DOM ready
// If a link has a dropdown, add sub menu toggle.
$('nav ul li a:not(:only-child)').click(function (e) {
$(this).siblings('.nav-dropdown').toggle();
// Close one dropdown when selecting another
$('.nav-dropdown').not($(this).siblings()).hide();
e.stopPropagation();
});
// Clicking away from dropdown will remove the dropdown class
$('html').click(function () {
$('.nav-dropdown').hide();
});
// Toggle open and close nav styles on click
$('#nav-toggle').click(function () {
$('nav ul').slideToggle();
});
// Hamburger to X toggle
$('#nav-toggle').on('click', function () {
this.classList.toggle('active');
});
}); // end DOM ready
})(jQuery); // end jQuery
</script>
<!--ヘッダー JS end-->

<?php wp_head(); ?>
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M6KJN82"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php wp_body_open(); ?>
<!-- へッダー -->
<header class="bl_mainHeader">
<h1>
  <a href="https://famione.com/"><img class="bl_logo" alt="famione" src="https://famione.com/images/logo.svg" width="179" height="32"></a>
</h1>

<button type="button" class="bl_menuSwitch js-menu"><span></span></button>
  <nav class="bl_mainHeader_right">
    <ul class="bl_mainHeader_list">
      <li><a href="/benefit/">福利厚生トップ</a></li>
      <li><a href="/benefit/interview/">事例一覧</a></li>
      <li><a target="_blank" href="https://famione.co.jp/">運営会社</a></li>

      <li><a href="https://famione.co.jp/benefit-contact/" class="bl_mainHeader_btn bl_mainHeader_btn--contact">お問い合わせ</a></li>
      <li><a href="https://famione.co.jp/benefit-download/" class="bl_mainHeader_btn bl_mainHeader_btn--document">資料請求</a></li>
    </ul>
  </nav>
</header>
