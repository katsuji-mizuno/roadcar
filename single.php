<?php get_header(); ?>
<!-- for Meta -->
<meta name="description" content='ロードカーからのお知らせページです。プレスリリース・採用情報・各店舗情報・企業活動など、ロードカーに関する様々な情報を発信しています。'>
<meta name="keywords" content="採用,大阪,VOLVO,ユーポス,流通,車,カー">
<!-- for Page -->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/second.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/information.css">
</head>

<body>
<?php get_template_part('parts_header'); ?>

<div id="main">

  <!--パンくず-->
  <div class="brunch">
    <ul>
      <li><a href="<?php echo home_url(); ?>">HOME</a></li>
      <li><a href="<?php echo home_url(); ?>/information/">NEWS</a></li>
      <li><?php the_category( ); ?></li>
      <li><?php the_title(); ?></li>
    </ul>
  </div>





  <div class="post_single">

    <div class="post_day_cate">

      <div class="info_category">
        <?php
          $terms = get_the_terms($post->ID, 'category');
          // 複数のカスタム分類を指定する場合は配列を使用する
          // $terms = get_the_terms($post->ID, array('カスタム分類名1','カスタム分類名2'));
          if ( $terms ) {
          foreach ( $terms as $term ) {
            $term_link = get_term_link( $term );
            echo ''.$term->name.'';
          }
          }
          ?>
      </div>
      <div class="post_day"><?php the_time('Y.m.d'); ?></div>

    </div>


    <div class="post_text">
        <div class="post_tit"><?php the_title(); ?></div>
        <div class="post_thum">
          <?php if (has_post_thumbnail()) : ?>                  <!-- アイキャッチあればそれを表示 -->
                <?php the_post_thumbnail('thumbnail'); ?>
          <?php else : ?>                                       <!-- アイキャッチなければデフォルト画像 -->
              <img src="<?php bloginfo('template_url'); ?>/assets/images/no_image.png"  alt="デフォルト画像" />
          <?php endif ; ?>
        </div>
        <div id="post_content"><?php the_content(); ?></div>
    </div>
  </div><!-- post_single -->


  <!-- ページャー -->

  <div class="exp_pager_bg">

      <div class="btn_flex">
        <?php if (get_previous_post()):?>
        <div class="btn_pager prev">
          <?php previous_post_link('%link', 'Prev'); ?>
        </div>
        <?php endif; ?>


        <div class="btn_pager list">
          <a href="<?php echo home_url(); ?>/information/">Back News List</a>
        </div>

        <?php if (get_next_post()):?>
          <div class="btn_pager next">
            <?php next_post_link('%link', 'Next'); ?>
          </div>
        <?php endif; ?>
      </div>
  </div>

</div>






<!--お問い合わせ-->
<?php get_template_part('parts_contact'); ?>


<?php get_template_part('parts_footer'); ?>
<?php get_footer(); ?>
