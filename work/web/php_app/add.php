<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DBへの接続と追加のページ</title>
</head>
<body>
  


<?php
 //require_once('.../app/db_cnf.php');
$user = "root";
$pass = "root";
  
  // 新規追加のためのコード


$title = $_POST['title'];
$category = (int) $_POST['category'];
$checked = (int) $_POST['checked'];
$comments = $_POST['comments'];
$time = date('Y/m/d h:m;s');

// session_start();
// if ((isset($_REQUEST['name'] == true)
//   && (isset($_REQUEST['keep']) == true)){
//     if ((isset($_REQUEST['number']) == true) && (isset($_SESSION['number']) == true) && ($_REQUEST['number'] == $_SESSION['number'])){

//       echo $_SESSION['number'];
//       var_dump($_SESSION);
//     } else{

//     }
// }
try{
  $dbh = new PDO('mysql:host=mysql_host;dbname=db_4portfolio;charset=utf8', $user, $pass);
  $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "INSERT INTO eva (title, category, checked, comments, time_now) VALUES (?,?,?,?,?)";
  $stmt = $dbh->prepare($sql);
  $stmt->bindValue(1, $title, PDO::PARAM_STR);
  $stmt->bindValue(2, $category, PDO::PARAM_INT);
  $stmt->bindValue(3, $checked, PDO::PARAM_INT);
  $stmt->bindValue(4, $comments, PDO::PARAM_STR);
  $stmt->bindValue(5, $time, PDO::PARAM_STR);
  $stmt->execute();
  $dbh = null;

  echo "以下の内容で登録しました";
  
} catch (Exception $e) {
  echo "ERROR: " . htmlspecialchars($e->getMessage(), ENT_QUOTES,'UTF-8') . "<br>";
  die();
}
  echo "<br>";
?>

<?php

  if (!empty($_POST['title'])){
      echo 'タイトル:' . htmlspecialchars($_POST['title'],ENT_QUOTES,'UTF-8');
    } else {
    echo 'No-title';
    }
  echo "<br>";
  echo 'Category:';
  if (!empty($_POST['category'])){
    if ($_POST['category'] === '1'){
      echo "coading";
    } elseif ($_POST['category'] === '2'){
      echo "Design";
    }
  } else {
    echo "未選択";
  };
  
  
  echo "<br>";
  echo '評価:';
  if (!empty($_POST['checked'])) {
    if ($_POST['checked'] === '1'){
      echo "Good !";
    } elseif ($_POST['checked'] === '2'){
      echo "Bad...";
    } elseif ($_POST['checked'] === '3') {
      echo "What's ?!";
    } 
  } else {
    echo "未選択";
  };

  echo "<br>";
  echo 'コメント:';
  if ($_POST['comments']){
    echo nl2br(htmlspecialchars($_POST['comments'],ENT_QUOTES,'UTF-8'));
  } else {
    echo 'なし';
  };
  echo "<br>";
  echo '更新時間:' . $time;
  echo "<br>";
?>

<p><a href="list_table.php">一覧を見る</a></p>
<p><a href="eva.php">新規コメント入力</a></p>
</body>
</html>
