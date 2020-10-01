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
// 以下、DBとの接続
try {
  $dbh = new PDO('mysql:host=mysql_host;dbname=db_4portfolio;charset=utf8', $user, $pass);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "SELECT * FROM eva";
  $stmt = $dbh->query($sql);
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  // print_r($result);
  echo "<table border=1>\n";
  echo "<tr>\n";
  echo "<th>No.</th><th>タイトル</th><th>カテゴリ</th><th>評価</th><th>コメント</th><th>更新時間</th>\n";
  echo "</tr>\n";
  foreach ($result as $row) {
    echo "<tr>\n";
    echo "<td>". $row['id'] . "</td>\n";
    echo "<td>" .htmlspecialchars($row['title'],ENT_QUOTES,'UTF-8') ."</td>\n";
    // echo "<td>" . $row['category'] . "</td>\n";
    if (isset($row['category'])){
      if ($row['category'] === '1'){
        echo "<td>" .  'Coading' . "</td>\n";
      } elseif ($row['category'] === '2'){
        echo "<td>" . 'Design' . "</td>\n";
      }
    } else {
      echo '未選択';
    }
    // echo "<td>" . htmlspecialchars($row['checked'],ENT_QUOTES,'UTF-8') . "</td>\n";
    // echo "<td>" . htmlspecialchars($row['comments'],ENT_QUOTES,'UTF-8') . "</td>\n";
    echo "</tr>\n";
  }
  echo "</table>\n";

  $dbh = null;
} catch (Exception $e) {
  echo "ERROR:" . htmlspecialchars($e->getMessage(),ENT_QUOTES,'UTF-8') . "<br>";
  die();
}
?>

