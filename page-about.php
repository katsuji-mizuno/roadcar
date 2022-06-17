<?php get_header(); ?>
<!-- for Meta -->
<meta name="description" content='企業理念をご紹介しています。「みんなで創る、ロードカー」を合言葉に、お客様も社員も全員が幸せになれる企業を目指します。'>
<meta name="keywords" content="企業理念,大阪,VOLVO,ユーポス,流通,車,カー">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/common.css">
<!-- for Page -->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/second.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/about.css">
</head>

<body>
<?php get_template_part('parts_header'); ?>

<div id="main" class="timeline">

  <!--パンくず-->
  <div class="brunch">
    <ul>
      <li><a href="<?php echo home_url(); ?>">TOP</a></li>
      <li>COMPANY</li>
    </ul>
  </div>

  <!--タイトル、下層リンクのエリア-->
  <div class="tit_wrap">
    <!--ページタイトル-->
    <div class="page_tit">
      <h1><span>わたしたちの考え方</span>ABOUT</h1>
    </div>


    <!--下層リンク-->
    <div class="sublink_wrap">
      <ul>
        <li>
          ABOUT<span>わたしたちの考え方</span>
        </li>
        <li>
          <a href="<?php echo home_url(); ?>/about/company/">OUTLINE<span>企業情報</span></a>
        </li>
        <li>
          <a href="<?php echo home_url(); ?>/about/csr/">CSR<span>CSRについて</span></a>
        </li>
      </ul>
    </div>
  </div>


  <!--コンテンツエリア-->

  <div class="content">

    <!-- 企業理念 -->
    <div class="sec_tit">
      <p class="sub">企業理念</p>
      <h2>Philosophy</h2>
    </div>

    <div class="about_logo"><img src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png" alt="road car"></div>

    <!--企業理念　キャッチ-->
    <div class="about_catch">
      <p>全ての企業活動の原点を『お客様満足』におき、<br />
      お客様から選ばれる企業<br />
      地域社会に貢献し信頼される企業をめざします。</p>
    </div>

    <!--企業理念  ７項目-->
    <div class="seven_words">
      <ul>
        <li>
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/about/phil_01.png" alt="流通とサービス">
          車を通じて<br >クオリティーが高く、<br />オリジナリティー溢れ<br />るサービスを提供する
        </li>
        <li>
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/about/phil_02.png" alt="企業収益">
          コスト意識と収益マイ<br />ンドに裏づけされた<br />行動、 企業風土を<br />構築する
        </li>
        <li>
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/about/phil_03.png" alt="戦略と実行">
          常に高い目標を掲げ<br />明確な戦略を共有し<br />確実に実行する
        </li>
        <li>
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/about/phil_04.png" alt="Innovation">
          常に変革を意識し、<br />多様性 ・ 新規性への<br />挑戦により<br />成長しつづける
        </li>
        <li>
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/about/phil_05.png" alt="職場環境">
          社員が互いに尊敬し<br />プライドを持ち<br />活力ある職場環境を<br />創る
        </li>
        <li>
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/about/phil_06.png" alt="社員と会社">
          社員の生活・会社の社<br />会的地位 の向上に向け<br />全員で一致協力する
        </li>
        <li>
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/about/phil_07.png" alt="人と地球">
          人と地球に優しい<br />企業活動を<br />率先垂範する
        </li>
      </ul>
    </div>


    <!-- バリュー -->
    <div class="sec_tit">
      <p class="sub">バリュー</p>
      <h2>Value</h2>
    </div>

    <!--バリュー　キャッチ-->
    <div class="about_catch">
      <p>みんなで創る、<br />ロードカー</p>
      <span>ほかの誰か、ではない。ロードカーは、私たちひとりひとりが創る。<br />
        お客様満足の追求のため、みずから考え、行動し、みずからの成長を追求する。<br />
        そんな私たちが一丸となることで、ロードカーはもっとかがやく。<br />
        私の成長こそ、ロードカーの未来。</span>
    </div>

    <!--バリュー  ７項目-->
    <div class="seven_value">
      <ul>
        <li>
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/about/value1.png" alt="私がお客様なら…？と考える。">
          <p>私がお客様なら…？<br />と考える。</p>
        </li>
        <li>
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/about/value2.png" alt="私が経営者なら…？と考える。">
          <p>私が経営者なら…？<br />と考える。</p>
        </li>
        <li>
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/about/value3.png" alt="もっとできる。もっとよくなる。">
          <p>もっとできる。<br />もっとよくなる。</p>
        </li>
        <li>
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/about/value4.png" alt="難しいから。無いから。挑む。">
          <p>難しいから。<br />無いから。挑む。</p>
        </li>
        <li>
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/about/value5.png" alt="お客様の暮らしを彩る。それが私の誇り。">
          <p>お客様の暮らしを彩る。それが私の誇り。</p>
        </li>
        <li>
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/about/value6.png" alt="今を追い、未来を育てる。">
          <p>今を追い、<br />未来を育てる。</p>
        </li>
        <li>
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/about/value7.png" alt="競い合おう。助け合おう。我々はチーム。">
          <p>競い合おう。<br />助け合おう。<br />我々はチーム。</p>
        </li>
      </ul>
    </div>




    <!-- トップメッセージ -->
    <div class="sec_tit">
      <p class="sub">トップメッセージ</p>
      <h2>MESSAGE</h2>
      <h3><span>代表取締役</span>柏原 隆宏</h3>

    </div>

    <!--トップメッセージ1-->
    <div class="top_message1">
      <div class="top_message1_img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/about/message1_pc.png" alt="トップメッセージ" class="change"></div>
      <div class="top_message1_text_wrap">
        <div class="top_message_text">
          <div class="message_tag">MESSAGE01</div>
          <h3 class="message_catch">ロードカーの新たな挑戦が、はじまる</h3>
          <div class="message_detail">1967年に貝塚市で中古車販売店として、産声を上げた当社。<span>「顧客満足」</span>この言葉と愚直に向き合い、いつの時代も<span>お客様から喜ばれるサービス提案</span>に努めてまいりました。<br />
  創業から50年以上が経った今、自動車業界では100年に1度の変革期を迎えると言われています。私たちロードカーも、理念の軸はそのままに、<span>過去やこれまでの慣習に捉われることなく、新たな取組みに挑戦し、持続的に成長可能な体質への転換</span>を進めています。</div>
        </div>
      </div>
    </div>

    <!--トップメッセージ2-->
    <div class="top_message2">
      <div class="top_message2_img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/about/message2.png" alt="トップメッセージ"></div>
      <div class="top_message2_text_wrap">
        <div class="top_message_text">
          <div class="message_tag">MESSAGE02</div>
          <h3 class="message_catch">モノづくりはしない<br />
          それでも消費者が<br />
          喜ぶことは生み出せる</h3>
          <div class="message_detail">ロードカーはモノづくりの会社ではありません。
しかし、お客様と直接やり取りをするのは私たちであり、消費者が求めていることをダイレクトに体感できるのも私たちです。
だからこそ、私が社員に求めるのは“商売人”という感覚です。<span>お客様が喜ぶことに考えを巡らせ、的確に判断できるような嗅覚と実行力</span>を磨きつづける。
目指すところは、<span>目の前の人を喜ばせるプロ集団</span>です。</div>
        </div>
      </div>
    </div>

    <!--トップメッセージ3-->
    <div class="top_message3">
      <div class="top_message3_img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/about/message3.png" alt="トップメッセージ"></div>
      <div class="top_message3_text_wrap">
        <div class="top_message_text">
          <div class="message_tag">MESSAGE03</div>
          <h3 class="message_catch">“修理工場・車屋”という言葉に収まらない価値を</h3>
          <div class="message_detail">オンライン上での流通・販促を推進する風潮は、全業界で加速しています。しかし、店舗での接客・サービスが必要ないかと言えば、そうではありません。<span>裏を返せば、オンラインの勢いに流されない、強固な店舗サービスの実現</span>が求められているのです。
強い店舗・企業をつくるためには、<span>サービス向上と企業価値の創出に一層注力し、ニーズに合わせた事業を幅広く展開</span>しなければないと考えています。
「修理工場・車屋さん」だけで終わらない、確かな存在を目指し、私たちはこれからも成長し続けます。</div>
        </div>
      </div>
    </div>

  </div>

  <span class="border-line"></span>

</div>


<!--同階層のリンク-->

<div class="same_link">
<a href="<?php echo home_url(); ?>/about/company/">
    <div class="same_prev">
      <p class="same_text l"><span>企業情報</span>COMPANY</p>
    </div>
  </a>
  <a href="<?php echo home_url(); ?>/about/csr/">
    <div class="same_next">
      <p class="same_text r"><span>CSRについて</span>CSR</p>
    </div>
  </a>
</div>

<!--お問い合わせ-->
<?php get_template_part('parts_contact'); ?>


<?php get_template_part('parts_footer'); ?>
<?php get_footer(); ?>
