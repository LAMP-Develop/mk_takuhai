<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section id="mv" class="mv">
<div class="container">
<div class="mv__bg">
<h2>
<img class="d-block d-md-none" src="<?php echo $wp_url; ?>/dist/images/mv_txt_sp.png" alt="MKタクシーが安心安全にご自宅までお届け" srcset="<?php echo $wp_url; ?>/dist/images/mv_txt_sp.png 1x, <?php echo $wp_url; ?>/dist/images/mv_txt_sp@2x.png 2x">
<img class="d-none d-md-block" src="<?php echo $wp_url; ?>/dist/images/mv_txt_pc.png" alt="MKタクシーが安心安全にご自宅までお届け" srcset="<?php echo $wp_url; ?>/dist/images/mv_txt_pc.png 1x, <?php echo $wp_url; ?>/dist/images/mv_txt_pc@2x.png 2x">
</h2>
<!-- <div class="mv_stamp">
<img src="<?php echo $wp_url; ?>/dist/images/mv_stamp.png" alt="MKタクシーが安心安全にご自宅までお届け" srcset="<?php echo $wp_url; ?>/dist/images/mv_stamp.png 1x, <?php echo $wp_url; ?>/dist/images/mv_stamp@2x.png 2x">
</div> -->
</div>
<div class="search__free mv__search mt-3">
<form class="search__free__form" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
<div class="input-group">
<input type="hidden" name="post_type" value="shop">
<div class="input-group">
<div class="input-group-prepend">
<input type="text" class="form-control" name="s" placeholder="お弁当" value="<?php echo get_search_query(); ?>" />
</div>
</div>
<div class="search__free__form-btn">
<input type="submit" class="btn btn-block btn-primary text-nowrap" value="検索">
</div>
</form>
</div>
</div>
</div>
</section>
<!-- mv -->

<div class="container bg-white pt-4 pb-3">
<div class="d-md-none d-block bg-info">
<div class="cta-takeeats-btn m-0 p-0">
<a class="btn text-white py-3" href="<?php echo $home; ?>/delivery/">ご利用方法はこちら<i class="ml-3 fas fa-chevron-right"></i></a>
</div>
</div>
</div>

<section class="search">
<div class="search__genre bg-white pb-4">
<div class="container">
<div class="search__genre-list">
<ul>
<li>
<a class="text-body" href="<?php echo $home; ?>/shop_category/yakiniku/">
<img src="<?php echo $wp_url; ?>/dist/images/genre_yakiniku.png" alt="焼肉/鉄板焼" srcset="<?php echo $wp_url; ?>/dist/images/genre_yakiniku.png 1x, <?php echo $wp_url; ?>/dist/images/genre_yakiniku@2x.png 2x">
<span>焼肉/鉄板焼</span>
</a>
</li>
<li>
<a class="text-body" href="<?php echo $home; ?>/shop_category/sushi/">
<img src="<?php echo $wp_url; ?>/dist/images/genre_sushi.png" alt="寿司/刺身" srcset="<?php echo $wp_url; ?>/dist/images/genre_sushi.png 1x, <?php echo $wp_url; ?>/dist/images/genre_sushi@2x.png 2x">
<span>寿司/刺身</span>
</a>
</li>
<li>
<a class="text-body" href="<?php echo $home; ?>/shop_category/japan/">
<img src="<?php echo $wp_url; ?>/dist/images/genre_japan.png" alt="和食" srcset="<?php echo $wp_url; ?>/dist/images/genre_japan.png 1x, <?php echo $wp_url; ?>/dist/images/genre_japan@2x.png 2x">
<span>和食</span>
</a>
</li>
<li>
<a class="text-body" href="<?php echo $home; ?>/shop_category/western/">
<img src="<?php echo $wp_url; ?>/dist/images/genre_western.png" alt="洋食" srcset="<?php echo $wp_url; ?>/dist/images/genre_western.png 1x, <?php echo $wp_url; ?>/dist/images/genre_western@2x.png 2x">
<span>洋食</span>
</a>
</li>
<li>
<a class="text-body" href="<?php echo $home; ?>/shop_category/curry/">
<img src="<?php echo $wp_url; ?>/dist/images/genre_curry.png" alt="カレー" srcset="<?php echo $wp_url; ?>/dist/images/genre_curry.png 1x, <?php echo $wp_url; ?>/dist/images/genre_curry@2x.png 2x">
<span>カレー</span>
</a>
</li>
<li>
<a class="text-body" href="<?php echo $home; ?>/shop_category/izakaya/">
<img src="<?php echo $wp_url; ?>/dist/images/genre_izakaya.png" alt="居酒屋" srcset="<?php echo $wp_url; ?>/dist/images/genre_izakaya.png 1x, <?php echo $wp_url; ?>/dist/images/genre_izakaya@2x.png 2x">
<span>居酒屋</span>
</a>
</li>
<li>
<a class="text-body" href="<?php echo $home; ?>/shop_category/yakitori/">
<img src="<?php echo $wp_url; ?>/dist/images/genre_yakitori.png" alt="焼き鳥" srcset="<?php echo $wp_url; ?>/dist/images/genre_yakitori.png 1x, <?php echo $wp_url; ?>/dist/images/genre_yakitori@2x.png 2x">
<span>焼き鳥</span>
</a>
</li>
<li>
<a class="text-body" href="<?php echo $home; ?>/shop_category/cafe/">
<img src="<?php echo $wp_url; ?>/dist/images/genre_cafe.png" alt="カフェ/スイーツ" srcset="<?php echo $wp_url; ?>/dist/images/genre_cafe.png 1x, <?php echo $wp_url; ?>/dist/images/genre_cafe@2x.png 2x">
<span>カフェ/スイーツ</span>
</a>
</li>
<li>
<a class="text-body" href="<?php echo $home; ?>/shop_category/asia/">
<img src="<?php echo $wp_url; ?>/dist/images/genre_asia.png" alt="アジア料理" srcset="<?php echo $wp_url; ?>/dist/images/genre_asia.png 1x, <?php echo $wp_url; ?>/dist/images/genre_asia@2x.png 2x">
<span>アジア料理</span>
</a>
</li>

</ul>
</div>
</div>
</div>
</section>

<!-- search -->
<div class="py-md-5 main-left front">
<div class="container">
<div class="row">
<div class="col-md-8">
<?php get_template_part('template-part/parts/reco-restaurants'); ?>
<!-- buzz -->
</div>
<div class="col-md-4 d-md-block d-none">
<?php get_template_part('template-part/parts/search-restaurants') ?>
</div>
<!-- sidebar -->
</div>
</div>
</div>
<?php get_footer();
