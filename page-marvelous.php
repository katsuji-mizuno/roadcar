<?php get_header(); ?>
<!-- for Meta -->
<meta name="description" content='高級輸入中古車専門店であるマーベラスコネクション。ヨーロッパプレミアムブランド中心にプレミアムカーを揃えております。名の通り、上質なお車をお客様とお繋げ致します！！在庫もすべてグループ内よりのお下取りや、お買取りばかりでいいお車を提供致します。'>
<meta name="keywords" content="高級輸入車,大阪,VOLVO,中古車販売,流通,車,カー">

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/common.css">
<!-- for Page -->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/second.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/marvelous.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/slick_car.css">

</head>

<body>
<?php get_template_part('parts_header'); ?>

<div id="main" class="page_marvelous timeline">

  <!--パンくず-->
  <div class="brunch">
    <ul>
      <li><a href="<?php echo home_url(); ?>">TOP</a></li>
      <li>MARVELOUS CONNECTION</li>
    </ul>
  </div>

  <!--タイトル、下層リンクのエリア-->
  <div class="tit_wrap">
    <!--ページタイトル-->
    <div class="page_tit">
      <h1><span>高級輸入車販売事業</span>MARVELOUS CONNECTION</h1>
    </div>
    <!--下層リンク-->
    <div class="sublink_wrap">
      <ul>
        <li class="volvo">
          <a href="<?php echo home_url(); ?>/volvo/">VOLVO<span>ボルボ・ディーラー事業</span></a>
        </li>
        <li>
          <a href="<?php echo home_url(); ?>/upohs/">U-POHS<span>ユーポス事業</span></a>
        </li>
        <li>
          <a href="<?php echo home_url(); ?>/insurance/">INSURANCE<span>保険代理店事業</span></a>
        </li>
        <li class="marvelous">
          MARVELOUS<span>高級輸入車販売事業</span>
        </li>
      </ul>
    </div>
  </div>




  <!-- Shop -->
  <div class="shop content_wrap_volvoUpohs">
    <div class="sec_tit"><h2>SHOP</h2></div>
    <ul class="lt">
      <li>
        <h3 class="shop_tit"><span>Marvelous connection<br />マーベラスコネクション</h3>
        <p class="address">〒560-0085 <br />大阪府豊中市上新田２－１５－８</p>
        <a href="https://www.carsensor.net/shop/osaka/201221018/#contents" class="btn_black check" target="_blank" rel="noopener"><span>Detail</span></a>
      </li>


    </ul>
  </div>




  <!-- ページ導入部分 -->
  <div class="intro_content_area">
    <ul>
      <li class="img_left">
        <div class="thum"><img src="<?php bloginfo('template_directory'); ?>/assets/images/marvelous/intro1.png" alt=""></div>
        <div class="text">
          <h2 class="tit"><span>コンセプト</span></h2>
          <div class="sub">いい車をもっとお買い求めやすく<br />高級輸入車の買取・販売サービス</div>
          <div class="message">
            <p>店舗名の『マーベラスコネクション』には、上質な車をお客様と繋げていく…そのような想いを込めています。主にボルボ事業部の良質な下取り車やユーポス事業部の良質な買取り車に興味のあるお客様を繋げて販売していく事業です。ヨーロッパプレミアムブランド中古車を中心に国産ハイクラス中古車も取り扱っています。</p>
          </div>
        </div>
      </li>

    </ul>
  </div>








  <span class="border-line"></span>

</div><!-- main end -->


<!--同階層のリンク-->

<div class="same_link">


  <a href="<?php echo home_url(); ?>/volvo/">
    <div class="same_prev">
      <p class="same_text l"><span>ボルボ・ディーラー事業</span>VOLVO</p>
    </div>
  </a>
  <a href="<?php echo home_url(); ?>/upohs/">
    <div class="same_next">
      <p class="same_text r"><span>ユーポス事業</span>U-POHS</p>
    </div>
  </a>
</div>

<!--お問い合わせ-->
<?php get_template_part('parts_contact'); ?>
<?php get_template_part('parts_footer'); ?>
<?php get_footer(); ?>
