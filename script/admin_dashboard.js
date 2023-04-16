$(document).ready(function(){

    // 탭 버튼의 자손 중 탭 콘텐츠는 숨겨지도록
    $('.tab01_btn').find('.tab01_ctnt').hide();

    // on 클래스를 가진 탭 버튼의 자손 중 탭 콘텐츠는 보이도록
    $('.tab01_btn.on').find('.tab01_ctnt').show();

    $('.tab01_btn').click(function(){

        $(this).addClass('on');
        $(this).siblings().removeClass('on');
        $(this).find('.tab01_ctnt').show();
        $(this).siblings().find('.tab01_ctnt').hide();


    });
})