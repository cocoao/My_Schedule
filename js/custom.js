$(function(){
  
  // sub project bar animation
  for(let i=0; i< $('.subPfBar').length; i++){
    let rateNum = $(".subPfBar").eq(i).find(".rateNum").val()
    $('.subPfBar').eq(i).find(".pfBar").animate({width:rateNum + "%"},1200);
  }

  // header icon control
  $(".mIcon").click(function(){
    $(this).toggleClass("on");

    if($(this).hasClass("on")){
      $(".depth-1").slideDown('fast');
    } else {
      $(".depth-1").slideUp('fast');
    };
  });

  // hidden input show and hide
  $(".updateContBtn").click(function(){
    $(this).toggleClass("on");
    if($(this).hasClass("on")){
      $(this).text("상황 수정 취소");
      $(".detailTit h2,.borCon em").hide();
      $(".hiddenTit,.hiddenCon,.subBtn").show();

    } else {
      $(this).text("상황 수정 수정");
      $(".detailTit h2, .borCon em").show();
      $(".hiddenTit, .hiddenCon, .subBtn").hide();

    }
  });

// window.addEventListener("usercode", function (e) { 
//   if (closing_window) { toDoWhenClosing(); 
//   } 
// });

// window.sessionStorage.removeItem('usercode'); 
// $.post(  baseurl+"/logout",
//  function(data, status){
//      //alert(data);
//    window.location.replace(contextPath);
//  });

//  let closeWin = window.close();
//  $(window).close(function(){
//   window.sessionStorage.removeSe('usercode'); 
//  });
 

});
