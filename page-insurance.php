<?php get_header(); ?>
<!-- for Meta -->
<meta name="description" content='ロードカーでは保険代理店としても事業を展開しています。人生にも「安全」を乗せて走っていただくため、車両保険はもちろんペット保険やゴルフ保険など、さまざまな保険を取り扱っています。'>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/common.css">
<!-- for Page -->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/second.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/insurance.css">
</head>

<body>
<?php get_template_part('parts_header'); ?>

<div id="main" class="timeline">

  <!--パンくず-->
  <div class="brunch">
    <ul>
      <li><a href="<?php echo home_url(); ?>">TOP</a></li>
      <li>INSURANCE</li>
    </ul>
  </div>

  <!--タイトル、下層リンクのエリア-->
  <div class="tit_wrap">
    <!--ページタイトル-->
    <div class="page_tit">
      <h1><span>保険代理店事業</span>INSURANCE</h1>
    </div>
    <!--下層リンク-->
    <div class="sublink_wrap">
      <ul>
        <li>
          <a href="<?php echo home_url(); ?>/volvo/">VOLVO<span>ボルボ・ディーラー事業</span></a>
        </li>
        <li>
          <a href="<?php echo home_url(); ?>/upohs/">U-POHS<span>ユーポス事業</span></a>
        </li>
        <li class="insurance">
          INSURANCE<span>保険代理店事業</span>
        </li>
        <li>
          <a href="<?php echo home_url(); ?>/marvelous/">MARVELOUS<span>高級輸入車販売事業</span></a>
        </li>
      </ul>
    </div>
  </div>


  <!--ページキャッチ-->
  <div class="page_catch">
    <p>人生にも「安全」を<br />乗せよう</p>
    <span>お客様の安心・安全な暮らしを支えるため、<br />ロードカーでは様々な保険を取り扱っています。</span>
  </div>


  <!--コンテンツエリア-->

  <div class="insu_content_area">
    <ul>
      <li>
        <div class="insu_thum"><img src="<?php bloginfo('template_directory'); ?>/assets/images/insurance/insu_thum1.png" alt="三井住友海上の1DAY保険"></div>
        <div class="insu_text">
          <h2 class="insu_tit"><span>移動の保険</span>損保ジャパンの<br />UGOKU</h2>
          <div class="insu_message">月額980円で、ご家族全員の他人への賠償や交通乗用具搭乗中のケガなど、日常生活にかかわるリスクを幅広く補償します。</div>
        </div>
        <a href="https://idohoken.sompo-japan.co.jp/subscription/top_description?agent_cd=K7836000&qrcode_route_flg=0" class="btn_black check" target="_blank" rel="noopener"><span>Check</span></a>
      </li>
      <li>
        <div class="insu_thum"><img src="<?php bloginfo('template_directory'); ?>/assets/images/insurance/insu_thum2.png" alt="東京海上のちょいのり保険"></div>
        <div class="insu_text">
          <h2 class="insu_tit"><span>車を借りるときの自動車保険</span>損保ジャパンの<br />乗るピタ</h2>
          <div class="insu_message">家族や友達に車を借りるとき、12時間から入れる自動車保険です。万が一、事故にあっても修理費用や代車費用を補償します。</div>
        </div>
        <a href="https://agency-linkservice.sompo-japan.co.jp/AgencyCheck?agentno=0000113406&servicecd=06&serviceno=01" class="btn_black check" target="_blank" rel="noopener"><span>Check</span></a>
      </li>
      <li>
        <div class="insu_thum"><img src="<?php bloginfo('template_directory'); ?>/assets/images/insurance/insu_thum3.png" alt="東京海上のeゴルファー保険"></div>
        <div class="insu_text">
          <h2 class="insu_tit"><span>インターネットでの契約がお得</span>損保ジャパンの<br />海外旅行保険</h2>
          <div class="insu_message">お客さまご自身が病気になった場合だけでなく、持ち物が盗まれた場合、誤って物を壊してしまった場合、飛行機が遅れた場合等、幅広い補償をご用意しています。</div>
        </div>
        <a href="https://agency-linkservice.sompo-japan.co.jp/AgencyCheck?agentno=0000113406&servicecd=01&serviceno=01" class="btn_black check" target="_blank" rel="noopener"><span>Check</span></a>
      </li>
      <li>
        <div class="insu_thum"><img src="<?php bloginfo('template_directory'); ?>/assets/images/insurance/insu_thum4.png" alt="東京海上のeサイクル保険"></div>
        <div class="insu_text">
          <h2 class="insu_tit"><span>24時間単位で加入できる自動車保険</span>東京海上の<br />ちょい乗り</h2>
          <div class="insu_message">4時間800円からの1日自動車保険。スマートフォンからでいつでも簡単にお申込みいただけます。</div>
        </div>
        <a href="<?php echo home_url(); ?>/tyoinori/" class="btn_black check" target="_blank" rel="noopener"><span>Check</span></a>
      </li>
      <li>
        <div class="insu_thum"><img src="<?php bloginfo('template_directory'); ?>/assets/images/insurance/insu_thum5.png" alt="アニコム損保の0動物健保"></div>
        <div class="insu_text">
          <h2 class="insu_tit"><span>あなたの保険をまとめて管理</span>東京海上の<br />マイページ</h2>
          <div class="insu_message">ご契約内容や住所内容もお好きなタイミングでアプリから手続きができます。自動車事故や台風で被災したときの連絡やご家族に契約情報の共有もできます。</div>
        </div>
        <a href="https://www.tokiomarine-nichido.co.jp/app/" class="btn_black check" target="_blank" rel="noopener"><span>Check</span></a>
      </li>
      <li>
        <div class="insu_thum"><img src="<?php bloginfo('template_directory'); ?>/assets/images/insurance/insu_thum6.png" alt="東京海上の1DAYレジャー保険"></div>
        <div class="insu_text">
          <h2 class="insu_tit"><span>ドライブレコーダー付き自動車保険</span>東京海上の<br />DAP</h2>
          <div class="insu_message">ドライブエージェント パーソナル(DAP)は東京海上日動が貸与する通信機能付きオリジナルドライブレコーダーを活用したテレマティクスサービスです。</div>
        </div>
        <a href="https://www.tokiomarine-nichido.co.jp/service/auto/total-assist/shohin/dap.html?utm_source=youtube&utm_medium=movie1&utm_campaign=2017dap" class="btn_black check" target="_blank" rel="noopener"><span>Check</span></a>
      </li>

      <li>
        <div class="insu_thum"><img src="<?php bloginfo('template_directory'); ?>/assets/images/insurance/insu_thum7.png" alt="東京海上の1DAYレジャー保険"></div>
        <div class="insu_text">
          <h2 class="insu_tit"><span>レジャーのときの「もしも」に備える</span>三井住友海上の<br />1DAYレジャー保険</h2>
          <div class="insu_message">保険期間は24時間・保険料は1日500円から。みんなでまとめて加入できる、「みんなまとめて安心プラン」も用意されています。</div>
        </div>
        <a href="<?php echo home_url(); ?>/1dayleisure.html" class="btn_black check" target="_blank" rel="noopener"><span>Check</span></a>
      </li>
      <li>
        <div class="insu_thum"><img src="<?php bloginfo('template_directory'); ?>/assets/images/insurance/insu_thum8.png" alt="東京海上の1DAYレジャー保険"></div>
        <div class="insu_text">
          <h2 class="insu_tit"><span>車を借りるときの自動車保険</span>三井住友海上の<br />1DAY保険</h2>
          <div class="insu_message">両親や友人の車を借りて移動することがある方におすすめの保険。事故を起こしてしまっても、自分の保険で対応できるので安心です。</div>
        </div>
        <a href="<?php echo home_url(); ?>/1day.html" class="btn_black check" target="_blank" rel="noopener"><span>Check</span></a>
      </li>
      <li>
        <div class="insu_thum"><img src="<?php bloginfo('template_directory'); ?>/assets/images/insurance/insu_thum9.png" alt="東京海上の1DAYレジャー保険"></div>
        <div class="insu_text">
          <h2 class="insu_tit"><span>ペット保険シェアNo.1</span>アニコム損保の<br />どうぶつ健保</h2>
          <div class="insu_message">これからのペット保険に必要なのは、ケガや病気といった「万が一」だけでなく、健やかな「毎日」のサポート。</div>
        </div>
        <a href="https://www.anicom-sompo.co.jp/family/?aid=CPPR18670000" class="btn_black check" target="_blank" rel="noopener"><span>Check</span></a>
      </li>
    </ul>
  </div>

  <span class="border-line"></span>

</div>


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
