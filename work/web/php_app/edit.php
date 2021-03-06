<?php
require_once('../../app/function.php');
require_once('../../app/db_cnf.php');
require_once('_appHeader.php');

?>




<?php

//require_once('.../app/db_cnf.php');

// if ($_SERVER['REQUEST_METHOD'] === 'GET'){
//編集機能
try {
  if (empty($_GET['id'])) throw new Exception('idの取得エラー');
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
  $dbh = null;
  echo "<br>\n";
  if (empty($result['id'])) {
    echo "<a href=list_table.php>このデータは存在しません。Clickで一覧に戻ります。</a>";
  }
} catch (Exception $e) {
  echo "ERROR: " . h($e->getMessage(), ENT_QUOTES, 'UTF-8') . "<br>";
  die();
}


?>

<h1>ここは編集ページです</h1>
<p>No.
  <?php echo h($result['id'], ENT_QUOTES, 'UTF-8'); ?>
</p>
<p>
  登録日時："
  <?php echo h($result['time_now'], ENT_QUOTES, 'UTF-8'); ?>
  "のデータを編集する
</p>

<form method="POST" action="update.php">
  <div>

    <label for="title">Title/タイトル<input type="text" class="textInput" name="title" value="<?php
                                                                                          if (!empty($result['title'])) {
                                                                                            echo h($result['title'], ENT_QUOTES, 'UTF-8');
                                                                                          }
                                                                                          ?>"></label>
    <br>
  </div>
  <div>

    <label for="category">Category
      <select name="category">
        <option value="0" <?php
                          if ($result['category'] === 0) {
                            echo "selected";
                          }
                          ?>>
          カテゴリ選択</option>
        <option value="1" <?php
                          if ($result['category'] === 1) {
                            echo "selected";
                          }
                          ?>>
          良い</option>
        <option value="2" <?php
                          if ($result['category'] === 2) {
                            echo "selected";
                          }
                          ?>>
          要改善</option>
      </select>
    </label>
  </div>
  <div>

    <label for="radio">評価
      <br>
      <label><input type="radio" name="checked" value="1" <?php
                                                          if ($result['checked'] === 1) {
                                                            echo "checked";
                                                          }
                                                          ?>>見過ごせない！</label>
      <label><input type="radio" name="checked" value="2" <?php
                                                          if ($result['checked'] === 2) {
                                                            echo "checked";
                                                          }
                                                          ?>>あとでまた見たい</label>
      <label><input type="radio" name="checked" value="3" <?php
                                                          if ($result['checked'] === 3) {
                                                            echo "checked";
                                                          }
                                                          ?>>とりあえずKeep</label>
    </label>

  </div>
  <div>

    <label for="textarea">コメント
      <br>
      <textarea name="comments" col="20" row="5" maxlength="100"><?php
                                                                  if (!empty($result['comments'])) {
                                                                    echo h($result['comments'], ENT_QUOTES, 'UTF-8');
                                                                  }
                                                                  ?></textarea>
      <br>
    </label>
  </div>
  <input type="hidden" name="id" value="
      <?php echo h($result['id'], ENT_QUOTES, 'UTF-8'); ?>
    ">
  <button>更新</button>

</form>



<?php

require_once('_appFooter.php');
