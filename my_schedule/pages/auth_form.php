<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Authorization</title>
  <!-- favicon link -->
  <link rel="icon" href="/my_schedule/img/schedule_favicon.png">
  <link rel="apple-touch-icon" href="/my_schedule/img/schedule_favicon.png">
  
  <link rel="stylesheet" href="/my_schedule/css/reset.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
  <style>
    .authWrap{width:100%; height:100vh; background:#f8f4f1; }
    .pattern{display:flex; justify-content:center; align-items:center;}
    .authForm input{width:100px; height:100px; border:2px solid #4298ff; outline:0; padding:10px; font-size:30px; text-align:center; margin:5px}
    .authForm input:nth-child(2){border:2px solid #fc6b4e;}
    .authForm input:nth-child(4){border:2px solid #fdc82e;}
    .authForm button{outline:0; top:-100%; position:absolute}
    input:invalid {background:#ddd}
  </style>
</head>
<body>
  <div class="authWrap">
    <div class="pattern">
      <form action="/my_schedule/php/auth.php" name="authForm" class="authForm">
        <input type="password" name="authCode1" pattern="[0-9]+" maxlength='1'>
        <input type="password" name="authCode2" pattern="[0-9]+" maxlength='1'>
        <input type="password" name="authCode3" pattern="[0-9]+" maxlength='1'>
        <input type="password" name="authCode4" pattern="[0-9]+" maxlength='1'>
        <button type="submit" onclick="onEnterLogin()"></button>
      </form>
    </div>
  </div>
  <script>
  function onEnterLogin(){
  var keyCode = window.event.keyCode;
  if (keyCode == 13) {
    authForm.submit();
    }
  }
  $(".authForm input").keyup(function(){
    var charLimit = $(this).attr("maxlength");
    
    if (this.value.length >= charLimit) {
        $(this).next('input').focus();
        return false;
    };
  });
</script>
</body>
</html>