<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/';
get_header();
?>

<!-- ▼ 画面下固定ボタン -->
<div id="restaurant-btn" class="border-top">
  <?php if( get_field('net') === "はい"): ?>
    <!-- ▼ ネット注文 -->
    <?php if(post_custom('order_url')): // 入力がある場合 ?>
    <a class="btn btn-primary w-100" href="<?php the_field('order_url'); ?>" target="_blank" >
      ネットで今すぐ注文
      <i class="fas fa-angle-right ml-2"></i>
    </a>
    <?php endif; ?>
    <!-- ▲ ネット注文 -->
  <?php elseif( get_field('net') === "いいえ"): ?>
    <!-- ▼ 電話注文 -->
    <?php if(post_custom('order_tel')): // 入力がある場合 ?>
    <a class="btn btn-primary w-100" href="tel:<?php the_field('order_tel'); ?>" >
      <?php the_field('order_tel'); ?>
      <i class="fas fa-angle-right ml-2"></i>
    </a>
    <?php endif; ?>
    <!-- ▲ 電話注文 -->
  <?php endif; ?>
</div>
<!-- ▲ 画面下固定ボタン -->

<!-- ▼ メイン -->
<div class="restaurant container">
  <div class="row">
    <div class="col-md-8">
      <section class="pb-4 restaurant">
        <!-- ▼ メインビジュアル -->
        <div class="restaurant__mv">
          <img src="<?php the_field('main_img'); ?>" alt="<?php the_title(); ?>">
        </div>
        <!-- ▲ メインビジュアル -->
        <!-- ▼ 導入文 -->
        <div class="restaurant__wrap mt-lg position-relative">
          <p class="f-18 font-weight-bold mb-1"><?php the_title() ?></p>
          <p class="f-13 text-secondary mb-0">
            <!-- ▼ カテゴリ -->
            <?php if ($terms = get_the_terms($post->ID, 'shop_category')) {
              foreach ( $terms as $term ) {
                echo esc_html($term->name);
                }
              }
             ?>
             <!-- ▲ カテゴリ -->
            <?php if(post_custom('price')): // 入力がある場合 ?>
               ¥<?php the_field('price'); ?>から注文可
            <?php endif; ?>
          </p>
          <p class="restaurant__wrap-about f-13 py-md pb-lg mb-0"><?php the_field('about'); ?></p>
          <!-- ▼ PC -予約ボタン -->
          <div class="d-none d-md-block mb-lg">
            <?php if( get_field('net') === "はい"): ?>
              <!-- ▼ ネット注文 -->
              <?php if(post_custom('order_url')): // 入力がある場合 ?>
              <a class="btn btn-primary w-100 mt-3 font-weight-bold" href="<?php the_field('order_url'); ?>" target="_blank" >
                ネットで今すぐ注文
                <i class="fas fa-angle-right ml-2"></i>
              </a>
              <?php endif; ?>
              <!-- ▲ ネット注文 -->
            <?php elseif( get_field('net') === "いいえ"): ?>
              <!-- ▼ 電話注文 -->
              <?php if(post_custom('order_tel')): // 入力がある場合 ?>
              <a class="btn btn-primary w-100 mt-3" href="tel:<?php the_field('order_tel'); ?>" >
                <?php the_field('order_tel'); ?>
                <i class="fas fa-angle-right ml-2"></i>
              </a>
              <?php endif; ?>
              <!-- ▲ 電話注文 -->
            <?php endif; ?>
            <!-- ▲ PC -予約ボタン -->
          </div>
        </div>
        <!-- ▲ 導入文 -->
        <!-- ▼ メニュー -->
        <?php if( get_field('net') === "はい"):?>
        <div class="restaurant__menu restaurant-block w-100">
          <h2 class="ttl-h2 py-md m-0 f-16">人気デリバリーメニュー</h2>
            <!-- ▼ メニュー -->
            <a href="<?php the_field('order_url'); ?>" class="shop-buzz__list-inner-img-wrap mb-lg d-block text-decoration-none">
            <?php get_template_part('template-part/item') ?>
            </a>
            <!-- ▲ メニュー -->
        </div>
      <?php elseif( get_field('net') === "いいえ"): ?>

        <?php endif; ?>
        <!-- ▲ メニュー -->
        <!-- ▼ 店舗情報 -->
        <div class="restaurant__overview restaurant-block">
          <h2 class="ttl-h2 py-md m-0 f-16">店舗情報</h2>
            <p class="font-weight-bold f-13 mb-1"><?php the_title(); ?></p>
            <p class="f-13 text-secondary"><?php the_field('address'); ?></p>
            <!-- ▼ 電話番号 -->
            <div class="d-flex">
              <p class="col-4 f-13 text-secondary mb-3 p-0">電話番号</p>
              <p class="col-8 f-13 text-secondary mb-3 p-0">
                <a href="tel:<?php the_field('tel'); ?>">
                  <i class="fas fa-phone mr-1 text-primary"></i>
                  <?php the_field('tel'); ?>
                </a>
              </p>
            </div>
            <!-- ▲ 電話番号 -->
            <!-- ▼ 営業日・時間 -->
            <div class="d-flex">
              <p class="col-4 f-13 text-secondary mb-3 p-0">営業日・時間</p>
              <p class="col-8 f-13 text-secondary mb-3 p-0">
                <?php the_field('time'); ?>
              </p>
            </div>
            <!-- ▲ 営業日・時間 -->
            <!-- ▼ 定休日 -->
            <div class="d-flex">
              <p class="col-4 f-13 text-secondary mb-3 p-0">定休日</p>
              <p class="col-8 f-13 text-secondary mb-3 p-0">
                <?php the_field('day'); ?>
              </p>
            </div>
            <!-- ▲ 定休日 -->

            <?php if(post_custom('hp')): // 入力がある場合 ?>
            <!-- ▼ 公式HP -->
            <div class="d-flex">
              <p class="col-4 f-13 text-secondary mb-3 p-0">公式HP</p>
              <p class="col-8 f-13 text-secondary mb-3 p-0">
                <a class="text-primary" href="<?php the_field('hp'); ?>" target="_blank">
                  <?php the_field('hp'); ?>
                  <i class="fas fa-external-link-alt ml-1 text-success"></i>
                </a>
              </p>
            </div>
            <!-- ▲ 公式HP -->
            <?php endif; ?>
          <!-- ▲ 店舗情報 -->
        </div>
      </section>
    </div>
    <div class="col-md-4 d-md-block d-none">
    <?php get_template_part('template-part/sidebar') ?>
    </div>
  </div>
</div>
<!-- ▲ メイン -->
<?php get_footer();
