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
// idを受け取るコード（詳細表示）
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
    // 受け取った情報の表示
    print_r($result);
    var_dump($result);
    echo "<br>\n";
    echo "No. " . htmlspecialchars($result['id'],ENT_QUOTES,'UTF-8') . "<br>\n";
    echo "タイトル: " . htmlspecialchars($result['title'],ENT_QUOTES,'UTF-8') . "<br>\n";
    echo 'Category:';
    $category = (string) htmlspecialchars($result['category'],ENT_QUOTES,'UTF-8');
      if (isset($category)){
        if ($category === '1') {
          echo "Coading";
        } elseif ($category === '2'){
          echo "Design";
        } 
      } else {
          echo "カテゴリ未選択";
      }
    echo "<br>";
    // echo "評価: " . htmlspecialchars($result['checked'],ENT_QUOTES,'UTF-8') . "<br>\n";
    echo '評価:';
    $checked = (string) htmlspecialchars($result['checked'],ENT_QUOTES,'UTF-8');
      if (isset($checked)) {
        if ($checked === '1'){
          echo "Good !";
        } elseif ($checked === '2'){
          echo "Bad...";
        } elseif ($checked === '3'){
          echo "What's ?!";
        }
      } else {
        echo "未選択";
      }
    echo "<br>";
    echo "コメント:" . nl2br(htmlspecialchars($result['comments'],ENT_QUOTES,'UTF-8')) . "<br>\n";
    echo "更新時間: " . htmlspecialchars($result['time'],ENT_QUOTES,'UTF-8') . "<br>\n";
    $dbh = null;
  } catch (Exception $e) {
    echo "ERROR: " . htmlspecialchars($e->getMessage(), ENT_QUOTES,'UTF-8') . "<br>";
    die();
  }
  var_dump($time);
?>