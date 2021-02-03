<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<!-- ▼ お知らせ -->
<section class="info">
  <?php query_posts( array(
    'post_type' => 'post',
    'posts_per_page' => 1
  ));
  ?>

  <?php if(have_posts()): ?>
  <?php while(have_posts()):the_post(); ?>

  <!-- ▼ お知らせ内容 -->
    <div class="info-bg">
      <p class="f-13 py-sm"><i class="fas fa-info-circle mr-2 f-18"></i><?php echo get_the_title(); ?></p>
    </div>

  <!-- ▲ お知らせ内容 -->

  <?php endwhile; else: ?>
  <?php endif; ?>
</section>
<!-- ▲ お知らせ -->

<!-- ▼ メインビジュアル -->
<section id="mv" class="mv">

  <?php query_posts( array(
    'post_type' => 'slide',
    'posts_per_page' => 3
  ));
  ?>
  <?php if(have_posts()): ?>
  <?php while(have_posts()):the_post(); ?>

  <!-- ▼ 画像 -->
  <div>
    <img class="w-100 br-7 shadow-sm" src="<?php echo the_post_thumbnail_url($id, 'large'); ?>" alt="<?php the_title(); ?>">
  </div>
  <!-- ▲ 画像 -->

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
