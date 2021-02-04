<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>

</main>

<!-- ▼ 加盟店募集 -->
<?php if( get_field('start-bg',2) != null): ?>
<div class="start">
<?php else: // ないとき ?>
<div class="start" style="background: url('<?php echo get_field('start-bg',2); ?>'); background-position: center; background-size: cover;">
<?php endif; ?>
  <div class="">
    <h2 class="f-18 text-center">
      <span class="text-body bg-white mr-2">無料</span><?php echo get_field('service-name',2); ?>をはじめませんか？
    </h2>
    <a href="<?php echo $home; ?>/service">今すぐ申し込む</a>
  </div>
</div>
<!-- ▲ 加盟店募集 -->

<!-- ▼ フッター -->
<footer class="footer mt-0 mb-5">

  <?php if (is_page('service')): //オンライン注文ページのみ ?>

  <div class="container pt-5">
      <!-- ▼ お問い合わせ -->
      <div class="footer__tel__inner">
        <p>サービス内容に関する<br class="visible-md visible-lg">お問い合わせはこちらまで<br>（24時間対応）</p>
        <p class="d-inline">【京都】</p><a href="tel:075-778-0150">075-778-0150</a>
        <p>システムに関する<br class="visible-md visible-lg">お問い合わせはこちらまで</p>
        <a href="tel:075-600-2721">075-600-2721</a>
        <p class="small">運営会社 株式会社ランプ<br>10：00〜18：00（土日祝除く）</p>
      </div>
      <!-- ▲ お問い合わせ -->
  </div>

  <?php elseif (is_page('service-tel')): //電話注文ページのみ ?>

  <div class="container pt-5">
      <!-- ▼ お問い合わせ -->
      <div class="footer__tel__inner">
        <p>サービス内容に関する<br class="visible-md visible-lg">お問い合わせはこちらまで<br>（24時間対応）</p>
        <div>
          <p class="d-inline">【京都】</p><a class="d-inline" href="tel:075-600-2721">075-778-0150</a>
        </div>
        <div>
          <p class="d-inline">【札幌】</p><a class="d-inline" href="tel:075-600-2721">011-555-3297</a>
        </div>
      </div>
      <!-- ▲ お問い合わせ -->
    </div>

  <?php else: ?>

  <?php endif; ?>

  <div class="nav">
    <!-- ▼ メインリンク -->
    <div class="navbar-nav main">
      <a class="nav-item nav-link" href="<?php echo $home; ?>/delivery">ご利用方法</a>
      <a class="nav-item nav-link" href="<?php echo $home; ?>/news">お知らせ一覧</a>
      <a class="nav-item nav-link" href="<?php echo $home; ?>/service">[オンライン注文]<?php echo get_field('service-name',2); ?>を始める</a>
      <a class="nav-item nav-link" href="<?php echo $home; ?>/service-tel">[電話注文]<?php echo get_field('service-name',2); ?>を始める</a>
    </div>
    <!-- ▲ メインリンク -->
    <!-- ▼ サブリンク -->
    <div class="navbar-nav sub py-lg">
      <a class="f-12" href="<?php echo get_field('taxi-url',2); ?>" target="_blank">運営会社</a>
      <a class="f-12" href="<?php echo $home; ?>/disclaimers">免責事項</a>
      <a class="f-12" href="<?php echo $home; ?>/term">利用規約</a>
      <br>
      <a class="f-12" href="<?php echo $home; ?>/law">特定商取引に関する方針</a>
      <a class="f-12" href="<?php echo $home; ?>/privacy-policy">プライバシーポリシー</a>
    </div>
    <!-- ▲ サブリンク -->
    <small class="text-success f-10 text-center mb-3 d-block w-100"><?php echo get_field('copyright',2); ?></small>
  </div>
</footer>
<!-- ▲ フッター -->

<?php wp_footer(); ?>
<?php if (is_home() || is_front_page()): ?>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
new Swiper(".swiper-container", {
  slidesPerView: 1,
  spaceBetween: 0,
  loop: true,
  breakpoints: {
    768: {
      slidesPerView: 2,
      slidesPerGroup: 2,
      spaceBetween: 10,
    },
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
</script>
<?php endif; ?>

</body>
</html>
