<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<!-- ▼ メインビジュアル -->
<section id="mv" class="mv">
  <div class="container">
    <div class="mv__bg">
      <h2>
        <img class="d-block d-md-none" src="<?php echo $wp_url; ?>/dist/images/mv_txt_sp.png" alt="MKタクシーが安心安全にご自宅までお届け" srcset="<?php echo $wp_url; ?>/dist/images/mv_txt_sp.png 1x, <?php echo $wp_url; ?>/dist/images/mv_txt_sp@2x.png 2x">
        <img class="d-none d-md-block" src="<?php echo $wp_url; ?>/dist/images/mv_txt_pc.png" alt="MKタクシーが安心安全にご自宅までお届け" srcset="<?php echo $wp_url; ?>/dist/images/mv_txt_pc.png 1x, <?php echo $wp_url; ?>/dist/images/mv_txt_pc@2x.png 2x">
      </h2>
      <!-- <div class="mv_stamp">
      <img src="<?php echo $wp_url; ?>/dist/images/mv_stamp.png" alt="MKタクシーが安心安全にご自宅までお届け" srcset="<?php echo $wp_url; ?>/dist/images/mv_stamp.png 1x, <?php echo $wp_url; ?>/dist/images/mv_stamp@2x.png 2x">
      </div> -->
    </div>
    <!-- ▼ 検索窓 -->
    <div class="search__free mv__search mt-3">
      <div class="input-group">
        <form class="search__free__form d-flex w-100" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
          <input type="hidden" name="post_type" value="shop">
          <div class="input-group">
            <div class="input-group-prepend">
            <input type="text" class="form-control" name="s" placeholder="お弁当" value="<?php echo get_search_query(); ?>" />
            </div>
          </div>
          <div class="search__free__form-btn">
            <input type="submit" class="btn btn-block btn-primary text-nowrap" value="検索">
          </div>
        </form>
      </div>
    </div>
    <!-- ▲ 検索窓 -->
  </div>
</section>
<!-- ▲ メインビジュアル -->

<div class="d-md-none d-block container bg-white pt-4 pb-3">
<div class="bg-info">
<div class="cta-takeeats-btn m-0 p-0">
<a class="btn text-white py-3" href="<?php echo $home; ?>/delivery/">ご利用方法はこちら<i class="ml-3 fas fa-chevron-right"></i></a>
</div>
</div>
</div>

<!-- ▼ 重要なおしらせ -->
<div class="important">
  <h3><i class="fas fa-flag mr-2"></i>飲食店応援キャンペーン</h3>
  <p>緊急事態宣言発令に伴い、1/14～宣言終了期間まで通常550円の宅配料を<span class="font-weight-bold text-primary">110円</span>でご利用いただけます。（京都限定）</p>
</div>
<!-- ▲ 重要なおしらせ -->

<!-- ▼ ジャンル -->
<?php get_template_part('template-part/genre'); ?>
<!-- ▲ ジャンル -->

<!-- ▼ メインエリア -->
<div class="py-md-5 main-left front">
  <div class="container">
    <div class="row align-items-start">
      <!-- ▼ 人気のお店 -->
      <div class="col-md-8">
        <?php get_template_part('template-part/reco-restaurants'); ?>
      </div>
      <!-- ▲ おすすめ店舗 -->
      <!-- ▼ サイドバー -->
      <div class="col-md-4 d-md-block d-none">
        <?php get_template_part('template-part/sidebar') ?>
      </div>
      <!-- ▲ サイドバー -->
    </div>
  </div>
</div>
<!-- ▲ メインエリア -->

<?php get_footer();
