<?php
require_once('../../app/function.php');
require_once('../../app/db_cnf.php');
require_once('_appHeader.php');


?>

<form method="post" action="add.php">
  <caption>↓新規登録はこちらから↓</caption>
  <div>
    <label for="title"><strong>Title/タイトル<strong>
          <input type="text" class="textInput" name="title" autocomplete="off">
    </label>
  </div>
  <div>
    <label for="category"><strong>Category/カテゴリ</strong>
      <!-- <br> -->
      <select name="category" id="">
        <option value="0">カテゴリ選択</option>
        <option value="1">良い</option>
        <option value="2">要改善</option>
      </select>
    </label>
  </div>
  <div>
    <label for="radio"><strong>Evaluation/評価</strong>
      <br>
      <label><input type="radio" name="checked" value="1">見過ごせない！</label>
      <label><input type="radio" name="checked" value="2">あとでまた見たい</label>
      <label><input type="radio" name="checked" value="3">とりあえずKeep</label>
    </label>
  </div>
  <div>
    <label for="textarea"><strong>Comments/コメント</strong>
      <br>
      <textarea name="comments" col="20" row="5" maxlength="100"></textarea>
      <br>
    </label>
  </div>
  <button type="reset" class="reset">Reset</button>
  <button type="submit">Hoz_on !</button>
</form>


<?php
require_once('_appFooter.php');
