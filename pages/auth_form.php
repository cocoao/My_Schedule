<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Authorization</title>
  <link rel="stylesheet" href="/my_schedule/css/reset.css">
  <style>
    .authWrap{width:100%; height:100vh; background:#f8f4f1; }
    .pattern{display:flex; justify-content:center; align-items:center;}
    .authForm input{width:100px; height:100px; border:2px solid #4298ff; outline:0; padding:10px; font-size:30px; text-align:center; margin:5px}
    .authForm input:nth-child(2){border:2px solid #fc6b4e;}
    .authForm input:nth-child(4){border:2px solid #fdc82e;}
    .authForm button{outline:0; top:-100%; position:absolute}
  </style>
</head>
<body>
  <div class="authWrap">
    <div class="pattern">
    <form action="/my_schedule/php/auth.php" name="authForm" class="authForm">
      <input type="password" name="authCode1">
      <input type="password" name="authCode2">
      <input type="password" name="authCode3">
      <input type="password" name="authCode4">
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
</script>
</body>
</html>