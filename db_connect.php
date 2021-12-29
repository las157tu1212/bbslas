<?php
 function dbconnection() {
  global $pdo, $e;
  try {
    // データベースに接続
    $pdo = new PDO(
      'mysql:dbname=st_sql_task;host=localhost;charset=utf8mb4','root','',
      [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      ]
  );
  } catch (PDOException $e) {
    //エラー発生時
    echo $e->getMessage();
    exit;
  }
};
?>