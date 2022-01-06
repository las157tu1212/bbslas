<?php
  session_start();
  //DB接続
  require_once('C:\Users\user\bbslas\db_connect.php');
  dbconnection();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>新規登録</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/sign_up.css">
  </head>
  <body>
    <div id="over"></div>
    <h2>新規登録</h2>
    <div><span>*</span>は必須項目です</div>
    <br>
    <form method="POST" id="form" action="../php/receive.php?token=<?php echo $token;?>">
    <div id="modal">
      <div>以下の内容で登録しますか？</div>
      <p id="modal_login"></p>
      <p id="modal_namae"></p>
      <p id="modal_furigana"></p>
      <p id="modal_mail"></p>
      <p id="modal_birthday"></p>
      <p id="modal_pass"></p>
      <button type="submit" class="modal_button" id="modal_submit" name="submit2">はい</button>
      <button type="button" class="modal_button">戻る</button>
      <?php
      if(isset($_POST['submit2'])){
          $login = $_POST['login'];
          $sql="SELECT COUNT(login_id) FROM st_sql_task.member WHERE login_id = :login;";
          $stmt = $pdo->prepare($sql);
          $stmt->bindValue(':login',$login);
          $stmt ->execute();
          $date_id = $stmt->fetchAll(PDO::FETCH_ASSOC);

          if($date_id[0]["COUNT(login_id)"] == 0){
          }else{echo "";}
        }
      ?>
    </div>
      <div>名前（全角文字）<span>*</span></div>
      <div id="err_namae" class='err'></div>
      <input type="text" id="signup_namae" name="namae">
      <div>メールアドレス<span>*</span></div>
      <div id="err_mail" class='err'></div>
      <input type="text" id="signup_mail" name="mail" value="<?php echo $d_mail; ?>" readonly>
      <br>
      <div>パスワード（半角英数字6文字以上20文字以内)<span>*</span></div>
      <div id="err_pass" class='err'></div>
      <input type="text" id="signup_password" name="pass">
      <div>パスワード（確認用）<span>*</span></div>
      <div id="err_pass2" class='err'></div>
      <input type="text" id="signup_password2" name="pass2">
      <br>
      <button type="button" id="signup_submit">送信</button>

    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <script type="text/javascript" src="C:\Users\user\bbslas\JS\sign_up.js"></script>
  </body>
</html>