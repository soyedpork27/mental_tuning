$(function() {

  $('.profile-tabmenu li').click(function() {
    
    let activeTab = $(this).attr('data-tab');

    // 탭메뉴 서식 바뀌는 스크립트
    $('.profile-tabmenu li').find('a').removeClass('tab-on2');
    $('.profile-tabmenu li').find('span').removeClass('tab-on3');
    $(this).find('a').addClass('tab-on2');
    $(this).find('span').addClass('tab-on3');

    // 탭메뉴 내용 바뀌는 스크립트
    $('.tabcon').removeClass('t-on');
    $('#' + activeTab).addClass('t-on');

  });


});