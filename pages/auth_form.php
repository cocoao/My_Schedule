<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Authorization</title>
  <link rel="stylesheet" href="/my_schedule/css/reset.css">
  <style>
    .authWrap{width:100%; height:100vh; background:#f8f4f1; display:flex; justify-content:center; align-items:center;}
    .authForm input{width:200px; height:40px; border:1px solid #4298ff; outline:0; padding:10px;}
    .authForm button{width:100px; height:40px; border:1px solid #4298ff; outline:0; padding:10px; background:#4298ff; color:#fff;}
  </style>
</head>
<body>
  <div class="authWrap">
    <form action="/my_schedule/php/auth.php" name="authForm" class="authForm">
      <input type="password" placeholder="인증 코드를 입력해 주세요." name="authCode">
      <button type="submit">입장하기</button>
    </form>
  </div>
</body>
</html>