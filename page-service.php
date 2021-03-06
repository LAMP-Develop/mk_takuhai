<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/';
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
    <a href="<?php echo the_permalink(); ?>" class="info-content d-block">
      <p class="f-13 py-sm">
        <i class="fas fa-info-circle mr-1 f-18"></i>
        <?php
        if(mb_strlen($post->post_title, 'UTF-8')>20){
        	$title= mb_substr($post->post_title, 0, 22, 'UTF-8');
        	echo $title.'…';
        }else{
        	echo $post->post_title;
        }
        ?>
      </p>
    </a>
  <!-- ▲ お知らせ内容 -->
  <!-- ▼ お知らせ背景 -->
    <div class="info-bg">
    </div>
  <!-- ▲ お知らせ背景 -->

  <?php endwhile; else: ?>
  <?php endif; ?>
</section>
<!-- ▲ お知らせ -->

<div class="lp__mv">
<div class="container">
<div class="lp__mv-wrap">

<div>
<h3 class="lp__mv-ttl font-weight-bold f-16">飲食店様向け<br>MKタク配を<span class="text-primary">オンライン注文</span>で始めたい方</h3>
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

<div class="py-3 bg-light">
<div class="lp-btn bg-info">
<a class="text-center" href="<?php echo $home; ?>/service-tel/" target="_blank">電話注文で始めたい方</a>
</div>
</div>

<section class="mt-5 mb-5 lp__takeeats">
<div class="container">
  <div class="row">
    <div class="lp__takeeats__txt col-md-6">
      <h2 class="lp-ttl2"><img src="<?php echo $img_url; ?>lp_takeeats_ttl.png" alt="料理の写真" srcset="<?php echo $img_url; ?>lp_takeeats_ttl.png 1x, <?php echo $img_url; ?>lp_takeeats_ttl@2x.png 2x">注文は<b class="text-primary">店舗オリジナル</b>の<br>オーダーサイトから</h2>
      <p>MKタク配にお申し込みいただきましたら、店舗ごとにオリジナルのオーダーサイトをご用意しております。<br>そのため店舗様はサイト制作からデリバリーまでを初期導入費・月額費０円でご利用いただくことができます。</p>
      <p>MKタク配では、テイクイーツのシステムを利用しています。<a href="http://take-eats.jp/" target="_blank">詳しくはこちら</a></p>
    </div>
    <div class="lp__takeeats__img col-md-6 text-center">
      <img src="<?php echo $img_url; ?>lp_takeeats_sp.png" alt="オーダーサイト" srcset="<?php echo $img_url; ?>lp_takeeats_sp.png 1x, <?php echo $img_url; ?>lp_takeeats_sp@2x.png 2x">
    </div>
  </div>
</div>
</section>

<section class="pb-5 mb-5 bg-light lp__about">
<div class="container">
<h2 class="lp-ttl2">宅配はすべて<br>MKタクシーにおまかせ</h2>
<div class="lp__about__list">
<div class="lp__about__list__inner">
<div class="lp__about__list__inner-wrap">
<div class="lp__about__list__inner-img">
<img src="<?php echo $img_url; ?>about_icon_1.png" alt="注文事前決済" srcset="<?php echo $img_url; ?>about_icon_1.png 1x, <?php echo $img_url; ?>about_icon_1@2x.png 2x">
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
<img src="<?php echo $img_url; ?>about_icon_2.png" alt="料理を準備" srcset="<?php echo $img_url; ?>about_icon_2.png 1x, <?php echo $img_url; ?>about_icon_2@2x.png 2x">
</div>
<div class="lp__about__list__inner-txt">
<p class="user">あなたの店舗</p>
<h3>料理を準備</h3>
<p>注文通知がきたらご注文を確認し料理を準備します。</p>
</div>
</div>
</div>
<div class="lp__about__list__inner">
<div class="lp__about__list__inner-wrap">
<div class="lp__about__list__inner-img">
<img src="<?php echo $img_url; ?>about_icon_3.png" alt="商品のお受け取り" srcset="<?php echo $img_url; ?>about_icon_3.png 1x, <?php echo $img_url; ?>about_icon_3@2x.png 2x">
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
<img src="<?php echo $img_url; ?>about_icon_4.png" alt="お客様に商品をお渡し" srcset="<?php echo $img_url; ?>about_icon_4.png 1x, <?php echo $img_url; ?>about_icon_4@2x.png 2x">
</div>
<div class="lp__about__list__inner-txt">
<p class="user">MKタクシー</p>
<h3>お客様に商品をお渡し</h3>
<p>MKタクシーがお客様の元まで商品をお届けします。</p>
</div>
</div>
</div>
</div>
<p class="small mt-5">※ 受付前日19時までのご注文に限ります。<br>※感染症対策のため商品の積み込みは 飲食店様に行っていただきます。</p>
</div>
</section>

<section class="lp__feature">
<div class="container">
<h2 class="lp-ttl2"><span>MKタク配の特長</span></h2>
<div class="lp__feature__list">
<div class="lp__feature__list__inner">
<div class="lp__feature__list__inner-wrap">
<h3>京都市内に<br>お届けいたします！</h3>
<img src="<?php echo $img_url; ?>lp_feature_1.png" alt="京都を中心にどこでもお届けいたします！" srcset="<?php echo $img_url; ?>lp_feature_1.png 1x, <?php echo $img_url; ?>lp_feature_1@2x.png 2x">
<p>テイクアウトやデリバリーに注力されている飲食店の配送をお手伝いするべく、飲食店向けのサービスとして、タクシーで料理の配達を行う「MKタク配」を実施し、京都市内を中心に商品をお客様のもとへお届けいたします。</p>
<p class="small mt-2">※ 以下のエリアはタク配対象外となります。<br>＜北区＞中川・小野・杉阪・真弓・大森・雲ヶ畑<br>＜右京区＞京北・嵯峨清滝・嵯峨水尾・嵯峨越畑・嵯峨樒原<br>＜左京区＞花脊・広河原・久多・大原</p>
</div>
</div>
<div class="lp__feature__list__inner">
<div class="lp__feature__list__inner-wrap">
<h3>導入費・月額費は0円！<br>店舗の負担を<span>最小限</span>に</h3>
<img src="<?php echo $img_url; ?>lp_feature_3.png" alt="導入費・月額費は0円！店舗の負担を最小限に" srcset="<?php echo $img_url; ?>lp_feature_3.png 1x, <?php echo $img_url; ?>lp_feature_3@2x.png 2x">
<p>初期導入費・月額利用料は全て無料！店舗が負担するのは注文時のサービス手数料のみで、固定費はかかりません。</p>
<p class="small mt-2">※ オプションをご選択の場合は別途費用<br>※ 宅配料は原則お客様負担</p>
</div>
</div>
<div class="lp__feature__list__inner">
<div class="lp__feature__list__inner-wrap">
<h3>MKタクシーが<br><span>大切</span>にお届けします！</h3>
<img src="<?php echo $img_url; ?>lp_feature_2.png" alt="MKタクシーが大切お届けします！" srcset="<?php echo $img_url; ?>lp_feature_2.png 1x, <?php echo $img_url; ?>lp_feature_2@2x.png 2x">
<p>
  MKタクシーが店舗様へ商品を受け取りに向かいます。お預かりした商品を、専用BOX（44cm×24cm×26㎝）にてお客様のもとへ大切にお届けいたします。お店の近くに到着しましたらお電話いたします。ウイルス感染予防のため、トランクへの積み込みはお店の方に行っていただきます（ドライバーは商品に触れません）。
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
<img src="<?php echo $img_url; ?>lp_feature_4.png" alt="MKタク配のサイトであなたのお店を紹介" srcset="<?php echo $img_url; ?>lp_feature_4.png 1x, <?php echo $img_url; ?>lp_feature_4@2x.png 2x">
<p>MKタク配お店検索サイトにてあなたのお店が掲載されます。店舗サイト（テイクイーツ)を導入の方は、お客様のオンライン注文が簡単です。</p>
</div>
</div>
</div>

</div>
</section>

<section class="lp__price mb-5">
<div class="container">
<h2 class="lp-ttl2"><span class="marks">料金について</span></h2>
<div class="txt-c">
<p class="small mb-5 text-md-center">
  MKタク配では、株式会社ランプが提供する<span class="font-weight-bold">テイクイーツのシステム</span>を利用しています。
  <br>システム利用料（テイクイーツ）以外の店舗様にかかる費用はございません。
</p>
<img src="<?php echo $img_url; ?>lp_price_img.png" alt="初期費用・月額利用料¥0で導入可能！" srcset="<?php echo $img_url; ?>lp_price_img.png 1x, <?php echo $img_url; ?>lp_price_img@2x.png 2x">
</div>
<p class="small mt-5 mb-3 text-md-center text-secondary">
  ※ 宅配は1回のご注文につき＋宅配料<s class="text-decoration-line-through">550円</s><span class="text-primary">110円</span>がお客様に加算されます。（宅配料は原則お客様負担）
  <br>※オプションをご選択の場合は別途費用がかかります。
  <br>※クレジットカードでの決済の場合手数料3.6%が別途発生します。
  <br>※ 宅配完了ごとに車両は毎回消毒を行っております。
  <br>※ 個人情報保護のため、お店様からおうかがいしたお届け先情報は宅配完了ごとに破棄いたします。
  <br>※ 当サービスは一般のお客様向けの配達を目的としています。業者間の配送等の用途にはご利用いただけません。
</p>

<div class="another-plan mt-5">
<h3 class="mb-3 text-center">MKタク配を電話注文で始めたい方</h3>
<ul>
<li>宅配料1回<s class="text-decoration-line-through">550円</s><span class="text-primary">110円</span>（税込）</li>
<li>配達以外はお電話で！（24時間対応）</li>
<li>京都市外メーターも配達可能</li>
</ul>
<div class="lp-btn mt-0 mb-0">
<a class="text-center" href="<?php echo $home; ?>/service-tel/" target="_blank">詳しくはこちら</a>
</div>
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
<h3>お申し込み</h3>
<p>お申込みフォームより必要事項のご入力をお願い致します。担当者よりお電話にてご連絡致します。</p>
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
<!-- lp__flow__list -->
</div>
</div>
</section>
<!-- flow -->

<section id="contact" class="lp__form">
<div class="container">
<div class="text-center lp__form-top">
<h2 class="lp-ttl2"><span class="marks">お申し込み</span></h2>
<img src="<?php echo $img_url; ?>contact_txt.png" alt="初期費用0円" srcset="<?php echo $img_url; ?>contact_txt.png 1x, <?php echo $img_url; ?>contact_txt@2x.png 2x">
</div>
<div class="text-center">
<div class="lp-btn d-md-inline-block d-block">
<a class="text-center font-weight-bold" href="<?php echo $home; ?>/contact/" target="_blank">お問い合わせ・資料請求</a>
</div>
<div class="lp-btn d-md-inline-block d-block">
<a class="text-center font-weight-bold" href="<?php echo $home; ?>/seminar/" target="_blank">WEB説明会</a>
</div>
</div>
<div>
  <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
  <script>
    hbspt.forms.create({
  	portalId: "8940987",
  	formId: "f73c2382-5ce4-41f3-bc5c-ca3bcfe97519"
  });
  </script>
</div>
</div>
</section>

<?php get_footer();
