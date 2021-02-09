$(function() {

  let pieSize = 250;
  let liWidth = $(window).width();
  let clear;

  if(liWidth > 401){
    pieSize = 250;
  } else {
    pieSize = 180;
  };

  $('.circle-graph').easyPieChart({
    scaleColor: false,
    lineWidth: 40,
    lineCap: 'round',
    barColor: '#4298ff',
    trackColor: '#ddd' ,
    size: pieSize,
    animate: 1200
  });

  $(window).resize(function(){
    let liWidth = $(window).width();
    if(liWidth > 401){
      pieSize = 250;
    } else {
      pieSize = 180;
    };

    // clearTimeout(clear);

    clear=setTimeout(function(){
      $('.circle-graph').removeData('easyPieChart').find('canvas').remove();
      $('.circle-graph').easyPieChart({
        scaleColor: false,
        lineWidth: 40,
        lineCap: 'round',
        barColor: '#4298ff',
        trackColor: '#ddd' ,
        size: pieSize,
        animate: 1
      });
    }, 150);
  });
});