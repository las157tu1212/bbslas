<?php
 function dbconnection() {
  global $pdo, $e;
  try {
    // データベースに接続
    $pdo = new PDO(
      'mysql:dbname=heroku_ce62d82bd09421d;host=us-cdbr-east-05.cleardb.net;charset=utf8mb4','ba5476aed6fc80','670e5f2f',
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