<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<?php get_template_part('template-part/modal/search-form'); ?>

<div class="bg-secondary">
<div class="container py-3">
<div class="search__free">
<form class="search__free__form" action="<?php echo $home; ?>/search/" method="get">
<div class="input-group">
<div class="input-group-prepend">
<input type="text" class="form-control" name="keyword" value="" placeholder="お弁当">
</div>
<div class="search__free__form-btn">
<button class="btn btn-block btn-primary text-nowrap" type="submit">検索</button>
</div>
</form>
</div>
</div>
</div>
</div>

<div class="py-md-5 main-left">
<div class="container">
<div class="row">

<div class="col-md-8">
<section class="py-4 search">
<div class="search__filter">
<div>
</div>
<!-- search__current -->
<button type="button" class="text-primary border-0 bg-white" data-toggle="modal" data-target="#search-restaurant">変更</button>
</div>
<!-- search__filter -->
<div class="search__result-txt my-3 small">検索結果：<span><?php echo number_format($data['total']); ?></span>件</div>
<!-- search__result-txt -->

<a class="shop-search-buzz__list-inner" href="<?php echo $home; ?>/restaurant?id=<?php echo $shop_id.$recommend; ?>">
<p class="shop-buzz__list-net">ネット注文OK</p>
<div class="shop-search-buzz__list-inner-img-wrap">
<div class="shop-search-buzz__list-inner-img-list">
<!-- 商品画像 -->
<div class="shop-search-buzz__list-inner-img-item">
<img src="<?php echo $wp_url; ?>/dist/images/sample_item.png" alt="<店舗名>の商品">
<p class="mb-0 text-white">¥1,000</p>
</div>
<div class="shop-search-buzz__list-inner-img-item">
<img src="<?php echo $wp_url; ?>/dist/images/sample_item.png" alt="<店舗名>の商品">
<p class="mb-0 text-white">¥1,000</p>
</div>
<div class="shop-search-buzz__list-inner-img-item">
<img src="<?php echo $wp_url; ?>/dist/images/sample_item.png" alt="<店舗名>の商品">
<p class="mb-0 text-white">¥1,000</p>
</div>
<div class="shop-search-buzz__list-inner-img-item">
<img src="<?php echo $wp_url; ?>/dist/images/sample_item.png" alt="<店舗名>の商品">
<p class="mb-0 text-white">¥1,000</p>
</div>
<div class="shop-search-buzz__list-inner-img-item">
<img src="<?php echo $wp_url; ?>/dist/images/sample_item.png" alt="<店舗名>の商品">
<p class="mb-0 text-white">¥1,000</p>
</div>
</div>
</div>
<div class="shop-search-buzz__list-intro bg-light">
<div class="shop-search-buzz__list-intro-img bg-white">
<img src="<?php echo $wp_url; ?>/dist/images/sample_logo.png" alt="<店舗名>のロゴ">
</div>
<div class="shop-search-buzz__list-intro-txt">
<h3 class="text-info">店舗名が入ります</h3>
<p class="text-info">お店の簡単な説明お店の簡単な説明お店の簡単な説明お店のーー３５文字まで...</p>
</div>
</div>
</a>

<a class="shop-search-buzz__list-inner" href="<?php echo $home; ?>/restaurant?id=<?php echo $shop_id.$recommend; ?>">
<div class="shop-search-buzz__list-inner-img-wrap">
<div class="shop-search-buzz__list-inner-img-list">
<!-- 商品画像 -->
<div class="shop-search-buzz__list-inner-img-item">
<img src="<?php echo $wp_url; ?>/dist/images/sample_item.png" alt="<店舗名>の商品">
<p class="mb-0 text-white">¥1,000</p>
</div>
<div class="shop-search-buzz__list-inner-img-item">
<img src="<?php echo $wp_url; ?>/dist/images/sample_item.png" alt="<店舗名>の商品">
<p class="mb-0 text-white">¥1,000</p>
</div>
<div class="shop-search-buzz__list-inner-img-item">
<img src="<?php echo $wp_url; ?>/dist/images/sample_item.png" alt="<店舗名>の商品">
<p class="mb-0 text-white">¥1,000</p>
</div>
<div class="shop-search-buzz__list-inner-img-item">
<img src="<?php echo $wp_url; ?>/dist/images/sample_item.png" alt="<店舗名>の商品">
<p class="mb-0 text-white">¥1,000</p>
</div>
<div class="shop-search-buzz__list-inner-img-item">
<img src="<?php echo $wp_url; ?>/dist/images/sample_item.png" alt="<店舗名>の商品">
<p class="mb-0 text-white">¥1,000</p>
</div>
</div>
</div>
<div class="shop-search-buzz__list-intro bg-light">
<div class="shop-search-buzz__list-intro-img bg-white">
<img src="<?php echo $wp_url; ?>/dist/images/sample_logo.png" alt="<店舗名>のロゴ">
</div>
<div class="shop-search-buzz__list-intro-txt">
<h3 class="text-info">店舗名が入ります</h3>
<p class="text-info">お店の簡単な説明お店の簡単な説明お店の簡単な説明お店のーー３５文字まで...</p>
</div>
</div>
</a>

<!-- search__result -->
<?php search_page_navi($total, $current_page); ?>
</div>
</section>
<!-- sidebar -->
<div class="col-md-4 d-md-block d-none">
<?php get_template_part('template-part/parts/search-restaurants') ?>
</div>

</div>
</div>
</div>
<?php get_footer();
