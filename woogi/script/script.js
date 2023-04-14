$(function(){

  $('.nav-open').hover(function(){
    $(this).find('.nav-lv2').stop().fadeIn();
  }, function(){
    $(this).find('.nav-lv2').stop().fadeOut();
  });

});