<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>

</main>

<?php if (is_page('service')): ?>

<footer class="footer mt-0 mb-5">
<div class="container pt-5">
<div class="footer__tel__inner">
<p>サービス内容に関する<br class="visible-md visible-lg">お問い合わせはこちらまで<br>（24時間対応）</p>
<p class="d-inline">【京都】</p><a href="tel:075-778-0150">075-778-0150</a>
<p>システムに関する<br class="visible-md visible-lg">お問い合わせはこちらまで</p>
<a href="tel:075-600-2721">075-600-2721</a>
<p class="small">運営会社 株式会社ランプ<br>10：00〜18：00（土日祝除く）</p>
</div>
<div class="footer__link__inner">
<ul>
<li><a href="https://www.mk-group.co.jp/" target="_blank">運営会社</a></li>
<li><a href="<?php echo $home; ?>/term/">利用規約</a></li>
<li><a href="<?php echo $home; ?>/law/">特定商取引に関する方針</a></li>
<li><a href="<?php echo $home; ?>/privacy-policy/">プライバシーポリシー</a></li>
</ul>
</div>
<p class="mb-0 pb-5 socket"><a href="https://www.mk-group.co.jp/" target="_blank">Copyright MK Co.,Ltd. All rights reserved.</a></p>
<!-- footer__link__inner -->
</div>
<!-- footer__link -->
</footer>

<?php elseif (is_page('service-tel')): ?>

<footer class="footer mt-0 mb-5">
<div class="container pt-5">
<div class="footer__tel__inner">
<p>サービス内容に関する<br class="visible-md visible-lg">お問い合わせはこちらまで<br>（24時間対応）</p>
<div>
<p class="d-inline">【京都】</p><a class="d-inline" href="tel:075-600-2721">075-778-0150</a>
</div>
<div>
<p class="d-inline">【札幌】</p><a class="d-inline" href="tel:075-600-2721">011-555-3297</a>
</div>
</div>
<div class="footer__link__inner">
<ul>
<li><a href="https://www.mk-group.co.jp/" target="_blank">運営会社</a></li>
<li><a href="<?php echo $home; ?>/term/">利用規約</a></li>
<li><a href="<?php echo $home; ?>/law/">特定商取引に関する方針</a></li>
<li><a href="<?php echo $home; ?>/privacy-policy/">プライバシーポリシー</a></li>
</ul>
</div>
<p class="mb-0 pb-5 socket"><a href="https://www.mk-group.co.jp/" target="_blank">Copyright MK Co.,Ltd. All rights reserved.</a></p>
<!-- footer__link__inner -->
</div>
</div>
<!-- footer__link -->
</footer>

<?php else: ?>

<div class="cta d-block d-md-none">

<div class="cta-takeeats mb-0">
<div class="cta-takeeats-wrap">
<p class="cta-takeeats__ttl"><span class="small">初期費用・導入費0円で</span><br>あなたのお店も<br>MKタク配始めませんか？</p>
<div class="cta-takeeats__img">
<img class="cta-takeeats-wrap-bg" src="<?php echo $wp_url; ?>/dist/images/entry_img.png" alt="装飾" srcset="<?php echo $wp_url; ?>/dist/images/entry_img.png 1x, <?php echo $wp_url; ?>/dist/images/entry_img@2x.png 2x">
</div>
<div class="cta-takeeats-btn">
<a class="btn btn-primary" href="<?php echo $home; ?>/service/"><span>無料</span>お申し込みはこちら</a>
</div>
</div>
</div>

</div>

<footer class="footermt-0 bg-info">
<div class="container">
<ul class="footer-links footer-links-main pt-4 pb-4">
<li><a href="<?php echo $home; ?>/delivery/">ご利用方法</a></li>
<li><a href="<?php echo $home; ?>/category/news/">お知らせ一覧</a></li>
<li><a href="<?php echo $home; ?>/service/">【飲食店向け】MKタク配オンライン注文を始める</a></li>
<li><a href="<?php echo $home; ?>/service-tel/">【飲食店向け】MKタク配電話注文を始める</a></li>
<li><a href="<?php echo $home; ?>/disclaimers/">免責事項</a></li>
</ul>
</div>
<div class="bg-secondary">
<div class="container">
<ul class="footer-links footer-links-sub pt-5">
<li><a href="https://www.mk-group.co.jp/" target="_blank">運営会社</a></li>
<li><a href="<?php echo $home; ?>/term/">利用規約</a></li>
<li><a href="<?php echo $home; ?>/law/">特定商取引に関する方針</a></li>
<li><a href="<?php echo $home; ?>/privacy-policy/">プライバシーポリシー</a></li>
</ul>
<p class="mb-0 pb-5 socket"><a href="https://www.mk-group.co.jp/" target="_blank">Copyright MK Co.,Ltd. All rights reserved.</a></p>
</div>
</div>
</div>
</footer>

<?php endif; ?>


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
