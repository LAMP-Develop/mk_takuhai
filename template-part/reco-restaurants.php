<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
?>

<!-- ▼ 人気のお店 -->
<div class="shop-buzz">
  <h2 class="ttl-h2 mb-lg">人気のお店</h2>
    <div class="shop-buzz__list pb-lg">
      <?php
        $args = array(
          'post_type' => 'shop',
          'taxonomy' => 'shop_tag',
          'term' => 'reco',
          'posts_per_page'   => 10
          );
        $the_query = get_posts( $args );
        foreach ( $the_query as $post ) : setup_postdata( $post );
      ?>
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

        <p class="shop-buzz__list-link f-13 py-sm m-0">お店の情報を見る</p>
      </a>
      <!-- ▲ ループするコンテンツ -->
      <?php endforeach; ?>
      <?php wp_reset_postdata(); ?>
    </div>

    <a class="btn btn-border" href="<?php echo $home; ?>/?post_type=shop&s=">すべての店舗を見る</a>

</div>

<!-- ▲ 人気のお店 -->
