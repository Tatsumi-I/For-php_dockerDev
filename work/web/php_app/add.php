<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DBへの接続と追加のページ</title>

  <style>
      <?php
      require_once('appStyle.min.css');
      ?>
    </style>
</head>

<body>
  <header>
    <p>PHP & MYSQL_app ”Hoz_on”</p>
  </header>
  <main>
    <div class="all">


<?php

 //require_once('.../app/db_cnf.php');
 $title = $_POST['title'];
 $category = (int) (!empty($_POST['category']));
 $checked = (int) (!empty($_POST['checked']));
 $comments = $_POST['comments'];
 $time = date('Y-m-d H:i:s');
// session_start();
// if ((isset($_REQUEST['name'] == true)
//   && (isset($_REQUEST['keep']) == true)){
//     if ((isset($_REQUEST['number']) == true) && (isset($_SESSION['number']) == true) && ($_REQUEST['number'] == $_SESSION['number'])){

//       echo $_SESSION['number'];
//       var_dump($_SESSION);
//     } else{

//     }
// }
  $user = "root";
  $pass = "root";
    
    // 新規追加のためのコード
  

    
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

  echo "<h1>以下の内容で登録しました</h1>";
} catch (Exception $e) {
  echo "ERROR: " . htmlspecialchars($e->getMessage(), ENT_QUOTES,'UTF-8') . "<br>";
  die();
}
?>


  <p>
    <?php
      echo "Title/タイトル : ";
      if (!empty($_POST['title'])){
          echo htmlspecialchars($_POST['title'],ENT_QUOTES,'UTF-8');
        } else {
        echo 'No-title';
        }
    ?>
  </p>
  <p>
    <?php
      echo "Category/分類 : ";
      if (!empty($_POST['category'])){
        if ($_POST['category'] === '1'){
          echo "coading";
        } elseif ($_POST['category'] === '2'){
          echo "Design";
        }
      } else {
        echo "未分類";
      };
    ?>
  </p>
  <p>
    <?php
      echo 'Evaluation/評価 : ';
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
    ?>
  </p>
  <p>
    <?php
      echo 'Comments/コメント : ';
      if (!empty($_POST['comments'])){
        echo nl2br(htmlspecialchars($_POST['comments'],ENT_QUOTES,'UTF-8'));
      } else {
        echo 'なし';
      };
    ?>
  </p>
  <p>
    <?php
      echo 'DateTime/更新時間 : ' . $time ;
    ?>
  </p>


<p><a href="list_table.php">一覧を見る</a></p>
<p><a href="eva.php">新規コメント入力</a></p>
<br>
</div>
</main>
<footer>
  <p>PHP & MYSQL_app ”Hoz_on”</p>
</footer>
</body>
</html>
