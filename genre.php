<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<section class="search">
<div class="search__genre bg-white pb-4">
<div class="container">
<div class="search__genre-list">
<ul>
<li>
<a class="text-body" href="<?php echo $home; ?>/?post_type=shop&s=&shop_category=yakiniku">
<img src="<?php echo $wp_url; ?>/dist/images/genre_yakiniku.png" alt="焼肉/鉄板焼" srcset="<?php echo $wp_url; ?>/dist/images/genre_yakiniku.png 1x, <?php echo $wp_url; ?>/dist/images/genre_yakiniku@2x.png 2x">
<span>焼肉/鉄板焼</span>
</a>
</li>
<li>
<a class="text-body" href="<?php echo $home; ?>/?post_type=shop&s=&shop_category=sushi">
<img src="<?php echo $wp_url; ?>/dist/images/genre_sushi.png" alt="寿司/刺身" srcset="<?php echo $wp_url; ?>/dist/images/genre_sushi.png 1x, <?php echo $wp_url; ?>/dist/images/genre_sushi@2x.png 2x">
<span>寿司/刺身</span>
</a>
</li>
<li>
<a class="text-body" href="<?php echo $home; ?>/?post_type=shop&s=&shop_category=japan">
<img src="<?php echo $wp_url; ?>/dist/images/genre_japan.png" alt="和食" srcset="<?php echo $wp_url; ?>/dist/images/genre_japan.png 1x, <?php echo $wp_url; ?>/dist/images/genre_japan@2x.png 2x">
<span>和食</span>
</a>
</li>
<li>
<a class="text-body" href="<?php echo $home; ?>/?post_type=shop&s=&shop_category=western">
<img src="<?php echo $wp_url; ?>/dist/images/genre_western.png" alt="洋食" srcset="<?php echo $wp_url; ?>/dist/images/genre_western.png 1x, <?php echo $wp_url; ?>/dist/images/genre_western@2x.png 2x">
<span>洋食</span>
</a>
</li>
<li>
<a class="text-body" href="<?php echo $home; ?>/?post_type=shop&s=&shop_category=curry">
<img src="<?php echo $wp_url; ?>/dist/images/genre_curry.png" alt="カレー" srcset="<?php echo $wp_url; ?>/dist/images/genre_curry.png 1x, <?php echo $wp_url; ?>/dist/images/genre_curry@2x.png 2x">
<span>カレー</span>
</a>
</li>
<li>
<a class="text-body" href="<?php echo $home; ?>/?post_type=shop&s=&shop_category=izakaya">
<img src="<?php echo $wp_url; ?>/dist/images/genre_izakaya.png" alt="居酒屋" srcset="<?php echo $wp_url; ?>/dist/images/genre_izakaya.png 1x, <?php echo $wp_url; ?>/dist/images/genre_izakaya@2x.png 2x">
<span>居酒屋</span>
</a>
</li>
<li>
<a class="text-body" href="<?php echo $home; ?>/?post_type=shop&s=&shop_category=yakitori">
<img src="<?php echo $wp_url; ?>/dist/images/genre_yakitori.png" alt="焼き鳥" srcset="<?php echo $wp_url; ?>/dist/images/genre_yakitori.png 1x, <?php echo $wp_url; ?>/dist/images/genre_yakitori@2x.png 2x">
<span>焼き鳥</span>
</a>
</li>
<li>
<a class="text-body" href="<?php echo $home; ?>/?post_type=shop&s=&shop_category=cafe">
<img src="<?php echo $wp_url; ?>/dist/images/genre_cafe.png" alt="カフェ/スイーツ" srcset="<?php echo $wp_url; ?>/dist/images/genre_cafe.png 1x, <?php echo $wp_url; ?>/dist/images/genre_cafe@2x.png 2x">
<span>カフェ/スイーツ</span>
</a>
</li>
<li>
<a class="text-body" href="<?php echo $home; ?>/?post_type=shop&s=&shop_category=asia">
<img src="<?php echo $wp_url; ?>/dist/images/genre_asia.png" alt="アジア料理" srcset="<?php echo $wp_url; ?>/dist/images/genre_asia.png 1x, <?php echo $wp_url; ?>/dist/images/genre_asia@2x.png 2x">
<span>アジア料理</span>
</a>
</li>
<li>
<a class="text-body" href="<?php echo $home; ?>/?post_type=shop&s=&shop_category=other">
<img src="<?php echo $wp_url; ?>/dist/images/genre_other.png" alt="多国籍/その他" srcset="<?php echo $wp_url; ?>/dist/images/genre_other.png 1x, <?php echo $wp_url; ?>/dist/images/genre_other@2x.png 2x">
<span>多国籍/その他</span>
</a>
</li>

</ul>
</div>
</div>
</div>
</section>
