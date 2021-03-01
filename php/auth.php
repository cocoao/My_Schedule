<meta charset="UTF-8">
<?php

  $auth_code1=$_REQUEST['authCode1'];
  $auth_code2=$_REQUEST['authCode2'];
  $auth_code3=$_REQUEST['authCode3'];
  $auth_code4=$_REQUEST['authCode4'];
  $auth_code = $auth_code1.$auth_code2.$auth_code3.$auth_code4;
  
  // echo $auth_code;
  
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