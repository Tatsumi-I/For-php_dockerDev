<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>編集ページ</title>
</head>
<body>
  

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


  <p>No.
  <?php if ($result['id']){
      echo htmlspecialchars($result['id'], ENT_QUOTES, 'UTF-8') ;} ?>
  </p>
  <p>
    登録日時：[
    <?php if ($result['time_now']){
      echo htmlspecialchars($result['time_now'], ENT_QUOTES, 'UTF-8') ;} ?>
      ]のデータを編集する
    </p>
  <form method="POST" action="update.php">
    <label for="title">コメントタイトル
      <br>
      <input type="text" name="title" value="<?php
        if (!empty($result['title'])){
          echo htmlspecialchars($result['title'], ENT_QUOTES, 'UTF-8');
          }
           ?>">
     </label>
    <br>
    <label for="category">Category
      <br>
      <select name="category">
        <option value="0"
          <?php 
          if ($result['category'] === 0){
            echo "selected"; 
            }
             ?>
        >カテゴリ選択</option>
        <option value="1" 
          <?php 
            if ($result['category'] === 1){
              echo "selected" ;
            }
              ?>
        >Code</option>
        <option value="2"
          <?php 
            if ($result['category'] === 2) {
            echo "selected";
           }
            ?>
        >Design</option>
      </select>
    </label>
    <br>
    <label for="radio">評価
      <br>
      <input type="radio" name="checked" value="1"
        <?php 
         if ($result['checked'] === 1){
           echo "checked";
          } 
          ?>
      >
        <label for="checked">Good !</label>
      <input type="radio" name="checked" value="2"
         <?php 
          if ($result['checked'] === 2){
            echo "checked"; 
          } 
            ?>
      >
        <label for="checked">Bad...</label>
      <input type="radio" name="checked" value="3"
          <?php 
            if ($result['checked'] === 3){
              echo "checked"; 
            } 
              ?>
      >
        <label for="checked">What's?!</label>
    </label>
    <br>
    <label for="textarea">コメント
      <br>
      <textarea name="comments" col="20" row="5" maxlength="100">
      <?php 
        if (!empty($result['comments'])){
          echo htmlspecialchars($result['comments'], ENT_QUOTES, 'UTF-8') ;} ?>
      </textarea>
      <br>
    </label>
      <input type="hidden" name="id" value="
        <?php echo htmlspecialchars($result['id'],ENT_QUOTES,'UTF-8'); 
        ?>
      ">
      <input type="submit" value="更新">
    
    </form>




</body>

</html>