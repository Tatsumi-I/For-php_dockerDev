<?php
require_once('../../app/function.php');
require_once('../../app/db_cnf.php');
require_once('_appHeader.php');
?>

<h1>Hoz_onを更新しました</h1>


<?php
//require_once('.../app/db_cnf.php');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $title = $_POST['title'];
  $category = (int) $_POST['category'];
  $checked = (int) $_POST['checked'];
  $comments = $_POST['comments'];
  $time = date('Y-m-d H:i;s');


  try {
    if (empty($_POST['id'])) throw new Exception('IDを取得できません！');
    $id = (int) $_POST['id'];
    // var_dump($id);
    // print_r($id);
    $dbh = new PDO('mysql:host=Localhost;dbname=myfirstdeploy_db;charset=utf8', $user, $pass);
    $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE eva SET title = ?, category = ?, checked = ?, comments = ?, time_now = ? WHERE id = ?";
    $stmt = $dbh->prepare($sql);

    $stmt->bindValue(1, $title, PDO::PARAM_STR);
    $stmt->bindValue(2, $category, PDO::PARAM_INT);
    $stmt->bindValue(3, $checked, PDO::PARAM_INT);
    $stmt->bindValue(4, $comments, PDO::PARAM_STR);
    $stmt->bindValue(5, $time, PDO::PARAM_STR);
    $stmt->bindValue(6, $id, PDO::PARAM_INT);
    $stmt->execute();
    $dbh = null;
    echo "<div class=\"desc\"><p>No. " . h($id, ENT_QUOTES, 'UTF-8') . ":";

    if (empty($title)) {
      echo "No-title";
    } else {
      echo h($title, ENT_QUOTES, 'UTF-8');
    }
    echo "の情報を更新しました。</p></div>";
  } catch (Exception $e) {
    echo "ERROR: " . h($e->getMessage(), ENT_QUOTES, 'UTF-8') . "<br>";
    die();
  }
}
?>

<p><a href="list_table.php">一覧を見る</a></p>


<?php
require_once('_appFooter.php');
