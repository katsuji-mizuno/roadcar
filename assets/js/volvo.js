/****************************************
Slick
****************************************/
var spWidth = 750;

  $('.slider').slick({
		autoplay: true,//自動的に動き出すか。初期値はfalse。
		infinite: true,//スライドをループさせるかどうか。初期値はtrue。
		slidesToShow: 5,//スライドを画面に5枚見せる
		slidesToScroll: 1,//1回のスクロールで1枚の写真を移動して見せる
		prevArrow: '<div class="slick-prev"></div>',//矢印部分PreviewのHTMLを変更
		nextArrow: '<div class="slick-next"></div>',//矢印部分NextのHTMLを変更
    centerMode: true,//要素を中央ぞろえにする
		dots: true,//下部ドットナビゲーションの表示
		responsive: [
			{
			breakpoint: spWidth,//モニターの横幅が750px以下の見せ方
			settings: {
				slidesToShow: 1,//スライドを画面に2枚見せる
				slidesToScroll: 1,//1回のスクロールで2枚の写真を移動して見せる
        centerMode: false
			}
		}
	]
	});
