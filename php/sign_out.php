<?php

  session_start();
  unset($_SESSION['usercode']);
  
  echo"
  <script>
    location.href='/my_schedule/pages/auth_form.php'
  </script>
  "

?>