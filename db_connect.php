<?php
 function dbconnection() {
  global $pdo, $e;
  try {
    // データベースに接続
    $pdo = new PDO(
      'mysql:dbname=heroku_4129322c6a3c992;host=us-cdbr-east-05.cleardb.net;charset=utf8mb4','b38ecad7fdfd84','3970d366',
      [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      ]
  );
  echo "MySQL への接続確認が取れました。";
  } catch (PDOException $e) {
    //エラー発生時
    echo  "MySQL への接続に失敗しました。";
    echo $e->getMessage();
    exit;
  }
};
?>
