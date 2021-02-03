<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<!-- ▼ お知らせ -->
<section class="info">
  <div class="container">

  </div>
</section>
<!-- ▲ お知らせ -->

<!-- ▼ メインビジュアル -->
<section id="mv" class="mv">

  <?php query_posts( array(
    'post_type' => 'slide',
    'posts_per_page' => 3
  ));
  $id = get_the_ID();
  ?>

  <?php if(have_posts()): ?>
  <?php while(have_posts()):the_post(); ?>

  <div>
    <img class="w-100 br-7 shadow-sm" src="<?php echo the_post_thumbnail_url($id, 'large'); ?>" alt="<?php the_title(); ?>">
  </div>

  <?php endwhile; else: ?>
  <?php endif; ?>

</section>
<!-- ▲ メインビジュアル -->

<!-- ▼ 検索窓 -->
<section class="search__free pt-sm pb-lg">
  <div class="container">
    <div class="input-group">
      <form class="search__free__form d-flex w-100 shadow-sm" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
        <input type="hidden" name="post_type" value="shop">
        <div class="input-group">
          <div class="input-group-prepend">
          <input type="text" class="form-control" name="s" placeholder="お弁当" value="<?php echo get_search_query(); ?>" />
          </div>
        </div>
      </form>
    </div>
  </div>
</section>
<!-- ▲ 検索窓 -->

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
        <?php get_template_part('template-part/search-form') ?>
      </div>
      <!-- ▲ サイドバー -->
    </div>
  </div>
</div>
<!-- ▲ メインエリア -->

<?php get_footer();
