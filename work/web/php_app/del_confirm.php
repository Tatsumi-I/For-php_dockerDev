<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>削除前の意思確認ページ</title>
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
$user = "root";
$pass = "root";
  //編集機能
  try{
    if (empty($_GET['id'])) throw new Exception('idの取得エラー'); 
    $id = (int) $_GET['id'];
    // var_dump($id);
    // print_r($id);
    $dbh = new PDO('mysql:host=mysql_host;dbname=db_4portfolio;charset=utf8', $user, $pass);
    $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM eva WHERE id = ?";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(1, $id, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $dbh = null;
    // echo "ID: " . htmlspecialchars($id, ENT_QUOTES, 'UTF-8') . "の削除完了";
  } catch (Exception $e) {
    echo "ERROR: " . htmlspecialchars($e->getMessage(), ENT_QUOTES,'UTF-8') . "<br>";
    die();
  }
?>

<body>
  <p>No.
    <?php echo htmlspecialchars($result['id'],ENT_QUOTES,'UTF-8'); ?>
    :"
    <?php 
      if (!empty($result['title'])){
        echo htmlspecialchars($result['title'],ENT_QUOTES,'UTF-8'); 
      } else {
        echo "No-title";
      }
      ?>"
    を本当に削除しますか？</p>
  
  <form method="GET" action="remove.php">
  <input type="hidden" name="id" value="
    <?php echo htmlspecialchars($result['id'],ENT_QUOTES,'UTF-8'); 
    ?>
  ">
  <input type="hidden" name="title" value="
    <?php echo htmlspecialchars($result['title'],ENT_QUOTES,'UTF-8'); 
    ?>
  ">
  <p><a href="list_table.php">
    <button>キャンセル</button>
    </a>
  </p>
  <button>
    削除する
  </button>
  </form>

</div>
</main>
<footer>
  <p>PHP & MYSQL_app ”Hoz_on”</p>

</footer>
</body>
</html>