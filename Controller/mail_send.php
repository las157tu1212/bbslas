<?php
  session_start();
  //DB接続
  require_once('C:\Users\user\bbslas\db_connect.php');
  dbconnection();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>仮登録</title>
    <meta charset="UTF-8">
  </head>
  <body>
<?php
  $mail = openssl_encrypt(addslashes($_POST["mail"]),'AES-128-ECB','sslpass');
  $token = sha1(uniqid(null,true));

  $sql2 = "SELECT COUNT(mail) FROM heroku_ce62d82bd09421d.user WHERE mail = :mail2;";
  $stmt2 = $pdo->prepare($sql2);
  $stmt2->bindValue(':mail2',$mail);
  $stmt2->execute();
  
  $date_check = $stmt2->fetchAll(PDO::FETCH_ASSOC);

  if($date_check[0]["COUNT(mail)"] == 0){

  $mail = openssl_encrypt(addslashes($_POST["mail"]),'AES-128-ECB','sslpass');
  $token = sha1(uniqid(null,true));

  $sql = <<<EOM
  INSERT INTO
  heroku_ce62d82bd09421d.user_kari
  (mail,token)
  VALUES
  (:mail,:token);
  EOM;

  $stmt = $pdo->prepare($sql);
  
  $stmt->bindValue(':mail',$mail);
  $stmt->bindValue(':token',$token);

  $stmt->execute();


  mb_language("Japanese"); 
  mb_internal_encoding("UTF-8");


  $to = addslashes($_POST["mail"]);
  
  $email = "suzu122w@yahoo.co.jp";
  $subject = "仮登録のご案内"; // 題名 
  $body = "下記URLより本登録お願いいたします。\n
  http://localhost/%E6%9C%80%E7%B5%82%E8%AA%B2%E9%A1%8C/php/sign_up.php?token=$token"; // 本文
  $header = "From: $email";
  
  mb_send_mail($to, $subject, $body, $header);

  echo $to . '宛に本登録のURLを送付致しました。';

  $_SESSION["mail"] = $mail;
  $_SESSION["token"] = $token;
}else{header("Location:../View/sign_up_kari.php");
      $_SESSION["err1"]="登録済みのメールアドレスです。";
      exit;}
?>
  </body>
</html>