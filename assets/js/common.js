/****************************************
ローディング後、ロゴ、メニューなどを順番に出す
****************************************/

function delayScrollAnime() {
  var time = 0.2;//遅延時間を増やす秒数の値
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



//ブラウザの判定
var wWidth = 0;
var wHeight = 0;
var headHeight = 0;
var headHeightSp = 0;
var headHeightPc = 0;
var bPoint = 750;
var bPoint2 = 1240;

/* getWidth */
function getWidth() {
  wWidth = window.innerWidth;
  return wWidth;
}

/* getHeight */
function getHeight() {
  wHeight = window.innerHeight;
  return wHeight;
}

/* ReLayout */
function ReLayout() {

  wWidth = getWidth();
  wHeight = getHeight();

  // body padding top
  if(wWidth <= bPoint) {
    headHeight = headHeightSp;
  } else {
    headHeight = headHeightPc;
  }


}
//ReLayout();


$(function () {

  getWidth();
  getHeight();

  /* for IE */
  var agent = navigator.userAgent;
  var userAgent = window.navigator.userAgent.toLowerCase();
  if (userAgent.match(/(msie|MSIE)/) || userAgent.match(/(T|t)rident/)) {
    var isIE = true;
    $("html").addClass('ie');
    var ieVersion = userAgent.match(/((msie|MSIE)\s|rv:)([\d\.]+)/)[3];
    ieVersion = parseInt(ieVersion);
  } else {
    var isIE = false;
    $("html").removeClass('ie');
  }

  /* IEでの fixed カクつき防止 */
  if(navigator.userAgent.match(/MSIE 10/i) || navigator.userAgent.match(/Trident\/7\./) || navigator.userAgent.match(/Edge\/12\./)) {
    $('body').on("mousewheel", function () {
      event.preventDefault();
      var wd = event.wheelDelta;
      var csp = window.pageYOffset;
      window.scrollTo(0, csp - wd);
    });
  }

  var timer = false;
  $(window).resize(function () {
    if (timer !== false) {
      clearTimeout(timer);
    }
    timer = setTimeout(function () {
      var ww = $(window).width();
      if (wWidth != ww) {
        ReLayout();
        changeImage();
        changeImage2();
      }
    }, 200);
  });
});


//ブラウザの判定
$(function() {
　　 /* ユーザーエージェントの文字列を取得 */
      var useragent = window.navigator.userAgent.toLowerCase();

    /* ブラウザごとの条件分岐 */
    if (useragent.indexOf('msie') != -1 ||
          useragent.indexOf('trident') != -1) {
          //Internet Explorerに適応させたい内容
      } else if(useragent.indexOf('edge') != -1) {
          //Edgeに適応させたい内容
  } else if (useragent.indexOf('chrome') != -1) {
          //Chromeに適応させたい内容
  } else if (useragent.indexOf('safari') != -1) {
          //Safariに適応させたい内容
  } else if (useragent.indexOf('firefox') != -1) {
          //FireFoxに適応させたい内容
  } else if (useragent.indexOf('opera') != -1) {
          //Operaに適応させたい内容
  } else {
          //上記以外のブラウザに適応させたい内容
  };
});

// ブラウザバック
window.onpageshow = function(){
  setTimeout(function () {
    ReLayout();
  }, 200);
}

// loaded
$.event.add(window, 'load', function () {
  setTimeout(function () {
    ReLayout();
    changeImage();
    changeImage2();
  }, 200);
});

// changeImage
function changeImage() {
  if (wWidth <= bPoint) {
    if($('.change')[0]){
      $('.change').each(function(){
        $(this).attr("src",$(this).attr("src").replace('_pc', '_sp'));
      });
    }
  } else {
    if($('.change')[0]){
      $('.change').each(function(){
        $(this).attr("src",$(this).attr("src").replace('_sp', '_pc'));
      });
    }
  }
}
function changeImage2() {
  if (wWidth <= bPoint2) {
    if($('.change2')[0]){
      $('.change2').each(function(){
        $(this).attr("src",$(this).attr("src").replace('_pc', '_sp'));
      });
    }
  } else {
    if($('.change2')[0]){
      $('.change2').each(function(){
        $(this).attr("src",$(this).attr("src").replace('_sp', '_pc'));
      });
    }
  }
}


/****************************************
　loading
****************************************/


$(window).on('load', function(){
  $('.loader-slide').addClass('open');
});

$(function () {
  var h = $(window).height();
  $('#loader').delay(500).queue(function(){
  	$('#loader').addClass('view');
  });

  //10秒たったら強制的にロード画面を非表示
  setTimeout(function () {
    stopload();
  }, 10000);
});
$.event.add(window, 'load', function () {
  $('#pageWrapper').addClass('view');
  $('#loader').delay(100).fadeOut(300);
});
function stopload(){
  $('#pageWrapper').addClass('view');
  $('#loader').delay(600).fadeOut(300);
}


/****************************************
menu open
****************************************/


$(function () {
  $('#siteHead .menu').on('click',function(){
    $(this).toggleClass('open');
    if($(this).hasClass('open')){
      $('#gNav').addClass('open');
    } else {
      $('#gNav').removeClass('open');
    }
  });
  $('#gNav li a').on('click',function(){
    $('#siteHead .menu').removeClass('open');
    $('#gNav').removeClass('open');
  });
  $('#gNav li a').on('click',function(){
    $('#siteHead .menu').removeClass('open');
    $('#gNav').removeClass('open');
  });
});


/****************************************
// スクロールしたらクラス追加して、トップへ戻るボタンを下から出す。

$(function(){
  var wWidth = $(window).width();
  $(window).scroll(function() {
    var scrollTop = $(this).scrollTop();
    var scrollHeight = 900;
    if (scrollTop > scrollHeight) {
      $('#toPageTop').addClass('scrollfixed');
      } else {
      $('#toPageTop').removeClass('scrollfixed');
    }
  });
});
****************************************/

/****************************************
スクロールすると要素が左右上下から出現する演出
****************************************/

var slideConts = document.querySelectorAll('.slideConts'); // スライドで表示させる要素の取得
var slideContsRect = []; // 要素の位置を入れるための配列
var slideContsTop = []; // 要素の位置を入れるための配列
var windowY = window.pageYOffset; // ウィンドウのスクロール位置を取得
var windowH = window.innerHeight; // ウィンドウの高さを取得
var remainder = 100; // ちょっとはみ出させる部分
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
スクロールに併せてで背景の縦ラインが伸びる
****************************************/

//線が伸びるための設定を関数でまとめる
function ScrollTimelineAnime(){
  $('.timeline').each(function(){// それぞれのli要素の
    var elemPos = $(this).offset().top;// 上からの高さ取得
    var scroll = $(window).scrollTop();// スクロール値取得
    var windowHeight = $(window).height();// windowの高さ取得
    var startPoint = 300; //線をスタートさせる位置を指定※レイアウトによって調整してください
    if (scroll >= elemPos - windowHeight-startPoint){
      var H = $(this).outerHeight(true)//liの余白と高さを含めた数値を取得
      //スクロール値から要素までの高さを引いた値を、liの高さの半分のパーセントで出す
      var percent = (scroll+startPoint - elemPos) / (H/2) *100;//liの余白と高さの半分で線を100％に伸ばす

      // 100% を超えたらずっと100%を入れ続ける
      if(percent  > 100){
        percent  = 100;
      }
      // ボーダーの長さをセット
      $(this).children('.border-line').css({
        height: percent + "%", //CSSでパーセント指定
      });
    }
  });
}

// 画面をスクロールをしたら動かしたい場合の記述
$(window).on('scroll', function(){
  ScrollTimelineAnime();// 線が伸びる関数を呼ぶ
});

// ページが読み込まれたらすぐに動かしたい場合の記述
$(window).on('load', function(){
  ScrollTimelineAnime();// 線が伸びる関数を呼ぶ
});






// メニューのアコーディオンが戻るボタンで開いたままだったのを常に閉じるようにする。
// メニューをタップ後の遷移を少し遅らせる

$('.opened a').on('click',function(){
  event.preventDefault();
  var link = $(this).attr('href');
  $('.menu_accord input[type=checkbox]').prop('checked', false);
  setTimeout(function() {
    location.href= link;
  }, 150);
});

