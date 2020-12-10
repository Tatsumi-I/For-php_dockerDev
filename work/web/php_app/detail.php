<?php
require_once('../../app/function.php');
require_once('../../app/db_cnf.php');
$pageName = '詳細ページ';
require_once('_appHeader.php');
?>

<?php

try {
  if (empty($_GET['id'])) throw new Exception('id取得エラー');
  $id = (int) $_GET['id'];
  // var_dump($id);
  // print_r($id);
  $dbh = new PDO('mysql:host=Localhost;dbname=myfirstdeploy_db;charset=utf8', $user, $pass);
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
  if (empty($result['id'])) {
    echo "<a href=list_table.php>このデータは存在しません。Clickで一覧に戻ります。</a>";
  }
  $dbh = null;
} catch (Exception $e) {
  echo "ERROR: " . h($e->getMessage(), ENT_QUOTES, 'UTF-8') . "</br>";
  die();
}
?>


<div class="desc">
  <p><strong>No.</strong>
    <?php echo  h($result['id'], ENT_QUOTES, 'UTF-8'); ?>
  </p>
  <p><strong>Title/タイトル:</strong>
    <?php echo h($result['title'], ENT_QUOTES, 'UTF-8');
    if (empty($result['title'])) {
      echo "No-title";
    }
    ?>
  </p>
  <p><strong>Category:</strong>
    <?php $category = (string) h($result['category'], ENT_QUOTES, 'UTF-8');
    if (!empty($category)) {
      if ($category === '1') {
        echo "Coading";
      } elseif ($category === '2') {
        echo "Design";
      }
    } else {
      echo "未選択";
    }
    ?>
  </p>
  <p><strong>Evaluation/評価: </strong>
    <?php h($result['checked'], ENT_QUOTES, 'UTF-8');
    $checked = (string) h($result['checked'], ENT_QUOTES, 'UTF-8');
    if (!empty($checked)) {
      if ($checked === '1') {
        echo "Good !";
      } elseif ($checked === '2') {
        echo "Bad...";
      } elseif ($checked === '3') {
        echo "What's ?!";
      }
    } else {
      echo "未選択";
    }
    ?>
  </p>
  <p><strong>コメント:</strong>
    <?php echo nl2br(h($result['comments'], ENT_QUOTES, 'UTF-8'));
    if (empty($result['comments'])) {
      echo "なし";
    }
    ?>
  </p>
  <p><strong>登録日時:</strong>
    <?php echo h($result['time_now'], ENT_QUOTES, 'UTF-8');
    ?>
  </p>
</div>




<form method="GET" action="edit.php">
  <input type="hidden" name="id" value="
    <?php echo h($result['id'], ENT_QUOTES, 'UTF-8');
    ?>
  ">
  <input type="hidden" name="title" value="
    <?php echo h($result['title'], ENT_QUOTES, 'UTF-8');
    ?>
  ">

  <button>編集する</button>

</form>
<form action="del_confirm.php" method="GET">
  <input type="hidden" name="id" value="
    <?php echo h($result['id'], ENT_QUOTES, 'UTF-8');
    ?>
  ">
  <!-- <button>削除する</button> -->
  <button id="del">削除する</button>

</form>

<?php
require_once('_appFooter.php');
