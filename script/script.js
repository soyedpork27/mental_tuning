$(function(){

  $('.nav-open').hover(function(){
    $(this).find('.nav-lv2').stop().fadeIn();
  }, function(){
    $(this).find('.nav-lv2').stop().fadeOut();
  });

});








let last_location = location.href;


const logout_btn = document.getElementById("logout_btn");
  
  console.log(logout_btn);

  logout_btn.addEventListener("click",out_modal);

    // 로그아웃 버튼 클릭 시 여부를 묻기
    function out_modal(){
      let lgout_bool = confirm('로그아웃 하시겠습니까?');
      if(lgout_bool){
        location.href='./logout.php';
      }
      else{
        return false;
      }
    }




