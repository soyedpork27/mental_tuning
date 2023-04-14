$(function() {
  $('.profile-tabmenu li').click(function() {
    let activeTab = $(this).attr('data-tab');
    $('.profile-tabmenu li').removeClass('tab-on');
    $('.tabcon').removeClass('t-on');
    $(this).addClass('t-on');
    $('#' + activeTab).addClass('tab-on');
  })
});