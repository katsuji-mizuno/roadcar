<div id="pageWrapper">

<div id="loader">
  <div id="loaderBg" class="loader-slide">
    <div class="load_logo"><img src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png" alt="Now Loading"></div>
  </div>
</div>

<header id="siteHead" class="delayScroll">
  <?php if ( is_front_page() ): ?>
    <h1 class="logo box">
      <a href="<?php echo home_url(); ?>/">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png" alt="ロードカー">
      </a>
    </h1>
    <?php else : ?>
    <div class="logo box">
      <a href="<?php echo home_url(); ?>/">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png" alt="ロードカー">
      </a>
    </div>
  <?php endif; ?>

  <!-- ヘッダーメニューのアコーディオン-->
  <div class="menu_accord">

      <div class="menu_accord_block">
        <input type="checkbox" id="menu_accord_bar01" />
        <div class="menu_accord_wrap">
          <label for="menu_accord_bar01">COMPANY</label>
        </div>
        <ul id="links01">
            <li>
                <div class="opened"><a href="<?php echo home_url(); ?>/about/">ABOUT</a></div>
            </li>
            <li>
                <div class="opened"><a href="<?php echo home_url(); ?>/about/company/">COMPANY</a></div>
            </li>
            <li>
                <div class="opened"><a href="<?php echo home_url(); ?>/about/csr/">CSR</a></div>
            </li>
        </ul>
      </div>

      <div class="menu_accord_block">
        <input type="checkbox" id="menu_accord_bar02" />
        <div class="menu_accord_wrap">
          <label for="menu_accord_bar02" class="yu_gothic">SERVICE</label>
        </div>
        <ul id="links02">
            <li>
                <div class="opened"><a href="<?php echo home_url(); ?>/volvo/">VOLVO</a></div>
            </li>

            <li>
                <div class="opened"><a href="<?php echo home_url(); ?>/upohs/">U-POHS</a></div>
            </li>
            <li>
                <div class="opened"><a href="<?php echo home_url(); ?>/insurance/">INSURANCE</a></div>
            </li>
            <li>
                <div class="opened"><a href="<?php echo home_url(); ?>/marvelous/">MARVELOUS</a></div>
            </li>
        </ul>
      </div>

      <div class="menu_accord_block">
        <input type="checkbox" id="menu_accord_bar03" />
        <div class="menu_accord_wrap">
          <label for="menu_accord_bar03" class="yu_gothic">RECRUIT</label>
        </div>
        <ul id="links03">
            <li>
                <div class="opened"><a href="<?php echo home_url(); ?>/recruit/">RECRUIT<a href="<?php echo home_url(); ?>/volvo/"></a></div>
            </li>
            <li>
                <div class="opened"><a href="<?php echo home_url(); ?>/recruit/data/">DATA</a></div>
            </li>
            <li>
                <div class="opened"><a href="<?php echo home_url(); ?>/recruit/question/">QUESTION</a></div>
            </li>
            <li>
                <div class="opened"><a href="<?php echo home_url(); ?>/recruit/work/volvo/">STORY</a></div>
            </li>
            <li>
                <div class="opened"><a href="<?php echo home_url(); ?>/recruit/culture/">CULTURE</a></div>
            </li>
            <li>
                <div class="opened"><a href="<?php echo home_url(); ?>/recruit/offers/">RECRUITMENT</a></div>
            </li>
            <li>
                <div class="opened"><a href="<?php echo home_url(); ?>/recruit/entry_form/">ENTRY</a></div>
            </li>
        </ul>
      </div>

      <div class="menu_single">
      <a href="<?php echo home_url(); ?>/information/">NEWS</a>
      </div>

      <div class="menu_single">
      <a href="<?php echo home_url(); ?>/contact_form/">CONTACT</a>
      </div>
  </div>




  <!-- ヘッダーのハンバーガーメニュー-->


  <div class="menu box">
    <span></span>
    <span></span>
    <span></span>
  </div>

  <!-- gNav -->
  <nav id="gNav">
    <div class="gNav_inner">

        <div class="gNav_left">
          <a href="<?php echo home_url(); ?>/">
            <div class="g_logo">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png" alt="ロードカー">
            </div>
            <div class="g_img_wrap">
              <div class="g_img">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/menu_bg.png" alt="クルマ屋の価値を超えていこう">
              </div>
            </div>
          </a>
        </div>

        <div class="gNav_right_wrap">
          <div class="gNav_right">
            <ul class="main">
              <li><a href="<?php echo home_url(); ?>/about/">ABOUT<span>わたしたちの考え方</span></a></li>
              <li><a href="<?php echo home_url(); ?>/volvo/">BUSSINESS<span>事業紹介</span></a></li>
              <li><a href="<?php echo home_url(); ?>/recruit/">RECRUIT<span>採用情報</span></a></li>
              <li><a href="<?php echo home_url(); ?>/information/">NEWS<span>ニュース</span></a></li>
              <li><a href="<?php echo home_url(); ?>/contact_form/">CONTACT<span>お問い合わせ</span></a></li>
              <li><a href="<?php echo home_url(); ?>/recruit/entry_form/">ENTRY<span>エントリー</span></a></li>
            </ul>
            <ul class="sub">
              <li><a href="<?php echo home_url(); ?>/site_map/">サイトマップ</a></li>
              <li><a href="<?php echo home_url(); ?>/sitepolicy/">サイトポリシー</a></li>
              <li><a href="<?php echo home_url(); ?>/privacy/">プライバシーポリシー</a></li>
              <li><a href="<?php echo home_url(); ?>/solicitation/">勧誘方針</a></li>
            </ul>
            <div class="gNav_sns">
              <p class="gNav_insta"><a href="https://www.instagram.com/roadcar_upohs_volvo/" target="_blank" rel="noopener">Instagram</a></p>
              <p class="gNav_tk"><a href="https://home.tsuku2.jp/storeDetail.php?scd=0000109646" target="_blank" rel="noopener"><img src="<?php bloginfo('template_directory'); ?>/assets/images/logo_tk.png" alt="ツクエク!!"></a></p>
            </div>
          </div>
        </div>


    </div>

  </nav>

</header>