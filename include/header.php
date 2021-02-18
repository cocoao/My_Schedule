<?php
session_start();
if(isset($_SESSION['usercode'])){
  $usercode=$_SESSION['usercode'];
  setcookie('PHPSESSID','1u5cj8uv0il0jecfqv6qdjadko',time() + 600, '/');
} else {
  echo "
  <script>
  location.href='/my_schedule/pages/auth_form.php';
  </script>
  ";
}
?>

<header>
  <div class="center headerWrap">
    <a href="/my_schedule/php/sign_out.php"><i class="fa fa-sign-out"></i></a>
    <h1 id="title">Scehdule Dashboard</h1>
    <div class="mIcon">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <div class="hiddenHeader">
      <ul class="depth-1">
        <li><a href="/my_schedule/index.php"><i class="fa fa-home"></i></a></li>
        <li><a href="/my_schedule/pages/input_form.php"><i class="fa fa-pencil"></i></a></li>
        <li><a href="/my_schedule/pages/sch_view.php?key=view_all"><i class="fa fa-search"></i></a></li>
      </ul>
    </div>
  </div>
</header>
