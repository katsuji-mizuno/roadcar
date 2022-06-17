<?php get_header(); ?>
<!-- for Meta -->
<!-- for Meta -->
<meta name="description" content='サイトマップのページです。VOLVO・ユーポスなど、大阪で一大流通マーケットを担う株式会社ロードカー。'>
<meta name="keywords" content="サイトマップ,大阪,VOLVO,ユーポス,流通,車,カー">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/common.css">
<!-- for Page -->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/second.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/sitemap.css">

</head>

<body>
<?php get_template_part('parts_header'); ?>

<div id="main" class="page_volvo timeline">

  <!--パンくず-->
  <div class="brunch">
    <ul>
      <li><a href="<?php echo home_url(); ?>">TOP</a></li>
      <li>SITE MAP</li>
    </ul>
  </div>

  <!--タイトル、下層リンクのエリア-->
  <div class="tit_wrap">
    <!--ページタイトル-->
    <div class="page_tit">
      <h1><span>サイトマップ</span>SITE MAP</h1>
    </div>
  </div>

  <!-- ページ導入部分 -->
  <div class="sitemap_area">
    <ul class="map_menu">
      <li>
        <h2><span>わたしたちについて</span>ABOUT</h2>
        <ul>
          <li><a href="<?php echo home_url(); ?>/about/"><h3>ABOUT<span>わたしたちの考え方</span></h3></a></li>
          <li><a href="<?php echo home_url(); ?>/about/company/"><h3>COMPANY<span>企業情報</span></h3></a></li>
          <li><a href="<?php echo home_url(); ?>/about/csr/"><h3>CSR<span>CSRについて</span></h3></a></li>
        </ul>
      </li>
      <li>
        <h2><span>サービス</span>SERVICE</h2>
        <ul>
          <li><a href="<?php echo home_url(); ?>/volvo/"><h3>VOLVO<span>ボルボ・ディーラー事業</span></h3></a></li>
          <li><a href="<?php echo home_url(); ?>/upohs/"><h3>U-POHS<span>ユーポス事業</span></h3></a></li>
          <li><a href="<?php echo home_url(); ?>/insurance/"><h3>INSURANCE<span>保険代理店事業</span></h3></a></li>
          <li><a href="<?php echo home_url(); ?>/marvelous/"><h3>MARVELOUS<span>高級輸入車販売事業</span></h3></a></li>
        </ul>
      </li>
      <li>
        <h2><a href="<?php echo home_url(); ?>/recruit/"><span>採用情報</span>RECRUIT</a></h2>
        <ul>
          <li><a href="<?php echo home_url(); ?>/recruit/data/"><h3>DATA<span>ロードカーがよく分かるデータ</span></h3></a></li>
          <li><a href="<?php echo home_url(); ?>/recruit/question/"><h3>QUESTION<span>先輩社員を解体してみた</span></h3></a></li>
          <li><h3>STORY<span>スタッフインタビュー</h3></span>
            <ul class="story">
              <li><a href="<?php echo home_url(); ?>/recruit/work/volvo/">ボルボ事業</a></li>
              <!--li><a href="<?php echo home_url(); ?>/recruit/work/upos_01/">ユーポス事業（店舗営業）</a></li-->
              <li><a href="<?php echo home_url(); ?>/recruit/work/upos_02/">ユーポス事業（RSP営業）</a></li>
            </ul>
          </li>
          <li><a href="<?php echo home_url(); ?>/recruit/culture/"><h3>CULTURE<span>環境／福利厚生</span></h3></a></li>
          <li><a href="<?php echo home_url(); ?>/recruit/offers/"><h3>RECRUITMENT<span>募集要項</span></h3></a></li>
          <li><a href="<?php echo home_url(); ?>/recruit/entry_form/"><h3>ENTRY<span>エントリー</span></h3></a></li>
        </ul>
      </li>
      <li>
        <h2><a href="<?php echo home_url(); ?>/information/"><span>お知らせ</span>NEWS</a></h2>
        <h2><span>お問い合わせ</span>CONTACT</h2>
        <ul class="list_bold">
          <li class="list_margin"><a href="<?php echo home_url(); ?>/contact_form/">お問い合わせ</a></li>
        </ul>
        <ul class="list_bold">
          <li><a href="<?php echo home_url(); ?>/sitepolicy/">サイトポリシー</a></li>
          <li><a href="<?php echo home_url(); ?>/privacy/">プライバシーポリシー</a></li>
          <li><a href="<?php echo home_url(); ?>/solicitation/">勧誘方針</a></li>
        </ul>
      </li>
    </ul>

  </div>
</div><!-- main end -->

<?php get_template_part('parts_footer'); ?>
<?php get_footer(); ?>
