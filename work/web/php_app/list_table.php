<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>評価コメント一覧</title>
</head>
<body>
  <h1>評価コメント一覧</h1>
  <p><a href="eva.php">コメント機能を使って新規登録する</a></p>
<?php

 //require_once('.../app/db_cnf.php');
$user = "root";
$pass = "root";
// 以下、DBとの接続
try {
  $dbh = new PDO('mysql:host=mysql_host;dbname=db_4portfolio;charset=utf8', $user, $pass);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "SELECT * FROM eva";
  $stmt = $dbh->query($sql);
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  // print_r($result);
  echo "<table border=1>\n";
  echo "<tr>\n";
  echo "<th>No.</th><th>タイトル</th><th>カテゴリ</th><th>評価</th><th>登録日時</th><th>詳細を見る</th><th>編集する</th><th>削除する</th>\n";
  echo "</tr>\n";
  foreach ($result as $row) {
    echo "<tr>\n";
    echo "<td>". $row['id'] . "</td>\n";
    // echo "<td>" .htmlspecialchars($row['title'],ENT_QUOTES,'UTF-8') ."</td>\n";
    // echo "<td>" . $row['category'] . "</td>\n";
    if (!empty($row['title'])){
      echo "<td>" .htmlspecialchars($row['title'],ENT_QUOTES,'UTF-8') ."</td>\n";
    } else {
      echo "<td>" . 'No-title' . "</td>\n";
    };

    // if (isset($row['category'])){
      if ($row['category'] === '1'){
        echo "<td>" .  'Coading' . "</td>\n";
      } elseif ($row['category'] === '2') {
        echo "<td>" . 'Design' . "</td>\n";
      // }
    } else {
      echo "<td>" . '未分類' . "</td>\n";
    };

    // if (isset($row['checked'])){
      if ($row['checked'] === '1'){
          echo "<td>" .  'Good!' . "</td>\n";
        } elseif ($row['checked'] === '2'){
          echo "<td>" . 'Bad...' . "</td>\n";
        } elseif ($row['checked'] === '3') {
          echo "<td>" . 'What\'s?!' . "</td>\n";
       } else{
      echo "<td>" . '未選択' . "</td>\n";
    };

    // echo "<td>" . htmlspecialchars($row['checked'],ENT_QUOTES,'UTF-8') . "</td>\n";
    // echo "<td>" . htmlspecialchars($row['comments'],ENT_QUOTES,'UTF-8') . "</td>\n";
    echo "<td>" . htmlspecialchars($row['time_now'],ENT_QUOTES,'UTF-8') . "</td>\n";
    
    echo "<td>\n";
    echo "<a href=detail.php?id=" . htmlspecialchars($row['id'],ENT_QUOTES,'UTF-8') . ">詳細</a>\n";
    echo "</td>\n";
    echo "<td>\n";
    echo "<a href=edit.php?id=" . htmlspecialchars($row['id'],ENT_QUOTES,'UTF-8') . ">変更</a>\n";
    echo "</td>\n";
    echo "<td>\n";
    echo "<a href=delete.php?id=" . htmlspecialchars($row['id'],ENT_QUOTES,'UTF-8') . ">削除</a>\n";
    echo "</td>\n";

    echo "</tr>\n";
  }
  echo "</table>\n";

  $dbh = null;
} catch (Exception $e) {
  echo "ERROR:" . htmlspecialchars($e->getMessage(),ENT_QUOTES,'UTF-8') . "<br>";
  die();
}
?>



</body>
</html>
