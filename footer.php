<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>

</main>

<!-- ▼ 加盟店募集 -->
<div class="cta d-block d-md-none">
  <div class="cta-takeeats mb-0">
    <div class="cta-takeeats-wrap">
    <p class="cta-takeeats__ttl">
      <span class="small">初期費用・導入費0円で</span>
      <br>あなたのお店も<br>MKタク配始めませんか？
    </p>
    <div class="cta-takeeats__img">
      <img class="cta-takeeats-wrap-bg" src="<?php echo $wp_url; ?>/dist/images/entry_img.png" alt="装飾" srcset="<?php echo $wp_url; ?>/dist/images/entry_img.png 1x, <?php echo $wp_url; ?>/dist/images/entry_img@2x.png 2x">
    </div>
    <div class="cta-takeeats-btn">
      <a class="btn btn-primary" href="<?php echo $home; ?>/service/">
        <span>無料</span>お申し込みはこちら
      </a>
    </div>
    </div>
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
      <a class="nav-item nav-link" href="<?php echo $home; ?>/service">[オンライン注文]MK宅配を始める</a>
      <a class="nav-item nav-link" href="<?php echo $home; ?>/service-tel">[電話注文]MK宅配を始める</a>
    </div>
    <!-- ▲ メインリンク -->
    <!-- ▼ サブリンク -->
    <div class="navbar-nav sub py-lg">
      <a class="f-12" href="https://www.mk-group.co.jp/" target="_blank">運営会社</a>
      <a class="f-12" href="<?php echo $home; ?>/disclaimers">免責事項</a>
      <a class="f-12" href="<?php echo $home; ?>/term">利用規約</a>
      <br>
      <a class="f-12" href="<?php echo $home; ?>/law">特定商取引に関する方針</a>
      <a class="f-12" href="<?php echo $home; ?>/privacy-policy">プライバシーポリシー</a>
    </div>
    <!-- ▲ サブリンク -->
    <small class="text-success f-10 text-center mb-3 d-block w-100">Copyright MK Co.,Ltd. All rights reserved.</small>
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
