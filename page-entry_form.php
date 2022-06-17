<?php get_header(); ?>
<!-- for Meta -->
<meta name="description" content='エントリーのページです。VOLVO・ユーポスなど、大阪で一大流通マーケットを担う株式会社ロードカー。採用エントリーはこちらからお願いいたします。'>
<meta name="keywords" content="採用エントリーフォーム,大阪,VOLVO,ユーポス,流通,車,カー">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/common.css">
<!-- for Page -->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/second.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/contact.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/entry.css">


</head>

<body class="entry">
<?php get_template_part('parts_header'); ?>

<div id="main" class="timeline rec">

  <!--パンくず-->
  <div class="brunch rec">
    <ul>
      <li><a href="<?php echo home_url(); ?>/recruit/">採用TOP</a></li>
      <li>ENTRY</li>
    </ul>
  </div>

  <!--タイトル、下層リンクのエリア-->
  <div class="tit_wrap">
    <!--ページタイトル-->
    <div class="page_tit">
      <h1><span>エントリー</span>ENTRY</h1>
    </div>

  </div>


  <!-- ページ導入部分 -->
  <div class="content_area">
    <!--
    <div class="contact_wrap">
      <div class="contact_inner">
        <div class="contact_tel_text">
          電話からの<br class="brsp">お問い合わせはこちら
        </div>
        <div class="contact_tel">
          <p>06-6534-6500</p>
          <span>受付時間 ／ 9:00～18:00 (平日のみ)</span>
        </div>
      </div>
    </div>
    -->
    <div class="contact_wrap">
      <div class="contact_inner">
        <div class="contact_text">
          フォームからの<br class="brsp">お問い合わせはこちら
        </div>
        <div class="contact_step">
          <ul>
            <li class="active">
              <div>STEP.<span>01</span></div>
              <p>入力</p>
            </li>
            <li>
              <div>STEP.<span>02</span></div>
              <p>確認</p>
            </li>
            <li>
              <div>STEP.<span>03</span></div>
              <p>完了</p>
            </li>
          </ul>
        </div>
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</div><!-- main end -->

<?php get_template_part('parts_footer'); ?>
<?php get_footer(); ?>
