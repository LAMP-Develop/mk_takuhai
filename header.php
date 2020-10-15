<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
<!DOCTYPE HTML>
<html lang="ja">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<?php if (is_home() || is_front_page()): ?>
<link rel="stylesheet" href="//unpkg.com/swiper/swiper-bundle.min.css">
<?php endif;?>
<?php wp_head(); ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
</head>

<?php if (!is_page(['search', 'geo']) && !is_single()): ?>
<body class="bg-light">
<?php else: ?>
<body>
<?php endif; ?>
<?php wp_body_open(); ?>
<header class="header sticky-top bg-white">
<nav class="navbar navbar-expand-xlg justify-content-start align-items-center">
<h1 class="navbar-brand p-0 m-0">
<a class="d-inline-block align-middle" href="<?php echo $home; ?>">
<img src="<?php echo $wp_url; ?>/dist/images/logo.png" alt="<?php bloginfo('name'); ?>" srcset="<?php echo $wp_url; ?>/dist/images/logo.png 1x, <?php echo $wp_url; ?>/dist/images/logo@2x.png 2x">
</a>
</h1>
<!-- スマホメニュー -->
<div class="d-block d-md-none">
</div>
<!-- スマホメニュー終わり -->
<!-- PCメニュー -->
<div class="d-none d-md-block">
  <div class="navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item"><a class="nav-link" href="<?php echo $home; ?>/delivery">お届け方法について</a></li>
    <li class="nav-item"><a class="nav-link" href="<?php echo $home; ?>/postage">送料について</a></li>
    <li class="nav-item"><a class="nav-link" href="<?php echo $home; ?>/category/news">お知らせ一覧</a></li>
    <li class="nav-item"><a class="nav-link" href="<?php echo $home; ?>/" target="_blank">MKタク配に出店する</a></li>
  </ul>
  </div>
</div>
<!-- PCメニュー終わり -->
</nav>
</header>
<?php get_template_part('template-part/modal/search-form'); ?>
<main>
