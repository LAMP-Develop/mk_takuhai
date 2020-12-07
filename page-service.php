<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/';
get_header(); ?>

<div class="lp__mv">
<div class="container">
<div class="lp__mv-wrap">
<img class="mb-3 sp" src="<?php echo $img_url; ?>lp_mv_txt.png" alt="MKタクシーが大切にお客様のもとへお届け" srcset="<?php echo $img_url; ?>lp_mv_txt.png 1x, <?php echo $img_url; ?>lp_mv_txt@2x.png 2x">
<img class="sp" src="<?php echo $img_url; ?>lp_mv_illust.png" alt="MK運転手のイラスト" srcset="<?php echo $img_url; ?>lp_mv_illust.png 1x, <?php echo $img_url; ?>lp_mv_illust@2x.png 2x">
<!-- sp -->
<img class="pc" src="<?php echo $img_url; ?>lp_mv_txt_pc.png" alt="MKタクシーが大切にお客様のもとへお届け" srcset="<?php echo $img_url; ?>lp_mv_txt_pc.png 1x, <?php echo $img_url; ?>lp_mv_txt_pc@2x.png 2x">
<img class="pc" src="<?php echo $img_url; ?>lp_mv_illust_pc.png" alt="MK運転手のイラスト" srcset="<?php echo $img_url; ?>lp_mv_illust_pc.png 1x, <?php echo $img_url; ?>lp_mv_illust_pc@2x.png 2x">
<!-- pc -->
</div>
</div>
<!-- .lp__hero -->
</div>

<img class="lp__photo" src="<?php echo $img_url; ?>lp_mv_photo.png" alt="料理の写真" srcset="<?php echo $img_url; ?>lp_mv_photo.png 1x, <?php echo $img_url; ?>lp_mv_photo@2x.png 2x">

<!-- <section class="lp__case">
<div id="lpcase" class="lp__case-slide">
<div class="lp__case-slide__inner">
<div class="lp__case-slide__inner-logo">
<span><img src="<?php echo $img_url; ?>logo_musashi.png" alt="寿しのむさし" srcset="<?php echo $img_url; ?>logo_musashi.png 1x, <?php echo $img_url; ?>logo_musashi@2x.png 2x"></span>
</div>
</div>
</div>
</section> -->

<section class="pb-5 mb-5 bg-light lp__about">
<div class="container">
<h2 class="lp-ttl2">宅配はすべて<br>MKタクシーにおまかせ</h2>
<div class="lp__about__list">
<div class="lp__about__list__inner">
<div class="lp__about__list__inner-wrap">
<div class="lp__about__list__inner-img">
<img src="<?php echo $img_url; ?>about_icon_1.png" alt="京都を中心にどこでもお届けいたします！" srcset="<?php echo $img_url; ?>about_icon_1.png 1x, <?php echo $img_url; ?>about_icon_1@2x.png 2x">
</div>
<div class="lp__about__list__inner-txt">
<p class="user">お客様</p>
<h3>注文事前決済</h3>
<p>店舗サイトから注文の受け付けを行います。</p>
</div>
</div>
</div>
<div class="lp__about__list__inner">
<div class="lp__about__list__inner-wrap">
<div class="lp__about__list__inner-img">
<img src="<?php echo $img_url; ?>about_icon_2.png" alt="京都を中心にどこでもお届けいたします！" srcset="<?php echo $img_url; ?>about_icon_2.png 1x, <?php echo $img_url; ?>about_icon_2@2x.png 2x">
</div>
<div class="lp__about__list__inner-txt">
<p class="user">あなたの店舗</p>
<h3>料理を準備</h3>
<p>メールやFAXで注文を確認し料理を準備します。</p>
</div>
</div>
</div>
<div class="lp__about__list__inner">
<div class="lp__about__list__inner-wrap">
<div class="lp__about__list__inner-img">
<img src="<?php echo $img_url; ?>about_icon_3.png" alt="京都を中心にどこでもお届けいたします！" srcset="<?php echo $img_url; ?>about_icon_3.png 1x, <?php echo $img_url; ?>about_icon_3@2x.png 2x">
</div>
<div class="lp__about__list__inner-txt">
<p class="user">MKタクシー</p>
<h3>商品のお受け取り</h3>
<p>MKタクシーがあなたの店舗まで商品を取りに行きます。</p>
</div>
</div>
</div>
<div class="lp__about__list__inner">
<div class="lp__about__list__inner-wrap">
<div class="lp__about__list__inner-img">
<img src="<?php echo $img_url; ?>about_icon_4.png" alt="京都を中心にどこでもお届けいたします！" srcset="<?php echo $img_url; ?>about_icon_4.png 1x, <?php echo $img_url; ?>about_icon_4@2x.png 2x">
</div>
<div class="lp__about__list__inner-txt">
<p class="user">MKタクシー</p>
<h3>お客様に商品をお渡し</h3>
<p>MKタクシーがあなたの店舗まで商品を取りに行きます。</p>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="lp__feature">
<div class="container">
<h2 class="lp-ttl2"><span>MKタク配の特長</span></h2>
<div class="lp__feature__list">
<div class="lp__feature__list__inner">
<div class="lp__feature__list__inner-wrap">
<h3>京都を中心に<br><span>どこでも</span>お届けいたします！</h3>
<img src="<?php echo $img_url; ?>lp_feature_1.png" alt="京都を中心にどこでもお届けいたします！" srcset="<?php echo $img_url; ?>lp_feature_1.png 1x, <?php echo $img_url; ?>lp_feature_1@2x.png 2x">
<p>初期導入費・月額利用料は全て無料！店舗が負担するのは注文時のサービス手数料のみで、固定費はかかりません。（※オプションをご選択の場合は別途費用）</p>
</div>
</div>
<div class="lp__feature__list__inner">
<div class="lp__feature__list__inner-wrap">
<h3>MKタクシーが<br><span>大切</span>お届けします！</h3>
<img src="<?php echo $img_url; ?>lp_feature_2.png" alt="京都を中心にどこでもお届けいたします！" srcset="<?php echo $img_url; ?>lp_feature_2.png 1x, <?php echo $img_url; ?>lp_feature_2@2x.png 2x">
<p>初期導入費・月額利用料は全て無料！店舗が負担するのは注文時のサービス手数料のみで、固定費はかかりません。（※オプションをご選択の場合は別途費用）</p>
</div>
</div>
<div class="lp__feature__list__inner">
<div class="lp__feature__list__inner-wrap">
<h3>導入費・月額費は0円！<br>店舗の負担を<span>最小限</span>に</h3>
<img src="<?php echo $img_url; ?>lp_feature_3.png" alt="京都を中心にどこでもお届けいたします！" srcset="<?php echo $img_url; ?>lp_feature_3.png 1x, <?php echo $img_url; ?>lp_feature_3@2x.png 2x">
<p>初期導入費・月額利用料は全て無料！店舗が負担するのは注文時のサービス手数料のみで、固定費はかかりません。（※オプションをご選択の場合は別途費用）</p>
</div>
</div>
<div class="lp__feature__list__inner">
<div class="lp__feature__list__inner-wrap">
<h3>MKタク配のサイトで<br>あなたの<span>お店を紹介</span></h3>
<img src="<?php echo $img_url; ?>lp_feature_4.png" alt="京都を中心にどこでもお届けいたします！" srcset="<?php echo $img_url; ?>lp_feature_4.png 1x, <?php echo $img_url; ?>lp_feature_4@2x.png 2x">
<p>初期導入費・月額利用料は全て無料！店舗が負担するのは注文時のサービス手数料のみで、固定費はかかりません。（※オプションをご選択の場合は別途費用）</p>
</div>
</div>
</div>
</div>
</section>

<section class="lp__price mb-5">
<div class="container">
<h2 class="lp-ttl2"><span class="marks">料金について</span></h2>
<div class="txt-c">
<img src="<?php echo $img_url; ?>lp_price_img.png" alt="初期費用・月額利用料¥0で導入可能！" srcset="<?php echo $img_url; ?>lp_price_img.png 1x, <?php echo $img_url; ?>lp_price_img@2x.png 2x">
</div>
<p class="small my-3 text-md-center">※オプションをご選択の場合は別途費用がかかります。
<br>※クレジットカードでの決済の場合手数料3.6%が別途発生します。</p>
</section>

<section class="lp__flow bg-light">
<div class="container">
<h2 class="lp-ttl2"><span>導入の流れ</span></h2>
<ul class="nav nav-tabs">
<li class="active"><a href="#takeeats" data-toggle="tab">システムを導入する場合</a></li>
<li><a href="#tel" data-toggle="tab">システムを導入しない場合</a></li>
</ul>
<div class="lp__flow__wrap">
<div class="tab-content">
<div class="tab-pane active" id="takeeats">
<ol class="lp__flow__list">
<li class="lp__flow__list__inner">
<div class="lp__flow__list__inner-step">STEP<span>01</span></div>
<h3>注文の受付</h3>
<p>お客様が直接作成したオーダーサイトで決済ならびに予約を行います。注文時の通知方法は店舗ごとに指定していただくことが出来ます。</p>
</li>
<!-- lp__flow__list__inner -->
<li class="lp__flow__list__inner">
<div class="lp__flow__list__inner-step">STEP<span>02</span></div>
<h3>商品の準備</h3>
<p>管理画面やメールから注文を確認し、MKのお迎えの時間に合わせて準備します。</p>
</li>
<!-- lp__flow__list__inner -->
<li class="lp__flow__list__inner">
<div class="lp__flow__list__inner-step">STEP<span>03</span></div>
<h3>メニュー登録</h3>
<p>販売する商品の登録を行います。<br>(※無料代行サービス実施中)</p>
</li>
<!-- lp__flow__list__inner -->
<li class="lp__flow__list__inner">
<div class="lp__flow__list__inner-step">STEP<span>04</span></div>
<h3>ご利用スタート</h3>
<p>準備が整ったら早速注文の受け付けを行いましょう。</p>
</li>
<!-- lp__flow__list__inner -->
</ol>
</div>
<div class="tab-pane" id="tel">
<ol class="lp__flow__list">
<li class="lp__flow__list__inner">
<div class="lp__flow__list__inner-step">STEP<span>01</span></div>
<h3>注文の受付()</h3>
<p>お申込みフォームより必要事項のご入力をお願い致します。<br>担当者よりお電話にてご連絡致します。</p>
</li>
<!-- lp__flow__list__inner -->
<li class="lp__flow__list__inner">
<div class="lp__flow__list__inner-step">STEP<span>02</span></div>
<h3>アカウント発行</h3>
<p>お店の専用サイトを作成しアカウントを発行致します。</p>
</li>
<!-- lp__flow__list__inner -->
<li class="lp__flow__list__inner">
<div class="lp__flow__list__inner-step">STEP<span>03</span></div>
<h3>メニュー登録</h3>
<p>販売する商品の登録を行います。<br>(※無料代行サービス実施中)</p>
</li>
<!-- lp__flow__list__inner -->
<li class="lp__flow__list__inner">
<div class="lp__flow__list__inner-step">STEP<span>04</span></div>
<h3>ご利用スタート</h3>
<p>準備が整ったら早速注文の受け付けを行いましょう。</p>
</li>
<!-- lp__flow__list__inner -->
</ol>
</div>
</div>
<!-- lp__flow__list -->
</div>
</div>
</section>
<!-- flow -->

<div id="toform" class="lp__cta mt-5 footer-ctabtn">
<div class="lp__cta__box">
<a class="smooth-scroll lp__cta__box_btn" href="<?php echo $home; ?>/seminar"><img class="mr-2" src="<?php echo $img_url; ?>cta_btn.svg" style="width:18px;
  height:auto" alt="吹き出しアイコン">まずはお問い合わせ</a>
</div>
</div>

<section class="lp__form">
<div class="container">
<div class="text-center lp__form-top">
<h2 class="lp-ttl2"><span class="marks">お問い合わせ</span></h2>
<img src="<?php echo $img_url; ?>contact_txt.png" alt="初期費用0円" srcset="<?php echo $img_url; ?>contact_txt.png 1x, <?php echo $img_url; ?>contact_txt@2x.png 2x">
<div class="lp-btn">
<a href="#">いますぐお問い合わせ</a>
</div>
</div>
<div><?php the_content(); ?></div>
</div>
</section>

<?php get_footer();
