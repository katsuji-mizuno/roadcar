<?php get_header(); ?>
<!-- for Meta -->
<meta name="description" content='中古車買取の「ユーポス」をはじめ、車を軸に「くらしに欠かせないもの」を届ける事業を展開しています。'>
<meta name=”keywords” content="大阪,VOLVO,ユーポス,流通,車,カー">
<!-- for Page -->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/common.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/second.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/top.css">
</head>


<body>


<?php get_template_part('parts_header'); ?>
<div class="top_contents_wrap">

  <!-- トップのキャッチ -->
  <div class="top_catch">
    <div class="top_catch_bg">
      <div class="top_catch_material">
          <div class="top_catch_1">
            <div class="catch_kuruma">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/top/catch_kuruma.gif" alt="">
            </div>
            <div class="catch_car delay-time01 box fadeIn">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/top/catch_car.png" alt="">
            </div>
            <div class="catch_car2 delay-time04 box fadeIn">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/top/catch_car2.png" alt="">
            </div>
            <div class="catch_yano delay-time02 box fadeUp">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/top/catch_yano.png" alt="">
            </div>
            <div class="catch_goto delay-time03 box fadeUp">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/top/catch_next.png" alt="">
            </div>
          </div>
          <div class="top_catch_2">
            <div class="catch_kachi delay-time04 box fadeUp">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/top/catch_kachi.png" alt="">
              <div class="catch_dot delay-time04 box fadeUp">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/top/catch_dotwave_pc.gif" alt="" class="change">
              </div>
            </div>
            <div class="catch_koete delay-time05 box fadeInR">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/top/catch_koete.png" alt="">
            </div>
            <div class="catch_goto_sp delay-time05 box fadeUp">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/top/catch_next_sp.png" alt="">
            </div>
          </div>
      </div>
    </div>
  </div>

  <!-- メインビジュアル -->
  <div class="mv">
    <div class="inner_kv">
      <div class="video">
        <video src="<?php bloginfo('template_directory'); ?>/assets/movie/movie_roadcar.mp4" muted autoplay loop playsinline ></video>
      </div>
    </div>
  </div>


<!-- コンテンツエリア -->
  <div class="top_contents">

    <!-- ABOUT -->

    <section>
      <div class="top_content_wrap about">
        <div class="top_about_tit_wrap">
          <div class="top_content_tit about">
            <h3 class="js-scroll"><span class="motion-txt"><span class="motion-inner"><span class="sub">わたし達の考え方</span>ABOUT</span></span></h3>
          </div>
        </div>


        <div class="top_about_message slideContsL slideConts">
          <div class="top_about_img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/top/about_logo.png" alt="road car"></div>
          <div class="top_about_text">
            <p>1967年、ロードカーは<br />
            自動車販売からはじまった<br />
            でも、それで終わりじゃない<br />
            どこまでいけるか、やってみようじゃないか</p>
            <div class="top_about_btn">
              <a href="<?php echo home_url(); ?>/about"><div class="btn_check">Detail</div></a>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- SERVICE -->
    <section>
      <div class="top_content_wrap service">
        <div class="top_content_tit service">
          <h3 class="js-scroll"><span class="motion-txt"><span class="motion-inner"><span class="sub">サービス</span>SERVICE</span></span></h3>
          <div class="tit_car slideConts2L slideConts2">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/top/icon_car.png" alt="">
          </div>
        </div>

        <div class="top_service">
          <li class="slideContsL slideConts">
            <a href="<?php echo home_url(); ?>/volvo">
              <div class="serveice_thum"><img src="<?php bloginfo('template_directory'); ?>/assets/images/top/service1.jpg" alt="ボルボ・ディーラー事業"></div>
              <div class="serveice_text_wrap">
                <div class="serveice_text">
                  <div class="service_biz volvo">ボルボ・ディーラー事業</div>
                  <div class="service_catch volvo">安全な車社会を<br />ボルボと共に</div>
                  <div class="service_sub volvo">「ボルボ車での死亡事故0」を目標に掲げるボルボ。その正規ディーラーとして安全な車社会の実現に貢献します。</div>
                  <div class="btn_check">Detail</div>
                </div>
              </div>
            </a>
          </li>

          <li class="slideContsR slideConts">
            <a class="reverse" href="<?php echo home_url(); ?>/upohs">
              <div class="serveice_thum"><img src="<?php bloginfo('template_directory'); ?>/assets/images/top/service2.jpg" alt="ユーポス事業"></div>
              <div class="serveice_text_wrap">
                <div class="serveice_text">
                  <div class="service_biz upohs">ユーポス事業</div>
                  <div class="service_catch upohs">売って、買って<br />繋がるしあわせ</div>
                  <div class="service_sub upohs">生活の必需品である車の価値を最大化する中古車の買取・販売事業。商品にも、人にも、環境にも優しいサービスをお届けします。</div>
                  <div class="btn_check">Detail</div>
                </div>
              </div>
            </a>
          </li>

          <li class="slideContsL slideConts">
            <a href="<?php echo home_url(); ?>/insurance">
              <div class="serveice_thum"><img src="<?php bloginfo('template_directory'); ?>/assets/images/top/service3.jpg" alt="保険代理店事業"></div>
              <div class="serveice_text_wrap">
                <div class="serveice_text">
                  <div class="service_biz insurance">保険代理店事業</div>
                  <div class="service_catch insurance">安心な未来づくりは<br />今日から始められる</div>
                  <div class="service_sub insurance">車の運転には、どうしても危険がつきまといます。車両保険はもちろん、そのほかの保険もご提案させていただきます。</div>
                  <div class="btn_check">Detail</div>
                </div>
              </div>
            </a>
          </li>
        </div>

      </div>
    </section>

    <!-- CSR -->
    <section>
      <div class="top_content_wrap csr">
        <div class="top_content_tit">
          <h3 class="js-scroll"><span class="motion-txt"><span class="motion-inner"><span class="sub">CSRについて</span>CSR</span></span></h3>
        </div>

      </div>

      <div class="top_csr_wrap">

        <div class="top_csr_thum a rellax-target"
          data-rellax-speed="0"
          data-rellax-mobile-speed="0.8"
          data-rellax-tablet-speed="0.8"
          data-rellax-desktop-speed="0.8"

          data-rellax-percentage="0"
          data-rellax-zindex="2"
        >
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/top/csr1.png" alt="">
        </div>

        <div class="top_csr_thum b rellax-target"
          data-rellax-speed="0"
          data-rellax-mobile-speed="0.5"
          data-rellax-tablet-speed="0.5"
          data-rellax-desktop-speed="0.5"

          data-rellax-percentage="0"

          data-rellax-zindex="2"
        >
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/top/csr2.png" alt="">
        </div>

        <div class="top_csr">
          <div class="top_csr_text_wrap">
            <a href="<?php echo home_url(); ?>/about/csr">
              <div class="top_csr_text">
                <div class="csr_catch">クルマに乗り物<br />以上の価値を</div>
                <div class="csr_sub">車屋さんから<br />社会への恩返し</div>
                <div class="csr_message">
                  <p>車屋さんだからできること</p>
                  <p>＋αなにができるのかを考え</p>
                  <p>様々な社会的取組みを行っています。</p>
                </div>
                <div class="csr_btn">
                  <div class="btn_check">Detail</div>
                </div>
              </div>
            </a>
          </div>
        </div>

        <div class="top_csr_thum c rellax-target"
          data-rellax-speed="0"
          data-rellax-mobile-speed="-0.2"
          data-rellax-tablet-speed="-0.2"
          data-rellax-desktop-speed="-0.2"

          data-rellax-percentage="0"
          data-rellax-zindex="2"
        >
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/top/csr3.png" alt="">
        </div>

        <div class="top_csr_thum d rellax-target"
          data-rellax-speed="0"
          data-rellax-mobile-speed="-0.8"
          data-rellax-tablet-speed="-0.8"
          data-rellax-desktop-speed="-0.8"

          data-rellax-percentage="0"


          data-rellax-zindex="2"
        >
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/top/csr4.png" alt="">
        </div>


      </div>


    </section>


    <!-- NEWS -->
    <section>
      <div class="top_content_wrap news">
        <div class="top_content_tit">
          <h3 class="js-scroll"><span class="motion-txt"><span class="motion-inner"><span class="sub">ニュース</span>NEWS</span></span></h3>
        </div>

        <div class="top_news_link slideContsL slideConts">
          <!-- カテゴリー一覧 -->

          <ul class="tab">
            <li class="active">
              <a href="#tab1">ALL</a>
            </li>

            <?php
                $terms = get_terms('category');
                foreach ( $terms as $term ) {
                  echo '<li class="news_link '.$term->slug.'"><a href="#tab2">'.$term->name.'</a></li>';
                }
            ?>
          </ul>
        </div>


        <div class="tab_content slideContsR slideConts">

          <!-- 全カテゴリーを表示 -->
          <div class="tab_area" id="tab1">
            <ul class="category_wrap">
                <?php
                  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                  $args = array(
                      'post_type' => 'post', // 投稿タイプを指定
                      'posts_per_page' => 6 //取得記事件数
                  ); ?>
                  <?php $wp_query = new WP_Query( $args ); ?><!-- クエリの指定 -->
                  <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
                  <!-- ここに表示するタイトルやコンテンツなどを指定 -->

              <li class="category_one">
                  <div class="news_category">
                      <?php
                        //タームの取得
                        $terms = wp_get_object_terms($post->ID, 'category');
                        //タームを出力
                        if(!empty($terms) && !is_wp_error($terms)){
                        ?>
                          <?php foreach($terms as $term){ ?>
                          <?php } ?>
                      <?php } ?>

                      <?php
                        $terms = get_the_terms($post->ID, 'category');
                        // 複数のカスタム分類を指定する場合は配列を使用する
                        // $terms = get_the_terms($post->ID, array('カスタム分類名1','カスタム分類名2'));
                        if ( $terms ) {
                        echo '<ul>';
                        foreach ( $terms as $term ) {
                        $term_link = get_term_link( $term );
                        echo '<li class="'.$term->slug.'">
                        <a href="'.esc_url( $term_link ).'">'.$term->name.'</a></li>';
                        }
                        echo '</ul>';
                        }
                      ?>
                      <?php wp_reset_postdata(); ?><!-- 忘れずにリセットする必要がある -->
                  </div>

                  <div class="news_topic">
                    <a href="<?php the_permalink(); ?>">
                      <div class="news_date"><?php the_time('Y.m.d'); ?></div>
                      <div class="news_list_tit"><?php the_title(' '); ?></div>
                    </a>
                  </div>
              </li>
              <?php endwhile; ?>
            </ul>
          </div>


          <!-- カテゴリー毎に表示 -->

          <?php
            $categories = get_categories();
            foreach ($categories as $category) {
                $wpb_all_query = new WP_Query(
                  array(
                    'cat' => $category->cat_ID,
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => -1)
                );
          ?>
          <div class="tab_area" id="tab2">
            <ul class="category_wrap">
              <?php while ($wpb_all_query->have_posts()): $wpb_all_query->the_post();?>
              <li class="category_one">
              <div class="news_category"><?php the_category(); ?></div>
              <div class="news_topic">
                    <a href="<?php the_permalink(); ?>">
                      <div class="news_date"><?php the_time('Y.m.d'); ?></div>
                      <div class="news_list_tit"><?php the_title(' '); ?></div>
                    </a>
                  </div>
              </li>
              <?php endwhile;?>
            </ul>
          </div>
          <?php } ?>
        </div>

        <div class="news_btn">
          <a href="<?php the_permalink(); ?>/information/"><div class="btn_check">Detail</div></a>
        </div>
      </div>
    </section>


  <!-- 斜めのラインの装飾ここで終わり -->
  </div>

  <!-- リクルート -->
  <section>
    <div class="top_recruit_wrap">
      <div class="top_content_tit">
        <h3 class="js-scroll"><span class="motion-txt"><span class="motion-inner"><span class="sub">採用情報</span>RECRUIT</span></span></h3>
      </div>

      <div class="top_recruit slideContsR slideConts">
        <div class="rec_catch"><img src="<?php bloginfo('template_directory'); ?>/assets/images/top/rec_catch.png" alt=""></div>
        <div class="top_rec_thum">
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/top/rec_thum1_pc.png" alt="" class="change">
        </div>
        <div class="rec_text">お客様の喜んだ顔で<br />今日もこころ満タン <br />ロードカーはそんな集団です</div>
        <div class="rec_btn">
          <div class="btn_arr"><a href="<?php echo home_url(); ?>/recruit/">Detail</a></div>
        </div>
      </div>
    </div>

  </section>
</div>




<!--お問い合わせ-->
<?php get_template_part('parts_contact'); ?>
<?php get_template_part('parts_footer'); ?>
<?php get_footer(); ?>