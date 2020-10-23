<?php
$genres = get_genres();
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
<div class="modal fade" id="search-restaurant" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-lg">
<div class="modal-content">
<form action="<?php echo $home; ?>/search/" method="GET">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body-name">
<p>詳細検索</p>
</div>
<div class="modal-body">
<div class="search-form mt-3">
<h3 class="modal-body-title">フリーワード</h3>
<form class="form-control" action="<?php echo $home; ?>/search/" method="get">
<div class="input-group-prepend">
<input type="text" class="form-control bg-light border-0" name="keyword" value="" placeholder="店舗やメニュー名で検索">
</div>
</form>
</div>
<div class="search-form my-4">
<h3 class="modal-body-title">ジャンル</h3>
<select name="genre" class="form-control bg-light border-0">
<option value="">すべて</option>
</select>
</div>
<div class="search-form my-4">
<label><input class="mr-1" type="checkbox" name="riyu" value="1">ネット注文可能</label>
</div>
<button type="submit" class="btn btn-block btn-primary">絞り込む</button>
</div>
</form>
</div>
</div>
</div>
