$(function () {


    // URLのパラメータに応じてコンタクトのラジオボタンを変える;
    //条件なし（デフォルト）
    $('input:radio[name=radio_job]:nth(0)').attr('checked',false);
    //条件分岐
    $(window).on('load',function(){    //条件2
    if(document.URL.match('introducerID=referrer1')) {
        $('input:radio[name=radio_job]:nth(0)').attr('checked',true);
    }
    //条件2
    if(document.URL.match('introducerID=referrer2')) {
        $('input:radio[name=radio_job]:nth(1)').attr('checked',true);
    }
    //条件3
    if(document.URL.match('introducerID=referrer3')) {
        $('input:radio[name=radio_job]:nth(2)').attr('checked',true);
    }
    //条件4
    if(document.URL.match('introducerID=referrer4')) {
        $('input:radio[name=radio_job]:nth(3)').attr('checked',true);
    }
    });

});