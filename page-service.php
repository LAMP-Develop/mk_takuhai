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
<p>テイクアウトやデリバリーに注力されている飲食店の配送をお手伝いするべく、飲食店向けのサービスとして、タクシーで料理の配達を行う「MKのタク配」を実施し、京都市内を中心に商品をお客様のもとへお届けいたします。</p>
</div>
</div>
<div class="lp__feature__list__inner">
<div class="lp__feature__list__inner-wrap">
<h3>MKタクシーが<br><span>大切</span>お届けします！</h3>
<img src="<?php echo $img_url; ?>lp_feature_2.png" alt="京都を中心にどこでもお届けいたします！" srcset="<?php echo $img_url; ?>lp_feature_2.png 1x, <?php echo $img_url; ?>lp_feature_2@2x.png 2x">
<p>MKタクシーが飲食店様へ商品を受け取りに向かいます。お預かりした商品を、専用BOXにてお客様のもとへ大切にお届けいたします。（容器や梱包はお客様でお願いいたします。）</p>
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
<p>MKタク配お店検索サイトにてあなたのお店が掲載されます。店舗サイト（TakeEats)を導入の方は、お客様のネット注文が簡単です。</p>
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
<div class="another-plan mt-5">
  <div class="row">

  </div>
<h3 class="mb-3"><span class="text-primary">■</span> 宅配のみのご利用も可能です</h3>
<ul>
<li>宅配料1回550円（税込）</li>
<li>配達以来はお電話で！（24時間対応）</li>
<li>京都市外メーターも配達可能</li>
</ul>
<p class="m-0">※ 商品代の収受に関して、MKは一切関与いたしません。料理代金は直接お客様と精算願います。
<br>※ 事前決済の場合：自社サイトや宅配サイトなど、オンライン決済が可能な飲食店様はそちらをご利用ください。
<br>※ 事後決済の場合：事後決済はQRコード決済のみ可能です。飲食店様が契約されているQRコード決済のシールやQRコードが記された用紙をご用意いただければ、お届け時にお客様が送金操作をするところまでドライバーは確認いたします。
<br>※ 決済完了、不能、金額差額などについては一切の責任を負いません。また、QRコードが記された用紙をお店に返却することはできませんのでコピーなどのご用意をお願いいたします。</p>
</div>
</div>
</section>

<section class="lp__flow bg-light">
<div class="container">
<h2 class="lp-ttl2"><span>導入の流れ</span></h2>

<div class="lp__flow__wrap">
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
<!-- lp__flow__list -->
</div>

<p class="small text-center mt-4">※ 宅配のみをご利用の店舗様は、初回ご利用時商品と一緒にドライバーに申込書渡すだけで始められます。</p>
</div>
</section>
<!-- flow -->

<div id="toform" class="lp__cta mt-5 footer-ctabtn">
<div class="lp__cta__box">
<a class="smooth-scroll lp__cta__box_btn" href="#contact"><img class="mr-2" src="<?php echo $img_url; ?>cta_btn.svg" style="width:18px;
height:auto" alt="吹き出しアイコン">まずはお問い合わせ</a>
</div>
</div>

<section id="contact" class="lp__form">
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
