(function($) {

  $(document).ready(function() {

    /*--------------------------------------
    募集要項のタブ切り替え
    --------------------------------------*/
    $('.tab_area:first').show();
    $('.tab li:first').addClass('active');
    $('.tab li').on('click',function() {
      $('.tab li').removeClass('active');
      $(this).addClass('active');
      $('.tab_area').hide();
      $(jQuery(this).find('a').attr('href')).fadeIn();
      return false;
    });

    /*--------------------------------------
    URLパラメーターでタブを切り替え
    --------------------------------------*/
    var params = (new URL(document.location)).searchParams;
    var genre_num = params.get("genre");
    if(genre_num == 2) {
      $('.tab li.genre2').trigger('click');
    } else if(genre_num == 3) {
      $('.tab li.genre3').trigger('click');
    } else if(genre_num == 4) {
      $('.tab li.genre4').trigger('click');
    }
  });
})(jQuery);