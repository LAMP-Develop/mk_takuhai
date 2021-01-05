<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<?php get_template_part('template-part/modal/search-form'); ?>

<div class="bg-secondary">
<div class="container py-3">
<div class="search__free">

<form class="search__free__form" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
<div class="input-group">
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
</div>
</div>

<div class="py-md-5 main-left  bg-white">
<div class="container">
<div class="row">

  <div class="col-md-8">
    <section class="search">

    <?php
    $post_type = $_GET['post_type'];
    $s = $_GET['s'];
    $shop_category = $_GET['shop_category']; //ジャンル
    $cat_date = get_term_by( 'slug', $shop_category, 'shop_category' );
    $cat_name = $cat_date->name;
    $shop_tag = $_GET['shop_tag']; //タグ
    $tag_date = get_term_by( 'slug', $shop_tag, 'shop_tag' );
    $tag_name = $tag_date->name;
    $paged = get_query_var('paged') ? get_query_var('paged') : 1;

    if ($shop_category != null && $shop_category !== 'nochoice') {
      $taxquery_category = array(
        'taxonomy' => 'shop_category',
        'terms' => $shop_category,
        'field' => 'slug',
      );
    }

    if ($shop_tag != null) {
      $taxquery_tag = array(
        'taxonomy' => 'shop_tag',
        'terms' => $shop_tag,
        'field' => 'slug',
      );
    }

    $args = array(
      'paged' => $paged,
      'post_type' => 'shop',
      's' => $s,
      'tax_query' => array(
        'relation' => 'AND',
        $taxquery_category,
        $taxquery_tag
      ),
    );
    query_posts($args);

    if(have_posts()): ?>

      <!-- ▼ 一覧上 -->
      <div class="search__filter">
        <!-- ▼ 検索中のキーワード・タグ -->
        <div>
          <?php if ($shop_category != null && $shop_category !== 'nochoice'): ?>
          <span class="shop-buzz__list-txt-tag"><?php echo $cat_name; ?></span>
          <?php endif; ?>

          <?php if ($shop_tag != null): ?>
          <span class="shop-buzz__list-txt-tag"><?php echo $tag_name; ?></span>
          <?php endif; ?>

          <?php if ($s != null): ?>
          <span class="shop-buzz__list-txt-tag"><?php echo $s; ?></span>
          <?php endif; ?>
        </div>
        <!-- ▲ 検索中のキーワード・タグ -->
        <button type="button" class="text-primary border-0 bg-white" data-toggle="modal" data-target="#search-restaurant">変更</button>
      </div>
      <div class="mb-3">検索結果：<span><?php echo $wp_query->found_posts; ?></span>件</div>
      <!-- ▲ 一覧上 -->

      <!-- ▼ 一覧 (.shop-buzz__list) -->
      <div class="shop-buzz__list">
      <?php while(have_posts()): the_post(); ?>

        <!-- ▼ ループされるコンテンツ -->
        <a class="shop-buzz__list-inner" href="<?php echo get_the_permalink(); ?>">
        <div class="shop-buzz__list-img">
        <img src="<?php the_field('main_img'); ?>" alt="<?php the_title(); ?>">
        </div>

        <?php if( get_field('net') === "はい"): ?>
        <p class="shop-buzz__list-net">ネット注文OK</p>
        <?php elseif( get_field('net') === "いいえ"): ?>
        <?php endif; ?>

        <div class="shop-buzz__list-txt">
        <p class="shop-buzz__list-txt-tag">
        <?php
        if ($terms = get_the_terms($post->ID, 'shop_category')) {
        foreach ( $terms as $term ) {
        echo esc_html($term->name);
        }
        }
        ?>
        </p>
        <h3><?php the_title(); ?></h3>
        <p class="shop-buzz__list-txt-time">営業時間：<?php the_field('time'); ?></p>
        <p class="shop-buzz__list-txt-time">定休日：<?php the_field('day'); ?></p>
        </div>
        </a>
        <!-- ▲ ループされるコンテンツ -->

      <?php endwhile; ?>
      </div>

      <!-- ▼ ページネーション -->
      <?php
      if (function_exists('wp_pagenavi')) {
      wp_pagenavi(['query' => $wp_query]);
      }
      ?>
      <!-- ▲ ページネーション -->

      <?php else: // ないとき ?>

      <p class="txt-c">該当の店舗がありません。</p>

      <?php endif;?>

    </div>
    <!-- ▲ 一覧 (.shop-buzz__list) -->
  </section>

  <!-- ▼ サイドバー -->
  <div class="col-md-4 d-md-block d-none">
  <?php get_template_part('template-part/parts/search-restaurants') ?>
  </div>
  <!-- ▲ サイドバー -->

</div>
</div>
</div>
<?php get_footer();
