<?php get_header(); ?>
<!-- for Meta -->
<meta name="description" content='ロードカー社員を徹底解剖。先輩社員に仕事のことからプイベートなことまで、根掘り葉掘り聞いてみました。'>
<meta name="keywords" content="採用,大阪,VOLVO,ユーポス,流通,車,カー">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/common.css">
<!-- for Page -->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/second.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/question.css">
</head>

<body>
<?php get_template_part('parts_header'); ?>

<div id="main" class="timeline rec">

  <!--パンくず-->
  <div class="brunch rec">
    <ul>
      <li><a href="<?php echo home_url(); ?>/recruit/">採用TOP</a></li>
      <li>QUESTION</li>
    </ul>
  </div>

  <!--タイトル、下層リンクのエリア-->
  <div class="tit_wrap rec">
    <!--ページタイトル-->
    <div class="page_tit">
      <h1><span>先輩社員を解体してみた</span>QUESTION</h1>
    </div>

    <!--下層リンク-->
    <div class="sublink_wrap rec">
      <ul>
        <li>
        <a href="<?php echo home_url(); ?>/recruit/data/">DATA<span>ロードカーがよく分かるデータ</span></a>
        </li>
        <li>
          QUESTION<span>先輩社員を解体してみた</span>
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

    <!--ページ内リンク-->
    <div class="link_in_page">
      <ul>
        <li>
          <a href="#quest_profile">プロフィール／プライベート</a>
        </li>
        <li>
          <a href="#quest_if">もしもの質問</a>
        </li>
        <li>
          <a href="#quest_company">会社について</a>
        </li>
        <li>
          <a href="#quest_work">仕事について</a>
        </li>
        <li>
          <a href="#quest_us">ロードカーに一言！</a>
        </li>
      </ul>
    </div>

    <!--プロフィール／プライベート -->

    <div id="quest_profile">
      <div class="quest_profile_tit">
        プロフィール／<br />プライベート
      </div>
      <div class="quest_list">
        <ul>
          <li>
            <h2>出身地</h2>  <!--タイトル-->
            <div class="quest_list_img">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_1.png" alt="出身地">   <!--画像-->  <!--ALT-->
            </div>
            <div class="quest_modal_wrap">
              <a class="js-modal-open1" href="">  <!--モーダルON-->
                <div class="quest_modal">
                    <div class="quest_modal_link">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn.png" alt="">
                    </div>
                </div>
              </a>
            </div>

            <div class="modal js-modal js-modal1"> <!--モーダルOFF-->
              <div class="modal__bg js-modal-close"></div>
              <div class="modal__content">
                <div class="modal__content_inner">
                  <p>出身地</p>  <!--モーダル・タイトル-->
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_1on.png" alt="出身地">  <!--モーダル・画像-->  <!--モーダル・ALT-->
                  <div class="quest_modal_close_link">
                    <a class="js-modal-close" href="">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn_close.png" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </li>

          <li>
              <h2>入社して◯年目</h2> <!--タイトル-->
              <div class="quest_list_img">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_2.png" alt="入社して◯年目">  <!--画像-->  <!--ALT-->
              </div>
              <div class="quest_modal_wrap">
                <a class="js-modal-open2" href="">
                  <div class="quest_modal">
                      <div class="quest_modal_link">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn.png" alt="">
                      </div>
                  </div>
                </a>
              </div>

              <div class="modal js-modal js-modal2">  <!--モーダルOFF-->
                <div class="modal__bg js-modal-close"></div>
                <div class="modal__content">
                  <div class="modal__content_inner">
                    <p>入社して◯年目</p> <!--モーダル・タイトル-->
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_2on.png" alt="入社して◯年目"> <!--モーダル・画像-->  <!--モーダル・ALT-->
                    <div class="quest_modal_close_link">
                      <a class="js-modal-close" href="">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn_close.png" alt="">
                      </a>
                    </div>
                </div>
              </div>
              </div>
          </li>

          <li>
            <h2>所属部署</h2> <!--タイトル-->
            <div class="quest_list_img">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_3.png" alt="所属部署"> <!--画像-->  <!--ALT-->
            </div>
            <div class="quest_modal_wrap">
              <a class="js-modal-open3" href="">
                <div class="quest_modal">
                    <div class="quest_modal_link">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn.png" alt="">
                    </div>
                </div>
              </a>
            </div>

            <div class="modal js-modal js-modal3"> <!--モーダルOFF-->
              <div class="modal__bg js-modal-close"></div>
              <div class="modal__content">
                <div class="modal__content_inner">
                  <p>所属部署</p> <!--モーダル・タイトル-->
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_3on.png" alt="所属部署"> <!--モーダル・画像-->  <!--モーダル・ALT-->
                  <div class="quest_modal_close_link">
                    <a class="js-modal-close" href="">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn_close.png" alt="">
                    </a>
                  </div>
                </div>
              </div>
              </div>
          </li>

          <li>
              <h2>休日の過ごし方</h2>   <!--タイトル-->
              <div class="quest_list_img">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_4.png" alt="休日の過ごし方">   <!--画像-->  <!--ALT-->
              </div>

              <div class="quest_modal_wrap">
                <a class="js-modal-open4" href="">   <!--モーダルON-->
                  <div class="quest_modal">
                      <div class="quest_modal_link">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn.png" alt="">
                      </div>
                  </div>
                </a>
              </div>

              <div class="modal js-modal js-modal4"> <!--モーダルOFF-->
                <div class="modal__bg js-modal-close"></div>
                <div class="modal__content">
                  <div class="modal__content_inner">
                    <p>休日の過ごし方</p>  <!--モーダル・タイトル-->
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_4on.png" alt="休日の過ごし方">   <!--モーダル・画像-->  <!--モーダル・ALT-->
                    <div class="quest_modal_close_link">
                      <a class="js-modal-close" href="">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn_close.png" alt="">
                      </a>
                    </div>
                </div>
              </div>

              </div>
          </li>

          <li>
              <h2>ストレス発散法</h2>   <!--タイトル-->
              <div class="quest_list_img">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_5.png" alt="ストレス発散法">   <!--画像-->  <!--ALT-->
              </div>

              <div class="quest_modal_wrap">
                <a class="js-modal-open5" href="">   <!--モーダルON-->
                  <div class="quest_modal">
                      <div class="quest_modal_link">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn.png" alt="">
                      </div>
                  </div>
                </a>
              </div>

              <div class="modal js-modal js-modal5"> <!--モーダルOFF-->
                <div class="modal__bg js-modal-close"></div>
                <div class="modal__content">
                  <div class="modal__content_inner">
                    <p>ストレス発散法</p>  <!--モーダル・タイトル-->
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_5on.png" alt="ストレス発散法">   <!--モーダル・画像-->  <!--モーダル・ALT-->
                    <div class="quest_modal_close_link">
                      <a class="js-modal-close" href="">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn_close.png" alt="">
                      </a>
                    </div>
                </div>
              </div>

              </div>
          </li>

          <li>
              <h2>お給料の使いみち</h2>   <!--タイトル-->
              <div class="quest_list_img">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_6.png" alt="お給料の使いみち">   <!--画像-->  <!--ALT-->
              </div>

              <div class="quest_modal_wrap">
                <a class="js-modal-open6" href="">   <!--モーダルON-->
                  <div class="quest_modal">
                      <div class="quest_modal_link">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn.png" alt="">
                      </div>
                  </div>
                </a>
              </div>

              <div class="modal js-modal js-modal6"> <!--モーダルOFF-->
                <div class="modal__bg js-modal-close"></div>
                <div class="modal__content">
                  <div class="modal__content_inner">
                    <p>お給料の使いみち</p>  <!--モーダル・タイトル-->
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_6on.png" alt="お給料の使いみち">   <!--モーダル・画像-->  <!--モーダル・ALT-->
                    <div class="quest_modal_close_link">
                      <a class="js-modal-close" href="">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn_close.png" alt="">
                      </a>
                    </div>
                </div>
              </div>

              </div>
          </li>


          <li>
              <h2>自動車免許は<br />もっていますか</h2>   <!--タイトル-->
              <div class="quest_list_img">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_7.png" alt="自動車免許はもっていますか">   <!--画像-->  <!--ALT-->
              </div>

              <div class="quest_modal_wrap">
                <a class="js-modal-open7" href="">   <!--モーダルON-->
                  <div class="quest_modal">
                      <div class="quest_modal_link">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn.png" alt="">
                      </div>
                  </div>
                </a>
              </div>

              <div class="modal js-modal js-modal7"> <!--モーダルOFF-->
                <div class="modal__bg js-modal-close"></div>
                <div class="modal__content">
                  <div class="modal__content_inner">
                    <p>自動車免許はもっていますか</p>  <!--モーダル・タイトル-->
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_7on.png" alt="自動車免許はもっていますか">   <!--モーダル・画像-->  <!--モーダル・ALT-->
                    <div class="quest_modal_close_link">
                      <a class="js-modal-close" href="">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn_close.png" alt="">
                      </a>
                    </div>
                  </div>
                </div>

              </div>
          </li>

          <li>
              <h2>新車or中古車？</h2>   <!--タイトル-->
              <div class="quest_list_img">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_8.png" alt="新車or中古車？">   <!--画像-->  <!--ALT-->
              </div>

              <div class="quest_modal_wrap">
                <a class="js-modal-open8" href="">   <!--モーダルON-->
                  <div class="quest_modal">
                      <div class="quest_modal_link">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn.png" alt="">
                      </div>
                  </div>
                </a>
              </div>

              <div class="modal js-modal js-modal8"> <!--モーダルOFF-->
                <div class="modal__bg js-modal-close"></div>
                <div class="modal__content">
                  <div class="modal__content_inner">
                    <p>新車or中古車？</p>  <!--モーダル・タイトル-->
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_8on.png" alt="新車or中古車？">   <!--モーダル・画像-->  <!--モーダル・ALT-->
                    <div class="quest_modal_close_link">
                      <a class="js-modal-close" href="">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn_close.png" alt="">
                      </a>
                    </div>
                  </div>
                </div>

              </div>
          </li>

          <li>
              <h2>3年後<br />どうなっていたい</h2>   <!--タイトル-->
              <div class="quest_list_img">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_9.png" alt="3年後どうなっていたい">   <!--画像-->  <!--ALT-->
              </div>

              <div class="quest_modal_wrap">
                <a class="js-modal-open9" href="">   <!--モーダルON-->
                  <div class="quest_modal">
                      <div class="quest_modal_link">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn.png" alt="">
                      </div>
                  </div>
                </a>
              </div>

              <div class="modal js-modal js-modal9"> <!--モーダルOFF-->
                <div class="modal__bg js-modal-close"></div>
                <div class="modal__content">
                  <div class="modal__content_inner">
                    <p>3年後どうなっていたい</p>  <!--モーダル・タイトル-->
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_9on.png" alt="3年後どうなっていたい">   <!--モーダル・画像-->  <!--モーダル・ALT-->
                    <div class="quest_modal_close_link">
                      <a class="js-modal-close" href="">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn_close.png" alt="">
                      </a>
                    </div>
                  </div>
                </div>

              </div>
          </li>
          <li>
              <h2>お酒は好き？</h2>   <!--タイトル-->
              <div class="quest_list_img">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_10.png" alt="お酒は好き？">   <!--画像-->  <!--ALT-->
              </div>

              <div class="quest_modal_wrap">
                <a class="js-modal-open10" href="">   <!--モーダルON-->
                  <div class="quest_modal">
                      <div class="quest_modal_link">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn.png" alt="">
                      </div>
                  </div>
                </a>
              </div>

              <div class="modal js-modal js-modal10"> <!--モーダルOFF-->
                <div class="modal__bg js-modal-close"></div>
                <div class="modal__content">
                  <div class="modal__content_inner">
                    <p>お酒は好き？</p>  <!--モーダル・タイトル-->
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_10on.png" alt="お酒は好き？">   <!--モーダル・画像-->  <!--モーダル・ALT-->
                    <div class="quest_modal_close_link">
                      <a class="js-modal-close" href="">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn_close.png" alt="">
                      </a>
                    </div>
                  </div>
                </div>

              </div>
          </li>
          <li>
              <h2>学生時代に力を<br />入れていたこと</h2>   <!--タイトル-->
              <div class="quest_list_img">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_11.png" alt="学生時代に力を入れていたこと">   <!--画像-->  <!--ALT-->
              </div>

              <div class="quest_modal_wrap">
                <a class="js-modal-open11" href="">   <!--モーダルON-->
                  <div class="quest_modal">
                      <div class="quest_modal_link">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn.png" alt="">
                      </div>
                  </div>
                </a>
              </div>

              <div class="modal js-modal js-modal11"> <!--モーダルOFF-->
                <div class="modal__bg js-modal-close"></div>
                <div class="modal__content">
                  <div class="modal__content_inner">
                    <p>学生時代に力を<br />入れていたこと</p>  <!--モーダル・タイトル-->
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_11on.png" alt="学生時代に力を入れていたこと">   <!--モーダル・画像-->  <!--モーダル・ALT-->
                    <div class="quest_modal_close_link">
                      <a class="js-modal-close" href="">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn_close.png" alt="">
                      </a>
                    </div>
                  </div>
                </div>

              </div>
          </li>
          <li>
            <h2>学生時代の部活</h2>   <!--タイトル-->
            <div class="quest_list_img">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_12.png" alt="学生時代の部活">   <!--画像-->  <!--ALT-->
            </div>

            <div class="quest_modal_wrap">
              <a class="js-modal-open12" href="">   <!--モーダルON-->
                <div class="quest_modal">
                    <div class="quest_modal_link">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn.png" alt="">
                    </div>
                </div>
              </a>
            </div>

            <div class="modal js-modal js-modal12"> <!--モーダルOFF-->
              <div class="modal__bg js-modal-close"></div>
              <div class="modal__content">
                <div class="modal__content_inner">
                  <p>学生時代の部活</p>  <!--モーダル・タイトル-->
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_12on.png" alt="学生時代の部活">   <!--モーダル・画像-->  <!--モーダル・ALT-->
                  <div class="quest_modal_close_link">
                    <a class="js-modal-close" href="">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn_close.png" alt="">
                    </a>
                  </div>
                </div>
              </div>

            </div>
          </li>
          <li>
            <h2>趣味</h2>   <!--タイトル-->
            <div class="quest_list_img">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_13.png" alt="趣味">   <!--画像-->  <!--ALT-->
            </div>

            <div class="quest_modal_wrap">
              <a class="js-modal-open13" href="">   <!--モーダルON-->
                <div class="quest_modal">
                    <div class="quest_modal_link">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn.png" alt="">
                    </div>
                </div>
              </a>
            </div>

            <div class="modal js-modal js-modal13"> <!--モーダルOFF-->
              <div class="modal__bg js-modal-close"></div>
              <div class="modal__content">
                <div class="modal__content_inner">
                  <p>趣味</p>  <!--モーダル・タイトル-->
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_13on.png" alt="趣味">   <!--モーダル・画像-->  <!--モーダル・ALT-->
                  <div class="quest_modal_close_link">
                    <a class="js-modal-close" href="">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn_close.png" alt="">
                    </a>
                  </div>
                </div>
              </div>

            </div>
          </li>
          <li>
            <h2>あなたは<br />どのタイプ？</h2>   <!--タイトル-->
            <div class="quest_list_img">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_14.png" alt="趣味">   <!--画像-->  <!--ALT-->
            </div>

            <div class="quest_modal_wrap">
              <a class="js-modal-open14" href="">   <!--モーダルON-->
                <div class="quest_modal">
                    <div class="quest_modal_link">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn.png" alt="">
                    </div>
                </div>
              </a>
            </div>

            <div class="modal js-modal js-modal14"> <!--モーダルOFF-->
              <div class="modal__bg js-modal-close"></div>
              <div class="modal__content">
                <div class="modal__content_inner">
                  <p>あなたはどのタイプ？</p>  <!--モーダル・タイトル-->
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_14on.png" alt="あなたはどのタイプ？">   <!--モーダル・画像-->  <!--モーダル・ALT-->
                  <div class="quest_modal_close_link">
                    <a class="js-modal-close" href="">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn_close.png" alt="">
                    </a>
                  </div>
                </div>
              </div>

            </div>
          </li>

          <li>
            <h2>プライベートは<br />充実してる？</h2>   <!--タイトル-->
            <div class="quest_list_img">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_15.png" alt="プライベートは充実してる？">   <!--画像-->  <!--ALT-->
            </div>

            <div class="quest_modal_wrap">
              <a class="js-modal-open15" href="">   <!--モーダルON-->
                <div class="quest_modal">
                    <div class="quest_modal_link">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn.png" alt="">
                    </div>
                </div>
              </a>
            </div>

            <div class="modal js-modal js-modal15"> <!--モーダルOFF-->
              <div class="modal__bg js-modal-close"></div>
              <div class="modal__content">
                <div class="modal__content_inner">
                  <p>プライベートは充実してる？</p>  <!--モーダル・タイトル-->
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_15on.png" alt="プライベートは充実してる？">   <!--モーダル・画像-->  <!--モーダル・ALT-->
                  <div class="quest_modal_close_link">
                    <a class="js-modal-close" href="">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn_close.png" alt="">
                    </a>
                  </div>
                </div>
              </div>

            </div>
          </li>




        </ul>
      </div>
    </div>

    <!--もしもの質問 -->

    <div id="quest_if">
      <div class="quest_profile_tit">
        もしもの質問
      </div>
      <div class="quest_list">
        <ul>
          <li>
            <h2>もし100万円<br />GETしたら…？</h2>   <!--タイトル-->
            <div class="quest_list_img">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_16.png" alt="もし100万円GETしたら…？">  <!--画像-->  <!--ALT-->
            </div>
            <div class="quest_modal_wrap">
              <a class="js-modal-open16" href="">  <!--モーダルON-->
                <div class="quest_modal">
                    <div class="quest_modal_link">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn.png" alt="">
                    </div>
                </div>
              </a>
            </div>

            <div class="modal js-modal js-modal16">   <!--モーダルOFF-->
              <div class="modal__bg js-modal-close"></div>
              <div class="modal__content">
                <div class="modal__content_inner">
                  <p>もし100万円<br />GETしたら…？</p>
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_16on.png" alt="もし100万円GETしたら…？">   <!--モーダル・画像-->  <!--モーダル・ALT-->
                  <div class="quest_modal_close_link">
                    <a class="js-modal-close" href="">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn_close.png" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </li>

          <li>
            <h2>もう1つ違う<br />人生があるなら？</h2>   <!--タイトル-->
            <div class="quest_list_img">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_17.png" alt="もう1つ違う人生があるなら？">  <!--画像-->  <!--ALT-->
            </div>
            <div class="quest_modal_wrap">
              <a class="js-modal-open17" href="">  <!--モーダルON-->
                <div class="quest_modal">
                    <div class="quest_modal_link">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn.png" alt="">
                    </div>
                </div>
              </a>
            </div>

            <div class="modal js-modal js-modal17">   <!--モーダルOFF-->
              <div class="modal__bg js-modal-close"></div>
              <div class="modal__content">
                <div class="modal__content_inner">
                  <p>もう1つ違う<br />人生があるなら？</p>
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_17on.png" alt="もう1つ違う人生があるなら？">   <!--モーダル・画像-->  <!--モーダル・ALT-->
                  <div class="quest_modal_close_link">
                    <a class="js-modal-close" href="">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn_close.png" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <h2>1週間お休みを<br />もらったら？</h2>   <!--タイトル-->
            <div class="quest_list_img">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_18.png" alt="1週間お休みをもらったら？">  <!--画像-->  <!--ALT-->
            </div>
            <div class="quest_modal_wrap">
              <a class="js-modal-open18" href="">  <!--モーダルON-->
                <div class="quest_modal">
                    <div class="quest_modal_link">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn.png" alt="">
                    </div>
                </div>
              </a>
            </div>

            <div class="modal js-modal js-modal18">   <!--モーダルOFF-->
              <div class="modal__bg js-modal-close"></div>
              <div class="modal__content">
                <div class="modal__content_inner">
                  <p>1週間お休みを<br />もらったら？</p>
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_18on.png" alt="1週間お休みをもらったら？">   <!--モーダル・画像-->  <!--モーダル・ALT-->
                  <div class="quest_modal_close_link">
                    <a class="js-modal-close" href="">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn_close.png" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <h2>ドライブに<br />行くならどこ？</h2>   <!--タイトル-->
            <div class="quest_list_img">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_19.png" alt="ドライブに行くならどこ？">  <!--画像-->  <!--ALT-->
            </div>
            <div class="quest_modal_wrap">
              <a class="js-modal-open19" href="">  <!--モーダルON-->
                <div class="quest_modal">
                    <div class="quest_modal_link">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn.png" alt="">
                    </div>
                </div>
              </a>
            </div>

            <div class="modal js-modal js-modal19">   <!--モーダルOFF-->
              <div class="modal__bg js-modal-close"></div>
              <div class="modal__content">
                <div class="modal__content_inner">
                  <p>ドライブに<br />行くならどこ？</p>
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_19on.png" alt="ドライブに行くならどこ？">   <!--モーダル・画像-->  <!--モーダル・ALT-->
                  <div class="quest_modal_close_link">
                    <a class="js-modal-close" href="">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn_close.png" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>

    <!--会社について -->

    <div id="quest_company">
      <div class="quest_profile_tit">
      会社について
      </div>
      <div class="quest_list">
        <ul>
          <li>
            <h2>入社の決め手</h2>   <!--タイトル-->
            <div class="quest_list_img">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_20.png" alt="入社の決め手">  <!--画像-->  <!--ALT-->
            </div>
            <div class="quest_modal_wrap">
              <a class="js-modal-open20" href="">  <!--モーダルON-->
                <div class="quest_modal">
                    <div class="quest_modal_link">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn.png" alt="">
                    </div>
                </div>
              </a>
            </div>

            <div class="modal js-modal js-modal20">   <!--モーダルOFF-->
              <div class="modal__bg js-modal-close"></div>
              <div class="modal__content">
                <div class="modal__content_inner">
                  <p>入社の決め手</p>
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_20on.png" alt="入社の決め手">   <!--モーダル・画像-->  <!--モーダル・ALT-->
                  <div class="quest_modal_close_link">
                    <a class="js-modal-close" href="">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn_close.png" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <h2>入社してギャップを<br />感じたこと</h2>   <!--タイトル-->
            <div class="quest_list_img">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_21.png" alt="入社してギャップを感じたこと">  <!--画像-->  <!--ALT-->
            </div>
            <div class="quest_modal_wrap">
              <a class="js-modal-open21" href="">  <!--モーダルON-->
                <div class="quest_modal">
                    <div class="quest_modal_link">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn.png" alt="">
                    </div>
                </div>
              </a>
            </div>

            <div class="modal js-modal js-modal21">   <!--モーダルOFF-->
              <div class="modal__bg js-modal-close"></div>
              <div class="modal__content">
                <div class="modal__content_inner">
                  <p>入社してギャップを<br />感じたこと</p>
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_21on.png" alt="入社してギャップを感じたこと">   <!--モーダル・画像-->  <!--モーダル・ALT-->
                  <div class="quest_modal_close_link">
                    <a class="js-modal-close" href="">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn_close.png" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <h2>ロードカーは<br />好き？</h2>   <!--タイトル-->
            <div class="quest_list_img">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_22.png" alt="ロードカーは好き？">  <!--画像-->  <!--ALT-->
            </div>
            <div class="quest_modal_wrap">
              <a class="js-modal-open22" href="">  <!--モーダルON-->
                <div class="quest_modal">
                    <div class="quest_modal_link">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn.png" alt="">
                    </div>
                </div>
              </a>
            </div>
            <div class="modal js-modal js-modal22">   <!--モーダルOFF-->
              <div class="modal__bg js-modal-close"></div>
              <div class="modal__content">
                <div class="modal__content_inner">
                  <p>ロードカーは<br />好き？</p>
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_22on.png" alt="ロードカーは好き？">   <!--モーダル・画像-->  <!--モーダル・ALT-->
                  <div class="quest_modal_close_link">
                    <a class="js-modal-close" href="">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn_close.png" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <h2>ロードカーの魅力</h2>   <!--タイトル-->
            <div class="quest_list_img">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_23.png" alt="ロードカーの魅力">  <!--画像-->  <!--ALT-->
            </div>
            <div class="quest_modal_wrap">
              <a class="js-modal-open23" href="">  <!--モーダルON-->
                <div class="quest_modal">
                    <div class="quest_modal_link">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn.png" alt="">
                    </div>
                </div>
              </a>
            </div>
            <div class="modal js-modal js-modal23">   <!--モーダルOFF-->
              <div class="modal__bg js-modal-close"></div>
              <div class="modal__content">
                <div class="modal__content_inner">
                  <p>ロードカーの魅力</p>
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_23on.png" alt="ロードカーの魅力">   <!--モーダル・画像-->  <!--モーダル・ALT-->
                  <div class="quest_modal_close_link">
                    <a class="js-modal-close" href="">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn_close.png" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <h2>魅力について、<br />もう少し具体的に！</h2>   <!--タイトル-->
            <div class="quest_list_img">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_24.png" alt="魅力について、もう少し具体的に！">  <!--画像-->  <!--ALT-->
            </div>
            <div class="quest_modal_wrap">
              <a class="js-modal-open24" href="">  <!--モーダルON-->
                <div class="quest_modal">
                    <div class="quest_modal_link">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn.png" alt="">
                    </div>
                </div>
              </a>
            </div>
            <div class="modal js-modal js-modal24">   <!--モーダルOFF-->
              <div class="modal__bg js-modal-close"></div>
              <div class="modal__content">
                <div class="modal__content_inner">
                  <p>魅力について、もう少し具体的に！</p>
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_24on.png" alt="魅力について、もう少し具体的に！">   <!--モーダル・画像-->  <!--モーダル・ALT-->
                  <div class="quest_modal_close_link">
                    <a class="js-modal-close" href="">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn_close.png" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <h2>ロードカーを<br />一言で表すと？</h2>   <!--タイトル-->
            <div class="quest_list_img">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_25.png" alt="ロードカーを一言で表すと？">  <!--画像-->  <!--ALT-->
            </div>
            <div class="quest_modal_wrap">
              <a class="js-modal-open25" href="">  <!--モーダルON-->
                <div class="quest_modal">
                    <div class="quest_modal_link">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn.png" alt="">
                    </div>
                </div>
              </a>
            </div>
            <div class="modal js-modal js-modal25">   <!--モーダルOFF-->
              <div class="modal__bg js-modal-close"></div>
              <div class="modal__content">
                <div class="modal__content_inner">
                  <p>ロードカーを<br />一言で表すと？</p>
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_25on.png" alt="ロードカーを一言で表すと？">   <!--モーダル・画像-->  <!--モーダル・ALT-->
                  <div class="quest_modal_close_link">
                    <a class="js-modal-close" href="">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn_close.png" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <h2>ワークライフ<br />バランスの満足度</h2>   <!--タイトル-->
            <div class="quest_list_img">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_26.png" alt="ワークライフバランスの満足度">  <!--画像-->  <!--ALT-->
            </div>
            <div class="quest_modal_wrap">
              <a class="js-modal-open26" href="">  <!--モーダルON-->
                <div class="quest_modal">
                    <div class="quest_modal_link">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn.png" alt="">
                    </div>
                </div>
              </a>
            </div>
            <div class="modal js-modal js-modal26">   <!--モーダルOFF-->
              <div class="modal__bg js-modal-close"></div>
              <div class="modal__content">
                <div class="modal__content_inner">
                  <p>ワークライフ<br />バランスの満足度</p>
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_26on.png" alt="ワークライフバランスの満足度">   <!--モーダル・画像-->  <!--モーダル・ALT-->
                  <div class="quest_modal_close_link">
                    <a class="js-modal-close" href="">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn_close.png" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <h2>待遇・福利厚生の<br />満足度</h2>   <!--タイトル-->
            <div class="quest_list_img">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_27.png" alt="待遇・福利厚生の満足度">  <!--画像-->  <!--ALT-->
            </div>
            <div class="quest_modal_wrap">
              <a class="js-modal-open27" href="">  <!--モーダルON-->
                <div class="quest_modal">
                    <div class="quest_modal_link">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn.png" alt="">
                    </div>
                </div>
              </a>
            </div>
            <div class="modal js-modal js-modal27">   <!--モーダルOFF-->
              <div class="modal__bg js-modal-close"></div>
              <div class="modal__content">
                <div class="modal__content_inner">
                  <p>待遇・福利厚生の<br />満足度</p>
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_27on.png" alt="待遇・福利厚生の満足度">   <!--モーダル・画像-->  <!--モーダル・ALT-->
                  <div class="quest_modal_close_link">
                    <a class="js-modal-close" href="">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn_close.png" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <h2>職場の雰囲気</h2>   <!--タイトル-->
            <div class="quest_list_img">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_28.png" alt="職場の雰囲気">  <!--画像-->  <!--ALT-->
            </div>
            <div class="quest_modal_wrap">
              <a class="js-modal-open28" href="">  <!--モーダルON-->
                <div class="quest_modal">
                    <div class="quest_modal_link">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn.png" alt="">
                    </div>
                </div>
              </a>
            </div>
            <div class="modal js-modal js-modal28">   <!--モーダルOFF-->
              <div class="modal__bg js-modal-close"></div>
              <div class="modal__content">
                <div class="modal__content_inner">
                  <p>職場の雰囲気</p>
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_28on.png" alt="職場の雰囲気">   <!--モーダル・画像-->  <!--モーダル・ALT-->
                  <div class="quest_modal_close_link">
                    <a class="js-modal-close" href="">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn_close.png" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <h2>ロードカーで<br />長く働きたい？</h2>   <!--タイトル-->
            <div class="quest_list_img">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_29.png" alt="ロードカーで長く働きたい？">  <!--画像-->  <!--ALT-->
            </div>
            <div class="quest_modal_wrap">
              <a class="js-modal-open29" href="">  <!--モーダルON-->
                <div class="quest_modal">
                    <div class="quest_modal_link">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn.png" alt="">
                    </div>
                </div>
              </a>
            </div>
            <div class="modal js-modal js-modal29">   <!--モーダルOFF-->
              <div class="modal__bg js-modal-close"></div>
              <div class="modal__content">
                <div class="modal__content_inner">
                  <p>ロードカーで長く働きたい？</p>
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_29on.png" alt="ロードカーで長く働きたい？">   <!--モーダル・画像-->  <!--モーダル・ALT-->
                  <div class="quest_modal_close_link">
                    <a class="js-modal-close" href="">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn_close.png" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <h2>ロードカーの<br />正直ココが変！</h2>   <!--タイトル-->
            <div class="quest_list_img">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_30.png" alt="ロードカーの正直ココが変！">  <!--画像-->  <!--ALT-->
            </div>
            <div class="quest_modal_wrap">
              <a class="js-modal-open30" href="">  <!--モーダルON-->
                <div class="quest_modal">
                    <div class="quest_modal_link">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn.png" alt="">
                    </div>
                </div>
              </a>
            </div>
            <div class="modal js-modal js-modal30">   <!--モーダルOFF-->
              <div class="modal__bg js-modal-close"></div>
              <div class="modal__content">
                <div class="modal__content_inner">
                  <p>ロードカーの正直ココが変！</p>
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_30on.png" alt="ロードカーの正直ココが変！">   <!--モーダル・画像-->  <!--モーダル・ALT-->
                  <div class="quest_modal_close_link">
                    <a class="js-modal-close" href="">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn_close.png" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <h2>有給休暇は<br />取りやすい？</h2>   <!--タイトル-->
            <div class="quest_list_img">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_31.png" alt="有給休暇は取りやすい？">  <!--画像-->  <!--ALT-->
            </div>
            <div class="quest_modal_wrap">
              <a class="js-modal-open31" href="">  <!--モーダルON-->
                <div class="quest_modal">
                    <div class="quest_modal_link">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn.png" alt="">
                    </div>
                </div>
              </a>
            </div>
            <div class="modal js-modal js-modal31">   <!--モーダルOFF-->
              <div class="modal__bg js-modal-close"></div>
              <div class="modal__content">
                <div class="modal__content_inner">
                  <p>有給休暇は<br />取りやすい？</p>
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_31on.png" alt="有給休暇は取りやすい？">   <!--モーダル・画像-->  <!--モーダル・ALT-->
                  <div class="quest_modal_close_link">
                    <a class="js-modal-close" href="">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn_close.png" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <h2>ロードカーの風土</h2>   <!--タイトル-->
            <div class="quest_list_img">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_32.png" alt="ロードカーの風土">  <!--画像-->  <!--ALT-->
            </div>
            <div class="quest_modal_wrap">
              <a class="js-modal-open32" href="">  <!--モーダルON-->
                <div class="quest_modal">
                    <div class="quest_modal_link">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn.png" alt="">
                    </div>
                </div>
              </a>
            </div>
            <div class="modal js-modal js-modal32">   <!--モーダルOFF-->
              <div class="modal__bg js-modal-close"></div>
              <div class="modal__content">
                <div class="modal__content_inner">
                  <p>ロードカーの風土</p>
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_32on.png" alt="ロードカーの風土">   <!--モーダル・画像-->  <!--モーダル・ALT-->
                  <div class="quest_modal_close_link">
                    <a class="js-modal-close" href="">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn_close.png" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <h2>有給消化率</h2>   <!--タイトル-->
            <div class="quest_list_img">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_33.png" alt="有給消化率">  <!--画像-->  <!--ALT-->
            </div>
            <div class="quest_modal_wrap">
              <a class="js-modal-open33" href="">  <!--モーダルON-->
                <div class="quest_modal">
                    <div class="quest_modal_link">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn.png" alt="">
                    </div>
                </div>
              </a>
            </div>
            <div class="modal js-modal js-modal33">   <!--モーダルOFF-->
              <div class="modal__bg js-modal-close"></div>
              <div class="modal__content">
                <div class="modal__content_inner">
                  <p>有給消化率</p>
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_33on.png" alt="有給消化率">   <!--モーダル・画像-->  <!--モーダル・ALT-->
                  <div class="quest_modal_close_link">
                    <a class="js-modal-close" href="">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn_close.png" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <h2>どんなタイプの<br />人が多い？</h2>   <!--タイトル-->
            <div class="quest_list_img">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_34.png" alt="どんなタイプの人が多い？">  <!--画像-->  <!--ALT-->
            </div>
            <div class="quest_modal_wrap">
              <a class="js-modal-open34" href="">  <!--モーダルON-->
                <div class="quest_modal">
                    <div class="quest_modal_link">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn.png" alt="">
                    </div>
                </div>
              </a>
            </div>
            <div class="modal js-modal js-modal34">   <!--モーダルOFF-->
              <div class="modal__bg js-modal-close"></div>
              <div class="modal__content">
                <div class="modal__content_inner">
                  <p>どんなタイプの<br />人が多い？</p>
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_34on.png" alt="どんなタイプの人が多い？">   <!--モーダル・画像-->  <!--モーダル・ALT-->
                  <div class="quest_modal_close_link">
                    <a class="js-modal-close" href="">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn_close.png" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>

    <!--仕事について -->

    <div id="quest_work">
      <div class="quest_profile_tit">
      仕事について
      </div>
      <div class="quest_list">
        <ul>
          <li>
            <h2>仕事のモットー</h2>   <!--タイトル-->
            <div class="quest_list_img">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_35.png" alt="仕事のモットー">  <!--画像-->  <!--ALT-->
            </div>
            <div class="quest_modal_wrap">
              <a class="js-modal-open35" href="">  <!--モーダルON-->
                <div class="quest_modal">
                    <div class="quest_modal_link">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn.png" alt="">
                    </div>
                </div>
              </a>
            </div>
            <div class="modal js-modal js-modal35">   <!--モーダルOFF-->
              <div class="modal__bg js-modal-close"></div>
              <div class="modal__content">
                <div class="modal__content_inner">
                  <p>仕事のモットー</p>
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_35on.png" alt="仕事のモットー">   <!--モーダル・画像-->  <!--モーダル・ALT-->
                  <div class="quest_modal_close_link">
                    <a class="js-modal-close" href="">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn_close.png" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <h2>仕事のスタンス</h2>   <!--タイトル-->
            <div class="quest_list_img">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_36.png" alt="仕事のスタンス">  <!--画像-->  <!--ALT-->
            </div>
            <div class="quest_modal_wrap">
              <a class="js-modal-open36" href="">  <!--モーダルON-->
                <div class="quest_modal">
                    <div class="quest_modal_link">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn.png" alt="">
                    </div>
                </div>
              </a>
            </div>
            <div class="modal js-modal js-modal36">   <!--モーダルOFF-->
              <div class="modal__bg js-modal-close"></div>
              <div class="modal__content">
                <div class="modal__content_inner">
                  <p>仕事のスタンス</p>
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_36on.png" alt="仕事のスタンス">   <!--モーダル・画像-->  <!--モーダル・ALT-->
                  <div class="quest_modal_close_link">
                    <a class="js-modal-close" href="">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn_close.png" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <h2>ズバリ、あなたにとって仕事とは？</h2>   <!--タイトル-->
            <div class="quest_list_img">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_37.png" alt="ズバリ、あなたにとって仕事とは？">  <!--画像-->  <!--ALT-->
            </div>
            <div class="quest_modal_wrap">
              <a class="js-modal-open37" href="">  <!--モーダルON-->
                <div class="quest_modal">
                    <div class="quest_modal_link">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn.png" alt="">
                    </div>
                </div>
              </a>
            </div>
            <div class="modal js-modal js-modal37">   <!--モーダルOFF-->
              <div class="modal__bg js-modal-close"></div>
              <div class="modal__content">
                <div class="modal__content_inner">
                  <p>ズバリ、あなたにとって仕事とは？</p>
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_37on.png" alt="ズバリ、あなたにとって仕事とは？">   <!--モーダル・画像-->  <!--モーダル・ALT-->
                  <div class="quest_modal_close_link">
                    <a class="js-modal-close" href="">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn_close.png" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <h2>やりがいを<br />感じる？</h2>   <!--タイトル-->
            <div class="quest_list_img">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_38.png" alt="やりがいを感じる？">  <!--画像-->  <!--ALT-->
            </div>
            <div class="quest_modal_wrap">
              <a class="js-modal-open38" href="">  <!--モーダルON-->
                <div class="quest_modal">
                    <div class="quest_modal_link">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn.png" alt="">
                    </div>
                </div>
              </a>
            </div>
            <div class="modal js-modal js-modal38">   <!--モーダルOFF-->
              <div class="modal__bg js-modal-close"></div>
              <div class="modal__content">
                <div class="modal__content_inner">
                  <p>やりがいを<br />感じる？</p>
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_38on.png" alt="やりがいを感じる？">   <!--モーダル・画像-->  <!--モーダル・ALT-->
                  <div class="quest_modal_close_link">
                    <a class="js-modal-close" href="">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn_close.png" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <h2>やりがいを<br />感じる瞬間</h2>   <!--タイトル-->
            <div class="quest_list_img">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_39.png" alt="やりがいを感じる瞬間">  <!--画像-->  <!--ALT-->
            </div>
            <div class="quest_modal_wrap">
              <a class="js-modal-open39" href="">  <!--モーダルON-->
                <div class="quest_modal">
                    <div class="quest_modal_link">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn.png" alt="">
                    </div>
                </div>
              </a>
            </div>
            <div class="modal js-modal js-modal39">   <!--モーダルOFF-->
              <div class="modal__bg js-modal-close"></div>
              <div class="modal__content">
                <div class="modal__content_inner">
                  <p>やりがいを<br />感じる瞬間</p>
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_39on.png" alt="やりがいを感じる瞬間">   <!--モーダル・画像-->  <!--モーダル・ALT-->
                  <div class="quest_modal_close_link">
                    <a class="js-modal-close" href="">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn_close.png" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <h2>ロードカーで<br />成長できたこと</h2>   <!--タイトル-->
            <div class="quest_list_img">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_40.png" alt="ロードカーで成長できたこと">  <!--画像-->  <!--ALT-->
            </div>
            <div class="quest_modal_wrap">
              <a class="js-modal-open40" href="">  <!--モーダルON-->
                <div class="quest_modal">
                    <div class="quest_modal_link">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn.png" alt="">
                    </div>
                </div>
              </a>
            </div>
            <div class="modal js-modal js-modal40">   <!--モーダルOFF-->
              <div class="modal__bg js-modal-close"></div>
              <div class="modal__content">
                <div class="modal__content_inner">
                  <p>ロードカーで<br />成長できたこと</p>
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_40on.png" alt="ロードカーで成長できたこと">   <!--モーダル・画像-->  <!--モーダル・ALT-->
                  <div class="quest_modal_close_link">
                    <a class="js-modal-close" href="">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn_close.png" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <h2>仕事の<br />モチベーション</h2>   <!--タイトル-->
            <div class="quest_list_img">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_41.png" alt="仕事のモチベーション">  <!--画像-->  <!--ALT-->
            </div>
            <div class="quest_modal_wrap">
              <a class="js-modal-open41" href="">  <!--モーダルON-->
                <div class="quest_modal">
                    <div class="quest_modal_link">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn.png" alt="">
                    </div>
                </div>
              </a>
            </div>
            <div class="modal js-modal js-modal41">   <!--モーダルOFF-->
              <div class="modal__bg js-modal-close"></div>
              <div class="modal__content">
                <div class="modal__content_inner">
                  <p>仕事の<br />モチベーション</p>
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_41on.png" alt="仕事のモチベーション">   <!--モーダル・画像-->  <!--モーダル・ALT-->
                  <div class="quest_modal_close_link">
                    <a class="js-modal-close" href="">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn_close.png" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <h2>上司・先輩を<br />一言で表すと</h2>   <!--タイトル-->
            <div class="quest_list_img">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_42.png" alt="上司・先輩を一言で表すと">  <!--画像-->  <!--ALT-->
            </div>
            <div class="quest_modal_wrap">
              <a class="js-modal-open42" href="">  <!--モーダルON-->
                <div class="quest_modal">
                    <div class="quest_modal_link">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn.png" alt="">
                    </div>
                </div>
              </a>
            </div>
            <div class="modal js-modal js-modal42">   <!--モーダルOFF-->
              <div class="modal__bg js-modal-close"></div>
              <div class="modal__content">
                <div class="modal__content_inner">
                  <p>上司・先輩を<br />一言で表すと</p>
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_42on.png" alt="上司・先輩を一言で表すと">   <!--モーダル・画像-->  <!--モーダル・ALT-->
                  <div class="quest_modal_close_link">
                    <a class="js-modal-close" href="">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn_close.png" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <h2>後輩に<br />求めることは？</h2>   <!--タイトル-->
            <div class="quest_list_img">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_43.png" alt="後輩に求めることは？">  <!--画像-->  <!--ALT-->
            </div>
            <div class="quest_modal_wrap">
              <a class="js-modal-open43" href="">  <!--モーダルON-->
                <div class="quest_modal">
                    <div class="quest_modal_link">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn.png" alt="">
                    </div>
                </div>
              </a>
            </div>
            <div class="modal js-modal js-modal43">   <!--モーダルOFF-->
              <div class="modal__bg js-modal-close"></div>
              <div class="modal__content">
                <div class="modal__content_inner">
                  <p>後輩に<br />求めることは？</p>
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_43on.png" alt="後輩に求めることは？">   <!--モーダル・画像-->  <!--モーダル・ALT-->
                  <div class="quest_modal_close_link">
                    <a class="js-modal-close" href="">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn_close.png" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <h2>仕事で<br />嬉しい瞬間</h2>   <!--タイトル-->
            <div class="quest_list_img">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_44.png" alt="仕事で嬉しい瞬間">  <!--画像-->  <!--ALT-->
            </div>
            <div class="quest_modal_wrap">
              <a class="js-modal-open44" href="">  <!--モーダルON-->
                <div class="quest_modal">
                    <div class="quest_modal_link">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn.png" alt="">
                    </div>
                </div>
              </a>
            </div>
            <div class="modal js-modal js-modal44">   <!--モーダルOFF-->
              <div class="modal__bg js-modal-close"></div>
              <div class="modal__content">
                <div class="modal__content_inner">
                  <p>仕事で<br />嬉しい瞬間</p>
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_44on.png" alt="仕事で嬉しい瞬間">   <!--モーダル・画像-->  <!--モーダル・ALT-->
                  <div class="quest_modal_close_link">
                    <a class="js-modal-close" href="">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn_close.png" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <h2>仕事で<br />辛かったこと</h2>   <!--タイトル-->
            <div class="quest_list_img">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_45.png" alt="仕事で辛かったこと">  <!--画像-->  <!--ALT-->
            </div>
            <div class="quest_modal_wrap">
              <a class="js-modal-open45" href="">  <!--モーダルON-->
                <div class="quest_modal">
                    <div class="quest_modal_link">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn.png" alt="">
                    </div>
                </div>
              </a>
            </div>
            <div class="modal js-modal js-modal45">   <!--モーダルOFF-->
              <div class="modal__bg js-modal-close"></div>
              <div class="modal__content">
                <div class="modal__content_inner">
                  <p>仕事で<br />辛かったこと</p>
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_45on.png" alt="仕事で辛かったこと">   <!--モーダル・画像-->  <!--モーダル・ALT-->
                  <div class="quest_modal_close_link">
                    <a class="js-modal-close" href="">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn_close.png" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <h2>仕事と私生活<br />どちらが大切</h2>   <!--タイトル-->
            <div class="quest_list_img">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_46.png" alt="仕事と私生活どちらが大切">  <!--画像-->  <!--ALT-->
            </div>
            <div class="quest_modal_wrap">
              <a class="js-modal-open46" href="">  <!--モーダルON-->
                <div class="quest_modal">
                    <div class="quest_modal_link">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn.png" alt="">
                    </div>
                </div>
              </a>
            </div>
            <div class="modal js-modal js-modal46">   <!--モーダルOFF-->
              <div class="modal__bg js-modal-close"></div>
              <div class="modal__content">
                <div class="modal__content_inner">
                  <p>仕事と私生活<br />どちらが大切</p>
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_46on.png" alt="仕事と私生活どちらが大切">   <!--モーダル・画像-->  <!--モーダル・ALT-->
                  <div class="quest_modal_close_link">
                    <a class="js-modal-close" href="">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn_close.png" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <h2>会社勤めで<br />大変なこと</h2>   <!--タイトル-->
            <div class="quest_list_img">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_47.png" alt="会社勤めで大変なこと">  <!--画像-->  <!--ALT-->
            </div>
            <div class="quest_modal_wrap">
              <a class="js-modal-open47" href="">  <!--モーダルON-->
                <div class="quest_modal">
                    <div class="quest_modal_link">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn.png" alt="">
                    </div>
                </div>
              </a>
            </div>
            <div class="modal js-modal js-modal47">   <!--モーダルOFF-->
              <div class="modal__bg js-modal-close"></div>
              <div class="modal__content">
                <div class="modal__content_inner">
                  <p>会社勤めで<br />大変なこと</p>
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_47on.png" alt="仕事と私生活どちらが大切">   <!--モーダル・画像-->  <!--モーダル・ALT-->
                  <div class="quest_modal_close_link">
                    <a class="js-modal-close" href="">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn_close.png" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <h2>挑戦したいこと</h2>   <!--タイトル-->
            <div class="quest_list_img">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_48.png" alt="挑戦したいこと">  <!--画像-->  <!--ALT-->
            </div>
            <div class="quest_modal_wrap">
              <a class="js-modal-open48" href="">  <!--モーダルON-->
                <div class="quest_modal">
                    <div class="quest_modal_link">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn.png" alt="">
                    </div>
                </div>
              </a>
            </div>
            <div class="modal js-modal js-modal48">   <!--モーダルOFF-->
              <div class="modal__bg js-modal-close"></div>
              <div class="modal__content">
                <div class="modal__content_inner">
                  <p>挑戦したいこと</p>
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_48on.png" alt="挑戦したいこと">   <!--モーダル・画像-->  <!--モーダル・ALT-->
                  <div class="quest_modal_close_link">
                    <a class="js-modal-close" href="">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/question/quest_btn_close.png" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </li>



        </ul>
      </div>
    </div>


    <!--ロードカーに一言！ -->

    <div id="quest_us">
      <div class="quest_profile_tit">
      ロードカーに一言！
      </div>
      <div class="quest_word_pc">
        <ul>
          <li><img src="<?php bloginfo('template_directory'); ?>/assets/images/question/word_1.png" alt="一緒に成長しましょう"></li>
          <li><img src="<?php bloginfo('template_directory'); ?>/assets/images/question/word_2.png" alt="お給料上げてください！"></li>
          <li><img src="<?php bloginfo('template_directory'); ?>/assets/images/question/word_3.png" alt="これからも末永くよろしくお願いします"></li>
          <li><img src="<?php bloginfo('template_directory'); ?>/assets/images/question/word_4.png" alt="目指せ100年企業"></li>
        </ul>
        <ul>
          <li><img src="<?php bloginfo('template_directory'); ?>/assets/images/question/word_5.png" alt="全員が一丸となれるよう、さらなるリーダーシップを期待しています"></li>
          <li class="space"><img src="<?php bloginfo('template_directory'); ?>/assets/images/question/word_6.png" alt="もっと新しい事に挑戦して車業界の既成概念をぶっ壊しましょう"></li>
        </ul>
        <ul>
          <li><img src="<?php bloginfo('template_directory'); ?>/assets/images/question/word_7.png" alt="車屋だけどなんでもできる会社を目指したいです"></li>
          <li><img src="<?php bloginfo('template_directory'); ?>/assets/images/question/word_8.png" alt="自分の成長ができる環境・会社に感謝してます"></li>
          <li><img src="<?php bloginfo('template_directory'); ?>/assets/images/question/word_9.png" alt="社内体制ふくめもっと良い会社を目指してください。"></li>
        </ul>
      </div>

      <div class="quest_word_sp">
        <ul>
          <li><img src="<?php bloginfo('template_directory'); ?>/assets/images/question/word_1.png" alt="一緒に成長しましょう"></li>
          <li><img src="<?php bloginfo('template_directory'); ?>/assets/images/question/word_5.png" alt="全員が一丸となれるよう、さらなるリーダーシップを期待しています"></li>
          <li><img src="<?php bloginfo('template_directory'); ?>/assets/images/question/word_7.png" alt="車屋だけどなんでもできる会社を目指したいです"></li>
          <li><img src="<?php bloginfo('template_directory'); ?>/assets/images/question/word_2.png" alt="お給料上げてください！"></li>
          <li><img src="<?php bloginfo('template_directory'); ?>/assets/images/question/word_6.png" alt="もっと新しい事に挑戦して車業界の既成概念をぶっ壊しましょう"></li>
          <li><img src="<?php bloginfo('template_directory'); ?>/assets/images/question/word_8.png" alt="自分の成長ができる環境・会社に感謝してます"></li>
          <li><img src="<?php bloginfo('template_directory'); ?>/assets/images/question/word_3.png" alt="これからも末永くよろしくお願いします"></li>
          <li><img src="<?php bloginfo('template_directory'); ?>/assets/images/question/word_4.png" alt="目指せ100年企業"></li>
          <li><img src="<?php bloginfo('template_directory'); ?>/assets/images/question/word_9.png" alt="社内体制ふくめもっと良い会社を目指してください。"></li>
        </ul>
      </div>


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
        <a href="<?php echo home_url(); ?>/recruit/data/">DATA<span>ロードカーがよく分かるデータ</span></a>
      </li>
      <li>
        QUESTION<span>先輩社員を解体してみた</span>
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
