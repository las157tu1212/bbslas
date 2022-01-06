<?php
  session_start();
  //DB接続
  require_once('../db_connect.php');
  dbconnection();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../CSS/login.css">
  <title>うちの子ろぐ ログインページ</title>
</head>
<body>
  <header>
    <div class="logo">うちの子ろぐ</div>
  </header>
<div id="wrap_input">
  <form action="mypage.php" method="POST">
    
    
    <div>
      <div name="err_msg" id="err_msg" style="color:red"><?php if(isset($_SESSION["err"])){echo $_SESSION["err"];};  ?></div>
      <input  id="input_mail" name="loginMail" class="input">
      <label class="label" id="label_mail">Email</label><br>
    </div>

    <div>
      <input id="input_pass" name="loginPass" class="input">
      <label class="label" id="label_pass">パスワード</label>
      <div id="err"> </div>
    </div>

    <button type="submit" id="login_submit">ログイン</button>
  </form>
    <p>新規登録は<a href="..\View\sign_up.php">こちら</a>から</p>
</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="../JS/login.js"></script>
</body>
</html>

<?php
  