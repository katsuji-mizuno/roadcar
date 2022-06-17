<?php get_header(); ?>
<!-- for Meta -->
<meta name="description" content='ロードカーからのお知らせページです。プレスリリース・採用情報・各店舗情報・企業活動など、ロードカーに関する様々な情報を発信しています。'>
<meta name=”keywords” content=”採用,大阪,VOLVO,ユーポス,流通,車,カー”>
<!-- for Page -->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/second.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/information.css">
</head>

<body class="info">
<?php get_template_part('parts_header'); ?>


<div id="main" class="news">

  <!--カテゴリーの取得-->
  <?php
    $terms = get_the_terms($post->ID, 'category');
    // 複数のカスタム分類を指定する場合は配列を使用する
    // $terms = get_the_terms($post->ID, array('カスタム分類名1','カスタム分類名2'));
    if ( $terms ) {
    foreach ( $terms as $term ) {
      $term_link = get_term_link( $term );
      }
    }
  ?>
  <!--パンくず-->
  <div class="brunch">
    <ul>
      <li><a href="<?php echo home_url(); ?>">HOME</a></li>
      <li><a href="<?php echo home_url(); ?>/information/">NEWS</a></li>
      <li><?php echo ''.$term->name.''; ?></li>

    </ul>
  </div>




  <!--タイトル、下層リンクのエリア-->
  <div class="tit_wrap">
    <div class="page_tit">
    <?php if ( is_category('press') ) : ?>

      <h1><span>プレスリリース</span>PRESS<br class="brsp"> RELEASE</h1>

      <?php elseif( is_category('staff') ) :?>
        <h1><span>スタッフ</span>STAFF</h1>
      <?php else:?>
        <h1><span>インフォメーション</span>INFO</h1>
    <?php endif; ?>
    </div>

    <!--ページタイトル-->
  </div>

  <div id="postList">
    <ul>
      <?php $paged = get_query_var('paged'); ?>
      <?php if(have_posts()): ?>
      <?php while ( have_posts() ) : the_post(); ?>
      <li>
        <a href="<?php the_permalink(); ?>">
          <div class="flex">
            <div class="post_day_cate">
              <div class="info_category"><?php echo ''.$term->name.''; ?></div>
              <div class="post_day"><?php the_time('Y.m.d'); ?></div>
            </div>
            <h3 class="title"><?php the_title(); ?></h3>
          </div>
        </a>
      </li>
      <?php endwhile; endif; ?>
    </ul>
  </div>

  <div class="exp_pager_bg">

    <!--タイトル、下層リンクのエリア-->







    <?php
        $staff = get_category_by_slug('STAFF');
        $staff_id = $staff->term_id;
        $staff_link = get_category_link($staff_id);

        $press = get_category_by_slug('PRESS');
        $press_id = $press->term_id;
        $press_link = get_category_link($press_id);

        $info = get_category_by_slug('INFO');
        $info_id = $info->term_id;
        $info_link = get_category_link($info_id);
      ?>

    <!-- カテゴリーによってボタンのリンクが変わる -->
    <div class="btn_flex">
      <?php if ( is_category('press') ) : ?>
        <div class="btn_pager prev"><a href="<?php echo esc_url($staff_link); ?>">Prev</a></div>
        <div class="btn_pager list"><a href="<?php echo home_url(); ?>/information/">News Top</a></div>
        <div class="btn_pager next"><a href="<?php echo esc_url($info_link); ?>">Next</a></div>

      <?php elseif( is_category('staff') ) :?>
        <div class="btn_pager prev"><a href="<?php echo esc_url($press_link); ?>">Prev</a></div>
        <div class="btn_pager list"><a href="<?php echo home_url(); ?>/information/">News Top</a></div>
        <div class="btn_pager next"><a href="<?php echo esc_url($info_link); ?>">Next</a></div>

      <?php else:?>
        <div class="btn_pager prev"><a href="<?php echo esc_url($press_link); ?>">Prev</a></div>
        <div class="btn_pager list"><a href="<?php echo home_url(); ?>/information/">News Top</a></div>
        <div class="btn_pager next"><a href="<?php echo esc_url($staff_link); ?>">Next</a></div>
      <?php endif; ?>
    </div>
  </div>


      <?php wp_reset_postdata(); ?>




</div>
<!--お問い合わせ-->
<?php get_template_part('parts_contact'); ?>


<?php get_template_part('parts_footer'); ?>
<?php get_footer(); ?>
