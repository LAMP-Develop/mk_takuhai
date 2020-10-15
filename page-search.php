<?php
global $pref_name,$genre_name,$pref_id,$genre_id;
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$request = $_GET;
$param = '';
$temp = 0;
foreach ($request as $key => $val) {
    if ($val == '' && $val == null) {
        unset($request[$key]);
    } else {
        if ($param === '') {
            if ($key === 'keyword') {
                $val = urlencode($val);
            }
            if ($key === 'pages') {
                $param .= "?page=".$val;
            } else {
                $param .= "?".$key."=".$val;
            }
        } else {
            if ($key === 'keyword') {
                $val = urlencode($val);
            }
            if ($key === 'pages') {
                $param .= "&page=".$val;
            } else {
                $param .= "&".$key."=".$val;
            }
        }
    }
    ++$temp;
}
// var_dump($param);
$data = get_restaurant($param);
$total = $data['total'];
$current_page = $data['current_page'];
$pref = get_pref();
$genres = get_genres();
if ($_GET['pref'] != '') {
    $pref_name = $pref[((int)$_GET['pref']-1)]['name'];
    $pref_id = (int)$_GET['pref'];
}
if ($_GET['genre'] != '') {
    $genre_name = $genres[((int)$_GET['genre']-1)]['name'];
    $genre_id = (int)$_GET['genre'];
}
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
<p class="shop-buzz__list-txt-tag">カフェ</p><p class="shop-buzz__list-txt-tag">カフェ</p><p class="shop-buzz__list-txt-tag">カフェ</p><p class="shop-buzz__list-txt-tag">カフェ</p>
</div>
<button type="button" class="text-primary border-0 bg-white" data-toggle="modal" data-target="#search-restaurant">変更</button>
</div>
<!-- search__filter -->
<div class="search__current my-3">
<?php
if ($_GET['keyword'] != '') {
echo '<span class="badge badge-light p-2 mr-2">'.$_GET['keyword'].'</span>';
}
if ($_GET['pref'] != '') {
echo '<span class="badge badge-light p-2 mr-2">'.$pref[((int)$_GET['pref']-1)]['name'].'</span>';
}
if ($_GET['genre'] != '') {
echo '<span class="badge badge-light p-2 mr-2">'.$genres[((int)$_GET['genre']-1)]['name'].'</span>';
}
if ($_GET['credit_card'] != '') {
echo '<span class="badge badge-light p-2 mr-2">クレカ可</span>';
}
if ($_GET['electronic_money'] != '') {
echo '<span class="badge badge-light p-2 mr-2">電子マネー可</span>';
}
if ($_GET['parking_flag'] != '') {
echo '<span class="badge badge-light p-2 mr-2">駐車場あり</span>';
}
?>
</div>
<!-- search__current -->
<div class="search__result-txt my-3 small">検索結果：<span><?php echo number_format($data['total']); ?></span>件</div>
<!-- search__result-txt -->

<!-- TakeEats登録店舗の場合 -->
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
<p class="text-info">お店の簡単な説明お店の簡単な説明お店の...</p>
</div>
</div>
</a>

<!-- TakeEats未登録店舗の場合 -->
<a class="shop-search-buzz__list-inner" href="<?php echo $home; ?>/restaurant?id=<?php echo $shop_id.$recommend; ?>">
<div class="shop-search-buzz__list-inner-img-wrap">
<div class="shop-search-buzz__list-inner-img-none">
<!-- デフォルト画像画像 -->
<img src="<?php echo $wp_url; ?>/dist/images/sample_noimage.png" alt="画像なし">
</div>
</div>
<div class="shop-search-buzz__list-intro bg-light">
<div class="shop-search-buzz__list-intro-txt">
<h3 class="text-info">店舗名が入ります</h3>
<p class="text-info">お店の簡単な説明お店の簡単な説明お店の...</p>
</div>
</div>
</a>

<!-- <div class="search__result">
<?php
foreach ($data['data'] as $key => $val):
$shop_id = $val['id'];
$shop_name = $val['name'];
$shop_genre = $genres[((int)$val['cuisine_genre_id']-1)]['name'];
$shop_pref = $pref[((int)$val['pref_id']-1)]['name'];
$shop_access = mb_strimwidth($val['access'], 0, 90, "…");
$business_hours = mb_strimwidth($val['business_hours'], 0, 90, "…");
$regular_holiday = mb_strimwidth($val['regular_holiday'], 0, 85, "…");
$tags = explode(',', $val['tags']);
$takeeats_url = $val['takeeats_url'];
$credit_card = $val['credit_card'];
if ($takeeats_url != '' && $takeeats_url != null) {
$recommend_flag = true;
$recommend = '&recommend=1';
$menus = get_menu($shop_id)['data'];
} else {
$recommend_flag = false;
$recommend = '';
$menus = [];
}
?>
<a class="shop-buzz__list-inner" href="<?php echo $home; ?>/restaurant?id=<?php echo $shop_id.$recommend; ?>">
<?php if ($recommend_flag && count($menus) != 0): ?>
<div class="shop-buzz__list-inner-imgs">
<?php foreach ($menus as $key => $menu): ?>
<div><img src="//ssl.omomuki.me/storage/<?php echo $menu['thumbnail']; ?>" alt="<?php echo $menu['name']; ?>"></div>
<?php
if ($key === 2) {
break;
}
endforeach; ?>
</div>
<?php endif; ?>
</div>
<div class="shop-buzz__list-txt">
<p class="shop-buzz__list-txt-tag"><?php echo $shop_genre; ?></p>
<h3><?php echo $shop_name; ?></h3>
<p class="shop-buzz__list-txt-time">営業時間 <?php echo $business_hours; ?></p>
<p class="shop-buzz__list-txt-time">定休日 <?php echo $regular_holiday; ?></p>
</div>
</a>

<?php endforeach; ?> -->

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
