<?php 
  require_once('/work/app/function.php');
  require_once('/work/app/db_cnf.php');
  require_once('_header.php');
  
?>

    <h1>Hoz_on リスト</h1>
    
    
<?php 

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
      echo "<a href=detail.php?id=" . h($row['id'],ENT_QUOTES,'UTF-8') . ">";
      echo $row['id'] . "</a></td>\n";
  
        if (!empty($row['title'])){
          echo "<td>" .h($row['title'],ENT_QUOTES,'UTF-8') ."</td>\n";
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

        echo "<td>" . h($row['time_now'],ENT_QUOTES,'UTF-8') . "</td>\n";
        echo "<td colspan=\"3\">\n";
          // echo "<a href=detail.php?id=" . h($row['id'],ENT_QUOTES,'UTF-8') . ">詳細</a>\n";
          echo "<a href=edit.php?id=" . h($row['id'],ENT_QUOTES,'UTF-8') . ">変更</a>\n";
          echo "<a href=del_confirm.php?id=" . h($row['id'],ENT_QUOTES,'UTF-8') . ">削除</a>\n";
        echo "</td>\n";
        echo "</tr>\n";
      }
    echo "</tbody>\n";
  echo "</table>\n";

  $dbh = null;

  } catch (Exception $e) {
    echo "ERROR:" . h($e->getMessage(),ENT_QUOTES,'UTF-8') . "<br>";
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
                echo "<a href=detail.php?id=" . h($row['id'],ENT_QUOTES,'UTF-8') . ">";
                echo $row['id'] . "</a></td>\n";

                if (!empty($row['title'])){
                  echo "<td>" .h($row['title'],ENT_QUOTES,'UTF-8') ."</td>\n";
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
              
                echo "<td>" . h($row['time_now'],ENT_QUOTES,'UTF-8') . "</td>\n";
                      
                echo "<td>\n";
                  echo "<a href=edit.php?id=" . h($row['id'],ENT_QUOTES,'UTF-8') . ">変更</a>\n";
                  echo "<a href=del_confirm.php?id=" . h($row['id'],ENT_QUOTES,'UTF-8') . ">削除</a>\n";
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
  <p><a href="hoz_onTop.php">PHP & MYSQL_app ”Hoz_on”</a></p>
</footer>
</body>
</html>