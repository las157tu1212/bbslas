<?php
  session_start();
  //DB接続
  require_once('db_connect.php');
  dbconnection();
?>
<!DOCTYPE html>
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
require 'vendor/autoload.php';
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
