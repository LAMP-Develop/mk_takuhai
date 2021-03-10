<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/';
$id = $post->ID;
$text = get_field('time');
$str = str_replace(array('<br>', '<br />', "\r\n", "\n", "\r", '　'), '', $text);
?>

<a class="shop-buzz__list-inner scroll-content shadow-sm br-7 d-block mb-md" href="<?php the_permalink(); ?>">
  <?php if( get_field('net') === "はい"): ?>
  <p class="shop-buzz__list-net f-11">ネット注文OK</p>
  <?php elseif( get_field('net') === "いいえ"): ?>
  <?php endif; ?>

  <div class="shop-buzz__list-txt">
    <p class="shop-buzz__list-txt-tag f-13">
      <i class="fas fa-utensils"></i>
      <?php
      if ($terms = get_the_terms($post->ID, 'shop_category')) {
      foreach ( $terms as $term ) {
      echo esc_html($term->name);
      }
      }
      ?>
    </p>
    <h3 class="f-15 pb-sm text-body m-0"><?php the_title(); ?></h3>
    <div class="py-sm">
      <p class="shop-buzz__list-txt-time pt-sm">営業時間：<?php echo mb_substr(($str), 0, 23);?>
      </p>
      <p class="shop-buzz__list-txt-time pb-sm">定休日：<?php the_field('day'); ?></p>
    </div>
  </div>

  <?php if( get_field('net') === "はい"):?>
  <!-- ▼ メニュー -->
  <div class="restaurant__menu restaurant-block">
    <div class="shop-buzz__list-inner-img-wrap">
      <?php get_template_part('template-part/item') ?>
    </div>
  </div>
  <!-- ▲ メニュー -->
<?php elseif( get_field('net') === "いいえ"): ?>
  <div class="shop-buzz__list-img">
    <img src="<?php the_field('main_img'); ?>" alt="<?php the_title(); ?>">
  </div>
  <?php endif; ?>

  <p class="d-block d-md-none shop-buzz__list-link f-13 py-sm m-0">お店の情報を見る</p>
</a>
