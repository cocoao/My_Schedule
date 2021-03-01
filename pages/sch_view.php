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
  <div class="wrap inputWrap">
    <div class="pattern">
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
    $sch_port=$sch_row['sch_port'];

    ?>
    <!-- container -->
    <div class="center gridWrap">
        <div class="inputContainer">
        <?php
          include $_SERVER['DOCUMENT_ROOT'].'/my_schedule/include/latest_date.php';
          include $_SERVER['DOCUMENT_ROOT'].'/my_schedule/include/grid_up.php';
          ?>
            <div class="item boardBox">
            <?php
            $include_path = $_GET['key'];

            //echo $include_path;
            include $_SERVER['DOCUMENT_ROOT'].'/my_schedule/include/'.$include_path.'.php';

            ?>
            <div class="item btns">
              <button type="button" onclick="javascript:location.href='/my_schedule/pages/input_form.php'">진행 상황 작성</button>
            </div>
        </div><!-- end of cotainer -->
    </div><!-- end of center -->
    <?php
    include $_SERVER['DOCUMENT_ROOT'].'/my_schedule/include/footer.php';
    ?>
    </div>
  </div><!-- end of wrap -->
  <script>
    $('.boardList').hide();
    $('.boardList').slice(0,5).show();

    $('.loadMore button').click(function(){
      $('.boardList:hidden').slice(0,5).show();
    });
  </script>
</body>
</html>