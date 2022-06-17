

/*--------------------------------------
トップのタイトル　黒い帯が出てから文字
--------------------------------------*/
var EffectH = 300;
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
        $(this).delay(200).queue(function(){
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
スクロールすると要素が左右上下から出現する演出 (車１)
****************************************/

var slideConts_car1 = document.querySelectorAll('.slideConts_car1'); // スライドで表示させる要素の取得
var slideConts_car1Rect = []; // 要素の位置を入れるための配列
var slideConts_car1Top = []; // 要素の位置を入れるための配列
var windowY = window.pageYOffset; // ウィンドウのスクロール位置を取得
var windowH = window.innerHeight; // ウィンドウの高さを取得
var remainder1 = -800; // ちょっとはみ出させる部分
// 要素の位置を取得
for (var i = 0; i < slideConts_car1.length; i++) {
  slideConts_car1Rect.push(slideConts_car1[i].getBoundingClientRect());
}
for (var i = 0; i < slideConts_car1Rect.length; i++) {
  slideConts_car1Top.push(slideConts_car1Rect[i].top + windowY);
}
// ウィンドウがリサイズされたら、ウィンドウの高さを再取得
window.addEventListener('resize', function () {
  windowH = window.innerHeight;
});
// スクロールされたら
window.addEventListener('scroll', function () {
  // スクロール位置を取得
  windowY = window.pageYOffset;

  for (var i = 0; i < slideConts_car1.length; i++) {
    // 要素が画面の下端にかかったら
    if(windowY > slideConts_car1Top[i] - windowH + remainder1) {
      // .showを付与
      slideConts_car1[i].classList.add('show');
    } else {
      // 逆に.showを削除
      slideConts_car1[i].classList.remove('show');
    }
  }
});


/****************************************
スクロールすると要素が左右上下から出現する演出 (車２)
****************************************/

var slideConts_car2 = document.querySelectorAll('.slideConts_car2'); // スライドで表示させる要素の取得
var slideConts_car2Rect = []; // 要素の位置を入れるための配列
var slideConts_car2Top = []; // 要素の位置を入れるための配列
var windowY = window.pageYOffset; // ウィンドウのスクロール位置を取得
var windowH = window.innerHeight; // ウィンドウの高さを取得
var remainder2 = -1200; // ちょっとはみ出させる部分
// 要素の位置を取得
for (var i = 0; i < slideConts_car2.length; i++) {
  slideConts_car2Rect.push(slideConts_car2[i].getBoundingClientRect());
}
for (var i = 0; i < slideConts_car2Rect.length; i++) {
  slideConts_car2Top.push(slideConts_car2Rect[i].top + windowY);
}
// ウィンドウがリサイズされたら、ウィンドウの高さを再取得
window.addEventListener('resize', function () {
  windowH = window.innerHeight;
});
// スクロールされたら
window.addEventListener('scroll', function () {
  // スクロール位置を取得
  windowY = window.pageYOffset;

  for (var i = 0; i < slideConts_car2.length; i++) {
    // 要素が画面の下端にかかったら
    if(windowY > slideConts_car2Top[i] - windowH + remainder2) {
      // .showを付与
      slideConts_car2[i].classList.add('show');
    } else {
      // 逆に.showを削除
      slideConts_car2[i].classList.remove('show');
    }
  }
});


/****************************************
スクロールすると要素が左右上下から出現する演出 (車３)
****************************************/

var slideConts_car3 = document.querySelectorAll('.slideConts_car3'); // スライドで表示させる要素の取得
var slideConts_car3Rect = []; // 要素の位置を入れるための配列
var slideConts_car3Top = []; // 要素の位置を入れるための配列
var windowY = window.pageYOffset; // ウィンドウのスクロール位置を取得
var windowH = window.innerHeight; // ウィンドウの高さを取得
var remainder3 = -600; // ちょっとはみ出させる部分
// 要素の位置を取得
for (var i = 0; i < slideConts_car3.length; i++) {
  slideConts_car3Rect.push(slideConts_car3[i].getBoundingClientRect());
}
for (var i = 0; i < slideConts_car3Rect.length; i++) {
  slideConts_car3Top.push(slideConts_car3Rect[i].top + windowY);
}
// ウィンドウがリサイズされたら、ウィンドウの高さを再取得
window.addEventListener('resize', function () {
  windowH = window.innerHeight;
});
// スクロールされたら
window.addEventListener('scroll', function () {
  // スクロール位置を取得
  windowY = window.pageYOffset;

  for (var i = 0; i < slideConts_car3.length; i++) {
    // 要素が画面の下端にかかったら
    if(windowY > slideConts_car3Top[i] - windowH + remainder3) {
      // .showを付与
      slideConts_car3[i].classList.add('show');
    } else {
      // 逆に.showを削除
      slideConts_car3[i].classList.remove('show');
    }
  }
});




/****************************************
スクロールすると要素が左右上下から出現する演出 (車１SP)
****************************************/

var slideConts_car1sp = document.querySelectorAll('.slideConts_car1sp'); // スライドで表示させる要素の取得
var slideConts_car1spRect = []; // 要素の位置を入れるための配列
var slideConts_car1spTop = []; // 要素の位置を入れるための配列
var windowY = window.pageYOffset; // ウィンドウのスクロール位置を取得
var windowH = window.innerHeight; // ウィンドウの高さを取得
var remainder1sp = 100; // ちょっとはみ出させる部分
// 要素の位置を取得
for (var i = 0; i < slideConts_car1sp.length; i++) {
  slideConts_car1spRect.push(slideConts_car1sp[i].getBoundingClientRect());
}
for (var i = 0; i < slideConts_car1spRect.length; i++) {
  slideConts_car1spTop.push(slideConts_car1spRect[i].top + windowY);
}
// ウィンドウがリサイズされたら、ウィンドウの高さを再取得
window.addEventListener('resize', function () {
  windowH = window.innerHeight;
});
// スクロールされたら
window.addEventListener('scroll', function () {
  // スクロール位置を取得
  windowY = window.pageYOffset;

  for (var i = 0; i < slideConts_car1sp.length; i++) {
    // 要素が画面の下端にかかったら
    if(windowY > slideConts_car1spTop[i] - windowH + remainder1sp) {
      // .showを付与
      slideConts_car1sp[i].classList.add('show');
    } else {
      // 逆に.showを削除
      slideConts_car1sp[i].classList.remove('show');
    }
  }
});


/****************************************
スクロールすると要素が左右上下から出現する演出 (車２SP)
****************************************/

var slideConts_car2sp = document.querySelectorAll('.slideConts_car2sp'); // スライドで表示させる要素の取得
var slideConts_car2spRect = []; // 要素の位置を入れるための配列
var slideConts_car2spTop = []; // 要素の位置を入れるための配列
var windowY = window.pageYOffset; // ウィンドウのスクロール位置を取得
var windowH = window.innerHeight; // ウィンドウの高さを取得
var remainder2sp = -200; // ちょっとはみ出させる部分
// 要素の位置を取得
for (var i = 0; i < slideConts_car2sp.length; i++) {
  slideConts_car2spRect.push(slideConts_car2sp[i].getBoundingClientRect());
}
for (var i = 0; i < slideConts_car2spRect.length; i++) {
  slideConts_car2spTop.push(slideConts_car2spRect[i].top + windowY);
}
// ウィンドウがリサイズされたら、ウィンドウの高さを再取得
window.addEventListener('resize', function () {
  windowH = window.innerHeight;
});
// スクロールされたら
window.addEventListener('scroll', function () {
  // スクロール位置を取得
  windowY = window.pageYOffset;

  for (var i = 0; i < slideConts_car2sp.length; i++) {
    // 要素が画面の下端にかかったら
    if(windowY > slideConts_car2spTop[i] - windowH + remainder2sp) {
      // .showを付与
      slideConts_car2sp[i].classList.add('show');
    } else {
      // 逆に.showを削除
      slideConts_car2sp[i].classList.remove('show');
    }
  }
});


/****************************************
スクロールすると要素が左右上下から出現する演出 (車３SP)
****************************************/

var slideConts_car3sp = document.querySelectorAll('.slideConts_car3sp'); // スライドで表示させる要素の取得
var slideConts_car3spRect = []; // 要素の位置を入れるための配列
var slideConts_car3spTop = []; // 要素の位置を入れるための配列
var windowY = window.pageYOffset; // ウィンドウのスクロール位置を取得
var windowH = window.innerHeight; // ウィンドウの高さを取得
var remainder3sp = 350; // ちょっとはみ出させる部分
// 要素の位置を取得
for (var i = 0; i < slideConts_car3sp.length; i++) {
  slideConts_car3spRect.push(slideConts_car3sp[i].getBoundingClientRect());
}
for (var i = 0; i < slideConts_car3spRect.length; i++) {
  slideConts_car3spTop.push(slideConts_car3spRect[i].top + windowY);
}
// ウィンドウがリサイズされたら、ウィンドウの高さを再取得
window.addEventListener('resize', function () {
  windowH = window.innerHeight;
});
// スクロールされたら
window.addEventListener('scroll', function () {
  // スクロール位置を取得
  windowY = window.pageYOffset;

  for (var i = 0; i < slideConts_car3sp.length; i++) {
    // 要素が画面の下端にかかったら
    if(windowY > slideConts_car3spTop[i] - windowH + remainder3sp) {
      // .showを付与
      slideConts_car3sp[i].classList.add('show');
    } else {
      // 逆に.showを削除
      slideConts_car3sp[i].classList.remove('show');
    }
  }
});








/****************************************
Slick
****************************************/

$('.slider_main').slick({
  autoplay: true,//自動的に動き出すか。初期値はfalse。
  slidesToShow: 1,//スライドを画面に5枚見せる
  slidesToScroll: 1,//1回のスクロールで1枚の写真を移動して見せる
});


$('.slider').slick({
  autoplay: false,//自動的に動き出すか。初期値はfalse。
  infinite: true,//スライドをループさせるかどうか。初期値はtrue。
  slidesToShow: 2.1,//スライドを画面に5枚見せる
  slidesToScroll: 1,//1回のスクロールで1枚の写真を移動して見せる
  prevArrow: '<div class="slick-prev"><div class="slick-prev_inner"></div></div>',//矢印部分PreviewのHTMLを変更
  nextArrow: '<div class="slick-next"><div class="slick-next_inner"></div></div>',//矢印部分NextのHTMLを変更
  dots: false,//下部ドットナビゲーションの表示
  centerMode:true,
    responsive: [
      {
      breakpoint: 750,//モニターの横幅が750px以下の見せ方
      settings: {
        slidesToShow: 1,//スライドを画面に2枚見せる
        slidesToScroll: 1,//1回のスクロールで2枚の写真を移動して見せる
      }
    }
  ]
});

