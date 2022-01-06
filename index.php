<!DOCTYPE html>
<html>
  <head>
    <title>トップページ</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="">
  </head>
  <body style="text-align:center">
    <h1>Welcome!</h1>
    <a href="/View/sign_up_kari.php"><button type="button" id="sign_up">新規登録</button></a>
    <a href="/View/login.php"><button type="button" id="login">ログイン</button></a>
    <script type="text/javascript"></script>
    <?php
      mb_language("Japanese"); 
      mb_internal_encoding("UTF-8");
    
    
      $to = "kame777w@gmail.com";
      
      $email = "suzu122w@yahoo.co.jp";
      $subject = "仮登録のご案内"; // 題名 
      $body = "下記URLより本登録お願いいたします。\n
      http://localhost/%E6%9C%80%E7%B5%82%E8%AA%B2%E9%A1%8C/php/sign_up.php?token=$token"; // 本文
      $header = "From: $email";
      
      mb_send_mail($to, $subject, $body, $header);
    
      echo $to . '宛に本登録のURLを送付致しました。';
    
      $_SESSION["mail"] = $mail;
      $_SESSION["token"] = $token;



    ?>
  </body>
</html>
