

/*--------------------------------------
トップのタイトル　黒い帯が出てから文字
--------------------------------------*/
var EffectH = 100;
$(window).on('scroll load', function() {
  var scTop = $(this).scrollTop();
  var scBottom = scTop + $(this).height();
  var effectPos = scBottom - EffectH;
  $('.js-scroll').each( function() {
    var thisPos = $(this).offset().top;
    if ( thisPos < effectPos ) {
      $.when(
        $(this).addClass("show")
      ).done(function() {
        $(this).delay(500).queue(function(){
          $(this).addClass("done")
        })
      });
    }
  });
});





/****************************************
ローディング後、ロゴ、メニューなどを順番に出す
****************************************/

function delayScrollAnime() {
  var time = 0.1;//遅延時間を増やす秒数の値
  var value = time;
  $('.delayScroll').each(function () {
    var parent = this;          //親要素を取得
    var elemPos = $(this).offset().top;//要素の位置まで来たら
    var scroll = $(window).scrollTop();//スクロール値を取得
    var windowHeight = $(window).height();//画面の高さを取得
    var childs = $(this).children();  //子要素を取得

    if (scroll >= elemPos - windowHeight && !$(parent).hasClass("play")) {//指定領域内にスクロールが入ったらまた親要素にクラスplayがなければ
      $(childs).each(function () {

        if (!$(this).hasClass("fadeUp")) {//アニメーションのクラス名が指定されているかどうかをチェック

          $(parent).addClass("play"); //親要素にクラス名playを追加
          $(this).css("animation-delay", value + "s");//アニメーション遅延のCSS animation-delayを追加し
          $(this).addClass("fadeUp");//アニメーションのクラス名を追加
          value = value + time;//delay時間を増加させる

          //全ての処理を終わったらplayを外す
          var index = $(childs).index(this);
          if((childs.length-1) == index){
            $(parent).removeClass("play");
          }
        }
      })
    }else {
      $(childs).removeClass("fadeUp");//アニメーションのクラス名を削除
      value = time;//delay初期値の数値に戻す
    }
  })
}

/****************************************
// スクロールしたらクラス追加してヘッダーに背景色をつける
****************************************/
$(function(){
  var wWidth = $(window).width();
  $(window).scroll(function() {
    var scrollTop = $(this).scrollTop();
    var scrollHeight = 120;
    if (scrollTop > scrollHeight) {
      $('#siteHead').addClass('change_bg');
      } else {
      $('#siteHead').removeClass('change_bg');
    }
  });
});

/*--------------------------------------
トップのお知らせ記事①　hrefやidに連番を付与
--------------------------------------*/

$(function(){
	$('.news_link a').each(function(i){
		$(this).attr('href','#tab' + (i+2));
	});
  $('.tab_area').each(function(i){
		$(this).attr('id','tab' + (i+1));
	});
});

/*--------------------------------------
トップのお知らせ記事❷ カテゴリー別の表示切り替え
--------------------------------------*/

(function($) {
  $(document).ready(function() {
    $('.tab_area:first').show();
    $('.tab li:first').addClass('active');
    $('.tab li').click(function() {
      $('.tab li').removeClass('active');
      $(this).addClass('active');
      $('.tab_area').hide();
      $(jQuery(this).find('a').attr('href')).fadeIn();
      return false;
    });
  });
})(jQuery);

/*--------------------------------------
トップのキャッチを順番に表示
--------------------------------------*/

$(function(){
  // リストを非表示
  $('ul.catch li').hide();
  // 繰り返し処理
  $('ul.catch li').each(function(i) {
  // 遅延させてフェードイン
  $(this).delay(500 * i).fadeIn(1000);
  });
});


/****************************************
スクロールすると要素が左右上下から出現する演出
****************************************/

var slideConts = document.querySelectorAll('.slideConts'); // スライドで表示させる要素の取得
var slideContsRect = []; // 要素の位置を入れるための配列
var slideContsTop = []; // 要素の位置を入れるための配列
var windowY = window.pageYOffset; // ウィンドウのスクロール位置を取得
var windowH = window.innerHeight; // ウィンドウの高さを取得
var remainder = 400; // ちょっとはみ出させる部分
// 要素の位置を取得
for (var i = 0; i < slideConts.length; i++) {
  slideContsRect.push(slideConts[i].getBoundingClientRect());
}
for (var i = 0; i < slideContsRect.length; i++) {
  slideContsTop.push(slideContsRect[i].top + windowY);
}
// ウィンドウがリサイズされたら、ウィンドウの高さを再取得
window.addEventListener('resize', function () {
  windowH = window.innerHeight;
});
// スクロールされたら
window.addEventListener('scroll', function () {
  // スクロール位置を取得
  windowY = window.pageYOffset;

  for (var i = 0; i < slideConts.length; i++) {
    // 要素が画面の下端にかかったら
    if(windowY > slideContsTop[i] - windowH + remainder) {
      // .showを付与
      slideConts[i].classList.add('show');
    } else {
      // 逆に.showを削除
      slideConts[i].classList.remove('show');
    }
  }
});

/****************************************
スクロールすると要素が左右上下から出現する演出 (遅いバージョン)
****************************************/

var slideConts2 = document.querySelectorAll('.slideConts2'); // スライドで表示させる要素の取得
var slideConts2Rect = []; // 要素の位置を入れるための配列
var slideConts2Top = []; // 要素の位置を入れるための配列
var windowY = window.pageYOffset; // ウィンドウのスクロール位置を取得
var windowH = window.innerHeight; // ウィンドウの高さを取得
var remainder2 = 600; // ちょっとはみ出させる部分
// 要素の位置を取得
for (var i = 0; i < slideConts2.length; i++) {
  slideConts2Rect.push(slideConts2[i].getBoundingClientRect());
}
for (var i = 0; i < slideConts2Rect.length; i++) {
  slideConts2Top.push(slideConts2Rect[i].top + windowY);
}
// ウィンドウがリサイズされたら、ウィンドウの高さを再取得
window.addEventListener('resize', function () {
  windowH = window.innerHeight;
});
// スクロールされたら
window.addEventListener('scroll', function () {
  // スクロール位置を取得
  windowY = window.pageYOffset;

  for (var i = 0; i < slideConts2.length; i++) {
    // 要素が画面の下端にかかったら
    if(windowY > slideConts2Top[i] - windowH + remainder2) {
      // .showを付与
      slideConts2[i].classList.add('show');
    } else {
      // 逆に.showを削除
      slideConts2[i].classList.remove('show');
    }
  }
});


/****************************************
relax.min.js  パララックス
****************************************/
const rellax = new Rellax('.rellax-target'); //クラス名rellax-targetにパララックス効果

document.addEventListener("DOMContentLoaded", function () {
  const rellax = new Rellax(".rellax-target", {
    breakpoints:[375,768,1200] //必ず３つ指定する必要がある
  });
});