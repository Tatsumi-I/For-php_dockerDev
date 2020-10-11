<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>評価コメント一覧</title>
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
    <div class="app">
      <p>
        <a href="hoz_onTop.php">Hoz_onとは??</a>
      </p>
    </div>
    
  <div class="all">
    <h1>Hoz_on リスト</h1>
    <p><a href="eva.php">新規登録する</a></p>
    
    
<?php 

//require_once('.../app/db_cnf.php');
$user = "root";
$pass = "root";
// 以下、DBとの接続
try {
  $dbh = new PDO('mysql:host=mysql_host;dbname=db_4portfolio;charset=utf8', $user, $pass);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "SELECT * FROM eva";
  $stmt = $dbh->query($sql);
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

  echo "<table>\n";
  echo "<caption>最新Hoz_on 10件</caption>";
    echo "<colgroup span=\"3\"><col span=\"3\"></colgroup>";
      echo "<thead>\n";
        echo "<tr>\n";
          echo "<th>No.</th><th>タイトル</th><th>カテゴリ</th><th>評価</th><th>登録日時</th><th colspan=\"3\">サブメニュー</th>\n";
        echo "</tr>\n";
      echo "</thead>\n";
    echo "<tbody>\n";

    $tr = 0;
    foreach (array_reverse ($result) as $row){
      if ( $tr >= 10){
      break;
    }
    $tr++;

    echo "<tr>\n";
      echo "<td>" ;
      echo "<a href=detail.php?id=" . htmlspecialchars($row['id'],ENT_QUOTES,'UTF-8') . ">";
      echo $row['id'] . "</a></td>\n";
  
        if (!empty($row['title'])){
          echo "<td>" .htmlspecialchars($row['title'],ENT_QUOTES,'UTF-8') ."</td>\n";
          } else {
          echo "<td>" . 'No-title' . "</td>\n";
        };
    
        if ($row['category'] === '1'){
          echo "<td>" .  'Coading' . "</td>\n";
          } elseif ($row['category'] === '2') {
          echo "<td>" . 'Design' . "</td>\n";
          } else {
          echo "<td>" . '未分類' . "</td>\n";
        };

        if ($row['checked'] === '1'){
          echo "<td>" .  'Good!' . "</td>\n";
          } elseif ($row['checked'] === '2'){
          echo "<td>" . 'Bad...' . "</td>\n";
          } elseif ($row['checked'] === '3') {
          echo "<td>" . 'What\'s?!' . "</td>\n";
          } else{
          echo "<td>" . '未選択' . "</td>\n";
        };

        echo "<td>" . htmlspecialchars($row['time_now'],ENT_QUOTES,'UTF-8') . "</td>\n";
        echo "<td colspan=\"3\">\n";
          // echo "<a href=detail.php?id=" . htmlspecialchars($row['id'],ENT_QUOTES,'UTF-8') . ">詳細</a>\n";
          echo "<a href=edit.php?id=" . htmlspecialchars($row['id'],ENT_QUOTES,'UTF-8') . ">変更</a>\n";
          echo "<a href=del_confirm.php?id=" . htmlspecialchars($row['id'],ENT_QUOTES,'UTF-8') . ">削除</a>\n";
        echo "</td>\n";
        echo "</tr>\n";
      }
    echo "</tbody>\n";
  echo "</table>\n";

  $dbh = null;

  } catch (Exception $e) {
    echo "ERROR:" . htmlspecialchars($e->getMessage(),ENT_QUOTES,'UTF-8') . "<br>";
    die();
  }
?>
<details>
  <summary>全てのHoz_onを見る</summary>
    <?php
      echo "<table>\n";

        echo "<colgroup span=\"3\"><col span=\"3\"></colgroup>";
          echo "<thead>\n";
            echo "<tr>\n";
              echo "<th>No.</th><th>タイトル</th><th>カテゴリ</th><th>評価</th><th>登録日時</th><th colspan=\"3\">サブメニュー</th>\n";
            echo "</tr>\n";
          echo "</thead>\n";

          echo "<tbody>\n";
          foreach (array_reverse($result) as $row){
              echo "<tr>\n";
                echo "<td>" ;
                echo "<a href=detail.php?id=" . htmlspecialchars($row['id'],ENT_QUOTES,'UTF-8') . ">";
                echo $row['id'] . "</a></td>\n";

                if (!empty($row['title'])){
                  echo "<td>" .htmlspecialchars($row['title'],ENT_QUOTES,'UTF-8') ."</td>\n";
                } else {
                  echo "<td>" . 'No-title' . "</td>\n";
                };
          
                if ($row['category'] === '1'){
                  echo "<td>" .  'Coading' . "</td>\n";
                } elseif ($row['category'] === '2') {
                  echo "<td>" . 'Design' . "</td>\n";
                  // }
                } else {
                  echo "<td>" . '未分類' . "</td>\n";
                };
              
                if ($row['checked'] === '1'){
                  echo "<td>" .  'Good!' . "</td>\n";
                } elseif ($row['checked'] === '2'){
                  echo "<td>" . 'Bad...' . "</td>\n";
                } elseif ($row['checked'] === '3') {
                  echo "<td>" . 'What\'s?!' . "</td>\n";
                } else{
                  echo "<td>" . '未選択' . "</td>\n";
                };
              
                echo "<td>" . htmlspecialchars($row['time_now'],ENT_QUOTES,'UTF-8') . "</td>\n";
                      
                echo "<td>\n";
                  echo "<a href=edit.php?id=" . htmlspecialchars($row['id'],ENT_QUOTES,'UTF-8') . ">変更</a>\n";
                  echo "<a href=del_confirm.php?id=" . htmlspecialchars($row['id'],ENT_QUOTES,'UTF-8') . ">削除</a>\n";
                echo "</td>\n";
              echo "</tr>\n";
          }
        echo "</tbody>\n";
      echo "</table>\n";
      ?>
</details>
</div>

</main>

<footer>
  <p>PHP & MYSQL_app ”Hoz_on”</p>
</footer>
</body>
</html>