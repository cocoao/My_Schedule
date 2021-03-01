$(function(){
  $.ajax({
    url:'/my_schedule/pages/read_json.php',
    success:function(result){

      let obj = JSON.parse(result);
      // console.log(obj);

      let dbRate = Number(obj[0].db_rate);
      let apiRate = Number(obj[0].api_rate);
      let renRate = Number(obj[0].ren_rate);
      let plaRate = Number(obj[0].pla_rate);
      let portRate = Number(obj[0].port_rate);
      
      let schAvg = (apiRate*0.15) + (dbRate*0.3) + (renRate*0.1) + (plaRate*0.2) + (portRate*0.25);

      // console.log(result);
      $(".circle-graph-container").append(
        `<div class="circle-graph easyPieChart" data-percent="${schAvg}">
          <p>${schAvg}%</p>
        </div>`
      )
    }
  });
});