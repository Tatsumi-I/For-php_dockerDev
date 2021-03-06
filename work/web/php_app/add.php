<?php
require_once('../../app/function.php');
require_once('../../app/db_cnf.php');
require_once('_appHeader.php');

?>


<h1>新規Hoz_on情報</h1>


<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $title = $_POST['title'];
  $category = (int) $_POST['category'];
  $checked = (int) (isset($_POST['checked']));
  $comments = $_POST['comments'];
  $time = date('Y-m-d H:i:s');

  try {
    $dbh = new PDO('mysql:host=Localhost;dbname=myfirstdeploy_db;charset=utf8', $user, $pass);
    $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO eva (title, category, checked, comments, time_now) VALUES (?,?,?,?,?)";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(1, $title, PDO::PARAM_STR);
    $stmt->bindValue(2, $category, PDO::PARAM_INT);
    $stmt->bindValue(3, $checked, PDO::PARAM_INT);
    $stmt->bindValue(4, $comments, PDO::PARAM_STR);
    $stmt->bindValue(5, $time, PDO::PARAM_STR);
    $stmt->execute();
    $dbh = null;
    echo "<h2>以下の内容で登録しました</h2>";
  } catch (Exception $e) {
    echo "ERROR: " . h($e->getMessage(), ENT_QUOTES, 'UTF-8') . "<br>";
    die();
  }
?>
  <div class="desc">

    <p>
      <?php
      echo "Title/タイトル : ";
      if (!empty($_POST['title'])) {
        echo h($_POST['title'], ENT_QUOTES, 'UTF-8');
      } else {
        echo 'No-title';
      }
      ?>
    </p>
    <p>
      <?php
      echo "Category/分類 : ";
      if (!empty($_POST['category'])) {
        if ($_POST['category'] === '1') {
          echo "coading";
        } elseif ($_POST['category'] === '2') {
          echo "要改善";
        }
      } else {
        echo "未分類";
      };
      ?>
    </p>
    <p>
      <?php
      echo 'Evaluation/評価 : ';
      if (!empty($_POST['checked'])) {
        if ($_POST['checked'] === '1') {
          echo "見過ごせない！";
        } elseif ($_POST['checked'] === '2') {
          echo "あとでまた見たい";
        } elseif ($_POST['checked'] === '3') {
          echo "What's ?!";
        }
      } else {
        echo "未選択";
      };
      ?>
    </p>
    <p>
      <?php
      echo 'Comments/コメント : ';
      if (!empty($_POST['comments'])) {
        echo nl2br(h($_POST['comments'], ENT_QUOTES, 'UTF-8'));
      } else {
        echo 'なし';
      };
      ?>
    </p>
    <p>
      <?php
      echo 'DateTime/更新時間 : ' . $time;
      ?>
    </p>

  </div>

<?php
} else {
  echo '新規追加画面から追加してください';
}
?>





<p><a href="list_table.php">一覧を見る</a></p>

<?php
require_once('_appFooter.php');
