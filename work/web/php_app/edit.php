<?php 
// この情報はDB接続のために共通して必要
// $user = "tatsumi";
// $pass = "vWtiKogx0heXmvEl";
// $user = "docker";
// $pass = "docker";
$user = "root";
$pass = "root";
$time = date("Y-m-d H:i:s");
?>

<?php
  try{
    if (empty($_GET['id'])) throw new Exception('idの取得エラー'); 
    $id = (int) $_GET['id'];
    // var_dump($id);
    // print_r($id);
    $dbh = new PDO('mysql:host=mysql_host;dbname=db_4portfolio;charset=utf8', $user, $pass);
    $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE FROM eva WHERE id = ?";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(1, $id, PDO::PARAM_INT);
    $stmt->execute();
    $dbh = null;
    // echo "ID: " . htmlspecialchars($id, ENT_QUOTES, 'UTF-8') . "の削除完了";
  } catch (Exception $e) {
    echo "ERROR: " . htmlspecialchars($e->getMessage(), ENT_QUOTES,'UTF-8') . "<br>";
    die();
  }
  var_dump($time);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>編集(edit)</title>
</head>

<body>
  編集
  <form method="POST" action="update.php">
    <label for="title">コメントタイトル
      <br>
      <input type="text" name="title" value="<?php echo htmlspecialchars($result['title'], ENT_QUOTES, 'UTF-8'); ?>" id="">
     </label>
    <br>
    <label for="category">Category
      <br>
      <select name="category" id="">
        <option value="0"
          <?php if ($result['category'] === 0) echo "selected" ?>
        >カテゴリ選択</option>
        <option value="1" <?php if ($result['category'] === 1) echo "selected" ?>
        >Code</option>
        <option value="2"
          <?php if ($result['category'] === 2) echo "selected" ?>
        >Design</option>
      </select>
    </label>
    <br>
    <label for="radio">評価
      <br>
      <input type="radio" name="checked" value="1">
        <label for="checked">Good !</label>
      <input type="radio" name="checked" value="2">
        <label for="checked">Bad...</label>
      <input type="radio" name="checked" value="3">
        <label for="checked">What's?!</label>
    </label>
    <br>
    <label for="textarea">コメント
      <br>
      <textarea name="comments" col="20" row="5" maxlength="100"></textarea>
      <br>
    </label>
      <input type="hidden" name="id" value="<?php echo htmlspecialchars($result['id'],ENT_QUOTES,'UTF-8'); ?>">
      <input type="submit" name="time_now" value="KEEP">
    </form>
    
</body>
</html>