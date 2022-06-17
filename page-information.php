<?php get_header(); ?>
<!-- for Meta -->
<meta name="description" content='ロードカーからのお知らせページです。プレスリリース・採用情報・各店舗情報・企業活動など、ロードカーに関する様々な情報を発信しています。'>
<meta name="keywords" content="採用,大阪,VOLVO,ユーポス,流通,車,カー">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/common.css">
<!-- for Page -->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/second.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/information.css">
</head>

<body class="info">
<?php get_template_part('parts_header'); ?>

<div id="main" class="news timeline">

  <!--パンくず-->
  <div class="brunch">
    <ul>
      <li><a href="<?php echo home_url(); ?>">HOME</a></li>
      <li><a href="<?php echo home_url(); ?>/info/">NEWS</a></li>
    </ul>
  </div>

  <!--タイトル、下層リンクのエリア-->
  <div class="tit_wrap">
    <!--ページタイトル-->
    <div class="page_tit">
      <h1><span>ニュース</span>NEWS</h1>
    </div>

  </div>

  <!--コンテンツエリア-->

  <div class="content post_list">

    <!-- PRESS RELEASE -->
    <div class="post_content_wrap">

        <div class="sec_tit">
          <p class="sub">プレスリリース</p>
          <h2>PRESS RELEASE</h2>
        </div>

      <ul class="lt_post">
          <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'post', // 投稿タイプを指定
                'posts_per_page' => 6,// 表示するページ数
                'category_name' => 'PRESS',
                'paged' => $paged

            ); ?>
            <?php $wp_query = new WP_Query( $args ); ?><!-- クエリの指定 -->
            <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

          <li>
            <a href="<?php the_permalink(); ?>">
              <div class="post_thum">
                  <?php if (has_post_thumbnail()) : ?>                  <!-- アイキャッチあればそれを表示 -->
                        <?php the_post_thumbnail('thumbnail'); ?>
                  <?php else : ?>                                       <!-- アイキャッチなければデフォルト画像 -->
                      <img src="<?php bloginfo('template_url'); ?>/assets/images/no_image.png"  alt="デフォルト画像" />
                  <?php endif ; ?>
              </div>

              <div class="post_content">
                <div class="post_day_cate">
                  <div class="info_category">PRESS</div>
                  <div class="post_day"><?php the_time('Y.m.d'); ?></div>

                </div>
                <div class="post_text">
                  <div class="post_tit"><?php the_title(); ?></div>
                </div>
              </div>
            </a>
          </li>
          <?php $cat_link = get_category_link( 'PRESS' ); ?>

        <?php endwhile; ?>

      </ul>
      <?php
        $cat = get_category_by_slug('PRESS');
        $cat_id = $cat->term_id;
        $cat_link = get_category_link($cat_id);
      ?>
      <a href="<?php echo esc_url($cat_link); ?>" class="btn_black arrow"><span>Press Release All</span></a>
    </div>


    <!-- STAFF -->
    <div class="post_content_wrap">

        <div class="sec_tit">
          <p class="sub">スタッフ</p>
          <h2>STAFF</h2>
        </div>

      <ul class="lt_post">
          <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'post', // 投稿タイプを指定
                'posts_per_page' => 6,// 表示するページ数
                'category_name' => 'STAFF',
                'paged' => $paged

            ); ?>
            <?php $wp_query = new WP_Query( $args ); ?><!-- クエリの指定 -->
            <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

          <li>
            <a href="<?php the_permalink(); ?>">
              <div class="post_thum">
                  <?php if (has_post_thumbnail()) : ?>                  <!-- アイキャッチあればそれを表示 -->
                        <?php the_post_thumbnail('thumbnail'); ?>
                  <?php else : ?>                                       <!-- アイキャッチなければデフォルト画像 -->
                      <img src="<?php bloginfo('template_url'); ?>/assets/images/no_image.png"  alt="デフォルト画像" />
                  <?php endif ; ?>
              </div>

              <div class="post_content">
               <div class="post_day_cate">
                  <div class="info_category">STAFF</div>
                  <div class="post_day"><?php the_time('Y.m.d'); ?></div>
                </div>
                <div class="post_text">
                  <div class="post_tit"><?php the_title(); ?></div>
                </div>
              </div>
            </a>
          </li>

        <?php endwhile; ?>

      </ul>
      <?php
        $cat = get_category_by_slug('STAFF');
        $cat_id = $cat->term_id;
        $cat_link = get_category_link($cat_id);
      ?>
      <a href="<?php echo esc_url($cat_link); ?>" class="btn_black arrow"><span>Staff All</span></a>
    </div>

    <!-- INFO -->
    <div class="post_content_wrap">

      <div class="sec_tit">
        <p class="sub">インフォメーション</p>
        <h2>INFO</h2>
      </div>

      <ul class="lt_post">
        <?php
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $args = array(
              'post_type' => 'post', // 投稿タイプを指定
              'posts_per_page' => 6,// 表示するページ数
              'category_name' => 'INFO',
              'paged' => $paged

          ); ?>
          <?php $wp_query = new WP_Query( $args ); ?><!-- クエリの指定 -->
          <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

        <li>
          <a href="<?php the_permalink(); ?>">
            <div class="post_thum">
                <?php if (has_post_thumbnail()) : ?>                  <!-- アイキャッチあればそれを表示 -->
                      <?php the_post_thumbnail('thumbnail'); ?>
                <?php else : ?>                                       <!-- アイキャッチなければデフォルト画像 -->
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/no_image.png"  alt="デフォルト画像" />
                <?php endif ; ?>
            </div>

            <div class="post_content">
              <div class="post_day_cate">
                <div class="info_category">INFO</div>
                <div class="post_day"><?php the_time('Y.m.d'); ?></div>
              </div>
              <div class="post_text">
                <div class="post_tit"><?php the_title(); ?></div>
              </div>
            </div>
          </a>
        </li>

      <?php endwhile; ?>

      </ul>
      <?php
        $cat = get_category_by_slug('INFO');
        $cat_id = $cat->term_id;
        $cat_link = get_category_link($cat_id);
      ?>
      <a href="<?php echo esc_url($cat_link); ?>" class="btn_black arrow"><span>Info All</span></a>
    </div>


  </div>

  <!-- ページャー -->


  <div class="exp_pager_bg">

    <!-- <div class="exp_pager">
      <?php global $wp_rewrite;
        $paginate_base = get_pagenum_link(1);
        if (strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()) {
          $paginate_format = '';
          $paginate_base = add_query_arg('paged', '%#%');
        } else {
          $paginate_format = (substr($paginate_base, -1 ,1) == '/' ? '' : '/') .
          user_trailingslashit('page/%#%/', 'paged');;
          $paginate_base .= '%_%';
        }
        echo paginate_links( array(
          'prev_text'     => __( '&nbsp;'), // 「前へ」リンクのテキスト
          'next_text'     => __( '&nbsp;'), // 「次へ」リンクのテキスト
          'base' => $paginate_base,
          'format' => $paginate_format,
          'total' => $wp_query->max_num_pages,
          'mid_size' => 3,
          'current' => ($paged ? $paged : 1),
        ));
      ?>
    </div> -->

  </div>

  <span class="border-line"></span>




</div>


<!--お問い合わせ-->
<?php get_template_part('parts_contact'); ?>
<?php get_template_part('parts_footer'); ?>

<!-- object-fit IE対策 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/object-fit-images/3.2.4/ofi.js"></script>
<script> objectFitImages(); </script>
<?php get_footer(); ?>
