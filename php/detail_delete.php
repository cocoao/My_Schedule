<meta charset="UTF-8">
<?php
$detail_num=$_GET['num'];

include $_SERVER['DOCUMENT_ROOT']."/my_schedule/include/db_connect.php";
$sql="delete from schedule_txt where sch_txt_num=$detail_num";
mysqli_query($dbConn,$sql);

echo "
<script>
alert('삭제가 완료되었습니다.');
location.href='/my_schedule/pages/sch_view.php?key=view_all';
</script>
"
?>