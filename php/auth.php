<meta charset="UTF-8">
<?php

  $auth_code=$_REQUEST['authCode'];
  
  include $_SERVER['DOCUMENT_ROOT']."/my_schedule/include/db_connect.php";
  $sql="select * from schedule_admin where sch_ad_pass=$auth_code";
  
$auth_result = mysqli_query($dbConn,$sql);
$auth_match = mysqli_num_rows($auth_result);

if(!$auth_match){
  echo "
  <script>
    alert('인증코드가 맞지않습니다.');
    history.go(-1);
  </script>
  ";
} else {
  $auth_row = mysqli_fetch_array($auth_result);

  session_start();

  $_SESSION['usercode'] = $auth_row['sch_ad_pass'];

  echo "
  <script>
    location.href='/my_schedule/index.php'
  </script>
  ";
}
?>