<?php get_header(); ?>
<!-- for Meta -->
<meta name="description" content='ロードカーの採用情報ページです。創業50周年を迎え、さらなる変革に向け、積極採用しています。お客様の満足とロードカーの未来を考えてみませんか？'>
<meta name="keywords" content="採用情報,大阪,VOLVO,ユーポス,流通,車,カー">
<!-- for Page -->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/js/slick/slick.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/common.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/second.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/recruit.css">
</head>
<body>

<?php get_template_part('parts_header'); ?>
<div class="top_contents_wrap">
  <!-- メインビジュアル -->

  <div class="mv delay-time01 box fadeUp">
    <ul class="slider_main">
      <li><a href="<?php echo home_url(); ?>/recruit/work/volvo/"><img src="<?php bloginfo('template_directory'); ?>/assets/images/recruit/main_a_pc.png" alt="菊地桃子" class="change"></a></li>
      <!--li><a href="<?php echo home_url(); ?>/recruit/work/upos_01/"><img src="<?php bloginfo('template_directory'); ?>/assets/images/recruit/main_b_pc.png" alt="西村知浩" class="change"></a></li-->
      <li><a href="<?php echo home_url(); ?>/recruit/work/upos_02/"><img src="<?php bloginfo('template_directory'); ?>/assets/images/recruit/main_c_pc.png" alt="伊藤新" class="change"></a></li>
    </ul>
  </div>

<!-- コンテンツエリア -->
  <div class="top_contents">

    <!-- 車 -->
    <section class="car_animation">
      <div class="car_PC">
        <div class="car_icon1 slideConts_car1">
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/recruit/car_1.png" alt="">
        </div>
        <div class="car_icon2 slideConts_car2">
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/recruit/car_2.png" alt="">
        </div>
        <div class="car_icon3 slideConts_car3">
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/recruit/car_3.png" alt="">
        </div>
      </div>
      <div class="car_SP">
        <div class="car_icon1 slideConts_car1sp">
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/recruit/car_1.png" alt="">
        </div>
        <div class="car_icon2 slideConts_car2sp">
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/recruit/car_2.png" alt="">
        </div>
        <div class="car_icon3 slideConts_car3sp">
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/recruit/car_3.png" alt="">
        </div>
      </div>
    </section>


    <!-- キャッチ -->
    <section>
      <div class="recruit_catch">
        <div class="top_content_tit">
          <h3 class="js-scroll"><span class="motion-txt"><span class="motion-inner">
            <span class="catch_1">君の情熱が</span>
          </span></span></h3>
        </div>
        <div class="top_content_tit">
          <h3 class="js-scroll"><span class="motion-txt"><span class="motion-inner">
            <span class="catch_2">ロードカーを</span>
          </span></span></h3>
        </div>
        <div class="top_content_tit">
          <h3 class="js-scroll"><span class="motion-txt"><span class="motion-inner">
            <span class="catch_3">加速させる</span>
          </span></span></h3>
        </div>

      </div>
      <div class="recruit_catch_sub">
        理屈や経験だけでは<br class="only_sp">時代は切り拓けない。<br />
        AIもロボットも<br class="only_sp">未来の主役にはなれない。<br />
        この青い地球を動かす<br class="only_sp">原動力は、いつだって君の情熱だ。<br />
        さぁ、共に走りだそう。
      </div>
    </section>

    <!-- DATA -->
    <section>
      <div class="recruit_data">
        <ul>
          <li>
            <div class="data_tag">DATA</div>
            <div class="data_q">実際どんな会社なの？</div>
            <div class="data_tit">ロードカーが<br />よく分かるデータ</div>
            <a href="<?php echo home_url(); ?>/recruit/data/" class="btn_black arrow"><span>Detail</span></a>
          </li>
          <li>
            <div class="data_tag">QUESTION</div>
            <div class="data_q">先輩に聞いた50の質問</div>
            <div class="data_tit">先輩社員を<br />解体してみた</div>
            <a href="<?php echo home_url(); ?>/recruit/question/" class="btn_black arrow"><span>Detail</span></a>
          </li>
          <li>
            <div class="data_tag">CULTURE</div>
            <div class="data_q">人がロードカーの商品です</div>
            <div class="data_tit">環境／<br />福利厚生</div>
            <a href="<?php echo home_url(); ?>/recruit/culture/" class="btn_black arrow"><span>Detail</span></a>
          </li>
        </ul>
      </div>
    </section>


    <!-- ストーリー -->
    <section>
      <div class="top_content_wrap story">
        <div class="top_content_tit">
          <h3 class="js-scroll"><span class="motion-txt"><span class="motion-inner"><span class="sub">ストーリー</span>STORY</span></span></h3>
        </div>
      </div>

      <div class="story_catch">
        <div class="story_catch1">
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/recruit/story_ugokasu.png" alt="ロードカーを動かす">
        </div>
        <div class="story_catch2">
          <div class="story_catch2_l">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/recruit/story_mystory.png" alt="My Story">
          </div>
          <div class="story_catch2_r">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/recruit/story_with.png" alt="with ROAD CAR">
          </div>
        </div>
      </div>

      <ul class="slider">
        <!--li><a href="<?php echo home_url(); ?>/recruit/work/upos_01/"><img src="<?php bloginfo('template_directory'); ?>/assets/images/recruit/story_b_pc.png" alt="西村知浩" class="change"></a></li-->
        <li><a href="<?php echo home_url(); ?>/recruit/work/upos_02/"><img src="<?php bloginfo('template_directory'); ?>/assets/images/recruit/story_c_pc.png" alt="伊藤新" class="change"></a></li>
        <li><a href="<?php echo home_url(); ?>/recruit/work/volvo/"><img src="<?php bloginfo('template_directory'); ?>/assets/images/recruit/story_a_pc.png" alt="菊地桃子" class="change"></a></li>
      </ul>

    </section>


    <!-- RECRUITMENT -->
    <section>
      <div class="top_content_wrap rec">
        <div class="top_content_tit">
          <h3 class="js-scroll"><span class="motion-txt"><span class="motion-inner"><span class="sub">募集職種</span>RECRUIT<br />MENT</span></span></h3>
        </div>

        <ul class="category_wrap">

          <li class="category_one">
              <div class="rec_category">
                <span class="volvo">VOLVO</span>
              </div>
              <div class="rec_topic">
                <a href="<?php echo home_url(); ?>/recruit/recruit/offers/?genre=1">
                  <div class="rec_list_tit">ボルボ事業｜<br />営業</div>
                </a>
              </div>
          </li>

          <li class="category_one">
              <div class="rec_category">
                <span class="upohs">U-POHS</span>
              </div>
              <div class="rec_topic">
                <a href="<?php echo home_url(); ?>/recruit/recruit/offers?genre=2">
                  <div class="rec_list_tit">ユーポス事業｜<br />営業</div>
                </a>
              </div>
          </li>

          <li class="category_one">
              <div class="rec_category">
                <span class="volvo">VOLVO</span>
                <span class="upohs">U-POHS</span>
              </div>
              <div class="rec_topic">
                <a href="<?php echo home_url(); ?>/recruit/recruit/offers?genre=3">
                  <div class="rec_list_tit">ボルボ・ユーポス<br />事業｜事務</div>
                </a>
              </div>
          </li>

          <li class="category_one">
              <div class="rec_category">
                <span class="volvo">VOLVO</span>
              </div>
              <div class="rec_topic">
                <a href="<?php echo home_url(); ?>/recruit/recruit/offers?genre=4">
                  <div class="rec_list_tit">ボルボ事業｜<br />メカニック</div>
                </a>
              </div>
          </li>

        </ul>

      </div>
    </section>



    <!-- ENTRY -->
    <section>
      <div class="entry_area">
        <div class="entry_area_catch">
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/recruit/entry_kimimo.png" alt="君もロードカーを動かしてみないか？">
        </div>
        <div class="entry_area_btn_wrap">
          <div class="entry_area_btn">
            <a href="<?php echo home_url(); ?>/recruit/entry_form/" class="btn_orange arrow"><span>ENTRY<p>エントリー</p></span></a>
          </div>
        </div>
      </div>
    </section>



  <!-- 斜めのラインの装飾ここで終わり -->
  </div>
</div>

<!--お問い合わせ-->
<?php get_template_part('parts_footer'); ?>
<?php get_footer(); ?>