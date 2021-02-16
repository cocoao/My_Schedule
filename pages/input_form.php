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
    <div class="center gridWrap">
        <div class="inputContainer">
        <?php
          include $_SERVER['DOCUMENT_ROOT'].'/my_schedule/include/latest_date.php';
          include $_SERVER['DOCUMENT_ROOT'].'/my_schedule/include/grid_up.php';
          ?>
            <div class="item inputBox">
              <form action="/my_schedule/php/schedule_input.php" name="projectInput" method="post">
                <select name="projectCate" id="" class="projectCate">
                  <option value="DB project">DB project</option>
                  <option value="API project">API project</option>
                  <option value="RENEWAR project">RENEWAR project</option>
                  <option value="WEB PLANNING project">WEB PLANNING project</option>
                </select>
                <input type="text" name="projectTit" class="projectTit" placeholder="진행 상황을 작성해주세요.">
                <textarea name="projectCon" id="" class="projectCon" placeholder="상세 진행 상황을 작성해주세요."></textarea>
              </form>
            </div>
            <div class="item btns">
              <button type="button" onclick="inputSubmit()">진행 상황 작성</button>
              <button type="button" onclick="javascript:location.href='/my_schedule/pages/sch_view.php?key=view_all'">진행 상황 확인</button>
            </div>
        </div><!-- end of cotainer -->
    </div><!-- end of center -->
    <?php
    include $_SERVER['DOCUMENT_ROOT'].'/my_schedule/include/footer.php';
    ?>
  </div><!-- end of wrap -->
  <script>
    function inputSubmit(){
      if(!document.projectInput.projectTit.value){
        alert('진행 상황을 작성해주세요.');
        document.projectInput.projectTit.focus();
        return;
      }
      if(!document.projectInput.projectCon.value){
        alert('상세 진행 상황을 작성해주세요.');
        document.projectInput.projectCon.focus();
        return;
      }
      document.projectInput.submit();
    }
  </script>
</body>
</html>