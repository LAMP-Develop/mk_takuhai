<form class="form-control m-0" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">

  <input type="hidden" name="post_type" value="shop">
  <!-- ▼ フリーワード -->
  <div class="search-form mb-md">
    <h3 class="modal-body-title f-13">フリーワード</h3>
    <div class="input-group-prepend">
      <input type="search" class="border-0 hidden-search-field" name="s" placeholder="「店舗名」で検索" value="<?php echo get_search_query(); ?>" />
    </div>
  </div>
  <!-- ▲ フリーワード -->
  <!-- ▼ ジャンル -->
  <div class="search-form mb-md">
    <h3 class="modal-body-title f-13">ジャンル</h3>
    <div class="search-form-wrap">
      <select class="border-0" name="shop_category">
        <option value="">すべて</option>
        <?php
        $taxonomy_name = 'shop_category';
        $args = array( 'hide_empty' => 0 );
        $taxonomys = get_terms($taxonomy_name,$args);
        if( !empty( $taxonomys ) && !is_wp_error( $taxonomys ) ):
        foreach($taxonomys as $taxonomy):
        ?><option value="<?php echo $taxonomy->slug; ?>"><?php echo $taxonomy->name; ?></option>
        <?php endforeach; ?>
        <?php endif;?>
      </select>
    </div>
  </div>
  <!-- ▲ ジャンル -->

  <div class="search-form border border-light py-md px-2">
    <label class="m-0"><input type="checkbox" name="shop_tag" value="net"> ネット注文可</label>
  </div>

  <div class="mt-lg">
    <input type="submit" class="btn btn-bk" value="絞り込む">
  </div>

</form>
