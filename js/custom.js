$(function(){
  
  for(let i=0; i< $('.subPfBar').length; i++){
    let rateNum = $(".subPfBar").eq(i).find(".rateNum").text()
    $('.subPfBar').eq(i).find(".pfBar").animate({width:rateNum + "%"},1200);
  }
});