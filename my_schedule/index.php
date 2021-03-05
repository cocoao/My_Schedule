<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="cache-control" content="no-cache, no-store, must-revalidate">
  <!-- //cache control 사용할 경우 페이지 로딩 속도가 늦어질 수 있음 -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1">
  <title>Scehdule Dashboard</title>

  <!-- favicon link -->
  <link rel="icon" href="/my_schedule/img/schedule_favicon.ico">
  <link rel="apple-touch-icon" href="/my_schedule/img/schedule_favicon.ico">

  <!-- font awesome font link -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <!-- css style link -->
  <link rel="stylesheet" href="/my_schedule/css/reset.css">
  <link rel="stylesheet" href="/my_schedule/css/style.css">
  <link rel="stylesheet" href="/my_schedule/css/media.css">

  <!-- script file load  -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js"></script>
  <script src="/my_schedule/js/custom.js"></script>
  <script src="/my_schedule/js/piechart.js"></script>
  <script src="/my_schedule/js/total_avg.js"></script>
</head>
<body>
  <!-- All contents are wrap inside wrap class -->
  <div class="wrap main">
    <div class="pattern">
    <?php
    include $_SERVER['DOCUMENT_ROOT'].'/my_schedule/include/header.php';

    include $_SERVER['DOCUMENT_ROOT']."/my_schedule/include/db_connect.php";
    $sql="select * from schedule_progress";
    $sch_result=mysqli_query($dbConn,$sql);
    $sch_row=mysqli_fetch_array($sch_result);

    $sch_db=$sch_row['sch_db'];
    $sch_api=$sch_row['sch_api'];
    $sch_ren=$sch_row['sch_ren'];
    $sch_pla=$sch_row['sch_pla'];
    $sch_port=$sch_row['sch_port'];
    ?>
    
      <!-- container -->
      <div class="center gridWrap">
        <form action="/my_schedule/php/update_rate.php" method="get" name="updateRate">
          <div class="container">
          <?php
          include $_SERVER['DOCUMENT_ROOT'].'/my_schedule/include/latest_date.php';
          include $_SERVER['DOCUMENT_ROOT'].'/my_schedule/include/grid_up.php';
          ?>
            <div class="item btns">
              <button type="button" onclick="updateSubmit()">진행률 수정</button>
              <button type="button" onclick="javascript:location.href='/my_schedule/pages/input_form.php'">진행 상황 작성</button>
              <button type="button" onclick="javascript:location.href='/my_schedule/pages/sch_view.php?key=view_all'">진행 상황 확인</button>
            </div>
          </div><!-- end of cotainer -->
        </form>
      </div><!-- end of center -->
      <?php
      include $_SERVER['DOCUMENT_ROOT'].'/my_schedule/include/footer.php';
      ?>
    </div>
  </div><!-- end of wrap -->
  
  <script>
  function updateSubmit(){
    if(document.updateRate.sch_db_rate.value > 101){
      alert("100이하의 숫자를 사용해주세요.");
      document.updateRate.sch_db_rate.focus();
      return;
    }
    if(document.updateRate.sch_api_rate.value > 101){
      alert("100이하의 숫자를 사용해주세요.");
      document.updateRate.sch_api_rate.focus();
      return;
    }
    if(document.updateRate.sch_ren_rate.value > 101){
      alert("100이하의 숫자를 사용해주세요.");
      document.updateRate.sch_ren_rate.focus();
      return;
    }
    if(document.updateRate.sch_pla_rate.value > 101){
      alert("100이하의 숫자를 사용해주세요.");
      document.updateRate.sch_pla_rate.focus();
      return;
    }
    document.updateRate.submit();
  }
  </script>
</body>
</html>