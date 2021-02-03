<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<!-- ▼ 検索窓 -->
<section class="search__free py-md d-block d-md-none">
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

<div class="main-left  bg-white">
<div class="container">
<div class="row">

  <div class="col-md-8">
    <section class="search mb-5">

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

      <!-- ▼ 検索条件 + 表示件数 -->
      <div class="d-flex justify-content-between">
        <div class="search__filter d-flex align-items-end">
          <!-- ▼ 検索中のキーワード・タグ -->
          <p class="f-13 text-success">
            <?php if ($shop_category != null && $shop_category !== 'nochoice'): ?>
            <span class="font-weight-bold f-15 d-inline mr-1 text-body"><?php echo $cat_name; ?></span>
            <?php endif; ?>

            <?php if ($shop_tag != null): ?>
            <span class="font-weight-bold f-15 d-inline mr-1 text-body"><?php echo $tag_name; ?></span>
            <?php endif; ?>

            <?php if ($s != null): ?>
            <span class="font-weight-bold f-15 d-inline mr-1 text-body"><?php echo $s; ?></span>
            <?php endif; ?>
          の検索結果</p>
          <!-- ▲ 検索中のキーワード・タグ -->
        </div>
        <div class="f-13 text-secondary">検索結果：<span><?php echo $wp_query->found_posts; ?></span>件</div>
        <!-- ▲ 検索条件 + 表示件数 -->

        <!-- ▼ 条件を変更 -->
        <button type="button" class="btn-change text-bk" data-toggle="modal" data-target="#search-restaurant">
          <i class="fas fa-search mr-2"></i>
          条件を変更
        </button>
      </div>
      <!-- ▲ 条件を変更 -->

      <!-- ▼ 一覧 (.shop-buzz__list) -->
      <div id="scroll" class="shop-buzz__list">
      <?php while(have_posts()): the_post(); ?>

        <!-- ▼ ループするコンテンツ -->
        <a class="shop-buzz__list-inner shadow-sm br-7 d-block mb-md" href="<?php the_permalink(); ?>">
          <?php if( get_field('net') === "はい"): ?>
          <p class="shop-buzz__list-net f-11">ネット注文OK</p>
          <?php elseif( get_field('net') === "いいえ"): ?>
          <?php endif; ?>

          <div class="shop-buzz__list-txt">
            <p class="shop-buzz__list-txt-tag f-13">
              <i class="fas fa-utensils"></i>
              <?php
              if ($terms = get_the_terms($post->ID, 'shop_category')) {
              foreach ( $terms as $term ) {
              echo esc_html($term->name);
              }
              }
              ?>
            </p>
            <h3 class="f-15 pb-sm text-body m-0"><?php the_title(); ?></h3>
            <div class="py-sm">
              <p class="shop-buzz__list-txt-time pt-sm">営業時間：<?php $text = mb_substr(get_field('time'),0,23,'utf-8'); echo $text.'...';?>
              </p>
              <p class="shop-buzz__list-txt-time pb-sm">定休日：<?php the_field('day'); ?></p>
            </div>
          </div>

          <div class="shop-buzz__list-img">
            <img src="<?php the_field('main_img'); ?>" alt="<?php the_title(); ?>">
          </div>

          <p class="d-block d-md-none shop-buzz__list-link f-13 py-sm m-0">お店の情報を見る</p>
        </a>
        <!-- ▲ ループするコンテンツ -->

      <?php endwhile; ?>
      </div>

      <!-- ▼ ページネーション -->
      <div class="pagination d-none">
          <?php global $wp_rewrite;
          $paginate_base = get_pagenum_link(1);
          if(strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()){
              $paginate_format = '';
              $paginate_base = add_query_arg('paged','%#%');
          }
          else{
              $paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
              user_trailingslashit('page/%#%/','paged');;
              $paginate_base .= '%_%';
          }
          echo paginate_links(array(
              'base' => $paginate_base,
              'format' => $paginate_format,
              'total' => $wp_query->max_num_pages,
              'mid_size' => 4,
              'current' => ($paged ? $paged : 1),
              'prev_text' => '<< 前へ',
              'next_text' => '次へ >>',
          )); ?>
      </div>
      <!-- ▲ ページネーション -->

      <?php else: // ないとき ?>

      <p class="txt-c">該当の店舗がありません。</p>

      <?php endif;?>

    </div>
    <!-- ▲ 一覧 (.shop-buzz__list) -->
  </section>

  <!-- ▼ サイドバー -->
  <div class="col-md-4 d-md-block d-none">
  <?php get_template_part('template-part/sidebar') ?>
  </div>
  <!-- ▲ サイドバー -->

</div>
</div>
</div>
<?php get_footer();
