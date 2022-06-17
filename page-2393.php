<?php get_header(); ?>
<!-- for Meta -->
<meta name="description" content='お問い合わせのページです。VOLVO・ユーポスなど、大阪で一大流通マーケットを担う株式会社ロードカー。事業や会社についてのご質問はこちらからお願いいたします。'>
<meta name="keywords" content="お問い合わせフォーム,大阪,VOLVO,ユーポス,流通,車,カー">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/common.css">
<!-- for Page -->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/second.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/contact.css">


</head>

<body class="contact_confirm">
<?php get_template_part('parts_header'); ?>

<div id="main" class="page_volvo timeline">

  <!--パンくず-->
  <div class="brunch">
    <ul>
      <li><a href="<?php echo home_url(); ?>">TOP</a></li>
      <li>CONTACT</li>
    </ul>
  </div>

  <!--タイトル、下層リンクのエリア-->
  <div class="tit_wrap">
    <!--ページタイトル-->
    <div class="page_tit">
      <h1><span>入力内容の確認</span>CONFIRM</h1>
    </div>

  </div>


  <!-- ページ導入部分 -->
  <div class="content_area">
    <div class="contact_wrap">
      <div class="contact_inner">
        <div class="contact_text">
          ご入力内容をご確認ください。<br />問題なければ「送信する」<br class="brsp">ボタンを押してください。
        </div>
        <div class="contact_step">
          <ul>
            <li>
              <div>STEP.<span>01</span></div>
              <p>入力</p>
            </li>
            <li class="active">
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
