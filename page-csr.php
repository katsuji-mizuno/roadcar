<?php get_header(); ?>
<!-- for Meta -->
<meta name="description" content='CSRをご紹介しています。VOLVO・ユーポスなど、大阪で一大流通マーケットを担うロードカー。創業50周年を迎えた今、高い顧客満足度と社会貢献を目指し、さらに信頼される企業を目指します。'>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/common.css">
<!-- for Page -->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/second.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/csr.css">
</head>

<body>
<?php get_template_part('parts_header'); ?>

<div id="main" class="page_csr timeline">

  <!--パンくず-->
  <div class="brunch">
    <ul>
      <li><a href="<?php echo home_url(); ?>">TOP</a></li>
      <li>CSR</li>
    </ul>
  </div>

  <!--タイトル、下層リンクのエリア-->
  <div class="tit_wrap">
    <!--ページタイトル-->
    <div class="page_tit">
      <h1><span>CSRについて</span>CSR</h1>
    </div>

    <!--下層リンク-->
    <div class="sublink_wrap">
      <ul>
        <li>
          <a href="<?php echo home_url(); ?>/about/">ABOUT<span>わたしたちの考え方</span></a>
        </li>
        <li>
          <a href="<?php echo home_url(); ?>/about/company/">COMPANY<span>企業情報</span></a>
        </li>
        <li class="csr">
          CSR<span>CSRについて</span>
        </li>
      </ul>
    </div>
  </div>


  <!-- ページ導入部分 -->
  <div class="intro_content_area">
    <ul>
      <li class="img_left">
        <div class="thum"><img src="<?php bloginfo('template_directory'); ?>/assets/images/csr/intro_contents_1.png" alt="sample"></div>
        <div class="text">
          <h2 class="tit"><span>自動車ペイント</span></h2>
          <div class="sub">車と触れ合う機会を<br />子どもたちに</div>
          <div class="message">
            <p>子どもたちが車と触れ合える機会をつくりたい。その想いから、こども食堂を利用する子供たちを対象に、カーペイントイベントを実施。“夢や希望”をテーマに、自由にペインティングしてもらいました。</p>
          </div>
        </div>
      </li>
      <li class="img_right">
        <div class="thum"><img src="<?php bloginfo('template_directory'); ?>/assets/images/csr/intro_contents_2.png" alt="sample"></div>
        <div class="text">
          <h2 class="tit"><span>善意の箱</span></h2>
          <div class="sub">交通事故0へ<br />残された遺族も支援</div>
          <div class="message">
            <p>交通事故により、大切な家族を失ってしまった交通遺児・遺族への支援を行っています。善意の箱で集まった寄付金は公益財団法人「大阪交通災害遺族会」へと贈られます。安全な車社会実現に向け、今後も社内の取組みを強化していきます。</p>
          </div>
        </div>
      </li>
      <li class="img_left">
        <div class="thum"><img src="<?php bloginfo('template_directory'); ?>/assets/images/csr/intro_contents_3.png" alt="sample"></div>
        <div class="text">
          <h2 class="tit"><span>スポーツ支援</span></h2>
          <div class="sub">テコンドー選手 栗山廣大とともに<br class="brpc">夢を追いかけます</div>
          <div class="message">
            <p>スポーツ界の第一線で活躍する選手を育て、日本の各競技界の強化・繁栄に役立ちたい、世界に貢献したい、との想いで、スポーツの振興に取り組んでいます。ロードカーは、みなさんの“挑戦”を全力で応援します。</p>
            <a href="https://home.tsuku2.jp/storeDetail.php?scd=0000084153" target="_blank" rel="noopener" class="btn_black arrow"><span>Detail</span></a>
          </div>
        </div>
      </li>
      <li class="img_right">
        <div class="thum"><img src="<?php bloginfo('template_directory'); ?>/assets/images/csr/intro_contents_4.png" alt="sample"></div>
        <div class="text">
          <h2 class="tit"><span>ツクツク「RC+」</span></h2>
          <div class="sub">生活にプラスを届ける<br />セレクトショップの出店</div>
          <div class="message">
            <p>自動車だけではなく様々なモノを通して、暮らしを豊かに。そのおもいから、セレクトショップをオンラインで展開しています。生活にプラスαを、日常にプラスαを…。手に取って下さったみなさまが、少しでも幸せになりますように。</p>
            <a href="https://tsuku2.jp/roadcar" target="_blank" rel="noopener" class="btn_black arrow"><span>Detail</span></a>
          </div>
        </div>
      </li>
      <li class="img_left">
        <div class="thum"><img src="<?php bloginfo('template_directory'); ?>/assets/images/csr/intro_contents_5.png" alt="sample"></div>
        <div class="text">
          <h2 class="tit"><span>子どもたちへの寄付活動</span></h2>
          <div class="sub">お菓子や生活用品を<br />子どもたちに寄付</div>
          <div class="message">
            <p>子ども食堂を利用する子どもたちに、手袋やマフラーなどの防寒具・お菓子の詰め合わせなどを寄付。当社社員にも服や日用品の支援を募り、母子支援センターや児童養護施設に寄付しています。</p>
          </div>
        </div>
      </li>
      <li class="img_right">
        <div class="thum"><img src="<?php bloginfo('template_directory'); ?>/assets/images/csr/intro_contents_6.png" alt="sample"></div>
        <div class="text">
          <h2 class="tit"><span>健康経営優良法人認定</span></h2>
          <div class="sub">お客様の笑顔のために、<br>まずはスタッフの笑顔と健康を大切に</div>
          <div class="message">
            <p>「お客様から選ばれる企業・地域社会に貢献し信頼される企業を目指します」という理念を掲げるロードカー。お客様から選んでいただくには、まず社員がいきいきと働けること。それが重要だと考えています。健康診断や保険指導はもちろん、「健康経営」への取り組みを強化しています。</p>
            <a href="<?php echo home_url(); ?>/press/%e5%81%a5%e5%ba%b7%e7%b5%8c%e5%96%b6%e5%84%aa%e8%89%af%e6%b3%95%e4%ba%ba%e3%81%a8%e3%81%97%e3%81%a6%e8%aa%8d%e5%ae%9a%e3%81%95%e3%82%8c%e3%81%be%e3%81%97%e3%81%9f/" class="btn_black arrow"><span>Detail</span></a>
          </div>
        </div>
      </li>
    </ul>
  </div>
  <span class="border-line"></span>
</div>




<!--同階層のリンク-->

<div class="same_link">
  <a href="<?php echo home_url(); ?>/about/">
    <div class="same_prev">
      <p class="same_text l"><span>わたしたちの考え方</span>ABOUT</p>
    </div>
  </a>
  <a href="<?php echo home_url(); ?>/about/company/">
    <div class="same_next">
      <p class="same_text r"><span>企業情報</span>COMPANY</p>
    </div>
  </a>
</div>

<!--お問い合わせ-->
<?php get_template_part('parts_contact'); ?>


<?php get_template_part('parts_footer'); ?>
<?php get_footer(); ?>
