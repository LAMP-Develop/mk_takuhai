<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
?>

<div class="d-none d-md-block bg-info mb-4">
<div class="cta-takeeats-btn m-0">
<a class="btn text-white py-3" href="<?php echo $home; ?>/delivery/">ご利用方法はこちら<i class="ml-3 fas fa-chevron-right"></i></a>
</div>
</div>

<a class="banner" href="<?php echo $home; ?>/service">
<img class="d-none d-md-block" src="<?php echo $wp_url; ?>/dist/images/sidebar_enty.png" alt="MKタクシーが安心安全にご自宅までお届け" srcset="<?php echo $wp_url; ?>/dist/images/sidebar_enty.png 1x, <?php echo $wp_url; ?>/dist/images/sidebar_enty@2x.png 2x">
</a>

<div class="modal d-block position-static">
<?php get_template_part('template-part/search-form') ?>
</div>
