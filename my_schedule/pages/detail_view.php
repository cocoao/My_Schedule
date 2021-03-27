<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Input Board</title>
  <!-- favicon link -->
  <link rel="icon" href="/my_schedule/img/schedule_favicon.png">
  <link rel="apple-touch-icon" href="/my_schedule/img/schedule_favicon.png">
  
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

      $detail_num= $_GET['num'];
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
          include $_SERVER['DOCUMENT_ROOT'].'/my_schedule/include/grid_up.php';
          include $_SERVER['DOCUMENT_ROOT'].'/my_schedule/include/latest_date.php';
          
          include $_SERVER['DOCUMENT_ROOT']."/my_schedule/include/db_connect.php";
          $sql="select * from schedule_txt where sch_txt_num=$detail_num";

          $board_result=mysqli_query($dbConn,$sql);
          $board_row=mysqli_fetch_array($board_result);
          $board_num=$board_row['sch_txt_num'];
          $board_cate=$board_row['sch_txt_cate'];
          $board_tit=$board_row['sch_txt_tit'];
          $board_reg=$board_row['sch_txt_reg'];
          $board_con=$board_row['sch_txt_con'];
          $board_con_view=nl2br($board_row['sch_txt_con']);
          $board_con_view=addslashes($board_con_view);
        ?>
          <div class="item viewBox">
            <form action="/my_schedule/php/detail_update.php?num=<?=$board_num?>" method="post">
              <div class="detailTit">
                <h2><?=$board_tit?></h2>
                <input type="text" value="<?=$board_tit?>" class="hiddenTit" name="updateTit">
              </div>
              <ul class="viewTable">
                <li class="viewTit">
                  <span class="borNum">번호</span>
                  <span class="borCate">분류</span>
                  <span class="borCon">내용</span>
                  <span class="borReg">작성일</span>
                </li>
                <li class="viewList">
                  <span class="borNum"><?=$board_num?></span>
                  <span class="borCate"><?=$board_cate?></span>
                  <span class="borCon">
                    <em><?=$board_con_view?></em>
                    <textarea class="hiddenCon" value="<?=$board_con?>" name="updateCon"><?=$board_con?></textarea>
                  </span>
                  <span class="borReg"><?=$board_reg?></span>
                </li>
              </ul>
              <div class="subBtn">
                <button type=submit>수정 사항 입력</button>
              </div>
            </form>
          </div>
          <div class="item btns">
            <button type="button" class="updateContBtn">진행 상황 수정</button>
            <button type="button" onclick="confirmDel()" style="margin: 0 1.5%;">진행 상황 삭제</button>
            <button type="button" onclick="javascript:location.href='/my_schedule/pages/sch_view.php?key=view_all'">진행 상황 확인</button>
          </div>
        </div><!-- end of cotainer -->
      </div><!-- end of center -->
      <?php
       include $_SERVER['DOCUMENT_ROOT'].'/my_schedule/include/footer.php';
      ?>
    </div><!-- end of pattern -->
  </div><!-- end of wrap -->
  <script>
    function confirmDel(){
      let isCheck = confirm("삭제하시겠습니까?");
      if(isCheck == false){
        return false;
      } else {
        location.href='/my_schedule/php/detail_delete.php?num=<?=$board_num?>'
      }
    }
  </script>
</body>
</html>