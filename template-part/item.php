<?php
$wp_url = get_template_directory_uri();

/* 商品画像の取得  */
$img_1 = wp_get_attachment_image_src(get_field('menu_img_1'), 'medium', false);
$img_2 = wp_get_attachment_image_src(get_field('menu_img_2'), 'medium', false);
$img_3 = wp_get_attachment_image_src(get_field('menu_img_3'), 'medium', false);
$img_4 = wp_get_attachment_image_src(get_field('menu_img_4'), 'medium', false);
$img_5 = wp_get_attachment_image_src(get_field('menu_img_5'), 'medium', false);
/* 商品値段の取得  */
$price_1 = get_field('menu_price_1');
$price_2 = get_field('menu_price_2');
$price_3 = get_field('menu_price_3');
$price_4 = get_field('menu_price_4');
$price_5 = get_field('menu_price_5');
?>

<!-- ▼ 商品① -->
<?php if(post_custom('menu_price_1')): // 入力がある場合 ?>
<div class="shop-buzz__list-inner-img-item">
  <?php if(post_custom('menu_img_1')): // 入力がある場合 ?>
    <img src="<?php echo $img_1[0]; ?>" alt="<?php the_title(); ?>の商品">
  <?php else: // ないとき ?>
  <img class="d-block" src="<?php echo $wp_url; ?>/dist/images/noimg.png" alt="noimage">
  <?php endif; ?>
  <p class="mb-0 text-white">¥<?php echo number_format($price_1); ?></p>
</div>
<?php endif; ?>
<!-- ▲ 商品① -->

<!-- ▼ 商品② -->
<?php if(post_custom('menu_price_2')): // 入力がある場合 ?>
<div class="shop-buzz__list-inner-img-item">
  <?php if(post_custom('menu_img_2')): // 入力がある場合 ?>
  <img src="<?php echo $img_2[0]; ?>" alt="<?php the_title(); ?>の商品">
  <?php else: // ないとき ?>
  <img class="d-block" src="<?php echo $wp_url; ?>/dist/images/noimg.png" alt="noimage">
  <?php endif; ?>
  <p class="mb-0 text-white">¥<?php echo number_format($price_2); ?></p>
</div>
<?php endif; ?>
<!-- ▲ 商品② -->

<!-- ▼ 商品③ -->
<?php if(post_custom('menu_price_3')): // 入力がある場合 ?>
<div class="shop-buzz__list-inner-img-item">
  <?php if(post_custom('menu_img_3')): // 入力がある場合 ?>
  <img src="<?php echo $img_3[0]; ?>" alt="<?php the_title(); ?>の商品">
  <?php else: // ないとき ?>
  <img class="d-block" src="<?php echo $wp_url; ?>/dist/images/noimg.png" alt="noimage">
  <?php endif; ?>
  <p class="mb-0 text-white">¥<?php echo number_format($price_3); ?></p>
</div>
<?php endif; ?>
<!-- ▲ 商品③ -->

<!-- ▼ 商品④ -->
<?php if(post_custom('menu_price_4')): // 入力がある場合 ?>
<div class="shop-buzz__list-inner-img-item">
  <?php if(post_custom('menu_img_4')): // 入力がある場合 ?>
  <img src="<?php echo $img_4[0]; ?>" alt="<?php the_title(); ?>の商品">
  <?php else: // ないとき ?>
  <img class="d-block" src="<?php echo $wp_url; ?>/dist/images/noimg.png" alt="noimage">
  <?php endif; ?>
  <p class="mb-0 text-white">¥<?php echo number_format($price_4); ?></p>
</div>
<?php endif; ?>
<!-- ▲ 商品④ -->

<!-- ▼ 商品⑤ -->
<?php if(post_custom('menu_price_5')): // 入力がある場合 ?>
<div class="shop-buzz__list-inner-img-item">
  <?php if(post_custom('menu_img_5')): // 入力がある場合 ?>
  <img src="<?php echo $img_5[0]; ?>" alt="<?php the_title(); ?>の商品">
  <?php else: // ないとき ?>
  <img class="d-block" src="<?php echo $wp_url; ?>/dist/images/noimg.png" alt="noimage">
  <?php endif; ?>
  <p class="mb-0 text-white">¥<?php echo number_format($price_5); ?></p>
</div>
<?php endif; ?>
<!-- ▲ 商品⑤ -->
