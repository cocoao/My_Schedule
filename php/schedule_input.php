<meta charset="UTF-8">
<?php

  $txt_cate=$_POST['projectCate'];
  $txt_tit=$_POST['projectTit'];
  $txt_con=$_POST['projectCon'];
  $txt_reg=date("y-m-d");

  // echo $txt_cate,$txt_tit,$txt_con;

  include $_SERVER['DOCUMENT_ROOT']."/my_schedule/include/db_connect.php";
  $sql="insert into schedule_txt(sch_txt_cate,sch_txt_tit,sch_txt_con,sch_txt_reg) values('$txt_cate','$txt_tit','$txt_con','$txt_reg')";
  mysqli_query($dbConn,$sql);

  echo"
  <script>
  alert ('진행 상황이 등록되었습니다.');
  location.href='/my_schedule/pages/input_form.php';
  </script>
  "
?>