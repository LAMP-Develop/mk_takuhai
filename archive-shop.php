<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<?php get_template_part('template-part/modal/search-form'); ?>

<div class="bg-secondary">
<div class="container py-3">
<div class="search__free">

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
</div>

<div class="py-md-5 main-left  bg-white">
<div class="container">
<div class="row">

<div class="col-md-8">
<section class="search">

<div class="search__filter">
<div><span class="shop-buzz__list-txt-tag"><?php single_cat_title(); ?></span></div>
<!-- search__current -->
<button type="button" class="text-primary border-0 bg-white" data-toggle="modal" data-target="#search-restaurant">変更</button>
</div>

<?php
$post_type = $_GET['post_type'];
$s = $_GET['s'];
$shop_category = $_GET['shop_category']; //ジャンル
$shop_tag = $_GET['shop_tag']; //タグ
$paged = get_query_var('paged') ? get_query_var('paged') : 1;

if ($shop_category != null && $shop_category !== 'size-nochoice') {
  $taxquery_category = array(
    'taxonomy' => 'shop_category',
    'terms' => $shop_category,
    'field' => 'slug',
  );
}

if ($shop_tag != null) {
  $taxquery_tag = array(
    'taxonomy' => 'shop_tag',
    'terms' => $shop_tag,
    'field' => 'slug',
  );
}

$args = array(
  'paged' => $paged,
  'post_type' => 'shop',
  'tax_query' => array(
    'relation' => 'AND',
    $taxquery_category,
    $taxquery_tag
  ),
);
query_posts($args);

if(have_posts()): ?>

<div class="mb-3">検索結果：<span><?php echo $wp_query->found_posts; ?></span>件</div>

<?php while(have_posts()): the_post(); ?>

<a class="shop-search-buzz__list-inner" href="<?php echo get_the_permalink(); ?>">

<?php if( get_field('net') === "はい"): ?>
<p class="shop-buzz__list-net">ネット注文OK</p>
<?php elseif( get_field('net') === "いいえ"): ?>
<?php endif; ?>


<?php if( get_field('menu') === "はい"): ?>
<!-- search__result__inner__wrap -->

<div class="shop-search-buzz__list-inner-img-wrap">
<div class="shop-search-buzz__list-inner-img-list">
<!-- 商品 -->
<?php if(post_custom('menu_img_1')): // 入力がある場合 ?>
<div class="shop-search-buzz__list-inner-img-item">
<img src="<?php the_field('menu_img_1'); ?>" alt="<?php the_title(); ?>の商品">
<p class="mb-0 text-white">¥<?php the_field('menu_price_1'); ?></p>
</div>
<?php endif; ?>

<?php if(post_custom('menu_img_2')): // 入力がある場合 ?>
<div class="shop-search-buzz__list-inner-img-item">
<img src="<?php the_field('menu_img_2'); ?>" alt="<?php the_title(); ?>の商品">
<p class="mb-0 text-white">¥<?php the_field('menu_price_2'); ?></p>
</div>
<?php endif; ?>

<?php if(post_custom('menu_img_3')): // 入力がある場合 ?>
<div class="shop-search-buzz__list-inner-img-item">
<img src="<?php the_field('menu_img_3'); ?>" alt="<?php the_title(); ?>の商品">
<p class="mb-0 text-white">¥<?php the_field('menu_price_3'); ?></p>
</div>
<?php endif; ?>

<?php if(post_custom('menu_img_4')): // 入力がある場合 ?>
<div class="shop-search-buzz__list-inner-img-item">
<img src="<?php the_field('menu_img_4'); ?>" alt="<?php the_title(); ?>の商品">
<p class="mb-0 text-white">¥<?php the_field('menu_price_4'); ?></p>
</div>
<?php endif; ?>

<?php if(post_custom('menu_img_5')): // 入力がある場合 ?>
<div class="shop-search-buzz__list-inner-img-item">
<img src="<?php the_field('menu_img_5'); ?>" alt="<?php the_title(); ?>の商品">
<p class="mb-0 text-white">¥<?php the_field('menu_price_5'); ?></p>
</div>
</div>
</div>
<?php endif; ?>

<?php elseif( get_field('menu') === "いいえ"): ?>
<div class="shop-search-buzz__list-inner-mv">
<img src="<?php the_field('main_img'); ?>" alt="<?php the_title(); ?>">
</div>
<?php endif; ?>


<div class="shop-search-buzz__list-intro bg-light">
<div class="shop-search-buzz__list-intro-img bg-white">
<img src="<?php echo $wp_url; ?>/dist/images/sample_logo.png" alt="<?php the_title(); ?>のロゴ">
</div>
<div class="shop-search-buzz__list-intro-txt">
<h3 class="text-info"><?php the_title(); ?></h3>
<p class="text-info">
<?php
if(mb_strlen(get_field('about'), 'UTF-8')>35){
$title= mb_substr(get_field('about'), 0, 35, 'UTF-8');
echo $title.'…';
}else{
echo get_field('about');
}
?>
</p>
</div>
</div>
</a>

<?php endwhile; ?>

<?php
if (function_exists('wp_pagenavi')) {
  wp_pagenavi(['query' => $wp_query]);
}
?>

<?php else: // ないとき ?>
<p class="txt-c">該当の店舗がありません。</p>
<?php endif;?>

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
