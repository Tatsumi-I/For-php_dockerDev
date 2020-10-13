<?php 
  require_once('/work/app/function.php');
  require_once('/work/app/db_cnf.php');
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>詳細表示</title>
  <style>
      <?php
      require_once('./styleForApp/appStyle.min.css');
      ?>
    </style>
</head>

<body>
  <header>
    <p><a href="hoz_onTop.php">PHP & MYSQL_app ”Hoz_on”</a></p>
  </header>
  <main>
    <div class="all">
      <h1>Hoz_on詳細情報</h1>

<?php

 //require_once('.../app/db_cnf.php');


// idを受け取るコード（詳細表示）
  try{
    if (empty($_GET['id'])) throw new Exception('id取得エラー'); 
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
    // print_r($result);
    // var_dump($result);
    echo "<br>\n";
      if (empty($result['id'])){
        echo "<a href=list_table.php>このデータは削除済みで存在しません。Clickで一覧に戻ります。</a>";
     }
    ?>

    <p>No.
      <?php echo  h($result['id'],ENT_QUOTES,'UTF-8');?>
    </p>
    <p>Title/タイトル:
      <?php echo h($result['title'],ENT_QUOTES,'UTF-8');
        if (empty($result['title'])){
          echo "No-title";
        }
      ?>
    </p>
    <p>Category:
      <?php $category = (string) h($result['category'],ENT_QUOTES,'UTF-8');
      if (!empty($category)){
        if ($category === '1') {
          echo "Coading";
        } elseif ($category === '2'){
          echo "Design";
        } 
      } else {
          echo "未選択";
      }
      ?>
    </p>
    <p>Evaluation/評価: 
      <?php h($result['checked'],ENT_QUOTES,'UTF-8');
      $checked = (string) h($result['checked'],ENT_QUOTES,'UTF-8');
      if (!empty($checked)) {
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
      ?>
    </p>
    <p>コメント:
      <?php echo nl2br(h($result['comments'],ENT_QUOTES,'UTF-8'));
        if (empty($result['comments'])){
          echo "なし";
      }
      ?>
    </p>
    <p>登録日時:
      <?php echo h($result['time_now'],ENT_QUOTES,'UTF-8');
      ?>
    </p>

  <?php
    $dbh = null;
  } catch (Exception $e) {
    echo "ERROR: " . h($e->getMessage(), ENT_QUOTES,'UTF-8') . "</br>";
    die();
  }
?>


<form method="GET" action="edit.php">
  <input type="hidden" name="id" value="
    <?php echo h($result['id'],ENT_QUOTES,'UTF-8'); 
    ?>
  ">
  <input type="hidden" name="title" value="
    <?php echo h($result['title'],ENT_QUOTES,'UTF-8'); 
    ?>
  ">

  <button>このコメントを編集する</button>
  </form>
  <p><a href="list_table.php">Hoz_on リストを見る</a></p>


</div>
</main>
<footer>
  <p><a href="hoz_onTop.php">PHP & MYSQL_app ”Hoz_on”</a></p>
</footer>
</body>
</html>
