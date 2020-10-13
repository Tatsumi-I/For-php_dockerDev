<?php 
  require_once('/work/app/function.php');
  require_once('/work/app/db_cnf.php');
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>削除ページ</title>
  <style>
      <?php
      require_once('./styleForApp/appStyle.min.css');
      ?>
    </style>
</head>

<body>
  <header>
    <p><a href="hoz_onTop.php">PHP & MYSQL_app ”Hoz_on”</a></p>
  </header>
  <main>
    <div class="all">


<?php 
//require_once('.../app/db_cnf.php');



try{
  if (empty($_GET['id'])){
    throw new Exception('id取得エラー'); 
  }
    $id = (int) $_GET['id'];
    $title = $_GET['title'];
    // var_dump($id);
    // print_r($id);
    $dbh = new PDO('mysql:host=mysql_host;dbname=db_4portfolio;charset=utf8', $user, $pass);
    $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE FROM eva WHERE id = ?";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(1, $id, PDO::PARAM_INT);
    $stmt->bindValue(2, $title, PDO::PARAM_STR);
    $stmt->execute();
    $dbh = null;
    echo "No." . h($id, ENT_QUOTES, 'UTF-8') . ":";
      // if (!empty($title)){
    echo h($title, ENT_QUOTES, 'UTF-8');
      // } elseif ($title) {
      //   echo "No-title";
      // }
    echo "を削除しました。";
  } catch (Exception $e) {
    echo "ERROR: " . h($e->getMessage(), ENT_QUOTES,'UTF-8') . "<br>";
    die();
  } 
?>

<p><a href="eva.php">新規登録ページへ戻る</a></p>
<p><a href="list_table.php">Hoz_on リストを見る</a></p>


</div>
</main>
<footer>
  <p><a href="hoz_onTop.php">PHP & MYSQL_app ”Hoz_on”</a></p>
</footer>
</body>
</html>
