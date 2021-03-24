<div class="categoryTabs">
  <a href="/my_schedule/pages/sch_view.php?key=view_all">All</a>
  <a href="/my_schedule/pages/sch_view.php?key=view_db">Database</a>
  <a href="/my_schedule/pages/sch_view.php?key=view_api">API</a>
  <a href="/my_schedule/pages/sch_view.php?key=view_renewal" class="active">Renewal</a>
  <a href="/my_schedule/pages/sch_view.php?key=view_web">UI/UX</a>
  <a href="/my_schedule/pages/sch_view.php?key=view_port">Portfolio</a>
</div>
<ul class="boardTable">
  <li class="boardTit" style="background:#fc6b4e">
    <span class="borNum">번호</span>
    <span class="borCate">분류</span>
    <span class="borTit">제목</span>
    <span class="borReg">작성일</span>
  </li>
  <?php
    include $_SERVER['DOCUMENT_ROOT']."/my_schedule/include/db_connect.php";
    $sql="select * from schedule_txt where sch_txt_cate='RENEWAL project' order by sch_txt_num desc";

    $board_result=mysqli_query($dbConn,$sql);
    while($board_row=mysqli_fetch_array($board_result)){
      $board_num=$board_row['sch_txt_num'];
      $board_cate=$board_row['sch_txt_cate'];
      $board_tit=$board_row['sch_txt_tit'];
      $board_reg=$board_row['sch_txt_reg'];
  ?>
  <li class="boardList">
    <span class="borNum"><?=$board_num?></span>
    <span class="borCate"><?=$board_cate?></span>
    <span class="borTit"><a href="/my_schedule/pages/detail_view.php?num=<?=$board_num?>"><?=$board_tit?></a></span>
    <span class="borReg"><?=$board_reg?></span>
  </li>
  <?php
    }
  ?>
</ul>
<div class="loadMore">
  <button type="button" style="background:#fc6b4e">더보기</button>
</div>