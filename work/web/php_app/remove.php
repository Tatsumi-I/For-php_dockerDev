<?php
require_once('../../app/function.php');
require_once('../../app/db_cnf.php');
require_once('_appHeader.php');

?>


<?php



try {
  if (empty($_GET['id'])) {
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
  echo "<div class=\"desc\"><p>No." . h($id, ENT_QUOTES, 'UTF-8') . ":";
  // if (!empty($title)){
  echo h($title, ENT_QUOTES, 'UTF-8');
  // } elseif ($title) {
  //   echo "No-title";
  // }
  echo "を削除しました。</p></div>";
} catch (Exception $e) {
  echo "ERROR: " . h($e->getMessage(), ENT_QUOTES, 'UTF-8') . "<br>";
  die();
}
?>


<p><a href="list_table.php">一覧を見る</a></p>



<?php
require_once('_appFooter.php');
