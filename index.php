<!DOCTYPE html>
<<<<<<< HEAD
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
=======
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>うちの子ろぐ</title>
</head>
<body>
  <header>
    <a>うちの子のあれこれを記録する為のページ</a>
  </header>
  <a href="php/main.php">メインページ</a>
  
<?php
require_once('../vendor/autoload.php');

$email = new SendGridMailMail();
$email->setFrom("test@example.com", "送信者A");
$email->setSubject("TestMail漢字");
$email->addTo("kame777w@gmail.com", "受信者B");
$email->addContent("text/plain", "日本語 English");
$sendgrid = new SendGrid(getenv('SENDGRID_API_KEY'));
try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "n";
    print_r($response->headers());
    print $response->body() . "n";
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."n";
}
?>
</body>
</html>
>>>>>>> refs/remotes/origin/main
