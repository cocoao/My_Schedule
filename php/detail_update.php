<meta charset="UTF-8">
<?php

$update_num = $_GET['num'];
$update_tit = $_POST['updateTit'];
$update_con = $_POST['updateCon'];

include $_SERVER['DOCUMENT_ROOT']."/my_schedule/include/db_connect.php";
$sql="update schedule_txt set sch_txt_tit='$update_tit',sch_txt_con='$update_con' where sch_txt_num='$update_num'";

mysqli_query($dbConn,$sql);

echo"
<script>
alert('수정이 완료되었습니다.');
location.href='/my_schedule/pages/sch_view.php?key=view_all';
</script>
"
?>