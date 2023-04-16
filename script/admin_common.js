$(document).ready(function(){

    $('.tab01_btn').click(function(){

        $(this).find('.tab_text').addClass('on');
        $(this).siblings().find('.tab_text').removeClass('on');


    });
})