<?php
    session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>メールアドレス認証</title>
    <meta charset="UTF-8">
  </head>
  <body>
    <p style="text-align:center">登録するメールアドレスを入力してください。</p>
    <div name="err_msg1" id="err_msg" style="color:red;text-align:center"><?php if(isset($_SESSION["err1"])){echo $_SESSION["err1"];};  ?></div>
      <form action="../Controller/mail_send.php" style="text-align:center" method="POST">
        <input type="email" size="50" name="mail">
        <button type="submit">送信する</button>
      </form>
    
  </body>
</html>
<?php
  $_SESSION["err1"]="";
?>