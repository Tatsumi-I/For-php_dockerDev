
<?php
// 新規追加のためのコード
// この情報はDB接続のために共通して必要
$user = "root";
$pass = "root";
$time = date("Y-m-d H:i:s");

$id = (!empty($_POST['id']));
$title = (!empty($_POST['title']));
$category = (int) (!empty($_POST['category']));
$checked = (int) (!empty($_POST['checked']));
$comments = (!empty($_POST['comments']));
$time_now = $time;

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

  $sql = "INSERT INTO eva (id, title, category, checked, comments, time_now) VALUES (?,?,?,?,?,?)";
  $stmt = $dbh->prepare($sql);
  $stmt->bindValue(1, $id, PDO::PARAM_INT);
  $stmt->bindValue(2, $title, PDO::PARAM_STR);
  $stmt->bindValue(3, $category, PDO::PARAM_INT);
  $stmt->bindValue(4, $checked, PDO::PARAM_INT);
  $stmt->bindValue(5, $comments, PDO::PARAM_STR);
  $stmt->bindValue(6, $time_now, PDO::PARAM_STR);
  $stmt->execute();
  $dbh = null;

  echo "以下の内容で登録しました";
  
} catch (Exception $e) {
  echo "ERROR: " . htmlspecialchars($e->getMessage(), ENT_QUOTES,'UTF-8') . "<br>";
  die();
}
  echo "($time)";
  echo "<br>";
?>

<?php
  if (isset($_POST['title'])){
      echo 'タイトル:' . htmlspecialchars($_POST['title'],ENT_QUOTES,'UTF-8');
    } else {
    echo 'No-title';
    }
  echo "<br>";
  echo 'Category:';
  if (isset($_POST['category'])){
    if ($_POST['category'] === '1'){
      echo "coading";
    } elseif ($_POST['category'] === '2'){
      echo "Design";
    }
  } 
  else {
    echo "未選択";
  }
  
  
  echo "<br>";
  echo '評価:';
  if (isset($_POST['checked'])) {
    if ($_POST['checked'] === '1'){
      echo "Good !";
    } elseif ($_POST['checked'] === '2'){
      echo "Bad...";
    } elseif ($_POST['checked'] === '3'){
      echo "What's ?!";
    }
  }
  else {
    echo "未選択";
  }
  echo "<br>";
  echo 'コメント:';
  if (isset($_POST['comments'])){
    if ($_POST['comments']){
      echo nl2br(htmlspecialchars($_POST['comments'],ENT_QUOTES,'UTF-8'));
    } else {
      echo 'なし';
    }
  }
  echo "<br>";
  echo $time_now;
  echo '更新時間:' . $time;
  echo "<br>";
  print_r($time_now);
?>
