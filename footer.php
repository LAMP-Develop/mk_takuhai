<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>

<div class="cta d-block d-md-none">

<div class="cta-takeeats mb-0">
<div class="cta-takeeats-wrap">
<p class="cta-takeeats__ttl"><span>MKタク配に</span><br>あなたのお店を<br>出店しませんか？</p>
<div class="cta-takeeats__img">
<img class="cta-takeeats-wrap-bg" src="<?php echo $wp_url; ?>/dist/images/entry_img.png" alt="装飾" srcset="<?php echo $wp_url; ?>/dist/images/entry_img.png 1x, <?php echo $wp_url; ?>/dist/images/entry_img@2x.png 2x">
</div>
<div class="cta-takeeats-btn">
<a class="btn btn-primary" href="<?php echo $home; ?>/request/" target="_blank"><span>無料</span>お申し込みはこちら</a>
</div>
</div>
</div>

</div>

</main>

<footer class="footermt-0 bg-info">
<div class="container">
<ul class="footer-links footer-links-main">
<li><a href="<?php echo $home; ?>/delivery/">お届け方法について</a></li>
<li><a href="<?php echo $home; ?>/postage/">送料について</a></li>
<li><a href="<?php echo $home; ?>/category/news/">お知らせ一覧</a></li>
<li><a href="#" target="_blank">MKタク配に出店</a></li>
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
<?php wp_footer(); ?>
<?php if (is_home() || is_front_page()): ?>
<!-- <script src="//code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> -->
<!-- <script src="//maps.google.com/maps/api/js?key=AIzaSyA6caobCHn-IcFLznnEERoWzgHlEQi-YoI"></script> -->
<!-- <script src="<?php echo $wp_url; ?>/dist/js/perf-genre.js"></script> -->

<!-- <script>
$(document).ajaxStop(function() {
  $('#spinner-load').css('display', 'none');
});

navigator.geolocation.getCurrentPosition(success, fail);
function success(pos) {
  let latlng = {
    lat: pos.coords.latitude,
    lng: pos.coords.longitude,
  };
  const geocoder = new google.maps.Geocoder();
  geocoder.geocode(
    {
      latLng: latlng,
    },
    function (results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        let address = results[0].address_components[4].long_name+results[0].address_components[3].long_name;
        console.log(address);
        $('.search__genre-list a').each(function() {
          let temp_url = $(this).attr('href')+"&keyword="+address;
          $(this).attr('href', temp_url);
        });
      }
    }
  );
}

function fail(error){
  alert('位置情報が取得できませんでした。');
}
</script> -->

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
