<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
?>

<a class="banner" href="#" target="_blank">
<img class="d-none d-md-block" src="<?php echo $wp_url; ?>/dist/images/sidebar_enty.png" alt="MKタクシーが安心安全にご自宅までお届け" srcset="<?php echo $wp_url; ?>/dist/images/sidebar_enty.png 1x, <?php echo $wp_url; ?>/dist/images/sidebar_enty@2x.png 2x">
</a>

<div class="modal d-block position-static">
<?php get_template_part('search-form') ?>
</div>
