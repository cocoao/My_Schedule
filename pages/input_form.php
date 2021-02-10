<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Input Board</title>

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
  <div class="wrap">
  <?php
  include $_SERVER['DOCUMENT_ROOT'].'/my_schedule/include/header.php';
  ?>
    <?php
    include $_SERVER['DOCUMENT_ROOT']."/my_schedule/include/db_connect.php";
    $sql="select * from schedule_progress";
    $sch_result=mysqli_query($dbConn,$sql);
    $sch_row=mysqli_fetch_array($sch_result);

    $sch_db=$sch_row['sch_db'];
    $sch_api=$sch_row['sch_api'];
    $sch_ren=$sch_row['sch_ren'];
    $sch_pla=$sch_row['sch_pla'];

    ?>
    <!-- container -->
    <div class="center">
      <form action="/my_schedule/php/update_rate.php" method="get" name="updateRate">
        <div class="inputContainer">
        <?php
          include $_SERVER['DOCUMENT_ROOT'].'/my_schedule/include/grid_up.php';
          ?>
            <div class="item"></div>
            <div class="item btns">
              <button type="submit">진행률 수정</button>
              <button type="button">진행 상황 작성</button>
              <button type="button">진행 상황 확인</button>
            </div>
          </div><!-- end of cotainer -->
        </form>
      </div><!-- end of center -->
    <?php
    include $_SERVER['DOCUMENT_ROOT'].'/my_schedule/include/footer.php';
    ?>
  </div><!-- end of wrap -->
</body>
</html>