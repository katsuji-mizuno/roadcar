<?php get_header(); ?>
<!-- for Meta -->
<meta name="description" content='データでみるロードカーのページです。社員数や有給取得率など「ロードカーってどういう会社？」が気になる方はぜひご覧ください。'>
<meta name="keywords" content="採用,大阪,VOLVO,ユーポス,流通,車,カー">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/common.css">
<!-- for Page -->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/second.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/data.css">
</head>

<body>
<?php get_template_part('parts_header'); ?>

<div id="main" class="timeline rec">

  <!--パンくず-->
  <div class="brunch rec">
    <ul>
      <li><a href="<?php echo home_url(); ?>/recruit/">採用TOP</a></li>
      <li>DATA</li>
    </ul>
  </div>

  <!--タイトル、下層リンクのエリア-->
  <div class="tit_wrap rec">
    <!--ページタイトル-->
    <div class="page_tit">
      <h1><span>ロードカーがよく分かるデータ</span>DATA</h1>
    </div>

    <!--下層リンク-->
    <div class="sublink_wrap rec">
      <ul>
        <li>
          DATA<span>ロードカーがよく分かるデータ</span>
        </li>
        <li>
          <a href="<?php echo home_url(); ?>/recruit/question/">QUESTION<span>先輩社員を解体してみた</span></a>
        </li>
        <li>
          <a href="<?php echo home_url(); ?>/recruit/culture/">CULTURE<span>環境／福利厚生</span></a>
        </li>
        <li>
          <a href="<?php echo home_url(); ?>/recruit/work/volvo/">STORY 01<span>ストーリー</span></a>
        </li>
        <!--li>
          <a href="<?php echo home_url(); ?>/recruit/work/upos_01/">STORY 02<span>ストーリー</span></a>
        </li-->
        <li>
          <a href="<?php echo home_url(); ?>/recruit/work/upos_02/">STORY 02<span>ストーリー</span></a>
        </li>
      </ul>
    </div>
  </div>

  <!--コンテンツエリア-->
  <div class="content">

    <!--データ  １３項目-->
    <div class="data_list">
      <ul>
        <li>
          <h2>ロードカーの成長率</h2>
          <div class="data_list_img">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/data/data_list_1.png" alt="120%">
          </div>
          <p>コロナ禍でも前年の売上を上回りました</p>
        </li>
        <li>
          <h2>全社員数</h2>
          <div class="data_list_img">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/data/data_list_2.png" alt="254人">
          </div>
          <p>社員満足の向上に<br />一層努めてまいります</p>
        </li>
        <li>
          <h2>職種比率</h2>
          <div class="data_list_img">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/data/data_list_3.png" alt="職種比率">
          </div>
          <p>お客様と接する職種がほとんど</p>
        </li>
        <li>
          <h2>各部門の人数</h2>
          <div class="data_list_img">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/data/data_list_4.png" alt="各部門の人数">
          </div>
          <p>今後は新規事業も開拓していく予定です</p>
        </li>
        <li>
          <h2>男女比</h2>
          <div class="data_list_img">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/data/data_list_5.png" alt="男女比">
          </div>
          <p>業界柄、男性がまだ多いですが、<br />女性でも働きやすい環境を整えています</p>
        </li>
        <li>
          <h2>育休・産休の取得率</h2>
          <div class="data_list_img">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/data/data_list_6.png" alt="100%">
          </div>
          <p>過去5年間の取得率は100%<br />子育てとの両立を応援！</p>
        </li>
        <li>
          <h2>年齢分布</h2>
          <div class="data_list_img">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/data/data_list_7.png" alt="年齢分布%">
          </div>
          <p>幅広い年齢層の方と一緒に働ける環境</p>
        </li>
        <li>
          <h2>年間休日</h2>
          <div class="data_list_img">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/data/data_list_8.png" alt="110日">
          </div>
          <p>オン・オフの切り替えを大切にする社風</p>
        </li>
        <li>
          <h2>平均残業時間</h2>
          <div class="data_list_img">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/data/data_list_9.png" alt="15.5時間">
          </div>
          <p>遅くても8時30分の退社を推奨しています</p>
        </li>
        <li>
          <h2>平均年収</h2>
          <div class="data_list_img">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/data/data_list_10.png" alt="520万円">
          </div>
          <p>勤務年数や年齢だけではなく、実力も正当に評価</p>
        </li>
        <li>
          <h2>離職率</h2>
          <div class="data_list_img">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/data/data_list_11.png" alt="10%">
          </div>
          <p>現場環境の改善に努め、全員がイキイキと働ける環境を目指します</p>
        </li>
        <li>
          <h2>年間取扱い自動車数</h2>
          <div class="data_list_img">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/data/data_list_12.png" alt="10,087台">
          </div>
          <p>買取台数は7802台／販売台数：2285台</p>
        </li>
        <li>
          <h2>拠点数</h2>
          <div class="data_list_img">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/data/data_list_13.png" alt="22拠点">
          </div>
          <p>関西を中心にボルボ事業部6拠点・ユーポス事業部16拠点を展開</p>
        </li>
      </ul>
    </div>

  </div>
  <span class="border-line"></span>

</div>


<!-- ENTRY -->
<section>
  <div class="entry_area">
    <div class="entry_area_catch">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/data/entry_kimida_pc.png" class="change" alt="世界を動かすエンジンは、キミだ">
    </div>

    <div class="entry_area_btn_wrap">
      <div class="entry_area_btn">
        <a href="<?php echo home_url(); ?>/recruit/offers" class="btn_green arrow"><span>RECRUITMENT<p>募集要項を見る</p></span></a>
      </div>
      <div class="entry_area_btn">
        <a href="<?php echo home_url(); ?>/recruit/entry_form/" class="btn_orange arrow"><span>ENTRY<p>エントリー</p></span></a>
      </div>
    </div>

  </div>
</section>



    <!--下層リンク-->
  <div class="sublink_foot">

    <div class="sublink_wrap foot">
      <ul>
        <li>
          DATA<span>ロードカーがよく分かるデータ</span>
        </li>
        <li>
          <a href="<?php echo home_url(); ?>/recruit/question/">QUESTION<span>先輩社員を解体してみた</span></a>
        </li>
        <li>
          <a href="<?php echo home_url(); ?>/recruit/culture/">CULTURE<span>環境／福利厚生</span></a>
        </li>
        <li>
          <a href="<?php echo home_url(); ?>/recruit/work/volvo/">STORY 01<span>ストーリー</span></a>
        </li>
        <li>
          <a href="<?php echo home_url(); ?>/recruit/work/upos_01/">STORY 02<span>ストーリー</span></a>
        </li>
        <li>
          <a href="<?php echo home_url(); ?>/recruit/work/upos_02/">STORY 03<span>ストーリー</span></a>
        </li>
      </ul>
    </div>
  </div>


<?php get_template_part('parts_footer'); ?>
<?php get_footer(); ?>
