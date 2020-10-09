<?php 
 //require_once('.../app/db_cnf.php');
$user = "root";
$pass = "root";


$title = $_POST['title'];
$category = (int) $_POST['category'];
$checked = (int) (!empty($_POST['checked']));
$comments = $_POST['comments'];
$time = date('Y/m/d h:m;s');


try{
  if (empty($_POST['id'])) throw new Exception('IDを取得できません！'); 
  $id = (int) $_POST['id'];
  // var_dump($id);
  // print_r($id);
  $dbh = new PDO('mysql:host=mysql_host;dbname=db_4portfolio;charset=utf8', $user, $pass);
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
  echo "ID: " . htmlspecialchars($id, ENT_QUOTES, 'UTF-8') . "を更新しました。";
} catch (Exception $e) {
  echo "ERROR: " . htmlspecialchars($e->getMessage(), ENT_QUOTES,'UTF-8') . "<br>";
  die();
} 
?>

