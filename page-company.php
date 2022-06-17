<?php get_header(); ?>
<!-- for Meta -->
<meta name="description" content='会社概要・組織構成・沿革をご紹介しています。大阪で一大流通マーケットを担うロードカー。創業50周年を迎えた今、高い顧客満足度と社会貢献を目指し、さらに信頼される企業を目指します。'>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/common.css">
<!-- for Page -->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/second.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/company.css">
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
      <h1><span>企業情報</span>COMPANY</h1>
    </div>


    <!--下層リンク-->
    <div class="sublink_wrap">
      <ul>


        <li>
          <a href="<?php echo home_url(); ?>/about/">ABOUT<span>わたしたちの考え方</span></a>
        </li>
        <li>
        COMPANY<span>企業情報</span>
        </li>
        <li>
          <a href="<?php echo home_url(); ?>/about/csr">CSR<span>CSRについて</span></a>
        </li>
      </ul>
    </div>
  </div>


  <!--コンテンツエリア-->

  <div class="content">

    <!--Company　キャッチ-->
    <div class="com_catch">
      <p>時代やニーズは変わる<br />ロードカーも変わる</p>
      <span>時代の変化とともに、中古車売買・輸入車販売・メンテナンスと<br />
      車の流通すべてを担うまでに事業を拡大してきました。<br />
      ロードカーは新時代を見据え、さらに事業を拡大していきます。</span>
    </div>

    <!-- 会社概要 -->
    <div class="sec_tit">
      <p class="sub">会社概要</p>
      <h2>OUTLINE</h2>
    </div>

    <div class="com_outline">
      <ul>
        <li><p>会社名</p><span>株式会社　ロードカー</span></li>
        <li><p>代表取締役</p><span>柏原　隆宏</span></li>
        <li><p>所在地</p><span>大阪本社オフィス 〒550－0013 大阪市西区新町1-28-3四ツ橋グランスクエア3F</span></li>
        <li><p>電話番号</p><span>06-6534-6500</span></li>
        <li><p>創業</p><span>1967年(昭和42年)4月1日</span></li>
        <li><p>資本金</p><span>3,000万円</span></li>
        <li><p>事業内容</p><span>ボルボ正規ディーラー　自動車販売(新車・中古車)<br />
        整備・鈑金塗装・損害保険・生命保険<br />
        車買取専門店　ユーポス</span></li>
        <li><p>古物商許可</p><span>大阪府公安委員会 第622130807401号</span></li>
        <li><p>従業員数</p><span>250名</span></li>
      </ul>
    </div>


    <!-- 関連企業 -->
    <div class="sec_tit">
      <p class="sub">関連企業</p>
      <h2>RELATION CORPORATE</h2>
    </div>


    <div class="com_relate">
      <ul>
        <li>
          <h3>株式会社We Car CORE</h3>
          <p>車の売買だけでなく、<br />サブスクリプションサービスや<br />メンテナンスまで展開。</p>
          <a href="http://wecar-core.co.jp/" target="_blank" rel="noopener" class="btn_black check"><span>Detail</span></a>
        </li>

        <li>
          <h3>株式会社ユーポス</h3>
          <p> プロによる納得・確実の迅速査定。<br />車買取・中古車売却・高額査定なら<br />ユーポスにおまかせ。 </p>
          <a href="https://www.u-pohs.co.jp/" target="_blank" rel="noopener" class="btn_black check"><span>Detail</span></a>
        </li>
        <li>
          <h3>NUシステムズ株式会社</h3>
          <p>ソフトウェアやWebサービスを通して、お客様のビジネスシーンに応じた最良の解決手法を提供。</p>
          <a href="http://nu-systems.co.jp/" target="_blank" rel="noopener" class="btn_black check"><span>Detail</span></a>
        </li>
        <li>
          <h3>株式会社レイクウインド</h3>
          <p>「もっと安く、もっと良質なパーツを」<br />部品や車両の販売から<br />修理・整備までおこなう。</p>
          <a href="https://lakewind.co.jp/" target="_blank" rel="noopener" class="btn_black check"><span>Detail</span></a>
        </li>
        <li>
          <h3>株式会社ARTS</h3>
          <p>ボルボだけでなく、BMWやベンツなど輸入車・外車を専門に板金や塗装・修理をおこなう。</p>
          <a href="https://osaka.arts-japan.jp/" target="_blank" rel="noopener" class="btn_black check"><span>Detail</span></a>
        </li>
        <li>
          <h3>株式会社東京ユーポス</h3>
          <p>年間2000台超の輸入車・旧車・プレミアムカーの買取査定をおこなう。他社では査定困難な車も対応可。</p>
          <a href="https://tokyo-upohs.jp/" target="_blank" rel="noopener" class="btn_black check"><span>Detail</span></a>
        </li>
      </ul>
    </div>



    <!-- 沿革 -->
    <div class="sec_tit">
      <p class="sub">沿革</p>
      <h2>HISTORY</h2>
    </div>

    <div class="com_history">
      <ul>
        <li><p>1967年 4月</p><span>貝塚中古車センター創業</span></li>
        <li><p>1967年 11月</p><span>泉州中古車販売株式会社設立</span></li>
        <li><p>1987年 4月</p><span>株式会社ロードカーに社名変更</span></li>
        <li><p>1988年 9月</p><span>ボルボ正規ディーラー権獲得 / ボルボ・カーズ岸和田ショールーム開設</span></li>
        <li><p>1995年 3月</p><span>ユーポス1号店としてユーポス高石店開設(現在の堺浜寺店)</span></li>
        <li><p>2003年 5月</p><span>ユーポスの店舗数が10店舗に</span></li>
        <li><p>2007年 12月</p><span>ユーポス出張買取店が3店同時開設</span></li>
        <li><p>2009年 1月</p><span>三井住友海上ディーラー特級取得</span></li>
        <li><p>2009年 10月</p><span>本社業務が貝塚市から大阪市西区オフィスに移転</span></li>
        <li><p>2010年 6月</p><span>柏原隆宏社長 就任</span></li>
        <li><p>2015年 4月</p><span>ユーポスブランド20周年</span></li>
        <li><p>2015年 9月</p><span>大阪市女性活躍リーディングカンパニー認証</span></li>
        <li><p>2016年 6月</p><span>ボルボショールーム数が6店舗に</span></li>
        <li><p>2017年 4月</p><span>創立50周年</span></li>
        <li><p>2019年 8月</p><span>テコンドー選手 栗山廣大 入社</span></li>
        <li><p>2021年 4月</p><span>高級輸入車販売店マーベラスコネクション開設</span></li>
        <li><p>2022年 3月</p><span>健康経営優良法人2022 認定</span></li>
      </ul>
    </div>



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
