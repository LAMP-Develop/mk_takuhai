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
<div class="mv_stamp">
<img src="<?php echo $wp_url; ?>/dist/images/mv_stamp.png" alt="MKタクシーが安心安全にご自宅までお届け" srcset="<?php echo $wp_url; ?>/dist/images/mv_stamp.png 1x, <?php echo $wp_url; ?>/dist/images/mv_stamp@2x.png 2x">
</div>
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

<section class="search">
<div class="container">
</div>
<div class="search__genre bg-white">
<div class="search__genre-list">
<ul>
<li>
<a class="text-body" href="<?php echo $home; ?>/shop_category/obento/">
<img src="<?php echo $wp_url; ?>/dist/images/genre_obento.png" alt="料理のジャンル" srcset="<?php echo $wp_url; ?>/dist/images/genre_obento.png 1x, <?php echo $wp_url; ?>/dist/images/genre_obento@2x.png 2x">
<span>お弁当</span>
</a>
</li>
<li>
<a class="text-body" href="<?php echo $home; ?>/shop_category/fresh/">
<img src="<?php echo $wp_url; ?>/dist/images/genre_food.png" alt="料理のジャンル" srcset="<?php echo $wp_url; ?>/dist/images/genre_food.png 1x, <?php echo $wp_url; ?>/dist/images/genre_food@2x.png 2x">
<span>生鮮食品</span>
</a>
</li>
<li>
<a class="text-body" href="<?php echo $home; ?>/shop_category/sushi/">
<img src="<?php echo $wp_url; ?>/dist/images/genre_sushi.png" alt="料理のジャンル" srcset="<?php echo $wp_url; ?>/dist/images/genre_sushi.png 1x, <?php echo $wp_url; ?>/dist/images/genre_sushi@2x.png 2x">
<span>お弁当</span>
</a>
</li>
<li>
<a class="text-body" href="<?php echo $home; ?>/shop_category/sweets/">
<img src="<?php echo $wp_url; ?>/dist/images/genre_sweets.png" alt="料理のジャンル" srcset="<?php echo $wp_url; ?>/dist/images/genre_sweets.png 1x, <?php echo $wp_url; ?>/dist/images/genre_sweets@2x.png 2x">
<span>スイーツ</span>
</a>
</li>

</ul>
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
