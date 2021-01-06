<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/';
get_header(); ?>

<div class="lp__mv">
<div class="container">
<div class="lp__mv-wrap">

<div>
<h3 class="lp__mv-ttl font-weight-bold">飲食店様向け<br>MK宅配を<span class="text-primary">電話注文</span>で始めたい方</h3>
<img class="sp mb-4" src="<?php echo $img_url; ?>lp_mv_txt.png" alt="MKタクシーが大切にお客様のもとへお届け" srcset="<?php echo $img_url; ?>lp_mv_txt.png 1x, <?php echo $img_url; ?>lp_mv_txt@2x.png 2x">
<!-- sp -->
<img class="pc w-75 mb-3" src="<?php echo $img_url; ?>lp_mv_txt_pc.png" alt="MKタクシーが大切にお客様のもとへお届け" srcset="<?php echo $img_url; ?>lp_mv_txt_pc.png 1x, <?php echo $img_url; ?>lp_mv_txt_pc@2x.png 2x">
<!-- pc -->
</div>

<img class="sp" src="<?php echo $img_url; ?>lp_mv_illust.png" alt="MK運転手のイラスト" srcset="<?php echo $img_url; ?>lp_mv_illust.png 1x, <?php echo $img_url; ?>lp_mv_illust@2x.png 2x">
<!-- sp -->
<img class="pc" src="<?php echo $img_url; ?>lp_mv_illust_pc.png" alt="MK運転手のイラスト" srcset="<?php echo $img_url; ?>lp_mv_illust_pc.png 1x, <?php echo $img_url; ?>lp_mv_illust_pc@2x.png 2x">
<!-- pc -->

</div>
</div>
</div>

<div class="py-3 bg-warning">
<div class="lp-btn">
<a class="text-center" href="<?php echo $home; ?>/service-tel/" target="_blank">オンライン注文で始めたい方</a>
</div>
</div>

<section class="pb-5 mb-5 bg-light lp__about">
<div class="container">
<h2 class="lp-ttl2">宅配は24時間OK！<br>MKタクシーにおまかせ</h2>
<div class="lp__about__list">
<div class="lp__about__list__inner">
<div class="lp__about__list__inner-wrap">
<div class="lp__about__list__inner-img">
<img src="<?php echo $img_url; ?>about_icon_1_tel.png" alt="注文事前決済" srcset="<?php echo $img_url; ?>about_icon_1_tel.png 1x, <?php echo $img_url; ?>about_icon_1_tel@2x.png 2x">
</div>
<div class="lp__about__list__inner-txt">
<p class="user">あなたの店舗</p>
<h3>宅配依頼</h3>
<p>お客様よりデリバリーの注文後MKタクシーへ宅配依頼（電話）をします。</p>
</div>
</div>
</div>
<div class="lp__about__list__inner">
<div class="lp__about__list__inner-wrap">
<div class="lp__about__list__inner-img">
<img src="<?php echo $img_url; ?>about_icon_2.png" alt="注文事前決済" srcset="<?php echo $img_url; ?>about_icon_2.png 1x, <?php echo $img_url; ?>about_icon_2@2x.png 2x">
</div>
<div class="lp__about__list__inner-txt">
<p class="user">あなたの店舗</p>
<h3>料理を準備</h3>
<p>受取時間までに料理の準備をします。</p>
</div>
</div>
</div>
<div class="lp__about__list__inner">
<div class="lp__about__list__inner-wrap">
<div class="lp__about__list__inner-img">
<img src="<?php echo $img_url; ?>about_icon_3.png" alt="注文事前決済" srcset="<?php echo $img_url; ?>about_icon_3.png 1x, <?php echo $img_url; ?>about_icon_3@2x.png 2x">
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
<img src="<?php echo $img_url; ?>about_icon_4.png" alt="注文事前決済" srcset="<?php echo $img_url; ?>about_icon_4.png 1x, <?php echo $img_url; ?>about_icon_4@2x.png 2x">
</div>
<div class="lp__about__list__inner-txt">
<p class="user">MKタクシー</p>
<h3>お客様に商品をお渡し</h3>
<p>MKタクシーがお客様の元まで商品をお届けします。</p>
</div>
</div>
</div>
</div>
<p class="small mt-5">※感染症対策のため商品の積み込みは 飲食店様に行っていただきます。</p>
</div>
</section>

<section class="lp__feature">
<div class="container">
<h2 class="lp-ttl2"><span>MKタク配の特長</span></h2>
<div class="lp__feature__list">
<div class="lp__feature__list__inner">
<div class="lp__feature__list__inner-wrap">
<h3>京都市内・札幌に<br>お届けいたします！</h3>
<img src="<?php echo $img_url; ?>lp_feature_1.png" alt="京都を中心にどこでもお届けいたします！" srcset="<?php echo $img_url; ?>lp_feature_1.png 1x, <?php echo $img_url; ?>lp_feature_1@2x.png 2x">
<p>テイクアウトやデリバリーに注力されている飲食店の配送をお手伝いするべく、飲食店向けのサービスとして、タクシーで料理の配達を行う「MKタク配」を実施し、京都市内を中心に商品をお客様のもとへお届けいたします。</p>
<p class="small mt-2">※ 以下のエリアはタク配対象外となります。<br>＜北区＞中川・小野・杉阪・真弓・大森・雲ヶ畑<br>＜右京区＞京北・嵯峨清滝・嵯峨水尾・嵯峨越畑・嵯峨樒原<br>＜左京区＞花脊・広河原・久多・大原<br>※ 札幌での配達可能エリアは店舗から概ね5km以内となります。<br>※ エリア外の場合はタクシーメーター運賃で配達いたします。</p>
</div>
</div>
<div class="lp__feature__list__inner">
<div class="lp__feature__list__inner-wrap">
<h3>ご利用は1回のご注文<br><span>550円</span>から</h3>
<img src="<?php echo $img_url; ?>lp_feature_3_tel.png" alt="京都を中心にどこでもお届けいたします！" srcset="<?php echo $img_url; ?>lp_feature_3_tel.png 1x, <?php echo $img_url; ?>lp_feature_3_tel@2x.png 2x">
<p>料理代金は直接お客様と精算願います。宅配先においてもお客様に直接トランクからお受け取りいただきます。</p>
<p class="small mt-2">
  ※ 商品代の収受に関して、MKは一切関与いたしません。
  <br>【事前決済の場合】自社サイトや宅配サイトなど、オンライン決済が可能な飲食店様はそちらをご利用ください。
  <br>【事後決済の場合】事後決済はQRコード決済のみ可能です。
  <br>飲食店様が契約されているQRコード決済のシールやQRコードが記された用紙をご用意いただければ、お届け時にお客様が送金操作をするところまでドライバーは確認いたします。（決済完了、不能、金額差額などについては一切の責任を負いません。また、QRコードが記された用紙をお店に返却することはできませんのでコピーなどのご用意をお願いいたします）。
</p>
</div>
</div>
<div class="lp__feature__list__inner">
<div class="lp__feature__list__inner-wrap">
<h3>MKタクシーが<br><span>大切</span>お届けします！</h3>
<img src="<?php echo $img_url; ?>lp_feature_2.png" alt="京都を中心にどこでもお届けいたします！" srcset="<?php echo $img_url; ?>lp_feature_2.png 1x, <?php echo $img_url; ?>lp_feature_2@2x.png 2x">
<p>
  MKタクシーが店舗様へ商品を受け取りに向かいます。お預かりした商品を、専用BOX（40cm×24cm）にてお客様のもとへ大切にお届けいたします。お店の近くに到着しましたらお電話いたします。ウイルス感染予防のため、トランクへの積み込みはお店の方に行っていただきます（ドライバーは商品に触れません）。
  <br>ドライバーが商品をお預かりする際に、宅配料（現金）をドライバーにお支払いください。
</p>
<p class="small mt-2">
  <br>※ 容器や梱包は店舗様でお願いいたします。保冷バッグはご用意しておりますが、保冷剤などは各店舗でご用意をお願いいたします。
  <br>汁物や型くずれのしやすいもの、生ものなどは事前にご相談ください。
  <br>※ 京都のみ時間指定（MKが店舗で商品を受け取る時刻）が可能です。
  <br>店舗への車両到着は指定時刻より前後する場合がありますので、指定時刻の10分前には必ず商品を渡せる状態にしていただきますようお願いいたします。
  <br>時間指定時の参考として、配達にかかる時間の目安は1km3～5分です（道路状況等により異なります）。
  <br>※ 宅配料の領収書が必要な場合はドライバーにお申し付けください。
</p>
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

<section class="lp__price bg-light mt-5 mb-5 pb-5">
<div class="container">
<h2 class="lp-ttl2"><span class="marks">料金について</span></h2>
<table class="lp__table mb-3 bg-white">
<tr>
<th class="bg-secondary p-3">宅配料</th>
<td class="p-3">1回の注文で<span class="font-weight-bold text-primary">550</span>円（税込）</td>
</tr>
<tr>
<th class="bg-secondary p-3">対象エリア</th>
<td class="p-3">・京都市内<br>・札幌市（中央区/白石区/豊平区）</td>
</tr>
<tr>
<th class="bg-secondary p-3">対象店舗</th>
<td class="p-3">料理代金の精算において<span class="font-weight-bold">直接お客様の事前または事後決済が可能なお店</span>に限ります。<br><span class="small">※ 料理代金の収受に関して、MKは一切関与いたしません。</span></td>
</tr>
</table>
<p class="small mt-2">前日までのご予約であれば 最大3個まで保冷バッグをご用意いたします。
<br>保冷バッグ2個目以降、1個追加につき＋200円を頂戴いたします。
<br>■ 通常（保冷バッグ1個）宅配料550円のみ
<br>■ 保冷バッグ2個　550円＋200円＝750円
<br>■ 保冷バッグ3個　550円＋200円＋200円＝950円
<br>
<br>※当日ご予約の場合は保冷バッグ1個につきタクシー1台の運行となりますので、タクシー1台につき550円頂戴いたします（例：保冷バッグ2個必要な場合1,100円となります）。
<br>※宅配完了ごとに車両は毎回消毒を行っております。
<br>※個人情報保護のため、お店様からおうかがいしたお届け先情報は宅配完了ごとに破棄いたします。
<br>※当サービスは一般のお客様向けの配達を目的としています。業者間の配送等の用途にはご利用いただけません。
<br>※ 宅配完了ごとに車両は毎回消毒を行っております。
<br>※ 個人情報保護のため、お店様からおうかがいしたお届け先情報は宅配完了ごとに破棄いたします。
<br>※ 当サービスは一般のお客様向けの配達を目的としています。業者間の配送等の用途にはご利用いただけません。
</p>
</div>
</section>

<section id="contact" class="lp__form">
<div class="container">
<div class="text-center lp__form-top">
<h2 class="lp-ttl2"><span class="marks">お申し込み</span></h2>
</div>
<div><?php the_content(); ?></div>
</div>
</section>


<?php get_footer();
